<?php

use App\Http\Resources\MesgCollection;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
	Route::get('dashboard', 'DashboardController@index');
	Route::get('/', 'DashboardController@index')->name('home');
	/* Route::resource('charge-affaire', 'ChargeAffaires'); */
	Route::get('stats', 'StatsController@index');
    Route::get('groupe-technique', 'MesgsController@getGtc');
	// routes for mesg
    Route::get('mesgs', 'MesgsController@showAll');
    Route::get('mesgs/create', 'MesgsController@create');
    /* Route::post('mesgs', 'MesgsController@store'); */
});


Route::get('/register','RegistrationsController@create');
Route::post('/register','RegistrationsController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('forgot', 'SessionsController@forgot');

