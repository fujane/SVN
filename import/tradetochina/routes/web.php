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

/**
 * web路由
 */
Route::get('/', 'Home\IndexController@index');
Route::get('/home', 'Home\IndexController@index');
Route::get('/demo', 'Home\IndexController@redis_demo');
Route::get('/insert', 'Home\IndexController@insert_demo');
Route::get('/page', 'Home\IndexController@page_mysql');
Route::get('/test', 'Home\IndexController@demo_test');
Route::get('/inserttest', 'Home\IndexController@insert_test');
Route::get('/session_demo', 'Home\IndexController@session_demo');


