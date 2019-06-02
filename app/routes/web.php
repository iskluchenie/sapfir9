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
    return view('pages.home');
})->name('home');

Route::group(['prefix' => 'users', 'as' => 'users.'],function(){
    Route::get('/', 'UsersController@index')->name('index');
    Route::get('/{user}', 'UsersController@show')->name('show')->where('user', '\d+');
});
