<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('weather-groups', 'WeatherGroupsController')->middleware('auth')
    ->except(['show']);
Route::resource('events', 'EventController')->middleware('auth')
    ->except(['show']);
Route::resource('dress-code', 'DressModeController')->middleware('auth')
    ->except(['show']);
Route::resource('outfit-categories', 'OutfitCategoryController')->middleware('auth')
    ->except(['show']);

Route::get('/broadcast-sms', 'BroadCastSmsController@show_form')->name('show_broadcast_form');
Route::post('/broadcast-sms', 'BroadCastSmsController@send_sms')->name('send_sms');