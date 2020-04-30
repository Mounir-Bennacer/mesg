<?php

use App\Http\Resources\MesgCollection;
use Illuminate\Support\Facades\Route;

/* Route::group(['middleware' => ['auth']], function(){ */
/* }); */

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/', 'DashboardController@index');
Route::get('api/mesg', 'MesgsController@getData');
Route::resource('charge-affaire', 'ChargeAffaires');
Route::get('stats', 'StatsController@index');

// routes for mesg
Route::resource('mesg', 'MesgsController');
Route::get('/home', 'HomeController@index')->name('home');



Route::get('/register','RegistrationsController@create');
Route::post('/register','RegistrationsController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('forgot', 'SessionsController@forgot');

