<?php

namespace App\Http\Controllers;

use App\Models\CricketMatch;
use Illuminate\Http\Request;

class CricketMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $matches =  CricketMatch::all();;
       return view("cricketmatch.index",compact('matches'));
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
     * @param  \App\Models\CricketMatch  $cricketMatch
     * @return \Illuminate\Http\Response
     */
    public function show(CricketMatch $cricketMatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CricketMatch  $cricketMatch
     * @return \Illuminate\Http\Response
     */
    public function edit(CricketMatch $cricketMatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CricketMatch  $cricketMatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CricketMatch $cricketMatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CricketMatch  $cricketMatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(CricketMatch $cricketMatch)
    {
        //
    }
}
