<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

#登入
Route::group([

    //'middleware' => 'api',
    'prefix' => 'auth'

],function($router){
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');
    Route::post('logout', 'UserController@logout');
    Route::get('profile', 'UserController@getAuthenticatedUser');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('foods','FoodController@index');
Route::get('foods/{id}','FoodController@show');
Route::post('foods','FoodController@store');
Route::put('foods/{id}','FoodController@update');
Route::delete('foods/{id}','FoodController@destroy');

Route::get('fishTex','FishTexController@index');
Route::get('fishTex/{id}','FishTexController@show');
