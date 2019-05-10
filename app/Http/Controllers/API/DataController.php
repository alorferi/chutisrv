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
            $days_updated_at = "2015-01-01"; 
        }

        if( isset($headers['daydates_updated_at'])){
            $daydates_updated_at =$headers['daydates_updated_at'];
        }else{
            $daydates_updated_at =  "2015-01-01";
        }

        if( isset($headers['auth_pub_key'])){
            $auth_pub_key =$headers['auth_pub_key'];
            if($auth_pub_key == null || $auth_pub_key== ""){   
                return Data::jsonResponse("FAILED","Invalid credential.",null); ; 
            }
        }else{
            return Data::jsonResponse("FAILED","Illegal attempt to access.",null);  ; 
        }

        
        $daydates = $this->getDayDates($year,$daydates_updated_at);

        $days = $this->getDays($days_updated_at);

      
        $array= array("dayDates"=> $daydates,"days"=>$days);
        
        $message = "Days: ".count($days).", DayDates: ".count($daydates);
           
        return Data::jsonResponse("OK",$message,$array); 
    }

    function getDays($last_updated_at){

        $days = Day::whereRaw('dayFlag & 1 = 1')
        ->where('updated_at',">",$last_updated_at)
        ->get();

        return $days;
    }

    function getDayDates($year, $last_updated_at){
       
        $daydates = DayDate::whereYear('date',$year)
        ->whereNotNull('holidayCode')
        ->where('updated_at',">",$last_updated_at);

        $daydates = $daydates->get();
        return $daydates;
    }

    function getDayDatesByUpdatedAt($year){
       
        $headers = apache_request_headers();

        //return  $headers;

        $last_updated_at =  null;
       
        if(isset($headers['last_updated_at'])){
            $last_updated_at =$headers['last_updated_at'];
        }else{
            $last_updated_at = "2015-01-01"; 
        }

        $daydates = $this->getDayDates($year, $last_updated_at);

        $message = ", DayDates: ".count($daydates);
        
        $response =   Data::jsonResponse("OK",$message,$daydates);   

        return $response;

    }

}
