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

Route::get('/', 'ShowWelcomePage');

Route::get('/checkout', function() {
	return view('checkout');
});

Route::get('/thanks', function() {
	return view('thankyou');
});

Route::post('users', 'UserController@store');
Route::post('users/sells', 'UserController@storeSells');
Route::post('users/fills', 'UserController@storeFills');
Route::post('users/getfills', 'UserController@getFills');
Route::post('users/emotion', 'UserController@storeEmotion');

/*===========================
=            API            =
===========================*/

Route::get('api/products/all', 'ShowWelcomePage@getAllProducts');
Route::get('api/products/getslowmoving', 'ShowWelcomePage@getSlowMovingProduct');
Route::get('api/nudges/getanudge', 'ShowWelcomePage@getNudge');

/*=====  End of API  ======*/
