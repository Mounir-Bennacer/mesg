<?php

use App\Http\Resources\MesgCollection;
use Illuminate\Support\Facades\Route;
Use App\Mesgs;

Route::middleware('auth')->group(function(){
	Route::get('dashboard', 'DashboardController@index');
	Route::get('/', 'DashboardController@index')->name('home');
	/* Route::resource('charge-affaire', 'ChargeAffaires'); */
	Route::get('stats', 'StatsController@index');
    Route::get('groupe-technique', 'MesgsController@getGtc');
	// routes for mesg
    Route::get('mesgsdata', 'MesgsController@showAll');

    Route::resource('mesgs', 'MesgsController');
    /* Route::get('mesgs', 'MesgsController@index'); */
    /* Route::get('mesgs/create', 'MesgsController@create'); */
    /* Route::get('mesgs/{mesg}', 'MesgsController@show'); */
    /* Route::post('mesg', 'MesgsController@store'); */
    /* Route::put('mesgs/{mesg}', 'MesgsController@update'); */
    /* Route::delete('mesgs', 'MesgsController@delete'); */
});


Route::get('/register','RegistrationsController@create');
Route::post('/register','RegistrationsController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('forgot', 'SessionsController@forgot');

