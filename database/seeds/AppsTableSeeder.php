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
                'bundleId' => 'com.provatsoft.apps.govtholidaysbd'
            ], [
            
                'name' => "Ramadan",
                'localName' => 'রমজান',
                'bundleId' => 'com.ushalab.ramadan',
            ],
         ];
        // Publisher::delete();
         foreach ($array as $key => $value) {
            App::create($value);
         }
    }
}
