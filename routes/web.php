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

// System

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


// Orders

Route::get('/orders/', 'OrdersController@index')->name('orders.index');
Route::get('/orders/{ordersId}/show', 'OrdersController@show')->name('orders.show');


//Products

Route::get('/products/', 'ProductsController@index')->name('products.index');
Route::get('/products/create', 'ProductsController@show')->name('products.create');
Route::get('/products/{productsID}/store', 'ProductsController@store')->name('products.store');
Route::get('/products/{productsID}/show', 'ProductsController@show')->name('products.show');
Route::get('/products/{productsID}/edit', 'ProductsController@edit')->name('products.edit');
Route::get('/products/{productsID}/update', 'ProductsController@update')->name('products.update');
Route::delete('/products/{productsID}/destroy', 'ProductsController@destroy')->name('products.destroy');