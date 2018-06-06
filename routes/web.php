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
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');

Auth::routes();
// Route::get('/getCity',function(){
//   return view('ajax.cities')->render();
// })->name('getCity');
Route::group(['middleware' => ['auth']],function(){

  Route::get('getCity', [
     'as' => 'getCity',
     'uses' => 'AJAXController@getCities'
  ]);
  Route::resource('chat','ChatController');
  Route::resource('post','UserPostController');
});
