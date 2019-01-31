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
    return redirect()->route('site.index');
});

Auth::routes();

Route::group(['prefix' => 'site', 'as' => 'site.'], function(){
    Route::get('/', 'Site\IndexController@index')->name('index');
});

