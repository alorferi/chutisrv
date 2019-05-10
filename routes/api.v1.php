<?php

use Illuminate\Http\Request;
use App\Models\Country;
use Conrollers\Apis\LanguageController;
use Conrollers\Apis\CountriesController;



Route::get("daydate/{date}/HolidaysAndOtherDaysGroupByTypes","API\V1\DayDateController@getHolidaysAndOtherDaysByDateGroupByTypes");

Route::get("daydate/{date}/HolidaysAndOtherDaysGroupByTypesByMonthAndYear","API\V1\DayDateController@getHolidaysAndOtherDaysByDateGroupByTypesByMonthAndYear");

Route::get("daydate/{date}/days","API\V1\DayDateController@getDays");

Route::get("data/{year}/data","API\V1\DataController@getData");

