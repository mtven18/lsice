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

Route::get('/', 'MainController@index')->name('index');

Route::get('/delivery', 'MainController@delivery')->name('index.delivery');

Route::get('/pay', 'MainController@pay')->name('index.pay');

Route::get('/return', 'MainController@return')->name('index.return');

Route::get('/contacts', 'MainController@contacts')->name('index.contacts');

Route::post('/regions', 'MainController@regions')->name('index.regions');

Route::auth();