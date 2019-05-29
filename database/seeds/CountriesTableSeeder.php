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

         foreach ($array as $key => $value) {
            Country::create($value);
         }
    }
    }

