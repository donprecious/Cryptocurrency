<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;

use App\Infastuture\UsdBalanceModel;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function Index(){
        return view('user.index');
   }

   public function fundAccount(Request $request){
        $id = Auth::id();
        $amount =(double)$request['txtFund'];
        $order = new \App\Infastuture\TokenOrdersModel();
        //send  order
        $task = $order->MakeOrder($id,$amount,false,"USD");
        //check if the order was made
        if($task->status == true){
           // return order
            return view("User.paymentInfo")->with("data",$task->order);
        }
   }

//    public function orderConfirmation($id){

//    }
   public function orderConfirmation(){
        return view("user.orderConfirmation");
   }

   public function verifyPayment(){
        return view("user.verifyPayment");
   }
}
