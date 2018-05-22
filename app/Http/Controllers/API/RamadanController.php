<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ramadan;
use App\Utils\Data;

class RamadanController extends Controller
{
    public function getRamadans($areaCode){
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
       

    public function getRamadan($id){
        $ramadan =  Ramadan::find($id);
        if($ramadan==null){
            return  Data::data("FAILED","Ramadan id: $id not found",$ramadan);
        }else{
            return  Data::data("OK","Ramadan id: $id found",$ramadan);
        }
    }

    public function update(Request $request, Ramadan $ramadan)
    {
        $ramadan->update($request->all());
        return response()->json($ramadan, 200);
    }
}
