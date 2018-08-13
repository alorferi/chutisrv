<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HolidayType extends Model
{
    //
    protected $table = 'holidaytypes';

    public function dayDates()
    {
        return $this->hasMany('App\Models\DayDate','holidayCode');
    }

}
