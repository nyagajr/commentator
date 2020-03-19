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
Route::get('/waa', 'commentController@comment');

Route::get('/','AuthorController@index');
Route::get('authors/create','AuthorController@create');
Route::post('/','AuthorController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
