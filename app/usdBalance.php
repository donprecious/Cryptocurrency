<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usdBalance extends Model
{
    //
    protected $table = 'usdbalances';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User');
    }

}
