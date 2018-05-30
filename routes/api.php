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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('testget', function () {
    setcookie('.domain.com', '.domain.com', time()+3600, "/", '.domain.com');
    setcookie('domain.com', 'domain.com', time()+3600, "/", 'domain.com');
    setcookie('admin.domain.com', 'admin.domain.com', time()+3600, "/", 'admin.domain.com');
    return response('success');
});

Route::post('testpost', function () {
    setcookie('.domain.com', '.domain.com', time()+3600, "/", '.domain.com');
    setcookie('domain.com', 'domain.com', time()+3600, "/", 'domain.com');
    setcookie('admin.domain.com', 'admin.domain.com', time()+3600, "/", 'admin.domain.com');
    return response('success');
});
