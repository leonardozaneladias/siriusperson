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
    Route::get('/quotation/keep/{product}/{quantity}', 'Site\QuotationKeepController@index')->name('quotation.keep');
    Route::get('/quotation/', 'Site\QuotationController@index')->name('quotation');
    Route::post('/quotation/', 'Site\QuotationKeepController@store')->name('quotation.request');
    Route::post('/quotation/conclusion', 'Site\QuotationKeepController@conclusion')->name('quotation.conclusion');
    Route::get('/product/{id}', 'Site\ProductViewController@index')->name('product.view');
    Route::get('/products/category/{id}', 'Site\ProductsByCategoryController@index')->name('products.category');
    Route::get('/about', 'Site\AboutController@index')->name('about');
    Route::get('/contact', 'Site\ContactController@index')->name('contact');
});

