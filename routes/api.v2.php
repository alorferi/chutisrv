<?php

use Illuminate\Http\Request;



Route::get("daydate/{date}/HolidaysAndOtherDaysGroupByTypes","API\V2\DayDateController@getHolidaysAndOtherDaysByDateGroupByTypes");

Route::get("daydate/{date}/OtherDaysGroupByTypesByMonthAndYear","API\V2\DayDateController@getOtherDaysByDateGroupByTypesByMonthAndYear");

Route::get("daydate/{date}/days","API\V2\DayDateController@getDays");

Route::get("data/{year}/data","API\V2\DataController@getData");

