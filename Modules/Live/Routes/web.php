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



Route::group(['namespace' => '\Modules\Live\Http\Controllers', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
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
    $module_name = 'live_events';
    $controller_name = 'LiveController';
   
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/add", ['as' => "$module_name.add", 'uses' => "$controller_name@create"]);
    Route::get("$module_name/plan", ['as' => "$module_name.plan", 'uses' => "$controller_name@plan"]);
    Route::post("$module_name/plan", ['as' => "$module_name.plan_store", 'uses' => "$controller_name@plan_store"]);
    Route::get("/sms", ['as' => "sms",  'uses' => "$controller_name@sms"]);
    Route::get("/sms_data", ['as' => "$module_name.sms_data",  'uses' => "$controller_name@sms_data"]);

    Route::resource("$module_name", "$controller_name");
});

Route::group(['namespace' => '\Modules\Live\Http\Controllers', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
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
    $module_name = 'upgrade-user';
    $controller_name = 'UpgradeController';
   
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/add", ['as' => "$module_name.add", 'uses' => "$controller_name@create"]);
    Route::resource("$module_name", "$controller_name");
});

Route::get('/live', 'LiveController@liveStream')->middleware(['web', 'auth',  'premium']);

// Route::prefix('live')->group(function() {
//     Route::get('/', 'LiveController@index');
// });
