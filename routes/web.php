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

Route::get('/', 'SenjuController@index');
Route::get('/webreports', 'SenjuController@webreports');
Route::post('/webreports', 'SenjuController@webreportspost');
Route::get('/createaccount', 'SenjuController@createAcc');
Route::post('createaccount', 'SenjuController@storeAcc');
Route::get('/sample', 'SenjuController@sample');
Route::get('/edituser', 'SenjuController@edituser');
Route::post('/edituser', 'SenjuController@edituserpost');
Route::post('/editusercomplete', 'SenjuController@editusercomplete');
