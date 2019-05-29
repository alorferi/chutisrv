<?php

namespace App\Http\Controllers;

use App\Models\CricketStadium;
use Illuminate\Http\Request;

class CricketStadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stadiums = CricketStadium::all();


        //  return  $stadiums;
        return view("cricketstadium.index",compact('stadiums'));
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
     * @param  \App\Models\CricketStadium  $cricketStadium
     * @return \Illuminate\Http\Response
     */
    public function show(CricketStadium $cricketStadium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CricketStadium  $cricketStadium
     * @return \Illuminate\Http\Response
     */
    public function edit(CricketStadium $cricketStadium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CricketStadium  $cricketStadium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CricketStadium $cricketStadium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CricketStadium  $cricketStadium
     * @return \Illuminate\Http\Response
     */
    public function destroy(CricketStadium $cricketStadium)
    {
        //
    }
}
