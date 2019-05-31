<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'code' => "BD",
                'name' => "Bangladesh",
                'localName' => "বাংলাদেশ",
            ], 
            [
                'code' => "AF",
                'name' => "Afghanistan",
                'localName' => "افغانستان",
            ],
            [
                'code' => "UK",
                'name' => "United Kingdom",
            ],
         ];

         Country::create(
            [
                'code'=>"AU"
                ,'name'=>"Australia"
            ]
        );
       
        Country::create(
            [
                'code'=>"IN"
                ,'name'=>"India"
            ]
        );
        Country::create(
            [
                'code'=>"NZ"
                ,'name'=>"New Zealand"
            ]
        );
        Country::create(
            [
                'code'=>"PK"
                ,'name'=>"Pakistan"
            ]
        );
       
        Country::create(
            [
                'code'=>"ZA"
                ,'name'=>"South Africa"
            ]
        );

        Country::create(
            [
                'code'=>"LK"
                ,'name'=>"Sri Lanka"
            ]
        );
        
        Country::create(
            [
                'code'=>"WI"
                ,'name'=>"West Indies"
            ]
        );
    
         foreach ($array as $value) {
            Country::create($value);
         }
    }
    }

