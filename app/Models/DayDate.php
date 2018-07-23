<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DayDate extends Model
{
    //
    protected $table = 'daydates';

    public function day()
    {
        return $this->belongsTo('App\Models\Day','dayId','id');
    }


    public function holidayType()
    {
        return $this->belongsTo('App\Models\HolidayType','holidayCode','code');
    }

}
