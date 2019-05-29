<?php

use Illuminate\Database\Seeder;
use App\Models\CricketMatch;
use App\Models\CricketTeam;
use App\Models\CricketStadium;
use App\Models\CricketTournament;

class CricketMatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $tournament = CricketTournament::create(
            [
                'name'=>"ICC Cricket World Cup 2019"
                ,'starts_at'=>"2019-05-30"
                ,'ends_at'=>"2019-05-30"
             
              
            ]
        );

       // England v South Africa at The Oval, 
       $teamA = CricketTeam::where('long_name','England')->first();
       $teamB = CricketTeam::where('long_name','South Africa')->first();
       $stadium = CricketStadium::where('name','The Oval')->first();
        CricketMatch::create(
            [
                'start_date'=>"2019-05-30"
                ,'start_time'=>"09:30"
                ,'team_a_id'=>$teamA->id
                ,'team_b_id'=>$teamB->id
                ,'stadium_id'=>$stadium->id
                , 'tournament_id' => $tournament->id
            ]
        );
        // Pakistan v West Indies at Nottingham
       $teamA = CricketTeam::where('long_name','Pakistan')->first();
       $teamB = CricketTeam::where('long_name','West Indies')->first();
       $stadium = CricketStadium::where('name','Nottingham')->first();
        CricketMatch::create(
            [
                'start_date'=>"2019-05-31"
                ,'start_time'=>"09:30"
                ,'team_a_id'=>$teamA->id
                ,'team_b_id'=>$teamB->id
                ,'stadium_id'=>$stadium->id
                , 'tournament_id' => $tournament->id
            ]
        );

        // New Zealand v Sri Lanka at Cardiff,
        $teamA = CricketTeam::where('long_name','New Zealand')->first();
        $teamB = CricketTeam::where('long_name','Sri Lanka')->first();
        $stadium = CricketStadium::where('name','Cardiff')->first();
         CricketMatch::create(
             [
                 'start_date'=>"2019-06-01"
                 ,'start_time'=>"09:30"
                 ,'team_a_id'=>$teamA->id
                 ,'team_b_id'=>$teamB->id
                 ,'stadium_id'=>$stadium->id
                 , 'tournament_id' => $tournament->id
             ]
         );
        // Afghanistan v Australia at Bristol, 
        $teamA = CricketTeam::where('long_name','Afghanistan')->first();
        $teamB = CricketTeam::where('long_name','Australia')->first();
        $stadium = CricketStadium::where('name','Bristol')->first();
         CricketMatch::create(
             [
                'start_date'=>"2019-06-01"
                 ,'start_time'=>"09:30"
                 ,'team_a_id'=>$teamA->id
                 ,'team_b_id'=>$teamB->id
                 ,'stadium_id'=>$stadium->id
                 , 'tournament_id' => $tournament->id
             ]
         );
        // Bangladesh v South Africa at The Oval,
        $teamA = CricketTeam::where('long_name','Bangladesh')->first();
        $teamB = CricketTeam::where('long_name','South Africa')->first();
        $stadium = CricketStadium::where('name','The Oval')->first();
         CricketMatch::create(
             [
                'start_date'=>"2019-06-02"
                 ,'start_time'=>"09:30"
                 ,'team_a_id'=>$teamA->id
                 ,'team_b_id'=>$teamB->id
                 ,'stadium_id'=>$stadium->id
                 ,'tournament_id' => $tournament->id
             ]
         );
        // England v Pakistan at Nottingham, 
        $teamA = CricketTeam::where('long_name','England')->first();
        $teamB = CricketTeam::where('long_name','Pakistan')->first();
        $stadium = CricketStadium::where('name','Nottingham')->first();
         CricketMatch::create(
             [
                'start_date'=>"2019-06-03"
                 ,'start_time'=>"09:30"
                 ,'team_a_id'=>$teamA->id
                 ,'team_b_id'=>$teamB->id
                 ,'stadium_id'=>$stadium->id
                 ,'tournament_id' => $tournament->id
             ]
         );
        // Afghanistan v Sri Lanka at Cardiff,
        $teamA = CricketTeam::where('long_name','Afghanistan')->first();
        $teamB = CricketTeam::where('long_name','Sri Lanka')->first();
        $stadium = CricketStadium::where('name','Cardiff')->first();
         CricketMatch::create(
             [
                'start_date'=>"2019-06-04"
                 ,'start_time'=>"09:30"
                 ,'team_a_id'=>$teamA->id
                 ,'team_b_id'=>$teamB->id
                 ,'stadium_id'=>$stadium->id
                 ,'tournament_id' => $tournament->id
             ]
         );
        // India v South Africa at Southampton,
        $teamA = CricketTeam::where('long_name','India')->first();
        $teamB = CricketTeam::where('long_name','South Africa')->first();
        $stadium = CricketStadium::where('name','Southampton')->first();
         CricketMatch::create(
             [
                'start_date'=>"2019-06-05"
                 ,'start_time'=>"09:30"
                 ,'team_a_id'=>$teamA->id
                 ,'team_b_id'=>$teamB->id
                 ,'stadium_id'=>$stadium->id
                 ,'tournament_id' => $tournament->id
             ]
         );
        // Bangladesh v New Zealand  at The Oval,
        $teamA = CricketTeam::where('long_name','Bangladesh')->first();
        $teamB = CricketTeam::where('long_name','New Zealand')->first();
        $stadium = CricketStadium::where('name','The Oval')->first();
         CricketMatch::create(
             [
                'start_date'=>"2019-06-05"
                 ,'start_time'=>"09:30"
                 ,'team_a_id'=>$teamA->id
                 ,'team_b_id'=>$teamB->id
                 ,'stadium_id'=>$stadium->id
                 ,'tournament_id' => $tournament->id
             ]
         );

         //Bangladesh v India at Birmingham, 
         $teamA = CricketTeam::where('long_name','Bangladesh')->first();
         $teamB = CricketTeam::where('long_name','India')->first();
         $stadium = CricketStadium::where('name','Birmingham')->first();
          CricketMatch::create(
              [
                 'start_date'=>"2019-07-02"
                  ,'start_time'=>"09:30"
                  ,'team_a_id'=>$teamA->id
                  ,'team_b_id'=>$teamB->id
                  ,'stadium_id'=>$stadium->id
                  ,'tournament_id' => $tournament->id
              ]
          );
    }
}
