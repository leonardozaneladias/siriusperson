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
    Route::get('/quotation/keep/', 'Site\QuotationKeepController@index')->name('quotation.keep');
    Route::get('/quotation/', 'Site\QuotationController@index')->name('quotation');
    Route::post('/quotation/', 'Site\QuotationKeepController@store')->name('quotation.request');
    Route::post('/quotation/conclusion', 'Site\QuotationKeepController@conclusion')->name('quotation.conclusion');
    Route::get('/product/{id}', 'Site\ProductViewController@index')->name('product.view');
    Route::get('/products/category/{id}', 'Site\ProductsByCategoryController@index')->name('products.category');
    Route::get('/about', 'Site\AboutController@index')->name('about');
    Route::get('/contact', 'Site\ContactController@index')->name('contact');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/dashboard', 'Admin\IndexController@index')->name('dashboard');

    Route::get('/categories', 'Admin\CategoriesController@index')->name('categories');
    Route::get('/categories/create', 'Admin\CategoriesController@create')->name('categories.create');
    Route::post('/categories/create', 'Admin\CategoriesController@store')->name('categories.store');

    Route::get('/products', 'Admin\ProductsController@index')->name('products');

    Route::get('/quotations', 'Admin\QuotationsController@index')->name('quotations');
});

