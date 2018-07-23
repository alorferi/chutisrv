<?php

use Illuminate\Database\Seeder;
use App\Models\Religion;

class ReligionsTableSeeder extends Seeder
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
             
                'code' => "GNL",
                'name' => "General",
                'localName' => "সাধারণ",
               

            ], [
            
                'code' => "MLM",
                'name' => "Muslim",
                'localName' => "মুসলিম",
            ],[
            
                'code' => "HDU",
                'name' => "Hindu",
                'localName' => "হিন্দু",
            ],[
            
                'code' => "CRN",
                'name' => "Cristan",
                'localName' => "খৃষ্টান",
            ],
            [
            
                'code' => "BDO",
                'name' => "Buddo",
                'localName' => "বৌদ্ধ",
            ],
            [
            
                'code' => "OHR",
                'name' => "Other",
                'localName' => "অন্যান্য",
            ],
         ];
        // Publisher::delete();
         foreach ($array as $key => $value) {
            Religion::create($value);
         }
    }
}
