<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usdBalance extends Model
{
    //
    protected $table = 'usdbalances';

    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User');
    }

}
