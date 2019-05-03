<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Religion;

class ReligionController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $religions = Religion::all();
        return view('religion.index')->with('religions', $religions);
    }

}
