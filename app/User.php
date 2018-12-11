<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function USDBalance(){
        return $this->hasOne('App\usdBalance');
    }

    public function CryptoBalance(){
        return $this->hasOne('App\CrptoBalance');
    }

    public function Transactions(){
        return $this->hasMany('App\Transactions');
    }
}
