<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/client', 'api\ClientController@index');
Route::get('/client/{client}', 'api\ClientController@show');
Route::post('/client', 'api\ClientController@store');
Route::put('/client/{client}', 'api\ClientController@update');
Route::delete('/client/{client}', 'api\ClientController@destroy');
