<?php
namespace App\Http\Controllers;

use App\Infastuture\coinRanking;
use App\Infastuture\orderConfimationModel;
use App\Infastuture\BuySellModel;
use App\Infastuture\UsdBalanceModel;
use App\Infastuture\CryptoBalanceModel;
use App\Infastuture\TransancationsModels;

use App\tokenOrders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index()
    {
        $coinRanking = new coinRanking();
       // $coins = $coinRanking->GetMarketData();
        // if($coins->status=="success"){
        //     return view('user.index')->with("coins",$coins->data->coins);

        // }
        return view('user.index');
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
        $order = tokenOrders::where('user_id', $userid)->where("order_id", $orderid);
        if ($order != null) {
            return view("user.orderConfirmation")->with("order", $order);
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
            return view("user.verifyPayment")->with("order", $order);
        }

    }

    public function UploadPicture(Request $request)
    {
        $this->validate($request,
            [
                'image_name' => 'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]
        );

        $image_name = $request->file('file_upload')->getRealPath();

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
       // $calAmount = $buymodel->calculateTokenQuatity($symbol, $amount);
      // $quantity = $calAmount->quantity;
      // $price = $calAmount->price;
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
        return view("user.myTokens");
    }

}
