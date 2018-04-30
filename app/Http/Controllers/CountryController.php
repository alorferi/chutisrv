<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    
    public function index()
    {
  
               // get all the tag
        $countries = Country::all();
  
        // load the view and pass the tag
        return view('country.index')
            ->with('countries', $countries);
  
    }
    
    public function getAllApi()
    {
           return  ['message'=> "",
    'status'=>'OK',
    'result'=>Country::all()
    ] ;
    }


    public function showApi($code)
    {

      //  Country::where('code', $code)->get()
           return  ['message'=> "",
    'status'=>'OK',
    'result'=> Country::with("areas")->where('code', strtoupper($code))->get()->first()
    ] ;
    }

}
