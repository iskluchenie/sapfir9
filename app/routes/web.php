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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('/entrances', 'EntranceController');

Route::resource('/towns', 'TownController');

Route::resource('/streets', 'StreetController');

Route::resource('/houses', 'HouseController');
