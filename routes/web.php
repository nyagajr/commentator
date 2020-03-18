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

Route::get('hello', 'commentController@index');
Route::get('/', 'commentController@comment');
Route::post('/', 'commentController@store');


Route::get('/comment', 'newController@index');
Route::get('/comment', 'newController@comment');
