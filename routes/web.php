<?php

use App\Http\Resources\MesgCollection;
use Illuminate\Support\Facades\Route;

/* Route::group(['middleware' => ['auth']], function(){ */
/* }); */
Route::middleware('auth')->group(function(){
	Route::get('dashboard', 'DashboardController@index');
	Route::get('/', 'DashboardController@index')->name('home');
	Route::resource('charge-affaire', 'ChargeAffaires');
	Route::get('stats', 'StatsController@index');
    Route::get('groupe-technique', 'MesgsController@getGtc');
	// routes for mesg
	Route::resource('mesg', 'MesgsController');
	/* Route::get('api/mesg', 'MesgsController@getData'); */
});



Route::get('/register','RegistrationsController@create');
Route::post('/register','RegistrationsController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('forgot', 'SessionsController@forgot');

