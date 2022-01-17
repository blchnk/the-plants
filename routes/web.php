<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainPageController@index')->name('index');
Route::get('/categories/{subcategory}', 'SubcategoryPageController@show');
Route::get('/products/{product}', 'ProductPageController@show');

// Admin-Panel
Route::get('/admin', 'AdminController@index') -> name('admin.index');
Route::get('/admin/products/create', 'ProductPageController@create')->name('product.create');
Route::post('/admin/products', 'ProductPageController@store')->name('product.store');
Route::get('/admin/products', 'ProductPageController@index')->name('product.index');
Route::get('/admin/products/{product}/edit', 'ProductPageController@edit') -> name('product.edit');
Route::patch('/admin/products/{product}', 'ProductPageController@update') -> name('product.update');
Route::delete('/admin/products/{product}', 'ProductPageController@destroy') -> name('product.destroy');

