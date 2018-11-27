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


Route::get('event', 'EventController@index');
Route::get('event/{id}', 'EventController@get');
Route::post('event/create', 'EventController@store');
Route::patch('event/{id}/update', 'EventController@update');
Route::delete('event/{id}/delete', 'EventController@destroy');

Route::get('user', 'UserController@index');
Route::get('user/{id}', 'UserController@get');
Route::post('user/create', 'UserController@store');
Route::patch('user/{id}/update', 'UserController@update');
Route::delete('user/{id}/delete', 'UserController@destroy');