<?php


Route::get('/','InvoicesController@show');
Route::get('index','InvoicesController@index');
Route::get('show','InvoicesController@show');
Route::get('create','InvoicesController@insert');

Route::post('save','InvoicesController@save');
Route::post('search','InvoicesController@search');
Route::get('edit/{id}','InvoicesController@edit');
Route::get('pdf/{id}','InvoicesController@printt');

Route::post('update','InvoicesController@update');
Route::get('Deleteinvoice/{id}','InvoicesController@delete');

Route::get('invoiceadd','InvoicesController@add');
Route::post('add','InvoicesController@store');
