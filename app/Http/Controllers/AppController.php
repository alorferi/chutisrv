<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use View;

class AppController extends Controller
{
    
    function index(){        
        $apps = App::all();
       return view("apps.index")->with("apps",$apps);
    
    }


    public function composeFcm($id)
    {
  
        $app = App::find($id); // select * from apps where id = 1

       return view("apps.fcm")->with("app",$app);
    }

    public function sendFcm(Request $request,$id)
  {

      $app = App::find($id); // select * from apps where id = 1

      fcm()
      ->toTopic($app->bundleId) // $topic must an string (topic name)
      ->notification([
          'title' =>$request->title,// $ramadan->area->name"",
          'body' => $request->body , // $body
      ])
      ->send();

     return $this->index();
  }




}
