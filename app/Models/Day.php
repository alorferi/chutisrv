<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
   
    public function dayDates()
    {
        return $this->hasMany('App\Models\DayDate','dayId','id');
    }

    public function dayType()
    {
        return $this->belongsTo('App\Models\DayFlag','dayFlag','flag');
    }

    public function religion()
    {
        return $this->belongsTo('App\Models\Religion','religionCode','code');
    }
}
