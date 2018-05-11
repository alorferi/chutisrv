<?php

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguagesTableSeeder extends Seeder
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
                'code' => "bn",
                'name' => "Bengali",
                'localName' => "বাংলা",

            ], [
            
                'code' => "ur",
                'name' => "Urdu",
                'localName' => "اردو",
            ],
            [
            
                'code' => "en",
                'name' => "English",
                'localName' => "English",
            ],
         ];
        // Publisher::delete();
         foreach ($array as $key => $value) {
            Language::create($value);
         }
    }
}
