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



Route::resource('countries', 'CountriesController');
Route::resource('areas', 'AreasController');
Route::get('areas/{code}/fcm', 'AreasController@fcm');
Route::resource('ramadans', 'RamadansController');
Route::resource("apps","AppsController");
Route::get('apps/{id}/fcm', 'AppsController@composeFcm');

Route::post('apps/sendfcm/{id}', 'AppsController@sendFcm')->name('apps.sendfcm');


Auth::routes();