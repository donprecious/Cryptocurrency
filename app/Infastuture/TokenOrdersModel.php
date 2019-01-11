<?php
namespace App\Infastuture;

use App\tokenOrders;
use App\CryptoBalance;
use App\Infastuture\UserModel;
class TokenOrdersModel{


    public function __construct()
    {

    }

    public function MakeOrder($userid,$quantity,$is_crypto,$currency_symbol){

        try{
            $user =new UserModel();
            if($user->FindbyId($userid)){
                $order = new tokenOrders();
                $order->user_id = $userid;
                $order->quantity = $quantity;
                $order->is_crypto = $is_crypto;
                $order->currency_symbol = $currency_symbol;
                $order->status = "PENDING";
                $order->save();
                // creates an array and converts the array to an object in other to access them as
                //$orders->order->order_id
                return (object)["status"=>true,
                "message"=> "Order created Successfully",
                "order_id"=>$order->id,
                "order"=> (object)[
                    "order_id"=>$order->id,
                    "user_id"=> $order->user_id,
                    "quantity"=>$order->quantity,
                    "is_crypto"=>$order->is_crypto,
                    "currency_symbol"=>$order->currency_symbol,
                    "status"=>$order->status,
                     ]
                ];
            }

        }
        catch(Exception $ex){
            return (object)["status"=>false,
            "message"=>"Error Occured: ",
            ];
        }

    }



    //Function checks if a USER HAS THAT ORDER
    public function UserHasOrder($user_id, $order_id){
        try {
            //code...
            $userOrder = tokenOrders::where("user_id", '=',$user_id)->where('order_id', $order_id)->get();
            if(count($userOrder)){
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            //throw $th;
            return false;
        }
    }

    public function calculateTokenQuatity($symbol, $quantity){
        //get current rate of the currency symbol
    }


    public function GetUserOrders($user_id){
        $userorder = new tokenOrders();
        $orders = $userorder::where("user_id", $user_id)->get();
        if(count($orders)){
            return $orders;
        }else{
            return null;
        }
    }
    public function GetUserOrdersWithStatus($user_id,$status){
        $userorder = new tokenOrders();
        $orders = $userorder::where("user_id", $user_id)->with("status",$status)->get();
        if(count($orders)){
            return $orders;
        }else{
            return null;
        }
    }
    public function GetUserOrder($user_id, $order_id){
        $userorder = new tokenOrders();
        $orders = $userorder::where("user_id", $user_id)
        ->where('order_id',$order_id)->first();
        if($orders){
            return $orders;
        }else{
            return null;
        }
    }

    public function GetUserOrderWithStatus($user_id, $order_id, $status){
        $userorder = new tokenOrders();
        $orders = $userorder::where("user_id", $user_id)
        ->where('order_id',$order_id)->where("status",$status)->first();
        if($orders){
            return $orders;
        }else{
            return null;
        }
    }

    public function OrderHasUpload($orderid){
        $order_confirmation = new \App\order_confirmations();
        $order_confirms = $order_confirmation::where("order_id", $orderid)->get();
        if(count($order_confirms)>0){
            return true;
        }
        return false;
    }
    public function GetOrders(){
        $order_confirmation = new tokenOrders();
        $orders = $order_confirmation::get();
        if(count($orders)){
            return $orders;
        }
        return null;
    }

    public function GetPendingOrders(){
        $order_confirmation = new tokenOrders();
        $orders = $order_confirmation::where("status","PENDING")->get();
        if(count($orders)){
            return $orders;
        }
        return null;
    }

    public function GetOrdersWithUploads(){
      //  $orders = $this->GetOrders()::where()
    }
    public function Find($orderid){
        $order = tokenOrders::find($orderid);
        if($order)return true;

        return false;
    }
    public function ApproveOrder($orderid){

            $order = tokenOrders::where("order_id",$orderid)->update(["status"=>"APPROVED"]);
            return true;

    }



}
