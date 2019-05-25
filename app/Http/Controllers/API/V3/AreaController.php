<?php

namespace App\Http\Controllers\API\V3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Http\Resources\V3\AreaResource;
use App\Utils\Data;
use App\Models\Ramadan;
use App\Http\Resources\V3\RamadanResource;

class AreaController extends Controller
{
    public function getAreas()
    {
                $areas =AreaResource::collection(Area::all());
           
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
                       'result'=> new AreaResource(Area::where('code', strtoupper($code))->get()->first())
      ] ;
      }

      public function getRamadansByAreaCode($areaCode){

        $ramadans = Ramadan::where('areaCode', strtoupper($areaCode))
        ->orderBy('date')
        ->get();
        $ramadanCollection = RamadanResource::collection($ramadans);

    // if(count($ramadans)==0){
    //     $data =   Data::data("FAILED","No ramadan(s) found",$ramadans);   
    // }else{
        $data =   Data::data("OK",sizeof($ramadans)." ramadan(s) found",$ramadanCollection);   
      //  }
        
        return $data;
    
    }


    public function getRamadansByAreaCodeByYear($areaCode,$year){

      $ramadans = Ramadan::where('areaCode', strtoupper($areaCode))
      ->whereYear('date',$year)
      ->orderBy('date')
      ->get();
      $ramadanCollection = RamadanResource::collection($ramadans);

  // if(count($ramadans)==0){
  //     $data =   Data::data("FAILED","No ramadan(s) found",$ramadans);   
  // }else{
      $data =   Data::data("OK",sizeof($ramadans)." ramadan(s) found",$ramadanCollection);   
    //  }
      
      return $data;
  
  }

}