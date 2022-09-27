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

// Route::prefix('results')->group(function() {
//     Route::get('/', 'ResultsController@index');
// });

Route::group(['namespace' => '\Modules\Results\Http\Controllers', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
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
    $module_name = 'results';
    $controller_name = 'ResultsController';
   
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/add", ['as' => "$module_name.add", 'uses' => "$controller_name@create"]);
    Route::get("$module_name/stats", ['as' => "$module_name.stats", 'uses' => "$controller_name@stats"]);
    Route::post("$module_name/stats", ['as' => "$module_name.stats_add", 'uses' => "$controller_name@stats_store"]);
    
    Route::resource("$module_name", "$controller_name");
});

Route::group(['namespace' => '\Modules\Results\Http\Controllers', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
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
    $module_name = 'prices';
    $controller_name = 'PriceController';
   
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/add", ['as' => "$module_name.add", 'uses' => "$controller_name@create"]);
    Route::get("$module_name/currencies", ['as' => "$module_name.currency", 'uses' => "$controller_name@show"]);
    Route::post("$module_name/currencies", ['as' => "$module_name.currency_update", 'uses' => "$controller_name@update"]);
    Route::resource("$module_name", "$controller_name");
});


Route::group(['namespace' => '\Modules\Results\Http\Controllers', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
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
    $module_name = 'experts';
    $controller_name = 'ExpertController';
   
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::resource("$module_name", "$controller_name");
});

