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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'CustomerController@index')->name('customer');

Route::get('/customer', 'CustomerController@list');
Route::get('/customer/create', 'CustomerController@create');
Route::get('/customer/update', 'CustomerController@update');
Route::get('/customer/delete', 'CustomerController@delete');

