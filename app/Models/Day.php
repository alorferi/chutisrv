<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
   
    public function dayDates()
    {
        return $this->hasMany('App\Models\DayDate','dayId','id');
    }
}
