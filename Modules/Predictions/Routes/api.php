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

// Route::middleware('auth:api')->get('/predictions', function (Request $request) {
//     return $request->user();
// });


// Route::post('predictions/bulk', function (Request $request)){

// };

Route::post('/predictions/bulk', 'Modules\Predictions\Http\Controllers\PredictionApiController@bulkInsert');


Route::post('/predictions/football', 'Modules\Predictions\Http\Controllers\PredictionApiController@football');

Route::post('/predictions/{id}', 'Modules\Predictions\Http\Controllers\PredictionApiController@index');


