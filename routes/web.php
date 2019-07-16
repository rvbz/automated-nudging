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



/*===========================
=            API            =
===========================*/

Route::get('api/products/all', 'ShowWelcomePage@getAllProducts');
Route::get('api/nudges/getanudge', 'ShowWelcomePage@getNudge');

/*=====  End of API  ======*/
