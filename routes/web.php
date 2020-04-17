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

Route::resource('products', 'ProductController');

// Route::get('products', 'ProductController@index');
// Route::post('products', 'ProductController@store');
// Route::get('products/create', 'ProductController@create');
// Route::get('products/{id_product}', 'ProductController@show');
// Route::put('products/{id_product}', 'ProductController@update');
// Route::delete('products/{id_product}', 'ProductController@destroy');
// Route::edit('products/{id_product}', 'ProductController@edit');