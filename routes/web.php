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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('account/create', 'Admin\AccountController@add');
    Route::get('account/index', 'Admin\AccountController@index');
    Route::post('account/create', 'Admin\AccountController@create');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
