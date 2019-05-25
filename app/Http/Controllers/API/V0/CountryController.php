<?php

namespace App\Http\Controllers\API\V0;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Area;

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

    public function getAreasByCountryCode($countryCode)
    {

      $areas =  Area::where('countryCode', strtoupper($countryCode))->get();

           return  ['message'=> "",
    'status'=>'OK',
    'result'=>Area::all()
    ] ;
    }
}
