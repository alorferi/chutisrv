<?php
namespace App\Http\Controllers\API\V3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Area;
use App\Http\Resources\V3\AreaResource;
use App\Http\Resources\V3\CountryResource;

class CountryController extends Controller
{
    public function getCountries()
    {
           return  ['message'=> "",
    'status'=>'OK',
    'result'=>CountryResource::collection( Country::all())
    ] ;
    }


    public function getCountry($code)
    {

      //  Country::where('code', $code)->get()
           return  ['message'=> "",
    'status'=>'OK',
    'result'=> new CountryResource( Country::with("areas")->where('code', strtoupper($code))->get()->first())
    ] ;
    }

    public function getAreasByCountryCode($countryCode)
    {

      $areas = AreaResource::collection( Area::where('countryCode', strtoupper($countryCode))->get());

           return  ['message'=> "",
    'status'=>'OK',
    'result'=>$areas
    ] ;
    }
}
