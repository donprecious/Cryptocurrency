<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoBalance extends Model
{
    protected $table = 'crypto_balances';

    public $timestamps = false;
    //
    public function User(){
        return $this->belongsTo('App\User');
    }



}
