<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DayDate;
use App\Models\Day;
use App\Utils\Data;



class DataController extends Controller
{
    function getData($year){

        $headers = apache_request_headers();
        $days_updated_at = null; 
        $daydates_updated_at =  null;
       
        if(isset($headers['days_updated_at'])){
            $days_updated_at =$headers['days_updated_at'];
        }else{
            $days_updated_at = "2018-01-01"; 
        }

        if( isset($headers['daydates_updated_at'])){
            $daydates_updated_at =$headers['daydates_updated_at'];
        }else{
            $daydates_updated_at =  "2018-01-01";
        }

        $daydates = DayDate::whereYear('date',$year)
        ->whereNotNull('holidayCode')
        ->where('updated_at',">",$daydates_updated_at)
        ->get();
        
        $days = Day::whereRaw('dayFlag & 1 = 1')
                    ->where('updated_at',">",$days_updated_at)
                    ->get();

      
        $array= array("dayDates"=> $daydates,"days"=>$days);
        
        $message = "Days: ".count($days).", DayDates: ".count($daydates);
        
        $data =   Data::data("OK",$message,$array);   

        return $data;
    }
}