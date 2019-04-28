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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/deposito', 'DepositoController@deposito')->name('deposito');

Route::post('/deposito/novo', 'DepositoController@depositar')->name('depositar');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/saque', 'SaqueController@saque')->name('saque');
