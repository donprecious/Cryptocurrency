<?php
namespace App\Infastuture;

use App\usdBalance;
use App\CryptoBalance;

use App\Infastuture\UserModel;

class UsdBalanceModel{

    static public $errorMessage;
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

    public function GetUsdBalance($userid){
        $userBalance = usdBalance::where("user_id",$userid)->first();
        if($userBalance){
            return $userBalance->Balance_usd;
        }
       return null;
    }

    public function DeductUsdBalance($userid, $amount){
        try{
            $balance = $this->GetUsdBalance($userid);
            $balance = $balance - $amount;
            $userBalance = usdBalance::find($userid);
            $userBalance->Balance_usd = $balance;
            $userBalance->save();
            return true;
        }
        catch(Exception $ex){

           return false;
        }

    }

    public function CreditBalance($userid, $amount){
        try{
            $balance = $this->GetUsdBalance($userid);
            $balance = $balance + $amount;
            $userBalance = usdBalance::find($userid);
            $userBalance->Balance_usd = $balance;
            $userBalance->save();
            return true;
        }
        catch(Exception $ex){

           return false;
        }
    }





}
