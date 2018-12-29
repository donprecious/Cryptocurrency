<?php
namespace App\Http\Controllers;

use App\Infastuture\coinRanking;
use App\Infastuture\orderConfimationModel;
use App\Infastuture\BuySellModel;
use App\Infastuture\UsdBalanceModel;
use App\Infastuture\CryptoBalanceModel;
use App\Infastuture\TransancationsModels;
use App\Infastuture\TokenOrdersModel;

use App\tokenOrders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use JD\Cloudder\Facades\Cloudder;
class UserController extends Controller
{

    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index()
    {
         $user_id = Auth::id();
        $coinRanking = new coinRanking();
        $coins = $coinRanking->GetMarketData();
        $userBal = (new UsdBalanceModel())->GetUsdBalance($user_id);
        if($coins->status=="success"){
            return view('User.index')->with("coins",$coins->data->coins)
            ->with("balance",  $userBal);
         }
      //  return view('user.index');
    }

    public function fundAccount(Request $request)
    {
        $id = Auth::id();
        $amount = (double) $request['txtFund'];
        $order = new \App\Infastuture\TokenOrdersModel();
        //send  order
        $task = $order->MakeOrder($id, $amount, false, "USD");
        //check if the order was made
        if ($task->status == true) {
            // return order
            return view("User.paymentInfo")->with("data", $task->order);
        }
    }

    public function orderConfirmation($orderid)
    {
        $userid = Auth::id();
        $order = tokenOrders::where('user_id', $userid)->where("order_id", $orderid)->first();
        $confirmations = App\order_confirmations::where("user_id",$userid)->where("order_id",$orderid)->get();

        if ($order != null) {
            return view("User.orderConfirmation")->with("order", $order)->with("confirms",$confirmations);
        }
    }
//    public function orderConfirmation($orderId){
    //         return view("user.orderConfirmation");
    //    }

    public function verifyPayment($orderid)
    {
        $userid = Auth::id();
        $order = tokenOrders::where('user_id', $userid)->where('order_id', $orderid)->first();
        if ($order->count()) {
            return view("User.verifyPayment")->with("order", $order);
        }

    }

    public function UploadPaymentDoc(Request $request)
    {
        $this->validate($request,
            [
                'file_upload' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]
        );

        $image_name = $request->file('file_upload')->getRealPath();
        // Cloudinary::config(array(
        //     "cloud_name" => "votel",
        //     "api_key" => "849621861927721",
        //     "api_secret" => "0ofuuFUGk_6zt4lmaXTsXayy07k"
        //   )
        // );
        Cloudder::upload($image_name, null, ['folder' => "Cryptocurrency"]);
        list($width, $height) = getimagesize($image_name);

        $image_url = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height" => $height]);
        $userid = Auth::id();
        $order_id = $request->input("order_id");
        $description = $request->input("description");

        $saveRecord = new orderConfimationModel();
        if ($saveRecord->Create($userid, $order_id, $image_url, $description)) {
            return redirect()->back()->with('status', 'Image Uploaded Successfully');
        }
        return redirect()->back()->with('status', 'Failed ');
    }

    public function BuyToken(Request $request)
    {
        $buymodel = new BuySellModel();
        $userid = Auth::id();
        $post =(object)$request->all();
        $symbol =$post->symbol;
        $amount = $post->amount;
        $quantity = $post->quantity;
        $price = $post->price;

        //uncomment below to use real time api
        $calAmount = $buymodel->calculateTokenQuatity($symbol, $amount);
         $quantity = $calAmount->quantity;
       $price = $calAmount->price;
        //get and check user balance
       $UserUsd =  new UsdBalanceModel();
       $balance =  $UserUsd->GetUsdBalance($userid);
       if($balance>=$amount){
            // deduct the amount from the balance
           if($UserUsd->DeductUsdBalance($userid, $amount)){
               //credit user crpto currency balance
                $credit = new CryptoBalanceModel();
                if($credit->CreditBalance($userid,$quantity,$symbol)){
                    //create Transactions
                    $trans = new TransancationsModels();
                    $trans->Create($userid,"Buy token", $symbol,$quantity, $amount,$price,"Transaction Created");
                    return response()->json(['status'=>200, 'message' => "Successfully Purchased Token"]);
                }
           }
       }else{
                   //return Insuffcient Funds
                   return response()->json(['status'=>201, 'message' => "Insuffienct fund, Please fund your account and continue"]);
       }
       return response()->json(['status'=> 0, 'message' => "Transaction Failed to Compelte"]);
    }

    public function SellToken(Request $request){
        $sellmodel = new BuySellModel();
        $userid = Auth::id();
        $post =(object)$request->all();
        $symbol =$post->symbol;
        $amount = $post->amount;
        $quantity = $post->quantity;
        $price = $post->price;
        $sell = $sellmodel->SellCoin($userid, $symbol,$quantity);
        if(is_bool($sell)){
            if(  $sell ==true){
                return response()->json(['status'=>200, 'message' => "Successfully Sold Token"]);
            }
        }
        if(is_array($sell)){
            return response()->json(['status'=>0, 'message' => $sell["error"]]);
        }
        return response()->json(['status'=>0, 'message' => "Unable to Process the Request"]);

    }
    public function MyTokens(){
        //get currency name, symbol, token balance and market price
        $userid = Auth::id();
        $currency = [];
        $coinApi = new coinRanking();
        $myTokens =(new CryptoBalanceModel())->GetCryptoCurrency($userid);
        foreach($myTokens as $mytoken){
            $symbol = $mytoken->cryptocurrency_type;

            $coin = $coinApi->GetSpecificCurrencyData($symbol);
            $price = $coin->price;
            $token = [
                "symbol"=> $symbol,
                "name"=>$coin->name,
                "price"=>$price,
                "quantity"=>  $mytoken->crypto_balance,
                "iconUrl"=>$coin->iconUrl
                    ];
          array_push($currency, (object)$token);
        }
        $coins =(object)$currency;
        return view("User.myTokens")->with("coins",$coins);
    }

    public function history(){
        $userid=Auth::id();
        $rec = [];
        $coinApi = new coinRanking();
        $trans = (new TransancationsModels() )->GetUserTransactions($userid);
        foreach ($trans as $i) {
            $id =$i->Trans_id;
            $symbol = $i->cryptoType;
            $date = $i->created_at;
            $token = $i->token;
            $price = $i->price_usd;
            $transType = $i->transaction_type;
            $transactionPrice = $i->price_per_coin_usd;
            $coin = $coinApi->GetSpecificCurrencyData($symbol);
            $coinName=$coin->name;
            $iconUrl = $coin->iconUrl;
            $currentPrice = $coin->price;
            array_push($rec, (object)[
                "id"=>$id,
                "name"=>$coinName,
                "symbol"=>$symbol,
                "token"=>$token,
                "trans_type"=>$transType,
                "date"=>$date,
                "price"=>$price,
                "transactionPrice"=>$transactionPrice,
                "currentPrice"=>$currentPrice,
                "iconUrl"=>$iconUrl,
            ]);
        }
        return view("User.history")->with("records",$rec);
    }

    public function paymentOrders(){
        $userid = Auth::id();
        $tokenOrders = new  TokenOrdersModel();
        $order = $tokenOrders->GetUserOrders($userid);
        return view('User.PaymentOrders')->with('orders',$order);

    }

    public function paymentOrder($orderid){
        $userid = Auth::id();
        $tokenOrders = new  TokenOrdersModel();
        $order = $tokenOrders->GetUserOrder($userid,$orderid);
        return view('User.PaymentOrder')->with('order',$order);

    }
}
