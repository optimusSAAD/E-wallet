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
    $funds = \App\Fund::all();
    $receives=[];
    foreach($funds as $fund){
        $receives[$fund->id] = explode(",",$fund->receive);
    }
    return view('frontend.exchangePage.exchange',['funds'=>$funds,'receives'=>$receives]);
});

Route::get('/about', function () {
    return view('frontend.aboutUs.about');
});
Route::get('/contact', function () {
    return view('frontend.contactUs.contact');
});
Route::get('/review', function () {
    return view('frontend.customReivew.review');
});


Route::get('/multi', function () {

    return view('frontend.submitPAge.muti');
});

Route::get('/confirm', function () {
    return view('frontend.payPage.pay');
});
Route::get('/pay', function () {
    return view('frontend.orderPage.order');
});
Route::get('/track', function () {
    return view('frontend.historyPage.history');
});
Route::get('/history', function () {
    return view('frontend.trackPage.track');
});
Route::get('/admin/user', function () {
    return view('backend.userDetails.user');
});
Route::get('/admin/user/details', function () {
    return view('backend.userDetails.uDetails');
});

Route::resource('/admin/fund', 'FundController');

Route::resource('/admin/charge', 'ChargeController');

Route::resource('/admin/extra', 'ExtraController');


Route::get('/admin/theme', function () {
    return view('backend.themeLogo.theme');
});
Route::get('/admin/review', function () {
    return view('backend.reviewCustomer.review');
});
Route::get('/admin/order', function () {
    return view('backend.orderDetails.order');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

