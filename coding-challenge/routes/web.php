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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('product-detail');
});
Route::get('/shop', function () {
    return view('shop-side');
});
Route::get('products/alld', 'productController@deleted');
Route::get('products/{id}/showing','productController@showing');
Route::get('products' , 'productController@index');
Route::get('products/create', 'productController@create');

Route::get('/shop', 'productController@indexForShop');
Route::resource('categories','categoryController');
Route::post('products/{id}/showing','productController@store');
Route::post('products', 'productController@store');
Route::get('products/{id}/edit', 'productController@edit');
Route::put('products/{id}', 'productController@update');
Route::delete('products/{id}', 'productController@destroy');

