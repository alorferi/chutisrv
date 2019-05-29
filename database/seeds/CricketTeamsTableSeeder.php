<?php

use Illuminate\Database\Seeder;
use App\Models\CricketTeam;

class CricketTeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CricketTeam::create(
            [
                'short_name'=>"UK"
                ,'long_name'=>"England"
            ]
        );

        CricketTeam::create(
            [
                'short_name'=>"AU"
                ,'long_name'=>"Australia"
            ]
        );
        CricketTeam::create(
            [
                'short_name'=>"BD"
                ,'long_name'=>"Bangladesh"
            ]
        );
        CricketTeam::create(
            [
                'short_name'=>"IN"
                ,'long_name'=>"India"
            ]
        );
        CricketTeam::create(
            [
                'short_name'=>"NZ"
                ,'long_name'=>"New Zealand"
            ]
        );
        CricketTeam::create(
            [
                'short_name'=>"PK"
                ,'long_name'=>"Pakistan"
            ]
        );
       
        CricketTeam::create(
            [
                'short_name'=>"ZA"
                ,'long_name'=>"South Africa"
            ]
        );
        CricketTeam::create(
            [
                'short_name'=>"LK"
                ,'long_name'=>"Sri Lanka"
            ]
        );
        CricketTeam::create(
            [
                'short_name'=>"WI"
                ,'long_name'=>"West Indies"
            ]
        );
        CricketTeam::create(
            [
                'short_name'=>"AF"
                ,'long_name'=>"Afghanistan"
            ]
        );
    
    
     
    }
}
