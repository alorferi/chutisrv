<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ramadan;

class RamadanController extends Controller
{
    public function getRamadansByAreaCode($areaCode){
        $ramadans =  Ramadan::where('areaCode', strtoupper($areaCode))
                            ->orderBy('date')
                            ->get();
        return  ['message'=> "",
    'status'=>'OK',
    'result'=>$ramadans
    ] ;
    }
}
