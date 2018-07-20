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
Route::resource('country', 'CountryController');

//Areas route
Route::resource('area', 'AreaController');
Route::get('area/{areaCode}/fcm', 'AreaController@fcm');

//Ramadans route
Route::resource('ramadan', 'RamadanController');
Route::get('ramadan.fcm', 'RamadanController@fcm')->name('ramadan.fcm');
Route::post('ramadan.sendfcm', 'RamadanController@sendFcm')->name('ramadan.sendfcm');;

//Apps route
Route::resource("app","AppController");
Route::get('app/{id}/fcm', 'AppController@composeFcm');
Route::post('app/sendfcm/{id}', 'AppController@sendFcm')->name('app.sendfcm');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/day', 'DayController@index')->name('day');
Route::get('/daydate', 'DayDateController@index')->name('daydate');
Route::get('/dayflag', 'DayflagController@index')->name('dayflag');
Route::get('/holidaytype', 'HolidayTypeController@index')->name('holydaytype');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
