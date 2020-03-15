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

Route::get('/', fn() => view('home'));

Route::get('/dbtest', 'DBTestController@index');

Route::get('/cachetest', 'CacheTestController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/line-chart', 'line-chart');

Route::view('/pie-chart', 'pie-chart');

Route::view('/samples/app/1', 'samples/app1');