<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Utils\Data;
use App\Models\DayDate;
use DB;

class DayDateController extends Controller
{
    public function getHolidays($year){
        
        $daydates = DayDate::with('day')->whereYear('date',$year)->get();
       
        $data =   Data::data("OK",sizeof($daydates)." holidaytype(s) found",$daydates);   
          
        return $data;
    }


    public function getDays($date){
        
       // $daydates = DayDate::with('day')->where('date',$date)->get();
       

       $daydates = DB::table('daydates as dd')
       ->select(['dd.id', 'dd.date','d.photoUrl','dd.bannerUrl' ,'d.titleBn as title', 'd.descriptionBn as description', 'dd.holidayCode'])
       ->join('days as d', 'dd.dayid', '=', 'd.id')
       ->where('dd.date',$date)
       ->get();

        $data =   Data::data("OK",sizeof($daydates)." holidaytype(s) found",$daydates);   
          
        return $data;
    }
}
