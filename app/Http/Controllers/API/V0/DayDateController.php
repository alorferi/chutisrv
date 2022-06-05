<?php

namespace App\Http\Controllers\API\V0;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
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
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);
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
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);
        $holidaytypes =HolidayType::orderBy("display_order")->get();


        $dayFlags =DayFlag::where('flag','!=','1')->orderBy("display_order")->get();


       
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
           
        
            $ods = [];
    
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
                    $df = array("flag"=>$dayFlag->flag
                    ,"name"=>$dayFlag->name_bn
                    ,"daydates"=>$daydates);
        
                   $ods[] = $df;
                }
              
               
            }

            $months[]= array('hds'=>$hds,"ods"=> $ods);
            

        }
        $data =   Data::data("OK",sizeof($months )." month(s) found",$months );   
          
        return $data;

        }    

        function getHolidaysAndOtherDaysByDateGroupByTypes($date){

            // $date = $this->oct2Date($date);

            $holidaytypes =HolidayType::orderBy("display_order")->get();

            $dayFlags =DayFlag::where('flag','!=','1')->orderBy("display_order")->get();
    
            

                $hds = [];
        
                foreach( $holidaytypes as $holidaytype ){
        
                    $holidays = DB::table('daydates as dd')
                    ->select($this->selectClause)
                    ->join('days as d', 'dd.dayid', '=', 'd.id')
                    ->where('dd.date',$date)
                    ->where('dd.holidayCode',$holidaytype->code)
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
               
            
                $ods = [];
        
                foreach( $dayFlags as $dayFlag ){
        
                    $daydates = DB::table('daydates as dd')
                    ->select($this->selectClause)
                    ->join('days as d', 'dd.dayid', '=', 'd.id')
                    ->where('dd.date',$date)
                    ->where('d.dayFlag','&',$dayFlag->flag)
                    ->orderBy("dd.date")
                    ->get();
        
                    if(count($daydates)>0){
                        $df = array("flag"=>$dayFlag->flag
                        ,"name"=>$dayFlag->name_bn
                        ,"daydates"=>$daydates);
            
                       $ods[] = $df;
                    }
                  
                   
                }
    
                $dds = array('hds'=>$hds,"ods"=> $ods);
                
    
            
            $data =   Data::data("OK","Fetched",$dds);   
              
            return $data;



        }

        function oct2Date($oct){

            $dec = octdec($oct);
        
            $ymd = \DateTime::createFromFormat('11Y23m58d13', "$dec")->format('Y-m-d');
        
            return $ymd;
        
        }

    public function getHolidaysByYearGroupByMonthsGroupByTypes($year){
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);
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
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);

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
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);
        $holidaytypes =HolidayType::orderBy("display_order")->get();

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


    public function getHolidaysByDateGroupByTypes($date){
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);
        $holidaytypes =HolidayType::orderBy("display_order")->get();

        $hds = [];

        foreach( $holidaytypes as $holidaytype ){

            $daydates = DB::table('daydates as dd')
            ->select($this->selectClause)
            ->join('days as d', 'dd.dayid', '=', 'd.id')
            ->where('dd.date',$date)
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
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);

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
        ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);
        // $date = $this->oct2Date($date);
        
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
