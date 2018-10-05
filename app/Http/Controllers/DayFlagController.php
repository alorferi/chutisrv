<?php

namespace App\Http\Controllers;

use App\Models\DayFlag;
use Illuminate\Http\Request;

class DayFlagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dayflags = DayFlag::orderBy("display_order")->get();
        return view('dayflag.index')->with('dayflags', $dayflags);
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
     * @param  \App\Models\DayFlag  $dayFlag
     * @return \Illuminate\Http\Response
     */
    public function show(DayFlag $dayFlag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DayFlag  $dayFlag
     * @return \Illuminate\Http\Response
     */
    public function edit(DayFlag $dayFlag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DayFlag  $dayFlag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DayFlag $dayFlag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DayFlag  $dayFlag
     * @return \Illuminate\Http\Response
     */
    public function destroy(DayFlag $dayFlag)
    {
        //
    }
}
