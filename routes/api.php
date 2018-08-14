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

Route::get('/weather-groups', 'Api\WeatherGroupController@index');
Route::get('/weather-groups/{id}', 'Api\WeatherGroupController@show');
Route::get('/events', 'Api\EventController@index');
Route::get('/events/{id}', 'Api\EventController@show');