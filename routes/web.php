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

Route::get('/', function () {
    return view('welcome');
});

//后台
Route::group(['prefix' => 'admin'],function(){
	Route::get('/','Admin\IndexController@index')->name('admin.dashboard');
	Route::get('login','Admin\LoginController@getLogin')->name('admin.login');
	Route::post('login','Admin\LoginController@postLogin');
	Route::get('logout','Admin\LoginController@logout')->name('admin.logout');
});