<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Utils\Data;
use App\Models\Ramadan;

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
  

  
      public function getArea($code)
      {
  
             return  ['message'=> "",
                      'status'=>'OK',
                       'result'=> Area::where('code', strtoupper($code))->get()->first()
      ] ;
      }

      public function getRamadansByAreaCode($areaCode){
        $ramadans =  Ramadan::where('areaCode', strtoupper($areaCode))
                            ->orderBy('date')
                            ->get();

    if(sizeof($ramadans)==0){
        $data =   Data::data("FAILED","No ramadan(s) found",$ramadans);   
    }else{
        $data =   Data::data("OK",sizeof($ramadans)." ramadan(s) found",$ramadans);   
        }
        
        return $data;
    
    }
}