<?php
namespace App\Infastuture;

use App\tokenOrders;

use App\Infastuture\UserModel;
use App\Infastuture\CoinRankingApi;
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

}
