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

    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_code','code');
    }

    public function dayPhotosPath(){    
        return  storage_path("app/public/images/day_photos");
      }

      public  function dayPhotoUrl($photo_name){  
        return  "/images/$photo_name/day_photo";
         }

      
         public function  dayPhotoNameFromPhoto($day,$photo){
          return "day_pto_$day->id.".$photo->getClientOriginalExtension();
        }
}
