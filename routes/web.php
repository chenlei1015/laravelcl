<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weather', 'App\Demo\Weather@get_weather');

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm');
    Route::get('register', 'RegisterController@showRegistrationForm');
});

Route::group(['namespace' => 'App\V1\Home\Controllers'], function () {
    Route::get('home', 'Home@index');
});
