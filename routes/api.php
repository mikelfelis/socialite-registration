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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'cities', 'namespace' => 'Api'], function () {
    Route::get('', 'CitiesController@index');
});

Route::group(['prefix' => 'barangay', 'namespace' => 'Api'], function () {
    Route::get('', 'BarangayController@getList');
});

Route::group(['namespace' => 'Api'], function () {
    Route::apiResource('guest', 'GuestController');
});

Route::group(['prefix' => 'user', 'middleware' => 'guest', 'namespace' => 'Auth'], function() {
    Route::post('/login', 'LoginController@login');
});
