<?php
namespace App\Infastuture;



use App\Infastuture\UserModel;
use App\Transactions;
class TransancationsModels{

    static public $errorMessage;
    public function __construct()
    {

    }
    // $table->integer('user_id');
    // $table->string('transaction_type');
    // $table->string('cryptoType');
    // $table->decimal('token');
    // $table->decimal('price_usd');
    // $table->decimal("price_per_coin_usd");
    // $table->string('status');
    public function Create($userid, $transactiontype, $cryptoType, $token, $priceUsd, $pricePerCoin, $status){
        try {
            $trans = new Transactions();
            $trans->user_id = $userid;
            $trans->transaction_type = $transactiontype;
            $trans->cryptoType = $cryptoType;
            $trans->token= $token;
            $trans->price_usd = $priceUsd;
            $trans->price_per_coin_usd = $pricePerCoin;
            $trans->status = $status;
            $trans->save();
            return true;
            //code...
        } catch (\Throwable $th) {
            //throw $th;
            return false;
        }
    }
public function GetUserTransactions($userid){
    try {
        $trans = Transactions::where("user_id", $userid)->get();
        if(count($trans)){
            return $trans;
        }
        return null;
    } catch (\Throwable $th) {
        //throw $th;
        return null;
    }
}




}
