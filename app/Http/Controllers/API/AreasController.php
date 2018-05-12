<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;

class AreasController extends Controller
{
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