<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
//loading a controller action
Route::get('/Market', "marketController@index");

Route::resource('Market', 'marketController');

Route::get('/Transactions', "marketController@Transactions");

Route::get('/user', 'UserController@Index');
Route::get('/user/index', 'UserController@Index');

// Route::get('/user/orderConfirmation/{id}', 'UserController@orderConfirmation');
Route::get('/user/orderConfirmation', 'UserController@orderConfirmation');

//Route::get('/user/verifyPayment{id}', 'UserController@verifyPayment');
Route::get('/user/verifyPayment', 'UserController@verifyPayment');
Route::get('/user/PaymentInfo', function () {
    return view("User.paymentinfo");
});

Route::post('user/fundAccount','UserController@FundAccount');

Route::get('/admin',function(){
    return view("admin.dashboard");
});

Route::get('/admin/dashboard',"AdminController@dashboard");
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
