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
    return view('layouts.main');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();
// Side Bar
Route::get('/produk', 'ProductController@index');
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/{customer}', 'CustomerController@show');
Route::get('/buy', 'BuyController@index');



Route::get('/home', 'HomeController@index')->name('home');

