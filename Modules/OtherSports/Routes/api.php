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

Route::middleware('auth:api')->get('/othersports', function (Request $request) {
    return $request->user();
});

Route::post('/other_sports/bulk', 'Modules\OtherSports\Http\Controllers\OtherSportApiController@bulkInsert');


Route::post('/other_sports/football', 'Modules\OtherSports\Http\Controllers\OtherSportApiController@football');

Route::post('/other_sports/{id}', 'Modules\OtherSports\Http\Controllers\OtherSportApiController@index');
