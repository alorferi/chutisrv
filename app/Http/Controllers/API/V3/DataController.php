<?php

namespace App\Http\Controllers\API\V3;

use App\Http\Controllers\Controller;
use App\Models\DayDate;
use App\Models\Day;
use App\Utils\Data;
use App\Utils\LogWrite;
use Illuminate\Http\Request;

class DataController extends Controller
{
    function getData(Request $request){

        $year = $request->year;

        LogWrite::info("Request",__METHOD__,__LINE__, json_encode($request->all()));

        $days_updated_at = null; 
        $daydates_updated_at =  null;
        
        $days_updated_at = $request->header('days_updated_at');

        if( !$days_updated_at ){
            $days_updated_at = $request->days_updated_at;
        }

        $daydates_updated_at = $request->header('daydates_updated_at');


        if( !$daydates_updated_at ){
            $daydates_updated_at = $request->daydates_updated_at;
        }

        $auth_pub_key = $request->header('auth_pub_key');

        if( !$auth_pub_key ){
            $auth_pub_key = $request->auth_pub_key;
        }


        LogWrite::info("days_updated_at",__METHOD__,__LINE__, json_encode($days_updated_at));
        
        if(!$days_updated_at){
            return Data::jsonResponse("FAILED","Invalid date params:days_updated_at.",$days_updated_at);
        }

        if(!$daydates_updated_at ){
            return Data::jsonResponse("FAILED","Invalid date params:daydates_updated_at.",$daydates_updated_at);
        }

        // $arr = ['days_updated_at' => $daydates_updated_at ,'daydates_updated_at' => $daydates_updated_at];
        //   return Data::jsonResponse("FAILED","Invalid date params.", $arr);

        if( $auth_pub_key){
            if($auth_pub_key == null || $auth_pub_key== ""){   
                return Data::jsonResponse("FAILED","Invalid credential.",null);
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
       // ->whereNotNull('holidayCode')
        ->where('updated_at',">",$last_updated_at);
        //dd($daydates->toSql());
        $daydates = $daydates->get();
        return $daydates;
    }

     

}
