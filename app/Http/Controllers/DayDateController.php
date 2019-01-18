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
use Auth;
use DB;

class DayDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year = date("Y");
        return $this->showHolidays($year);
    }

    public function  showHolidays($year){

        $daydates = DayDate::with('day')
                    ->whereYear('date',$year)
                   //->where('holidayCode','!=',null)
                    ->orderBy("date")
                    ->get();

                    Session::flash('message', count( $daydates ). " dates found");

        return view('daydate.index')->with(compact('daydates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $days = Day::pluck("'titleBn'  as title", 'id');
      
          $days = Day::select(DB::raw("CONCAT(IFNULL(days.date,'NO DATE'),': ',days.titleBn) AS title"),'id')
          ->get()
          ->pluck('title','id');
          $days->prepend('Please Select');

        $holidayTypes = HolidayType::pluck('longName', 'code');
        $holidayTypes->prepend('Please Select');

        return view("daydate.create")->with(compact('days','holidayTypes'));
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
            return Redirect::to("/admin/daydate/$id/edit")
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {

            $daydate = new DayDate;
            // No need to update image url
    
            $daydate->stared = $request->stared;
            $daydate->date = $request->date;
    
            $daydate->holidayCode = $request->holidayCode=="0"?null:$request->holidayCode;
            $daydate->dayId =$request->dayId;
           // dd($daydate);
            $daydate->save();
           
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
        $holidayTypes->prepend('Please Select');

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

           // dd($request->hasFile('photo'));
        //    if ( $request->hasFile('banner')) {
        //         $banner = $request->file('banner');
        //         if($daydate->bannerFileName==null){
        //             $daydate->bannerFileName = 'dd_bnr'.time().'.'.$banner->getClientOriginalExtension();
        //             $daydate->bannerUrl       =    Dir::dayDateBannerUrl($daydate->bannerFileName);
        //             }
        //         $destinationPath =  Dir::dayDateBannersPath();
        //         $banner->move($destinationPath,  $daydate->bannerFileName);
        //     }

            $daydate->dayId =$request->dayId;
            $daydate->date = $request->date;
          
            $daydate->stared = $request->stared;
        
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
