<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Utils\Data;
use App\Models\DayDate;
use App\Models\DayFlag;
use App\Models\HolidayType;
use DB;

class DayDateController extends Controller
{
    private $selectClause =  ['dd.id'
    , 'dd.date'
    ,'d.photoUrl'
    ,'dd.bannerUrl' 
    ,'d.titleBn as title'
    , 'd.descriptionBn as description'
    , 'dd.holidayCode'];

    public function __construct()
    {
       
    }

    public function getHolidaysByYearByMonth($year,$month){
        
                    $daydates = DB::table('daydates as dd')
                    ->select($this->selectClause)
                    ->join('days as d', 'dd.dayid', '=', 'd.id')
                    ->whereYear('dd.date',$year)
                    ->whereMonth('dd.date',$month)
                    ->where('holidayCode','!=',null)
                    ->orderBy("dd.date")
                    ->get();
       
        $data =   Data::data("OK",sizeof($daydates)." holidaytype(s) found",$daydates);   
          
        return $data;
    }


    public function getDaysByYearGroupByMonthsGroupByFlags($year){

        $dayFlags =DayFlag::where('flag','!=','1')->orderBy("display_order")->get();


       
        $months = [];
        for($month=1;$month<=12;$month++){
           
        
            $dds = [];
    
            foreach( $dayFlags as $dayFlag ){
    
                $daydates = DB::table('daydates as dd')
                ->select($this->selectClause)
                ->join('days as d', 'dd.dayid', '=', 'd.id')
                ->whereYear('dd.date',$year)
                ->whereMonth('dd.date',$month)
                ->where('d.dayFlag','&',$dayFlag->flag)
                ->orderBy("dd.date")
                ->get();
    
                if(count($daydates)>0){
                    $hd = array("flag"=>$dayFlag->flag
                    ,"name"=>$dayFlag->name_bn
                    ,"daydates"=>$daydates);
        
                   $dds[] = $hd;
                }
              
               
            }

            $months[]= $dds;
            

        }
          
       
        $data =   Data::data("OK",sizeof($months )." month(s) found",$months );   
          
        return $data;

        }    

    public function getHolidaysByYearGroupByMonthsGroupByTypes($year){
        
        $holidaytypes =HolidayType::orderBy("display_order")->get();

        $months = [];
        for($month=1;$month<=12;$month++){
           
        
            $hds = [];
    
            foreach( $holidaytypes as $holidaytype ){
    
                $holidays = DB::table('daydates as dd')
                ->select($this->selectClause)
                ->join('days as d', 'dd.dayid', '=', 'd.id')
                ->whereYear('dd.date',$year)
                ->whereMonth('dd.date',$month)
                ->where('holidayCode',$holidaytype->code)
                ->orderBy("dd.date")
                ->get();
    
                if(count($holidays)>0){
                    $hd = array("code"=>$holidaytype->code
                    ,"shortName"=>$holidaytype->shortName
                    ,"longName"=>$holidaytype->longName
                    ,"holidays"=>$holidays);
        
                   $hds[] = $hd;
                }
              
               
            }

            $months[]= $hds;
            

        }
          
       
        $data =   Data::data("OK",sizeof($months )." holidaytype(s) found",$months );   
          
        return $data;
    }

    public function getHolidaysByYearByTypesGroupByMonths($year,$holidayCodes){


       $holidayCodes= explode(",",$holidayCodes);
        
        $months = [];
        for($month=1;$month<=12;$month++){
         
                $daydates = DB::table('daydates as dd')
                ->select($this->selectClause)
                ->join('days as d', 'dd.dayid', '=', 'd.id')
                ->whereYear('dd.date',$year)
                ->whereMonth('dd.date',$month)
                ->whereIn('holidayCode',$holidayCodes)
                ->orderBy("dd.date")
                ->get();

            $months[]= $daydates;
                          
        }
          
    
        $data =   Data::data("OK",sizeof($months )." holidaytype(s) found",$months );   
       
        return $data;
    }

    public function getHolidaysByYearByMonthGroupByTypes($year,$month){
        
        $holidaytypes =HolidayType::orderBy("orderFlag")->get();

        $hds = [];

        foreach( $holidaytypes as $holidaytype ){

            $daydates = DB::table('daydates as dd')
            ->select($this->selectClause)
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
                ,"holidays"=>$daydates);
    
               $hds[] = $hd;
            }
           
        }

       
        $data =   Data::data("OK",sizeof($hds)." holidaytype(s) found",$hds );   
          
        return $data;
    }


    // public function getHolidaysByYearGroupByMonthsGroupByTypes($year){
        
    //     $holidaytypes =HolidayType::orderBy("orderFlag")->get();

    //     $holidaystypeGroupByMonth = [];

    //     for($month=1;$month<=12;$month++){

    //         $holidays = [];

    //         foreach( $holidaytypes as $holidaytype ){
    
    //             $daydates = DB::table('daydates as dd')
    //             ->select($this->selectClause)
    //             ->join('days as d', 'dd.dayid', '=', 'd.id')
    //             ->whereYear('dd.date',$year)
    //             ->whereMonth('dd.date',$month)
    //             ->where('holidayCode',$holidaytype->code)
    //             ->orderBy("dd.date")
    //             ->get();
    
    //             if(count($daydates)>0){
    //                 $holiday = array("code"=>$holidaytype->code
    //                 ,"shortName"=>$holidaytype->shortName
    //                 ,"longName"=>$holidaytype->longName
    //                 ,"holidays"=>$daydates);
        
    //                $holidays[] = $holiday;
    //             }
               
    //         }

    //         $holidaystypeGroupByMonth = $holidays;
    //     }
    //     $data =   Data::data("OK",sizeof($holidaystypeGroupByMonth)." holidaytype(s) found",$hds );             
    //     return $data;
    // }
    
    public function getHolidaysByYearGroupByTypes($year){


        $holidaytypes =HolidayType::all();

        $hds = [];

        foreach( $holidaytypes as $holidaytype ){

            $daydates = DB::table('daydates as dd')
            ->select($this->selectClause)
            ->join('days as d', 'dd.dayid', '=', 'd.id')
            ->whereYear('dd.date',$year)
            ->where('holidayCode',$holidaytype->code)
            ->orderBy("dd.date")
            ->get();

           $hd = array("code"=>$holidaytype->code
            ,"shortName"=>$holidaytype->shortName
            ,"longName"=>$holidaytype->longName
            ,"holidays"=>$daydates);

           $hds[] = $hd;
           
        }

       
        $data =   Data::data("OK",sizeof($hds)." holidaytype(s) found",$hds );   
       
        return $data;

         }

    public function getDays($date){
        
       // $daydates = DayDate::with('day')->where('date',$date)->get();
       

       $daydates = DB::table('daydates as dd')
       ->select($this->selectClause)
       ->join('days as d', 'dd.dayid', '=', 'd.id')
       ->where('dd.date',$date)
       ->get();

        $data =   Data::data("OK",sizeof($daydates)." holidaytype(s) found",$daydates);   
          
        return $data;
    }
}
