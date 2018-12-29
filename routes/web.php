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

//UserController Get Request Route
Route::get('/user', 'UserController@Index');
Route::get('/user/index', 'UserController@Index');

Route::get('/user/orderConfirmation/{orderid}', 'UserController@orderConfirmation');
Route::get('/user/mytokens',"UserController@MyTokens");
//Route::get('/user/verifyPayment{id}', 'UserController@verifyPayment');
Route::get('/user/VerifyPayment/{orderid}', 'UserController@verifyPayment');
Route::get('/user/PaymentInfo', function () {
    return view("User.paymentinfo");
});
Route::get('user/history', "UserController@history");
Route::get('user/payments',"UserController@paymentOrders");
Route::get('user/payment/{orderid}',"UserController@paymentOrder");

//User controller post request route
Route::post('user/fundAccount','UserController@FundAccount');
Route::post('/user/buytoken', "UserController@BuyToken");
Route::post('/user/selltoken', "UserController@SellToken");
Route::Post('/user/UploadPaymentDoc', "UserController@UploadPaymentDoc");


//admin get controllers
Route::get('/admin', 'adminController@dashboard');
Route::get('/admin/confirmations','adminController@confirmations');

Route::post('/upload/images', [
    'uses'   =>  'ImageUploadController@uploadImages',
    'as'     =>  'uploadImage'
]);

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
