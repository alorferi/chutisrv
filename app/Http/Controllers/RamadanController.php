<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ramadan;

class RamadanController extends Controller
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
               // get all the tag
        $ramadans = Ramadan::all();
  
        // load the view and pass the tag
        return view('ramadan.index')
            ->with('ramadans', $ramadans);

    }


    /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $ramadan = Ramadan::find($id);
     return  \View::make('ramadan.edit')->with('ramadan', $ramadan);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $ramadan = Ramadan::find($id);
      // $tag->fill($request->all());
      $ramadan->date = $request->date;
      $ramadan->sehrTime = $request->sehrTime;
      $ramadan->fajorTime = $request->fajorTime;
      $ramadan->iftaarTime = $request->iftaarTime;
      $ramadan->save();
      
     return $this->index();
  }


    public function updatedLast($areaCode){
        $ramadan = Ramadan::select('updated_at')->where('areaCode', $areaCode)->orderBy('date', 'desc')->first();
        return  ['message'=> "",
        'status'=>'OK',
        'result'=> $ramadan->updated_at
            ] ;

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function fcm(Request $request)
    {
  
        $date = $request->input('date', date("Y-m-d"));

        $ramadans = Ramadan::where('date','=',$date)->get(); // select * from apps where id = 1

        return view("ramadan.fcm")->with(compact("ramadans","date"));
    }    

    public function sendFcm(Request $request)
    {
  
        $date = $request->input('date', date("Y-m-d"));

        $meridian = $request->input('meridiem');

        $ramadans = Ramadan::where('date','=',$date)->get(); // select * from apps where id = 1

        $today = date("Y-m-d");

        $msg = "";

        foreach($ramadans as $k=> $ramadan){

            if($date == $today){
                $prefix = "আজ";
            }else if($date > $today){
                $prefix = "আগামীকাল";
            }else{
                return "Old date";
            }

            if($meridian == "sehrTime"){
                $meridian = "শেহেরীর সময় ভোর";
                $time = $ramadan->sehrTime;
             }else if($meridian == "iftarTime"){
                 $meridian = "ইফতারীর সময় সন্ধ্যাে";
                 $time = $ramadan->iftarTime;
             }else{
              //  return "No meridian ".$meridian;
             }
             $title = "$prefix $date তারিখ।";
             $body =  "$meridian $time";
            fcm()
            ->toTopic($ramadan->area->code) // $topic must an string (topic name)
            ->notification([
                'title' =>$title,// $ramadan->area->name"",
                'body' =>  $body, // $body
            ])
            ->send();

            $msg.=$body." ";
        }

        return $msg;
    }    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
