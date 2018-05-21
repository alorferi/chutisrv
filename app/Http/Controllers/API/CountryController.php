<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;

class CountryController extends Controller
{
    public function getCountries()
    {
           return  ['message'=> "",
    'status'=>'OK',
    'result'=>Country::all()
    ] ;
    }


    public function getCountry($code)
    {

      //  Country::where('code', $code)->get()
           return  ['message'=> "",
    'status'=>'OK',
    'result'=> Country::with("areas")->where('code', strtoupper($code))->get()->first()
    ] ;
    }
}
