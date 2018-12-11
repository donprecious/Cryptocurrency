<?php
namespace App\Infastuture;

use App\usdBalance;
use App\CryptoBalance;
use App\Infastuture\UserModel;
class UsdBalanceModel{


    public function __construct()
    {

    }

    public function AddBalance($userid,$balance){
        try{
            $user =new UserModel();
            if($user->FindbyId($userid)){
                $userBal = new usdBalance();
                $userBal->user_id = $userid;
                $userBal->Balance_usd = $balance;
                $userBal->save();
                return true;
            }

        }
        catch(Exception $ex){
            return false;
        }
    }

    public function AddCryptoBalance($userid,$balance, $crypto_Type){
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




}
