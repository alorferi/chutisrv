<?php

use Illuminate\Database\Seeder;
use App\Models\App;

class AppsTableSeeder extends Seeder
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
             
                'name' => "Chuti",
                'localName' => "ছুটি",
                'bundleId' => 'com.provatsoft.apps.govtholidaysbd',
                'versionCode' => 35,
                'versionName' => "1.35",

            ], [
            
                'name' => "Ramadan",
                'localName' => 'রমজান',
                'bundleId' => 'com.ushalab.ramadan',
                'versionCode' => 5,
                'versionName' => "1.5",
            ],
         ];
        // Publisher::delete();
         foreach ($array as $key => $value) {
            App::create($value);
         }
    }
}
