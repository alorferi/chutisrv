<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Day extends Model
{
    use SoftDeletes;
    public function dayDates()
    {
        return $this->hasMany('App\Models\DayDate','dayId','id');
    }

    public function religion()
    {
        return $this->belongsTo('App\Models\Religion','religionCode','code');
    }

    public function holidayType()
    {
        return $this->belongsTo('App\Models\HolidayType','holidayCode','code');
    }
}
