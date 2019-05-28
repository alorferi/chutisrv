<?php

namespace App\Http\Controllers;

use App\Models\CricketTeam;
use Illuminate\Http\Request;

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
        return view("cricketteam.create");//
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
