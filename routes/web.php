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

// Orders

Route::get('/', 'OrdersController@getIndex')->name('orders.index');
Route::get('/{ordersId}', 'OrdersController@getView')->name('orders.show');
