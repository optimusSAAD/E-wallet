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
    $orders = \App\Order::latest ()->paginate(10);
    $users=\App\User::paginate(4);
    $funds = \App\Fund::all();
    $receives=[];
    foreach($funds as $fund){
        $receives[$fund->id] = explode(",",$fund->receive);
    }
    return view('frontend.exchangePage.exchange',['funds'=>$funds,'receives'=>$receives,'users'=>$users,'orders'=>$orders]);
});

Route::get('/about', function () {
    $extras = App\Extra::all();
    return view('frontend.aboutUs.about',['extras'=>$extras]);
});


Route::get('/contact', function () {
    return view('frontend.contactUs.contact');
});

Route::get('/review', function () {
    $users=\App\User::paginate(6);
    return view('frontend.customReivew.review',['users'=>$users]);
});

Route::get('/order/{id1}/{id2}', function ($id1,$id2) {
    $send_funds = \App\Fund::where('id', $id1)->get();
    $receive_funds=\App\Fund::where('id', $id2)->get();
    $statuses = \App\Status::all();
    return view('frontend.submitPAge.multi',['send_funds'=>$send_funds,'receive_funds'=>$receive_funds,'statuses'=>$statuses]);
})->middleware('verified');


Route::get('/track', function () {
    $statuses = \App\Status::all();
    $funds=\App\Fund::all();
    $user = Auth::user();
    $orders = \App\Order::all();
    return view('frontend.historyPage.history',['orders'=>$orders,'user'=>$user,'funds'=>$funds,'statuses'=>$statuses]);
})->middleware('verified');



Route::get('/admin/user', function () {
    $users = \App\User::all();
    return view('backend.userDetails.user',['users'=>$users]);
})->middleware(['auth','admin']);

Route::get('/admin/user/details', function () {

    return view('backend.userDetails.uDetails');
})->middleware(['auth','admin']);

Route::resource('/admin/fund', 'FundController')->middleware(['auth','admin']);

Route::resource('/admin/charge', 'ChargeController')->middleware(['auth','admin']);

Route::resource('/admin/extra', 'ExtraController')->middleware(['auth','admin']);

Route::resource('/admin/order', 'OrderController');

Route::resource('/admin/status', 'StatusController')->middleware(['auth','admin']);


Route::get('/admin/theme', function () {
    return view('backend.themeLogo.theme');
})->middleware(['auth','admin']);
Route::get('/admin/review', function () {
    return view('backend.reviewCustomer.review');
})->middleware(['auth','admin']);

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/update', 'HomeController@update')->name('profile.update');
Route::put('/profile/update/edit', 'HomeController@profile')->name('profile.update.edit');

Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('dashboard','AdminController@index')->name('dashboard');
});
Route::group(['as'=>'user.','prefix'=>'user','middleware'=>['auth','user']],function (){
    Route::get('dashboard','UserController@index')->name('dashboard');
});
