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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['namespace' => 'App\Demo'], function () {
    Route::get('/admin', 'ChenLei@getApi');
    Route::get('/customer', 'ChenLei@getApiv2');
});


Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout');
    Route::post('/register', 'RegisterController@register');
});