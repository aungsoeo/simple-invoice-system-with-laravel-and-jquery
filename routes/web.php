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
Route::get('productmain','ProductController@main');
Route::get('productindex','ProductController@index');
Route::get('productform','ProductController@form');

// Route::get('productform1','ProductController@form1');
// Route::post('store','ProductController@store');

Route::post('save','ProductController@save');
Route::post('search','ProductController@search');
Route::get('EditProduct/{id}','ProductController@edit');
Route::post('update','ProductController@update');
Route::get('DeleteProduct/{id}','ProductController@delete');

Route::get('productadd','ProductController@addmore');
Route::post('add','ProductController@store');
Route::resource('invoices', 'InvoicesController');

