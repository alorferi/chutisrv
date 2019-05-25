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

Route::get('/countries', 'API\V0\CountryController@getCountries');
Route::get('countries/{countryCode}', 'API\V0\CountryController@getCountry');
Route::get('countries/{countryCode}/areas', 'API\V0\CountryController@getAreasByCountryCode');

//Route::get('/areas', 'AreasController@getAreas');
Route::get('areas/{areaCode}', 'API\V0\AreaController@getArea');
Route::get('areas/{areaCode}/ramadans', 'API\V0\AreaController@getRamadansByAreaCode');

// Route::get('ramadans/{areaCode}', 'API\V0\RamadanController@getRamadans');
Route::get('ramadan/{id}', 'API\V0\RamadanController@getRamadan');
//Route::put('ramadan', 'API\V0\RamadanController@updateRamadan');
Route::put('ramadan/{ramadan}', 'API\V0\RamadanController@update');

Route::get("languages","API\V0\LanguageController@getLanguages");


Route::get("holidaytypes","API\V0\HolidayTypeController@getHolidayTypes");

//  
Route::get("daydate/{year}/{month}/holidays","API\V0\DayDateController@getHolidaysByYearByMonth");


Route::get("daydate/{year}/{month}/HolidaysGroupByTypes","API\V0\DayDateController@getHolidaysByYearByMonthGroupByTypes");

Route::get("daydate/{date}/HolidaysGroupByTypes","API\V0\DayDateController@getHolidaysByDateGroupByTypes");


Route::get("daydate/{year}/HolidaysGroupByTypes","API\V0\DayDateController@getHolidaysByYearGroupByTypes");

Route::get("daydate/{year}/HolidaysGroupByMonthsGroupByTypes","API\V0\DayDateController@getHolidaysByYearGroupByMonthsGroupByTypes");

Route::get("daydate/{year}/DaysGroupByMonthsGroupByFlags","API\V0\DayDateController@getDaysByYearGroupByMonthsGroupByFlags");

Route::get("daydate/{date}/HolidaysAndOtherDaysGroupByTypes","API\V0\DayDateController@getHolidaysAndOtherDaysByDateGroupByTypes");

Route::get("daydate/{year}/{holidayTypes}/HolidaysByYearByTypesGroupByMonths","API\V0\DayDateController@getHolidaysByYearByTypesGroupByMonths");

Route::get("daydate/{date}/days","API\V0\DayDateController@getDays");

Route::get("data/{year}/data","API\V0\DataController@getData");

Route::get("data/{year}/{last_updated_at}/daydates","API\V0\DataController@getDayDates");

Route::get("data/{year}/daydates","API\V0\DataController@getDayDatesByUpdatedAt");

Route::get("user/all","API\V0\UserController@index");
