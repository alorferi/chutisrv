<?php

use Illuminate\Database\Seeder;
use App\Models\HolidayType;

class HolidayTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->string('code',2)->primary();
        // $table->string('shortName',20)->unique();
        // $table->string('longName',50)->unique(); 
        // $table->integer('orderFlag');       
        // $table->boolean('showInCalendar');

        $array = [
                 //[ 
                // 'code'=> ''
                // ,'shortName'=>''		
                // ,'longName'=>''		
                // ,'orderFlag'=>0		
                // ,'showInCalendar'=>0		
                // ],
                [ 
                    'code'=> 'XO'
                    ,'shortName'=>'ঐচ্ছিক(পা.)'		
                    ,'longName'=>'ঐচ্ছিক ছুটি (পার্বত্য ও অন্যান্য)'		
                    ,'orderFlag'=>64		
                    ,'showInCalendar'=>0		
                    ],
                    [ 
                        'code'=> 'XB'
                        ,'shortName'=>'ঐচ্ছিক(বৌ.)'		
                        ,'longName'=>'ঐচ্ছিক ছুটি (বৌদ্ধ পর্ব)'		
                        ,'orderFlag'=>32		
                        ,'showInCalendar'=>0		
                        ],
                ];


// XC	ঐচ্ছিক(খ্রি.)	ঐচ্ছিক ছুটি (খ্রিষ্টান পর্ব)	16	0
// XH	ঐচ্ছিক(হি.)	ঐচ্ছিক ছুটি (হিন্দু পর্ব)	8	0
// XM	ঐচ্ছিক(মু.)	ঐচ্ছিক ছুটি (মুসলিম পর্ব)	4	0
// XU	নির্বাহী	নির্বাহী আদেশে সরকারী ছুটি	2	1
// GN	সাধারণ	সাধারণ ছুটি	1	1

            foreach ($array as $key => $value) {
                HolidayType::create($value);
             }
    }
}
