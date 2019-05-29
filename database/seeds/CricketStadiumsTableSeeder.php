<?php

use Illuminate\Database\Seeder;
use App\Models\CricketStadium;

class CricketStadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CricketStadium::create(
            [
                'name'=>"Kennington Oval"
                ,'country_code'=>"UK"
            ]
        );
        CricketStadium::create(
            [
                'name'=>"Trent Bridge"
                ,'country_code'=>"UK"
            ]
        );
        CricketStadium::create(
            [
                'name'=>"County Ground"
                ,'country_code'=>"UK"
            ]
        );
      
        CricketStadium::create(
            [
                'name'=>"The Rose Bowl"
                ,'country_code'=>"UK"
            ]
        );
        CricketStadium::create(
            [
                'name'=>"The Cooper Associates County Ground"
                ,'country_code'=>"UK"
            ]
        );
        CricketStadium::create(
            [
                'name'=>"Emirates Old Trafford"
                ,'country_code'=>"UK"
            ]
        );
        CricketStadium::create(
            [
                'name'=>"Edgbaston"
                ,'country_code'=>"UK"
            ]
        );
        CricketStadium::create(
            [
                'name'=>"Headingley"
                ,'country_code'=>"UK"
            ]
        );
       
        CricketStadium::create(
            [
                'name'=>"Lord's"
                ,'country_code'=>"UK"
            ]
        );
        CricketStadium::create(
            [
                'name'=>"Riverside Ground"
                ,'country_code'=>"UK"
            ]
        );
        CricketStadium::create(
            [
                'name'=>"Sophia Gardens"
                ,'country_code'=>"UK"
            ]
        );
        CricketStadium::create(
            [
                'name'=>"The Oval"
                ,'country_code'=>"UK"
            ]
        );
       
    }
}
