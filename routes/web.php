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
Route::resource("apps","AppController");
Route::get('apps/{id}/fcm', 'AppController@composeFcm');

Route::post('apps/sendfcm/{id}', 'AppController@sendFcm')->name('apps.sendfcm');


Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/days', 'DayController@index')->name('days');
Route::get('/daydates', 'DayDateController@index')->name('daydates');
Route::get('/dayflags', 'DayflagController@index')->name('dayflags');
Route::get('/holidaytypes', 'HolidayTypeController@index')->name('holydaytypes');
