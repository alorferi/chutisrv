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

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

    
        Route::get('/', 'AdminController@index')->name('admin');
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

      

        Route::resource('/religion', 'ReligionController');
        Route::resource('/day', 'DayController');
        Route::get('/daydate/{year}/create', 'DayDateController@create');
        Route::get('/daydate/{year}/holidays', 'DayDateController@showHolidays');
        Route::get('/daydate/{year}/generate-dates', 'DayDateController@generateDates');
        Route::resource('/daydate', 'DayDateController');
        Route::resource('/dayflag', 'DayFlagController');
        Route::resource('/holidaytype', 'HolidayTypeController');
   
});




Route::get('/home', 'HomeController@index')->name('home');


Route::get('images/{filename}/day_photo', function ($filename)
{
    $path = storage_path('app/public/images/day_photos/'. $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $img = Image::make($path)->resize(512, 512);
    return $img->response('png');
});


Route::get('images/{filename}/daydate_banner', function ($filename)
{
    $path = storage_path('app/public/images/daydate_banners/'. $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $img = Image::make($path)->resize(512, 512);
    return $img->response('png');
});
