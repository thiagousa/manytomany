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

Route::get('/orders/', 'OrdersController@index')->name('orders.index');
Route::get('/orders/{ordersId}/show', 'OrdersController@show')->name('orders.show');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
