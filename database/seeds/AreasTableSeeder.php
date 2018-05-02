<?php

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasTableSeeder extends Seeder
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
                'code' => "BD-27",
                'name' => "Khulna",
                'localName' => "খুলনা",
                'countryCode' => "BD",
            ], [
                'code' => "BD-60",
                'name' => "Sylhet",
                'localName' => "সিলেট",
                'countryCode' => "BD",
            ],
            [
                'code' => "BD-10",
                'name' => "Chattagram",
                'localName' => "চট্টগ্রাম",
                'countryCode' => "BD",
            ],
            [
                'code' => "BD-54",
                'name' => "Rajshahi",
                'localName' => "রাজশাহী",
                'countryCode' => "BD",
            ],
            [
                'code' => "BD-06",
                'name' => "Barishal",
                'localName' => "বরিশাল",
                'countryCode' => "BD",
            ],
            [
                'code' => "BD-13",
                'name' => "Dhaka",
                'localName' => "ঢাকা",
                'countryCode' => "BD",
            ],
            [
                'code' => "BD-34",
                'name' => "Mymensingh",
                'localName' => "ময়মনসিংহ",
                'countryCode' => "BD",
            ],
            [
                'code' => "BD-55",
                'name' => "Rangpur",
                'localName' => "রংপুর",
                'countryCode' => "BD",
            ],
         ];
        // Publisher::delete();
         foreach ($array as $key => $value) {
            Area::create($value);
         }
    }
}
