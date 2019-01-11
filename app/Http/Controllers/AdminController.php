<?php

namespace App\Http\Controllers;

use App\Infastuture\orderConfimationModel;
use App\Infastuture\TokenOrdersModel;
use App\Infastuture\UsdBalanceModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
       return view("admin.dashboard");
    }

    public function PaymentConfirmations(){
        $orders = (new TokenOrdersModel())->GetOrders();
        return view("admin.paymentConfirmations")->with("orders",$orders);
    }

    public function ApproveOrder(Request $request){
        $post =(object)$request->all();
        $orderid = $post->orderid;
        $userid  = $post->userid;
        $amount = $post->amount;
         $order = (new TokenOrdersModel())->ApproveOrder($orderid);
        if($order){
         $usd = new UsdBalanceModel();
         $credit = $usd->CreditBalance($userid, $amount);
         if($credit){
            return response()->json(['status'=>200, 'message' => "Funding was successful"]);

         }
        }
        return response()->json(['status'=>0, 'message' => "Unable to Process the Request"]);

    }


}
