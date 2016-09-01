<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//beranda
Route::get('/', 'BerandaController@beranda');
Route::resource('jual', 'JualController');
Route::resource('beli', 'BeliController');
Route::get('tentang', 'BerandaController@tentang');

//Login
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//dashboard
Route::get('dashboard', 'DashboardController@index');
//dashboar/berkas
Route::resource('dashboard/berkas/bank', 'DashBankController');
//dashboard/transaksi
Route::get('dashboard/transaksi/jual', 'DashJualController@index');
Route::get('dashboard/transaksi/beli', 'DashBeliController@index');
Route::resource('dashboard/bitcoin-rate', 'DashBitcoinRateController');
//dashboard_profile
Route::resource('dashboard/profile', 'DashProfileController');
