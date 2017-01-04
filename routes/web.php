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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin_template');
});*/

Route::get('/', 'DashboardController@index');

Route::get('/test', 'TestController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/outlet', 'OutletController@index');

Route::get('/outlet/create', 'OutletController@create');

Route::get('/outlet/page/create/{id}', 'OutletController@create_page');

Route::get('/outlet/show/{id}', 'OutletController@show');

Route::get('/home', 'HomeController@index');

Auth::routes();
