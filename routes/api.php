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
Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');
Route::middleware('')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['jwt.auth'])->group(function () {
    Route::get('/weather-groups', 'Api\WeatherGroupController@index');
    Route::get('/weather-groups/{id}', 'Api\WeatherGroupController@show');
    Route::get('/events', 'Api\EventController@index');
    Route::get('/events/{id}', 'Api\EventController@show');
    Route::get('/dresscodes', 'Api\DressCodeController@index');
    Route::get('/dresscodes/{id}', 'Api\DressCodeController@show');
    Route::get('/outfit-categories', 'Api\OutfitCategoryController@index');
    Route::get('/outfit-categories/{id}', 'Api\OutfitCategoryController@show');
});
