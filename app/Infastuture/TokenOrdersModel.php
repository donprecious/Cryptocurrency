<?php
namespace App\Infastuture;

use App\tokenOrders;
use App\CryptoBalance;
use App\Infastuture\UserModel;
use
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

    public  function GetOrders(){
        try {
            //code...
            $transaction = tokenOrders::all();
            return $transaction();
        } catch (\Throwable $th) {
            //throw $th;
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


}
