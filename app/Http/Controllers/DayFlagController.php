<?php

namespace App\Http\Controllers;

use App\Models\DayFlag;
use Illuminate\Http\Request;
use Validator;
use Session;
use Redirect;

class DayFlagController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        return view("dayflag.create");
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
            'name_en'       => 'required',
            'name_bn'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/admin/dayflag/create')
                ->withErrors($validator)
                ->withRequest($request->except('password'));
        } else {
            // store
            $day = new DayFlag;
         
            $day->flag   = $request->flag;
            $day->name_en   = $request->name_en;
            $day->name_bn   = $request->name_bn;
            $day->display_order  =$request->display_order;
              
            $day->save();

            // redirect
            Session::flash('message', 'Day Flag Successfully created!');
            return Redirect::to('/admin/dayflag');
        }
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
    public function edit($id)
    {
        $dayflag = DayFlag::where('flag',$id)->first();     
        return view("dayflag.edit")->with(compact('dayflag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DayFlag  $dayFlag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
         // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name_en'       => 'required',
            'name_bn'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to("/admin/dayflag/$id/edit")
                ->withErrors($validator)
                ->withRequest($request->except('password'));
        } else {
            // store
            $day = DayFlag::where("flag",$id)->first();
            $day->name_en   = $request->name_en;
            $day->name_bn   = $request->name_bn;
            $day->display_order  =$request->display_order;
              
            $day->save();

            // redirect
            Session::flash('message', 'Day Flag Successfully Updated!');
            return Redirect::to('/admin/dayflag');
        }
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
