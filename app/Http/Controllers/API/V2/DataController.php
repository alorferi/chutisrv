<?php

namespace App\Http\Controllers\API\V2;

use App\Helpers\ActivityLogHelper;
use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\DayDate;
use App\Models\Day;
use App\Utils\Data;



class DataController extends Controller
{
    function getData($year){
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);
        $headers = apache_request_headers();
        $days_updated_at = null; 
        $daydates_updated_at =  null;
       
        if(isset($headers['days_updated_at'])){
            $days_updated_at =  $headers['days_updated_at'];
        }else{
            return Data::jsonResponse("FAILED","Invalid date params.",null);
        }

        if( isset($headers['daydates_updated_at'])){
            $daydates_updated_at =  $headers['daydates_updated_at'];
        }else{
            return Data::jsonResponse("FAILED","Invalid date params.",null);
        }

        // $arr = ['days_updated_at' => $daydates_updated_at ,'daydates_updated_at' => $daydates_updated_at];
        //   return Data::jsonResponse("FAILED","Invalid date params.", $arr);
        
        $daydates = $this->getDayDates($year,$daydates_updated_at);

        $days = $this->getDays($days_updated_at);

      
        $array= array("dayDates"=> $daydates,"days"=>$days);
        
        $message = "Days: ".count($days).", DayDates: ".count($daydates);
           
        return Data::jsonResponse("OK",$message,$array); 
    }

    function getDays($last_updated_at){
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);
        $days = Day::whereRaw('dayFlag & 1 = 1')
        ->where('updated_at',">",$last_updated_at)
        ->get();

        return $days;
    }

    function getDayDates($year, $last_updated_at){
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);
        $daydates = DayDate::whereYear('date',$year)
       // ->whereNotNull('holidayCode')
        ->where('updated_at',">",$last_updated_at);
        //dd($daydates->toSql());
        $daydates = $daydates->get();
        return $daydates;
    }

     

}
