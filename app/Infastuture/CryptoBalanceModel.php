<?php
namespace App\Infastuture;


use App\CryptoBalance;

use App\Infastuture\UserModel;

class CryptoBalanceModel{

    static public $errorMessage;
    public function __construct()
    {

    }
    // $table->integer('user_id');
    // $table->string('cryptocurrency_type');
    // $table->decimal('crypto_balance');

    public function AddNewBalance($userid,$balance, $crypto_Type ){
        try{
            $user =new UserModel();
            if($user->FindbyId($userid)){
                $userBal = new CryptoBalance();
                $userBal->user_id = $userid;
                $userBal->crypto_balance = $balance;
                $userBal->cryptocurrency_type = $crypto_Type;
                $userBal->save();
                return true;
            }

        }
        catch(Exception $ex){
            return false;
        }
    }

    public function CreditBalance($userid,$balance, $crypto_Type ){
        try{
            $user =new UserModel();
            //check if the user exits
            if($user->FindbyId($userid)){
                //check if user has crypto
                if($this->HasCrypto($userid, $crypto_Type)){
                    //Update that currency symbol
                    $this->UpdateBalance($userid,$balance,$crypto_Type);
                    return true;
                }
                else{
                    //create a new currency symbol
                    $this->AddNewBalance($userid,$balance,$crypto_Type);
                    return true;
                }
                return false;
            }

        }
        catch(Exception $ex){
            return false;
        }
    }

    public function UpdateBalance($userid,$balance, $crypto_Type){
        try{
            $userCrypto =  CryptoBalance::where("user_id",$userid)->
            where("cryptocurrency_type", $crypto_Type)->update(['crypto_balance'=>$balance]);
             return true;

        }
        catch(Exception $ex){
            return false;
        }
    }
    public function HasCrypto($userid, $crypto_type){
        try{
            $userCrypto =  CryptoBalance::where("user_id",$userid)->where("cryptocurrency_type", $crypto_type)->get();
            if(count($userCrypto)){
                return true;
            }
            return false;
        }
        catch(Exception $ex){
            return false;
        }
    }


    public function GetBalance($userid,$symbol){

        $userBalance = CryptoBalance::where("user_id",$userid)->where("cryptocurrency_type",$symbol)->first();
        if($userBalance){
            return $userBalance->crypto_balance;
        }
        return null;
    }

    public function DeductBalance($userid, $quantity, $symbol){
          // $table->integer('user_id');
    // $table->string('cryptocurrency_type');
    // $table->decimal('crypto_balance');
        try{
            $balance = $this->GetBalance($userid,$symbol);
            $balance = $balance - $quantity;
            $userBalance = CryptoBalance::where("user_id",$userid)
            ->where("cryptocurrency_type",$symbol)
            ->update(['crypto_balance'=>$balance]);
            return true;
        }
        catch(Exception $ex){

           return false;
        }

    }

    public function GetCryptoCurrency($userid){
        $currency = CryptoBalance::where("user_id",$userid)->get();
        if(count($currency)){
            return $currency;
        }
    }






}
