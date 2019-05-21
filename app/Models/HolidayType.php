<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HolidayType extends Model
{
    use SoftDeletes;
    protected $table = 'holidaytypes';

    public function dayDates()
    {
        return $this->hasMany('App\Models\DayDate','holidayCode');
    }

}
