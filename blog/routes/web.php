<?php

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

Route::get('/', 'Home\IndexController@Home');
Route::get('/nav', 'Home\NavController@getNavInfo');
Route::get('/addNavInfo', 'Home\NavController@addNavInfo');
Route::get('/editNavInfo', 'Home\NavController@editNavInfo');
Route::get('/deleteNavInfo/{id}', 'Home\NavController@deleteNavInfo');

