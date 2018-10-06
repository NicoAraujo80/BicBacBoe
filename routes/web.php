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

Route::get('/', 'pageController@getIndex')->name('index');

Auth::routes();

Route::get('game/store', 'GameController@store')->name('game.store');
Route::resource('game', 'GameController')->only('index', 'create', 'show');

Route::get('boe/update/{game}/{boe}', 'BoeController@update')->name('boe.update');
Route::resource('boe', 'BoeController')->only('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('random', 'pageController@random')->name('random');
