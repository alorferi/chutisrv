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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


//Countries route
Route::resource('countries', 'CountryController');

//Areas route
Route::resource('areas', 'AreaController');
Route::get('areas/{areaCode}/fcm', 'AreaController@fcm');

//Ramadans route
Route::resource('ramadans', 'RamadanController');
Route::get('ramadans.fcm', 'RamadanController@fcm')->name('ramadans.fcm');
Route::post('ramadans.sendfcm', 'RamadanController@sendFcm')->name('ramadans.sendfcm');;

//Apps route
Route::resource("apps","AppController");
Route::get('apps/{id}/fcm', 'AppController@composeFcm');
Route::post('apps/sendfcm/{id}', 'AppController@sendFcm')->name('apps.sendfcm');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/days', 'DayController@index')->name('days');
Route::get('/daydates', 'DayDateController@index')->name('daydates');
Route::get('/dayflags', 'DayflagController@index')->name('dayflags');
Route::get('/holidaytypes', 'HolidayTypeController@index')->name('holydaytypes');
