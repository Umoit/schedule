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
//前端
Route::get('/','Front\IndexController@index')->name('index');

	Route::get('testdb','Admin\IndexController@testdb');


//后端
Route::group(['prefix' => 'admin'],function(){
	Route::get('dashboard','Admin\IndexController@dashboard')->name('admin.dashboard');
	Route::get('login','Admin\Auth\LoginController@getLogin')->name('admin.login');
	Route::post('login','Admin\Auth\LoginController@postLogin')->name('admin.post.login');
	Route::get('logout','Admin\Auth\LoginController@logout')->name('admin.logout');
});

Auth::routes();