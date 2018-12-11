<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    //
    public $timestamps = false;
    public function Transactions(){
        return $this->hasMany('App/Transactions','transaction_type');
    }
}
