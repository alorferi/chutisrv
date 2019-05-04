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
            if($auth_pub_key == null or $auth_pub_key== ""){
                $data =   Data::data("FAILED","Invalid credential.",null);  
                return $data; 
            }
        }else{
            $data =   Data::data("FAILED","Illegal attempt to access.",null);  
            return $data; 
        }

        $daydates = DayDate::whereYear('date',$year)
        ->whereNotNull('holidayCode')
        ->where('updated_at',">",$daydates_updated_at);
      
        // $foo_sql = $daydates->toSql();
        // dd($foo_sql);

        $daydates = $daydates->get();

       


        $days = Day::whereRaw('dayFlag & 1 = 1')
                    ->where('updated_at',">",$days_updated_at)
                    ->get();

      
        $array= array("dayDates"=> $daydates,"days"=>$days);
        
        $message = "Days: ".count($days).", DayDates: ".count($daydates);
        
        $data =   Data::data("OK",$message,$array);   

        return response()->json($data);
    }
}
