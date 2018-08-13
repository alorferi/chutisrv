<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Utils\Data;
use App\Models\DayDate;
use App\Models\HolidayType;
use DB;

class DayDateController extends Controller
{
    public function getHolidaysByYear($year){
        
        $daydates = DayDate::with('day')->whereYear('date',$year)->get();
       
        $data =   Data::data("OK",sizeof($daydates)." holidaytype(s) found",$daydates);   
          
        return $data;
    }


    public function getHolidaysByYearByMonth($year,$month){
        
        // $daydates = DayDate::with('day')
        //             ->whereYear('date',$year)
        //             ->whereMonth('date',$month)
        //             ->where('holidayCode','!=',null)
        //             ->get();
                    $daydates = DB::table('daydates as dd')
                    ->select(['dd.id', 'dd.date','d.photoUrl','dd.bannerUrl' ,'d.titleBn as title', 'd.descriptionBn as description', 'dd.holidayCode'])
                    ->join('days as d', 'dd.dayid', '=', 'd.id')
                    ->whereYear('dd.date',$year)
                    ->whereMonth('dd.date',$month)
                    ->where('holidayCode','!=',null)
                    ->orderBy("dd.date")
                    ->get();
       
        $data =   Data::data("OK",sizeof($daydates)." holidaytype(s) found",$daydates);   
          
        return $data;
    }


    public function getHolidaysByYearGroupByMonthsGroupByTypes($year){
        
        // $daydates = DayDate::with('day')
        //             ->whereYear('date',$year)
        //             ->whereMonth('date',$month)
        //             ->where('holidayCode','!=',null)
        //             ->get();

        $holidaytypes =HolidayType::orderBy("orderFlag")->get();

        $months = [];
        for($month=1;$month<=12;$month++){
           
        
            $hds = [];
    
            foreach( $holidaytypes as $holidaytype ){
    
                $daydates = DB::table('daydates as dd')
                ->select(['dd.id', 'dd.date','d.photoUrl','dd.bannerUrl' ,'d.titleBn as title', 'd.descriptionBn as description', 'dd.holidayCode'])
                ->join('days as d', 'dd.dayid', '=', 'd.id')
                ->whereYear('dd.date',$year)
                ->whereMonth('dd.date',$month)
                ->where('holidayCode',$holidaytype->code)
                ->orderBy("dd.date")
                ->get();
    
                if(count($daydates)>0){
                    $hd = array("code"=>$holidaytype->code
                    ,"shortName"=>$holidaytype->shortName
                    ,"longName"=>$holidaytype->longName
                    ,"daydates"=>$daydates);
        
                   $hds[] = $hd;
                }
              
               
            }

            $months[]= $hds;
            

        }
          
       
        $data =   Data::data("OK",sizeof($months )." holidaytype(s) found",$months );   
          
        return $data;
    }

    public function getHolidaysByYearByMonthGroupByTypes($year,$month){
        
        $holidaytypes =HolidayTypeorderBy("orderFlag")->get();

        $hds = [];

        foreach( $holidaytypes as $holidaytype ){

            $daydates = DB::table('daydates as dd')
            ->select(['dd.id', 'dd.date','d.photoUrl','dd.bannerUrl' ,'d.titleBn as title', 'd.descriptionBn as description', 'dd.holidayCode'])
            ->join('days as d', 'dd.dayid', '=', 'd.id')
            ->whereYear('dd.date',$year)
            ->whereMonth('dd.date',$month)
            ->where('holidayCode',$holidaytype->code)
            ->orderBy("dd.date")
            ->get();

           $hd = array("code"=>$holidaytype->code
            ,"shortName"=>$holidaytype->shortName
            ,"longName"=>$holidaytype->longName
            ,"daydates"=>$daydates);

           $hds[] = $hd;
           
        }

       
        $data =   Data::data("OK",sizeof($hds)." holidaytype(s) found",$hds );   
          
        return $data;
    }


    public function getHolidaysByYearGroupByTypes($year){


        $holidaytypes =HolidayType::all();

        $hds = [];

        foreach( $holidaytypes as $holidaytype ){

            $daydates = DB::table('daydates as dd')
            ->select(['dd.id', 'dd.date','d.photoUrl','dd.bannerUrl' ,'d.titleBn as title', 'd.descriptionBn as description', 'dd.holidayCode'])
            ->join('days as d', 'dd.dayid', '=', 'd.id')
            ->whereYear('dd.date',$year)
            ->where('holidayCode',$holidaytype->code)
            ->orderBy("dd.date")
            ->get();

           $hd = array("code"=>$holidaytype->code
            ,"shortName"=>$holidaytype->shortName
            ,"longName"=>$holidaytype->longName
            ,"daydates"=>$daydates);

           $hds[] = $hd;
           
        }

       
        $data =   Data::data("OK",sizeof($hds)." holidaytype(s) found",$hds );   
       
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
