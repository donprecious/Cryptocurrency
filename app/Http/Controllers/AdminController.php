<?php

namespace App\Http\Controllers;

use App\Infastuture\orderConfimationModel;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
       return view("admin.dashboard");
    }

    public function PaymentRequest(){
        $orders = (new orderConfimationModel())->GetOrders();
        return view("admin.payments");
    }

}
