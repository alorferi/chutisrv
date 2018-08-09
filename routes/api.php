<?php

use Illuminate\Http\Request;
use App\Models\Country;
use Conrollers\Apis\LanguageController;
use Conrollers\Apis\CountriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/countries', 'API\CountryController@getCountries');
Route::get('countries/{countryCode}', 'API\CountryController@getCountry');
Route::get('countries/{countryCode}/areas', 'API\CountryController@getAreasByCountryCode');

//Route::get('/areas', 'AreasController@getAreas');
Route::get('/areas/{countryCode}', 'API\AreaController@getAreasByCountryCode');
Route::get('areas/{areaCode}', 'API\AreaController@getArea');
Route::get('areas/{areaCode}/ramadans', 'API\AreaController@getRamadansByAreaCode');

Route::get('ramadans/{areaCode}', 'API\RamadanController@getRamadans');
Route::get('ramadan/{id}', 'API\RamadanController@getRamadan');
//Route::put('ramadan', 'API\RamadanController@updateRamadan');
Route::put('ramadan/{ramadan}', 'API\RamadanController@update');

Route::get("languages","API\LanguageController@getLanguages");


Route::get("holidaytypes","API\HolidayTypeController@getHolidayTypes");

Route::get("daydate/{year}/holidays","API\DayDateController@getHolidays");

Route::get("daydate/{date}/todays","API\DayDateController@getDays");