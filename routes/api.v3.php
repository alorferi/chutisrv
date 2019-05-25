<?php

use Illuminate\Http\Request;



Route::get("daydate/{date}/HolidaysAndOtherDaysGroupByTypes","V3\DayDateController@getHolidaysAndOtherDaysByDateGroupByTypes");

Route::get("daydate/{date}/OtherDaysGroupByTypesByMonthAndYear","V3\DayDateController@getOtherDaysByDateGroupByTypesByMonthAndYear");

Route::get("daydate/{date}/days","V3\DayDateController@getDays");

Route::get("data/{year}/data","V3\DataController@getData");

//Ramadan 
Route::get('area/{areaCode}/{year}/ramadans', 'V3\AreaController@getRamadansByAreaCodeByYear');
Route::get('/country/all', 'V3\CountryController@getCountries');
Route::get('country/{countryCode}/areas', 'V3\CountryController@getAreasByCountryCode');
Route::get('countries/{countryCode}/areas', 'V3\CountryController@getAreasByCountryCode');
