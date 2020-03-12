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

Route::apiResource('post', 'PostController');

//this route below does not actually exist. I have only used it here to demonstrate how I would use the checkheader middleware on the route
//Route::post('api/check-header', array('uses' => 'APIController@checkheader','middleware' => ['checkHeader']));