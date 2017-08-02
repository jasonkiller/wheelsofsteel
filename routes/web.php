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

Route::get('/home', 'HomeController@home');


/*=============== Login Routes Start ===============*/

Route::post('/login', 'LoginController@login');

/*=============== Login Routes End ===============*/

/*=============== Order Routes Start ===============*/

// orderList
Route::get('/orderList', 'OrderController@orderList');

// createOrder
Route::post('/createOrder', 'OrderController@createOrder');

// deleteOrder
Route::get('/deleteOrder', 'OrderController@deleteOrder');

// updateOrder
Route::post('/updateOrder', 'OrderController@updateOrder');

// replyOrder
Route::post('/replyOrder', 'OrderController@replyOrder');

/*=============== Order Routes End ===============*/
