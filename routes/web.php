<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

# 會員系統的route
Auth::routes();

/// 前端Route

#首頁
Route::get('/', 'PlantController@index');
Route::get('/home', 'PlantController@index');

#Plant Library
Route::get('/plant_library', 'PlantController@library');

/// 後端Route
Route::get('/dashboard', 'HomeController@index');
Route::get('/setEnvironment', 'HomeController@setView');
Route::post('/setEnvironment', 'HomeController@setEnvironment');

/// Ajax用的Route
Route::post('/getEnvironment', 'HomeController@getEnvironment');
Route::post('/changeStatus', 'HomeController@changeStatus');