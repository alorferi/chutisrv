<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Utils\Data;

class AreaController extends Controller
{
    public function getAreas()
    {
                $areas =Area::all();
           
                  if(sizeof($areas)==0){
                    $data =   Data::data("FAILED","No area(s) found",$areas);   
                }else{
                    $data =   Data::data("OK",sizeof($areas)." area(s) found",$areas);   
                    }
                    
                    return $data;
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