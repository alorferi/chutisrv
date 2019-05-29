<?php

namespace App\Http\Controllers;

use App\Models\CricketTeam;
use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\Redirect;
use App\Utils\Dir;
use Validator;
use Auth;
use Session;

class CricketTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = CricketTeam::all();
        return view("cricketteam.index",compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::pluck('name', 'code') ->prepend('Please Select...',0);
  
        return view("cricketteam.create",compact('countries'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new CricketTeam; 
        $team->short_name = $request->short_name;
        $team->long_name = $request->long_name;
        $team->country_code =  ($request->country_code==0)?null:$request->country_code;
        $team->created_by = Auth::id();  
        $team->save();
        return Redirect::to('/admin/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CricketTeam  $cricketTeam
     * @return \Illuminate\Http\Response
     */
    public function show(CricketTeam $cricketTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CricketTeam  $cricketTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(CricketTeam $team)
    {
        $countries = Country::pluck('name', 'code') ->prepend('Please Select...',0);
  
        return view("cricketteam.edit",compact('countries','team'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CricketTeam  $cricketTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CricketTeam $team)
    {
         // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'short_name'       => 'required',
            'long_name'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/admin/team/edit')
                ->withErrors($validator)
                ->withRequest($request->except('password'));
        } else {
            // retrive day from table
           
            $team->short_name   = $request->short_name;
            $team->long_name   = $request->long_name;
            $team->country_code =  ($request->country_code==0)?null:$request->country_code;
            $team->updated_by = Auth::id();  
            $team->save();

           // dd($day);

                //dd($request->hasFile('photo'));
               if ( $request->hasFile('logo')) {
                
                    $logo = $request->file('logo');             
                    $team->logo_name = $team->getLogoName($logo);
                   // dd($day->photoFileName );
                    $team->logo_url       =   $team->getLogoUrl($team->logo_name);
                    $team->save();
                   // dd($day->photoUrl);
            
                $destinationPath =  $team->getLogoPath();
                $logo->move($destinationPath,  $team->logo_name);
            }

            // redirect
            Session::flash('message', 'Successfully created day!');
            return Redirect::to('/admin/team');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CricketTeam  $cricketTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(CricketTeam $cricketTeam)
    {
        //
    }
}
