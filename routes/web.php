<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'DashboardController@index');
Route::resource('api/mesg', 'MesgsController');
Route::resource('charge-affaire', 'ChargeAffaires');
Route::get('dashboard', 'DashboardController@index');
Route::get('stats', 'StatsController@index');

// routes for mesg
Route::resource('mesg', 'MesgsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
