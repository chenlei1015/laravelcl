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

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');
//
//Route::group(['namespace' => 'App\Demo'], function () {
//    Route::get('/admin', 'ChenLei@getApi');
//    Route::get('/customer', 'ChenLei@getApiv2');
//    Route::get('/test', 'ChenLei@test');
//    Route::get('/test2', 'ChenLei@test2');
//    Route::get('/testsetredis', 'ChenLei@testSetRedis');
//    Route::get('/testgetredis', 'ChenLei@testGetRedis');
//});
//
//
//Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
//    Route::post('/login', 'LoginController@login');
//    Route::get('/logout', 'LoginController@logout');
//    Route::post('/register', 'RegisterController@register');
//});

//算法分析
Route::group(['namespace' => 'App\V1\Home\Controllers'], function () {
    Route::get('home', 'Home@index');
    Route::get('quick_sort', 'Home@quickSort');


});
Route::get('add_jobs', 'App\V1\Home\Controllers\Api\JobController@addJobs');

Route::get('redis', 'App\V1\Home\Controllers\Api\JobController@redisTest');