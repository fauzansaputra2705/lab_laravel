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
Route::get('user','UserController@index');
Route::get('user/json','UserController@json');
Route::get('user/export_excel', 'UserController@export_excel')->name('export');
Route::get('account', 'TransactionController');

Route::get('my-chart', 'ChartController@index');
