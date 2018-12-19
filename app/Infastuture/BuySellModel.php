<?php
namespace App\Infastuture;

use App\tokenOrders;

use App\Infastuture\UserModel;
use App\Infastuture\CoinRankingApi;
use App\Infastuture\CryptoBalanceModel;
use App\Infastuture\UsdBalanceModel;
use App\Infastuture\TransancationsModels;
class BuySellModel{


    public function calculateTokenQuatity($symbol, $amount){
        //get current rate of the currency symbol
        //formulea to calculate the quantity of token = amount_from_user / amount_per_token ;  (all in usd)
        $coinapi = new CoinRankingApi();
        $coin = $coinapi->GetSpecificCurrencyData($symbol);
        $price_usd = $coin->price;
        $quanity = $amount /$price_usd ;
        return (object)["symbol"=>$coin->symbol,
                "amount"=>$amount,
                "quantity"=>$quanity,
                "price"=>$price_usd,
    ];

    }

    public function calculateTokenAmount($symbol, $quantiy){
        $coinapi = new CoinRankingApi();
        $coin = $coinapi->GetSpecificCurrencyData($symbol);
        $price_usd = $coin->price;
        $amount = $price * $quantity;
        return (object)["symbol"=>$coin->symbol,
        "amount"=>$amount,
        "quantity"=>$quanity,
        "price"=>$price_usd,
        ];
    }


    public function SellCoin($userid,$symbol,$quanity){
        //Get user balance
        $balance =(new  CryptoBalanceModel())->GetBalance($userid,$symbol);
             //FOR TESTING
            $amount = 300;
               $price = 3200;

          //uncomment below to use real time api
        // $calAmount = $this->calculateTokenAmount($symbol, $quanity);
        // $amount = $calAmount->amount;
        // $price = $calAmount->price;
        //check if balance is not null
        if($balance!=null){
     //check if the user balance is greater than or equal to the quantity he needs to sell
            if($balance >= $quanity){
                //Deduct the quantity from it Balance
                if((new CryptoBalanceModel())->DeductBalance($userid,$quanity,$symbol)){
                    //Credit User Usd Balance
                    $cr = (new UsdBalanceModel())->CreditBalance($userid, $amount);
                    if($cr){
                        //create transaction record
                        $trans = (new TransancationsModels())->
                        Create($userid,"Sell",$symbol,$quanity,$amount,$price,"Transaction Created");
                        return true;
                    }
                }
            }
            return ["error"=>"Insufficient Token"];
        }
        return false;
    }



}
