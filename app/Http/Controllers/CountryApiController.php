<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryApiController extends Controller
{
    public function index()
    {
           return  ['message'=> "",
    'status'=>'OK',
    'result'=>Country::all()
    ] ;
    }


    public function show($code)
    {

      //  Country::where('code', $code)->get()
           return  ['message'=> "",
    'status'=>'OK',
    'result'=> Country::where('code', strtoupper($code))->get()->first()
    ] ;
    }
}
