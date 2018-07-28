<?php

namespace App\Http\Controllers;

use App\Models\HolidayType;
use Illuminate\Http\Request;

class HolidayTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidaytypes = HolidayType::all();
        return view('holidaytype.index')->with('holidaytypes', $holidaytypes);
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
     * @param  \App\Models\HolidayType  $holidayType
     * @return \Illuminate\Http\Response
     */
    public function show(HolidayType $holidayType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HolidayType  $holidayType
     * @return \Illuminate\Http\Response
     */
    public function edit(HolidayType $holidayType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HolidayType  $holidayType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HolidayType  $holidayType
     * @return \Illuminate\Http\Response
     */
    public function destroy(HolidayType $holidayType)
    {
        //
    }
}
