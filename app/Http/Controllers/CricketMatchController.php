<?php

namespace App\Http\Controllers;

use App\Models\CricketMatch;
use Illuminate\Http\Request;
use App\Models\CricketTournament;
use App\Models\CricketTeam;
use App\Models\CricketStadium;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Session;
use App\Http\Controllers\API\V3\CricketController;

class CricketMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $matches =  CricketMatch::all();;
       return view("cricketmatch.index",compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tournaments = CricketTournament::pluck('name', 'id') ->prepend('Please Select...',0);
        $teams = CricketTeam::pluck('long_name', 'id') ->prepend('Please Select...',0);
        $stadiums = CricketStadium::pluck('name', 'id') ->prepend('Please Select...',0);
        return view("cricketmatch.create",compact('tournaments','teams','stadiums'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'start_date'       => 'required',
            'start_time'       => 'required',
            'team_a_id'       => 'required',
            'team_b_id'       => 'required|different:team_a_id',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/admin/match/create')
                ->withErrors($validator)
                ->withRequest($request->except('password'));
        } else {

            $match = new CricketMatch();
            $match->start_date          = $request->start_date;
            $match->start_time          = $request->start_time;

            $match->team_a_id   = $request->team_a_id;
            $match->team_b_id   = $request->team_b_id;
            $match->stadium_id   = $request->stadium_id;
            $match->save();
            // redirect
            Session::flash('message', 'Successfully created day!');
            return Redirect::to('/admin/match');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CricketMatch  $cricketMatch
     * @return \Illuminate\Http\Response
     */
    public function show(CricketMatch $cricketMatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CricketMatch  $cricketMatch
     * @return \Illuminate\Http\Response
     */
    public function edit(CricketMatch $match)
    {
        $tournaments = CricketTournament::pluck('name', 'id') ->prepend('Please Select...',0);
        $teams = CricketTeam::pluck('long_name', 'id') ->prepend('Please Select...',0);
        $stadiums = CricketStadium::pluck('name', 'id') ->prepend('Please Select...',0);
        
        return view("cricketmatch.edit",compact('tournaments','teams','stadiums','match'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CricketMatch  $cricketMatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CricketMatch $match)
    {
         // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'start_date'       => 'required',
            'start_time'       => 'required',
            'team_a_id'       => 'required',
            'team_b_id'       => 'required|different:team_a_id',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('/admin/match/create')
                ->withErrors($validator)
                ->withRequest($request->except('password'));
        } else {

           // $match = CricketMatch::find();
            $match->start_date          = $request->start_date;
            $match->start_time          = $request->start_time;
            $match->team_a_id   = $request->team_a_id;
            $match->team_b_id   = $request->team_b_id;
            $match->stadium_id   = $request->stadium_id;
            $match->cric_info_url   = $request->cric_info_url;
            $match->save();
            // redirect
            Session::flash('message', 'Successfully created day!');
            return Redirect::to('/admin/match');
        }
    }

  public function  fetchLive($id){
        $controller = new CricketController();
        return $controller->fetchLiveScore($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CricketMatch  $cricketMatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(CricketMatch $cricketMatch)
    {
        //
    }
}
