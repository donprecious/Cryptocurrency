<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tokenOrders extends Model
{
    //
    protected $table = 'token_orders';
    public function User(){
        return $this->belongsTo('App\User');
    }
}
