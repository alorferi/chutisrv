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
      $ramadan->englishDate = $request->englishDate;
      $ramadan->sherTime = $request->sherTime;
      $ramadan->fajorTime = $request->fajorTime;
      $ramadan->iftaarTime = $request->iftaarTime;
      $ramadan->save();
      
     return $this->index();
  }

}
