<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DayDate extends Model
{
    use SoftDeletes;
    protected $table = 'daydates';

    public function day()
    {
        return $this->belongsTo('App\Models\Day','dayId','id');
    }


    public function holidayType()
    {
        return $this->belongsTo('App\Models\HolidayType','holidayCode','code');
    }


    public function dayDateBannersPath(){    
        return  storage_path("app/public/images/daydate_banners");
      }

      public  function dayDateBannerUrl($banner_name){  
        return  "/images/$banner_name/daydate_banner";
         }

         public function  dayDateBannerNameFromPhoto($dayDate,$photo){
          return "dd_bnr_$dayDate->id.".$photo->getClientOriginalExtension();
        }

}
