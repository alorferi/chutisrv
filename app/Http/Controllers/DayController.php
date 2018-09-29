<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Religion;
use App\Models\DayFlag;
use App\Utils\Dir;
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
        // Fetch day list from day table database and put it into $day variable
        $days = Day::orderBy('date')->get();

        Session::flash('message', count( $days ). " Days found");
        // Passes day list to index view in view/day folder
        return view('day.index')->with('days', $days);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $dayFlags = DayFlag::pluck('name_bn', 'flag');

        $religions = Religion::pluck('localName', 'code');

        $religions->prepend('Please Select');

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
            'titleBn'       => 'required',
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
            $day->date          = $request->date;
           // dd($request->isFixedDate);
            $day->isFixedDate   = ($request->isFixedDate=='on')?true:false;
            $day->titleBn         = $request->titleBn;
            $day->descriptionBn   = $request->descriptionBn;
            $day->dayFlag      = $this->getDayflagCode($request->dayFlags);
            $day->religionCode  = ($request->religionCode=="0")?null:$request->religionCode;
           
           
            if ( $request->hasFile('photo')) {
                $photo = $request->file('photo');

                if($day->photoFileName==null){
                    $day->photoFileName = 'day'.time().'.'.$photo->getClientOriginalExtension();
                    $day->photoUrl       =    Dir::dayPhotoUrl($day->photoFileName);
                }

                $destinationPath =  Dir::dayPhotosPath();
                $photo->move($destinationPath,  $day->photoFileName);
            }
           
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
    public function show($id)
    {
        $day = Day::find($id);        
 
       // $dayflaglist = $this->getDayFlagCodes($day->dayFlag);

     //   return view("day.show")->with(compact('day','dayflaglist'));

     return "noting";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $day = Day::find($id);        
        $dayFlags = DayFlag::pluck('name_bn', 'flag');

        $flag_ids = $this->getDayFlagCodes($day->dayFlag);
        $religions = Religion::pluck('localName', 'code');
        $religions->prepend('Please Select');

        return view("day.edit")->with(compact('day','religions','dayFlags','flag_ids'));
    }


    function getDayFlagCodes($flagCode){

        $dayFlags = DayFlag::all();

        $flag_ids = array();

        foreach($dayFlags as $k=> $dayFlag){
         
           // dd($dayFlag->name);
             $code =  $dayFlag->flag & $flagCode;
          
         if($code!=0){
            array_push( $flag_ids,$code);
          }
          
        }

        return $flag_ids ;
    }


    function getDayFlagList($flagCode){

        $dayFlags = DayFlag::all();

        $dayflag_list = array();

        foreach($dayFlags as $k=> $dayFlag){
         
             $code =  $dayFlag->flag & $flagCode;
          
         if($code!=0){
            array_push( $dayflag_list,$dayFlag);
          }
          
        }

        return $dayflag_list ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'titleBn'       => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/admin/day/edit')
                ->withErrors($validator)
                ->withRequest($request->except('password'));
        } else {
            // retrive day from table
            $day = Day::find($id);

           // dd($request->hasFile('photo'));
            if ( $request->hasFile('photo')) {
                $photo = $request->file('photo');

                if($day->photoFileName==null){
                    $day->photoFileName = 'day'.time().'.'.$photo->getClientOriginalExtension();
                    $day->photoUrl       =    Dir::dayPhotoUrl($day->photoFileName);
                }

              
                $destinationPath =  Dir::dayPhotosPath();
                $photo->move($destinationPath,  $day->photoFileName);
            }

            $day->date          = $request->date;
            $day->isFixedDate   = ($request->isFixedDate=='on')?true:false;
            $day->titleBn         = $request->titleBn;
            $day->descriptionBn   = $request->descriptionBn;
            $day->dayFlag       = $this->getDayflagCode($request->dayFlags);
            $day->religionCode  = ($request->religionCode=="0")?null:$request->religionCode;
           
          //  dd($day);
            $day->save();

            // redirect
            Session::flash('message', 'Successfully created day!');
            return Redirect::to('/admin/day');
        }
    }

    function getDayflagCode($dayFlags){
       
        $dayFlag=0;
        if(sizeof( $dayFlags)>0){
            foreach($dayFlags as $k=> $flag){
                $dayFlag = $dayFlag | $flag;
        }
        }

        return $dayFlag;
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
