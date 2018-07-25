<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Religion;
use App\Models\DayFlag;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Validator;
use Auth;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                 $days = Day::all();
                 return view('day.index')->with('days', $days);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $religions = Religion::pluck('name', 'code');
        $dayFlags = DayFlag::pluck('name', 'flag');
        return view("day.create")->with(compact('religions','dayFlags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
          //  'email'      => 'required|email',
           // 'book_level' => 'required|numeric'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/admin/day/create')
                ->withErrors($validator)
                ->withRequest($request->except('password'));
        } else {
            // store
            $day = new Day;
            $day->title       = $request->title;
            $day->description       = $request->description;
            $day->dayFlag      = $request->dayFlag;
            $day->religionCode = $request->religionCode;
            $day->save();


            // redirect
            Session::flash('message', 'Successfully created day!');
            return Redirect::to('/admin/day');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function show(Day $day)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function edit(Day $day)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Day $day)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function destroy(Day $day)
    {
        //
    }
}
