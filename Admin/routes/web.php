<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
  Route::get('/', 'HomeController@dashboard')->name('dashboard');
  Route::resource('Stamp','StampController');
  Route::resource('Order','OrderController');
  Route::resource('Restaurant','RestaurantController');
  Route::get('qr/generate/{id}', 'OrderController@getQR')->name('getQR');
});

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});


Route::middleware(['cors'])->group(function () {
	Route::post('restaurant/login', 'RestaurantController@login')->name('restaurantLogin');
	Route::post('restaurant/scanQR', 'RestaurantController@scanQR')->name('scanQR');
});

require __DIR__.'/auth.php';
