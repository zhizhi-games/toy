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
	return 1;
    // return $request->user();
});

// Route::group(['namespace' => 'Rbachub'],function(){

Route::get('/admin', 'Api\RbachubController@getAdminList');
Route::post('/admin','Api\RbachubController@postAdmin');
Route::get('/admin/{id}','Api\RbachubController@getSingleAdmin')->where('id', '[0-9]+');
Route::put('/assignRole', 'Api\RbachubController@putAssignRole');
Route::delete('/admin/{id}', 'Api\RbachubController@deleteAdmin')->where('id', '[0-9]+');
Route::post('/role', 'Api\RbachubController@role');
// });
// Route::middleware('auth:api')->


