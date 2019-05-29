<?php

namespace App\Http\Controllers;

use App\Models\CricketTeam;
use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\Redirect;

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
        $team->name = $request->name;
        $team->country_code =  ($request->country_code==0)?null:$request->country_code;
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
    public function edit(CricketTeam $cricketTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CricketTeam  $cricketTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CricketTeam $cricketTeam)
    {
        //
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
