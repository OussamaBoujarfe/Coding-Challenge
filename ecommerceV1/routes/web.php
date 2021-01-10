<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login/custom',[
    'uses' => 'LoginController@login',
    'as' => 'login.custom'
]);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/shopping-cart/',[
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);
Route::get('/shopping-cart/{id}', [
    'uses' => 'ProductController@delete',
    'as' => 'product.destroy'
]);

Route::get('/add-to-cart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'

]);
Route::get('/add-to-cartt/{id}',[
    'uses' => 'ProductController@getAddToCart1',
    'as' => 'product.addToCart1'

]);

Route::get('/',[
    'uses' => 'ProductController@getCart1',
    'as' => 'product.shoppingCart'

]);


Route::get('/shop', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/', [
    'uses' => 'ProductController@getIndex1',
    'as' => 'welcome'
]);

Route::group(['middleware' => 'auth'], function(){

    Route::get('/home', function(){
        return view('home');
                                  })->name('home');

    Route::get('/dashboard', function(){
        return view('dashboard');
                                       })->name('dashboard');

                                                     });



                                                     Route::get('stocks/alld', 'StockController@deleted');
                                                     Route::get('stocks/{id}/show','StockController@show');
                                                     Route::get('stocks', 'StockController@index')->name('stock.index');
                                                     Route::get('stocks/create', 'StockController@create')->name('stock.create');

                                                     Route::post('stocks/{id}/show','StockController@store');
                                                     Route::post('stocks', 'StockController@store');
                                                     Route::get('stocks/{id}/edit', 'StockController@edit');
                                                     Route::put('stocks/{id}', 'StockController@update');
                                                     Route::delete('stocks/{id}', 'StockController@destroy');

/*
Route::get('/shop/category/{type}', [
    'uses' => 'ProductController@getSameType',
    'as' => 'product.category'
]);*/
