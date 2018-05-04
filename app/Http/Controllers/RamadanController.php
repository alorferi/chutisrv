<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ramadan;

class RamadanController extends Controller
{
    
    public function index()
    {  
               // get all the tag
        $ramadans = Ramadan::all();
  
        // load the view and pass the tag
        return view('ramadans.index')
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
     return  \View::make('ramadans.edit')->with('ramadan', $ramadan);
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

    public function getRamadansByAreaCode($areaCode){
        $ramadans =  Ramadan::where('areaCode', strtoupper($areaCode))
                            ->orderBy('date')
                            ->get();
        return  ['message'=> "",
    'status'=>'OK',
    'result'=>$ramadans
    ] ;
    }

}
