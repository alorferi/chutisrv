<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Language;

class LanguageController extends Controller
{
   public function getLanguages(){
    return  ['message'=> "",
    'status'=>'OK',
    'result'=>Language::all()
    ] ;
   }
}
