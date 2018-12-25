<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_confirmations extends Model
{
    //
    protected $table = "order_confirmations";

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function tokenOrders(){
        return $this->belongsTo('App\tokenOrders', "order_id");
    }
}
