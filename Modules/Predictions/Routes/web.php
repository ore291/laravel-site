<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(['namespace' => '\Modules\Predictions\Http\Controllers', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'predict'], function () {
//     $module_name = 'predictions';
//     $controller_name = 'PredictionsController';
//     Route::get('$module_name/', 'PredictionsController@index');

// });

// Route::middleware(['web', 'auth', 'can:view_backend'])->prefix('admin')->name('backend.')->group(function() {
//     $module_name = 'predictions';
//     $controller_name = 'PredictionsController';

//     Route::get("$module_name/", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
//     Route::get("$module_name/add", ['as' => "$module_name.add", 'uses' => "$controller_name@create"]);
//     Route::resource("$module_name", "$controller_name");
// });

Route::group(['namespace' => '\Modules\Predictions\Http\Controllers', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
    /*
    * These routes need view-backend permission
    * (good if you want to allow more than one group in the backend,
    * then limit the backend features by different roles or permissions)
    *
    * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
    */

    /*
     *
     *  Tags Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'predictions';
    $controller_name = 'PredictionsController';
   
    Route::get("$module_name/", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/create", ['as' => "$module_name.create", 'uses' => "$controller_name@create"]);
    Route::get("$module_name/add", ['as' => "$module_name.add", 'uses' => "$controller_name@add"]);
    Route::resource("$module_name", "$controller_name");
});


