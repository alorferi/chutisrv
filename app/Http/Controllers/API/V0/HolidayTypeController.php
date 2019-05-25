<?php

namespace App\Http\Controllers\API\V0;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HolidayType;
use App\Utils\Data;


class HolidayTypeController extends Controller
{
    public function getHolidayTypes(){
        $holidaytypes =HolidayType::with("dayDates")->get();
           
        if(sizeof($holidaytypes)==0){
          $data =   Data::data("FAILED","No holidaytype(s) found",$holidaytypes);   
      }else{
          $data =   Data::data("OK",sizeof($holidaytypes)." holidaytype(s) found",$holidaytypes);   
          }
          return $data;
    }
}
