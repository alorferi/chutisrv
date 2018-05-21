<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ramadan;

class RamadanController extends Controller
{
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
