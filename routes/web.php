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

Route::get('home', 'UserController@home')->name('home');
Route::get('/', 'UserController@index');
Route::POST('/createUser', 'UserController@create');
Route::POST('/signin', 'UserController@signin');
