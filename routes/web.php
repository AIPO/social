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
});

Auth::routes();

Route::group(['middelware' => 'auth'], function () {
    Route::get('/profile/{id}', 'ProfilesController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
