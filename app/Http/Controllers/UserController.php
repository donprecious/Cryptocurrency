<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;
use App\Infastuture\UsdBalanceModel;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function Index(){
        return view('user.index');
   }

   public function fundAccount(Request $request){
        $bal = new UsdBalanceModel();
        $bal = $bal->AddBalance();
    return $request['txtFund'];
   }
}
