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

Route::get('/', 'WebController@home')->name('home');
Route::post('cart/add/ajax', 'WebController@addToCart')->name('addToCart');
Route::post('cart/update/ajax', 'WebController@updateCart')->name('updateCart');
Route::post('cart/remove/ajax', 'WebController@removeCart')->name('removeCart');
Route::get('cart', 'WebController@cart')->name('cart');
Route::get('checkout', 'WebController@checkout')->name('checkout');
Route::post('placeOrder', 'WebController@placeOrder')->name('placeOrder');
Route::get('checkout/success', 'WebController@checkoutSuccess')->name('checkoutSuccess');



Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});

require __DIR__.'/auth.php';
