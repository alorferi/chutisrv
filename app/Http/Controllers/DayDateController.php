<?php

namespace App\Http\Controllers;

use App\Models\DayDate;
use App\Models\HolidayType;
use App\Models\Day;
use Illuminate\Http\Request;
use App\Utils\Dir;
use Session;
use Redirect;
use Validator;
use DateTime;
use Auth;
use DB;

class DayDateController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year=0)
    {
        if($year==0){
            $year = date("Y");
        }
        return $this->showHolidays($year);
    }

    public function  showHolidays($year){

        $daydates = DayDate::with('day')
                    ->whereYear('date',$year)
                   //->where('holidayCode','!=',null)
                    ->orderBy("date")
                    ->get();

                    $backYear = $year - 1; 
                    $currentYear = $year;
                    $nextYear = $year + 1; 

                    Session::flash('message', count( $daydates ). " dates found");

        return view('daydate.index')->with(compact('daydates', 'backYear', 'currentYear', 'nextYear'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($year =0)
    {
        if($year==0){
            $year = date("Y");
        }
    
          $dayIds = DayDate::whereYear('date',$year)->get(['dayId']);

          //$days = Day::select(DB::raw("CONCAT(IFNULL(days.date,'NO DATE'),': ',days.titleBn) AS title"),'days.id as dayId')
          $days = Day::where("isFixedDate",false)
          ->whereNotIn('id',$dayIds)
          ->orWhere('isMultiDate',true)
          ->get(['id','titleBn as title'])
         ->pluck('title','id')
         ->prepend('Please Select...',0);

       //  return $days;

        $holidayTypes = HolidayType::pluck('longName', 'code');
        $holidayTypes->prepend('Please Select...',null);

        $backYear = $year - 1; 
        $currentYear = $year;
        $nextYear = $year + 1; 

        $date= "$year-01-01";

        return view("daydate.create")->with(compact('days','holidayTypes','backYear','currentYear','nextYear','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'date'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to("/admin/daydate/create")
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {

            $daydate = new DayDate;

            $daydate->date = $request->date;
            $daydate->dayId =$request->dayId;
    
            $daydate->holidayCode = $request->holidayCode=="0"?null:$request->holidayCode;
          //  dd($daydate);
           $daydate->save();

           // dd($result);
           
            if ( $request->hasFile('banner')) {
                $banner = $request->file('banner');
                if($daydate->bannerFileName==null){
                    $daydate->bannerFileName = Dir::dayDateBannerNameFromPhoto($daydate,$banner);
                    $daydate->bannerUrl       =    Dir::dayDateBannerUrl($daydate->bannerFileName);
                    }
                $destinationPath =  Dir::dayDateBannersPath();
                $banner->move($destinationPath,  $daydate->bannerFileName);
            }

            // redirect
            Session::flash('message',  "Day date successfull saved.");
            return Redirect::to('/admin/daydate');
        }
    }


    public function generateDates($year){


        $days = Day::where('isFixedDate',true)->get();

        
        foreach($days as $day){

            try{

                $date = new DateTime($day->date);

                $dateForDay  = $date->format("$year-m-d"); 
               
                $daydate = DayDate::where('date',$dateForDay)->where("dayId",$day->id)->first();

                if($daydate==null ){
                    $daydate = new DayDate;
                    $daydate->dayId =$day->id;
                    $daydate->date = $dateForDay;
                    $daydate->bannerFileName = $day->photoFileName;
                    $daydate->bannerUrl       =  $day->photoUrl;

                }else{
                    
                    if($daydate->bannerFileName==null){
                        $daydate->bannerFileName = $day->photoFileName;
                    }

                    if($daydate->bannerUrl ==null){
                        $daydate->bannerUrl       =  $day->photoUrl;
                    }
                }


                $daydate->holidayCode = $day->holidayCode;
               

                $daydate->save();

            } catch(QueryException $e){

                switch($e->errorInfo){    
                    case '23000':
                    Session::flash('message',  $e->errorInfo[0]);
                    break;
            
                    default:
                   
            
                }     
            }
            catch(Exception $e){
                    Session::flash('message',  $e->getMessage());
            }
           
            }
           
            return $this->showHolidays($year);
        }


    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DayDate  $dayDate
     * @return \Illuminate\Http\Response
     */
    public function show(DayDate $dayDate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DayDate  $dayDate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dayDate = DayDate::find($id);        
        $days = Day::pluck('titleBn as title', 'id');

        $holidayTypes = HolidayType::pluck('longName', 'code');
        $holidayTypes->prepend('Please Select',null);

       return $dayDate;

        return view("daydate.edit")->with(compact('dayDate','days','holidayTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DayDate  $dayDate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'date'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to("/admin/daydate/$id/edit")
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {

            $daydate = DayDate::find($id);

            $daydate->dayId =$request->dayId;
            $daydate->date = $request->date;
          
            $daydate->holidayCode = $request->holidayCode=="0"?null:$request->holidayCode;
         
          //  dd($daydate);
            $daydate->save();
           
            if ( $request->hasFile('banner')) {
                    
                    $banner = $request->file('banner');
                    $daydate->bannerFileName = Dir::dayDateBannerNameFromPhoto($daydate,$banner);
                    $daydate->bannerUrl   =  Dir::dayDateBannerUrl($daydate->bannerFileName);
                    $daydate->save();

                $destinationPath =  Dir::dayDateBannersPath();
                $banner->move($destinationPath,  $daydate->bannerFileName);
            }

            // redirect
            Session::flash('message',  "Day date successfull saved.");
            return Redirect::to('/admin/daydate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DayDate  $dayDate
     * @return \Illuminate\Http\Response
     */
    public function destroy(DayDate $dayDate)
    {
        //
    }
}
