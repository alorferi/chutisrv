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
        return view('areas.index')
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
        return view("areas.create")->with('countries', $countries);;
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


                        $body =    $ramadan->date.' '. $ramadan->sehrTime.' AM';

                        // $ramadan->area->code
      fcm()
      ->toTopic('com.ushalab.maheramadan') // $topic must an string (topic name)
      ->notification([
          'title' => $ramadan->area->name,
          'body' =>  $body,
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
    $tag = Tag::find($id);
     return  \View::make('areas.edit')->with('tag', $tag);
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


  public function getAreas()
  {
         return  ['message'=> "",
                'status'=>'OK',
                'result'=>Area::all()
                ] ;
  }

    public function getAreasByCountryCode($countryCode)
    {

      $areas =  Area::where('countryCode', strtoupper($countryCode))->get();

           return  ['message'=> "",
    'status'=>'OK',
    'result'=>Area::all()
    ] ;
    }

    public function getArea($code)
    {

           return  ['message'=> "",
                    'status'=>'OK',
                     'result'=> Area::where('code', strtoupper($code))->get()->first()
    ] ;
    }
}
