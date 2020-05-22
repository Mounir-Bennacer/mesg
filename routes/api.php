<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Mesgs;

/* Route::middleware('auth:api')->get('/user', function (Request $request) { */
/*     return $request->user(); */
/* }); */

Route::resource('mesgs', 'MesgsController');
