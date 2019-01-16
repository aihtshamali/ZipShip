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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contactUs');
})->name('contactUs');
// Route::get('/addFlight', function () {
//     return view('add_flight');
// })->name('add_flight');
Route::get('/coupons', function () {
    return view('coupons');
})->name('coupons');
// Route::get('/makeOrder', function () {
//     return view('make_order');
// })->name('make_order');
// Route::get('/makeorder', function () {
//     return view('make_order');
// })->name('order');
// Route::get('/profile', function () {
//     return view('profile');
// })->name('profile');

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');
Route::get('firebase','FirebaseController@index');

Auth::routes();

Route::group(['middleware' => ['auth']],function(){
  Route::get('postStatus/{status?}','UserPostController@getpost')->name('getpost');
  Route::get('orderStatus/{status?}','OrderController@getorderbyStatus')->name('getorderbyStatus');

  Route::resource('order','OrderController');
  Route::get('offersRequested/{id}','OfferRequestedController@showOffers')->name('showRequests');
  Route::get('/settings', function () {
    return view('settings');
  })->name('settings');
  Route::post('updatePassword','UserController@updatePassword')->name('updatePassword');
  // Route::get('post/{status?}','UserPostController@index');
  Route::resource('makeOffer','MakeOfferController');
  Route::resource('order','OrderController');
  Route::resource('profile','UserController');
  Route::get('setPoststatus','UserPostController@setPoststatus')->name('setPoststatus');
  Route::get('setOrderstatus','OrderController@setOrderstatus')->name('setOrderstatus');
  Route::resource('bids','BidController');
  Route::post('/chat', 'ChatController@store' );
  Route::put('/chat/{chat}', 'ChatController@update' );
  Route::get('/chat/{chat}', 'ChatController@show' );
  // Route::resource('chats','ChatController');
  Route::resource('flight','FlightController');
  Route::resource('post','UserPostController');
});
