<?php

namespace App\Http\Controllers;

use App\Models\DayDate;
use App\Models\Day;
use Illuminate\Http\Request;

class DayDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // get all the Day
          $daydates = DayDate::with('day')->get();


        // foreach( $daydates  as $k=> $daydate){
        //     $day = Day::where('dayKey','=', $daydate->dayKey)->get()->first();
        //     if($day!=null){
        //         $daydate->dayId = $day->id;
        //         $daydate->save();
        //     }
          
        // }
  
          // load the view and pass the Day
          return view('daydate.index')->with('daydates', $daydates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(DayDate $dayDate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DayDate  $dayDate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DayDate $dayDate)
    {
        //
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
