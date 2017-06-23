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

 Route::get('/', function () {
     return view('welcome');
 });




Route::resource('deposit','DepositController');

 Route::get('login','AuthController@getLogin')->name('login');

 Route::post('login','AuthController@postLogin');
 Route::get('logout','AuthController@logout');
Route::get('register','AuthController@register');
Route::post('register','AuthController@store');






