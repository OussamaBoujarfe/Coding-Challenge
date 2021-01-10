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
Route::get('stocks/alld', 'productController@deleted');
Route::get('stocks/{id}/showing','productController@showing');
Route::get('stocks', 'productController@index');
Route::get('stocks/create', 'productController@create');


Route::post('stocks/{id}/showing','productController@store');
Route::post('stocks', 'productController@store');
Route::get('stocks/{id}/edit', 'productController@edit');
Route::put('stocks/{id}', 'productController@update');
Route::delete('stocks/{id}', 'productController@destroy');
