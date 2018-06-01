<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(){        
        $apps = App::all();
       return view("app.index")->with("apps",$apps);
    
    }


    public function composeFcm($id)
    {
  
        $app = App::find($id); // select * from apps where id = 1

       return view("app.fcm")->with("app",$app);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
