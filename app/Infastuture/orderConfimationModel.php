<?php
namespace App\Infastuture;

use App\tokenOrders;
use App\order_confirmations;

use App\Infastuture\UserModel;
use App\Infastuture\TokenOrdersModel;

class orderConfimationModel{


    public function __construct()
    {

    }


    public function Create($user_id, $order_id, $file_url, $description)
    {
        $order = new TokenOrdersModel();
        $hasOrder  = $order->UserHasOrder($user_id, $order_id);
        if($hasOrder)
        {
            $confirm = new order_confirmations();
            $confirm->order_id = $order_id;
            $confirm->user_id = $user_id;
            $confirm->file_url = $file_url;
            $confirm->description = $description;
            $confirm->status = "Pending";
            $confirm->save();
            return true;
        }
        return false;
    }


    public function GetOrderVerifications($userid,$orderid){
        $order_confirmation = new order_confirmations();
        $verifications = $order_confirmation::where("user_id",$userid)->where("order_id", $orderid)->get();
        if(count($verifications)){
            return $verifications;
        }
        return null;
    }






}
