<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Ramadan;
use App\Models\Country;

class AreaController extends Controller
{
    public function index()
    {
  
               // get all the tag
        $areas = Area::all();
  
        // load the view and pass the tag
        return view('area.index')
            ->with('areas', $areas);
  
    }




/**
   * Get a validator for an incoming tag request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
      return Validator::make($data, [
          'name' => 'required|string|max:100',

      ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
        $countries = Country::pluck('name', 'code');
       // $tags = Tag::pluck('name', 'id');
        return view("area.create")->with('countries', $countries);;
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
        $area = new Area;

       // $area->fill($request->all());
       $area->code = $request->code;
       $area->name = $request->name;
       $area->localName = $request->localName;
       $area->countryCode = $request->countryCode;


      $area->save();

     return $this->index();
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

  public function fcm($code)
  {

    $code = strtoupper($code);
    //  $area = Area::where('code', $code)->get()->first();

      $today = date('Y-m-d');

      $ramadan = Ramadan::with('area')->where('areaCode', $code)
            ->where('date', $today)->get()->first();

                     //   $body =    $ramadan->date.' '. $ramadan->sehrTime.' AM';

                        // $ramadan->area->code
      fcm()
      ->toTopic($code) // $topic must an string (topic name)
      ->notification([
          'title' =>"test title",// $ramadan->area->name"",
          'body' =>  "test body", // $body
      ])
      ->send();

     return $this->index();
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $area = Area::find($id);
     return  \View::make('area.edit')->with('tag', $area);
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
      $tag = Tag::find($id);
      // $tag->fill($request->all());
      $tag->name = $request->name;
      $tag->save();
     return $this->index();
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
