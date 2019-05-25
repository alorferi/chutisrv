<?php

namespace App\Http\Controllers\API\V0;

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
