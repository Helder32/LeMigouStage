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
//     return view('body');
// });

Auth::routes();

Route::get('/', 'BodyController@index')->name('body');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/customer', 'CustomerController@index')->name('customer');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('customer', 'CustomerController@store');
Route::get('/customer/show', 'CustomerController@show')->name('resultCustomer');
Route::get('/customer/edit', 'CustomerController@edit');
Route::get('/customer/update', 'CustomerController@update');
Route::get('/customer/destroy', 'CustomerController@destroy');


Route::get('/article', 'ArticleController@index')->name('article');
Route::get('/article/create', 'ArticleController@create')->name('article.create');
Route::post('article', 'ArticleController@store');
Route::get('/article/show', 'ArticleController@show')->name('resultArticle');
Route::get('/article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::post('/article/update/{id}', 'ArticleController@update')->name('article.update');
Route::delete('/article/destroy/{id}', 'ArticleController@destroy')->name('article.destroy');


Route::get('/venteLib', 'venteLibController@index')->name('venteLib');
Route::get('/venteRest', 'venteRestController@index')->name('venteRest');
Route::post('/venteRest', 'venteRestController@store');


