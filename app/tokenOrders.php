<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tokenOrders extends Model
{
    //
    protected $table = 'token_orders';
    protected $primarykey="order_id";
    public function User(){
        return $this->belongsTo('App\User');
    }

    public function order_confirmations(){
        return $this->hasMany("App\order_confirmations", "order_id","user_id");
    }
}
