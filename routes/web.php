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

Route::get('/', 'StaticPageControl@home');
Route::get('/help', 'StaticPageControl@help');
Route::get('/about', 'StaticPageControl@about');
/** @noinspection PhpUndefinedMethodInspection */
Auth::routes();
Route::get('signup','UserControl@create');
Route::get('/home', 'HomeController@index');

