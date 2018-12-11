<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoBalance extends Model
{
    //
    public function User(){
        return $this->belongsTo('App\User');
    }


}
