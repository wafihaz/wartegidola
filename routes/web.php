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

Route::get('/index', 'App\Http\Controllers\WartegController@index')->name('index');
Route::get('/add', 'App\Http\Controllers\WartegController@create')->name('create');
Route::post('/store', 'App\Http\Controllers\WartegController@store')->name('store');
Route::get('/edit{id}', 'App\Http\Controllers\WartegController@edit')->name('edit');
Route::post('/update{id}', 'App\Http\Controllers\WartegController@update')->name('update');
Route::delete('/delete{id}', 'App\Http\Controllers\WartegController@destroy')->name('destroy');
Route::get('/', 'App\Http\Controllers\WartegController@home')->name('home');
Route::get('/menu', 'App\Http\Controllers\WartegController@menu')->name('menu');