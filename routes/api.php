<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Mesgs;

/* Route::middleware('auth:api')->get('/user', function (Request $request) { */
/*     return $request->user(); */
/* }); */

Route::get('mesgs', 'MesgsController@index');
Route::get('mesgs/{mesg}', 'MesgsController@show');
Route::post('mesgs', 'MesgsController@store');
Route::put('mesgs/{mesg}', 'MesgsController@update');
Route::delete('mesgs', 'MesgsController@delete');
