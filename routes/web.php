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



Route::resource('countries', 'CountryController');
Route::resource('areas', 'AreaController');
Route::get('areas/{code}/fcm', 'AreaController@fcm');
Route::resource('ramadans', 'RamadanController');