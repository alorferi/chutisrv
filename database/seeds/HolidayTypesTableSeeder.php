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
        // $table->integer('display_order');       
        // $table->boolean('showInCalendar');

        $array = [
                 //[ 
                // 'code'=> ''
                // ,'shortName'=>''		
                // ,'longName'=>''		
                // ,'display_order'=>0		
                // ,'showInCalendar'=>0		
                // ],
                [ 
                    'code'=> 'XO'
                    ,'shortName'=>'ঐচ্ছিক(পা.)'		
                    ,'longName'=>'ঐচ্ছিক ছুটি (পার্বত্য ও অন্যান্য)'		
                    ,'display_order'=>64		
                    ,'showInCalendar'=>0		
                    ],
                    [ 
                        'code'=> 'XB'
                        ,'shortName'=>'ঐচ্ছিক(বৌ.)'		
                        ,'longName'=>'ঐচ্ছিক ছুটি (বৌদ্ধ পর্ব)'		
                        ,'display_order'=>32		
                        ,'showInCalendar'=>0		
                        ],
                        [ 
                            'code'=> 'XC'
                            ,'shortName'=>'ঐচ্ছিক(খ্রি.)'		
                            ,'longName'=>'ঐচ্ছিক ছুটি (খ্রিষ্টান পর্ব)'		
                            ,'display_order'=>16		
                            ,'showInCalendar'=>0		
                            ],
                            [ 
                                'code'=> 'XH'
                                ,'shortName'=>'ঐচ্ছিক(হি.)'		
                                ,'longName'=>'ঐচ্ছিক ছুটি (হিন্দু পর্ব)'		
                                ,'display_order'=>8		
                                ,'showInCalendar'=>0		
                                ],
                                [ 
                                    'code'=> 'XM'
                                    ,'shortName'=>'ঐচ্ছিক(মু.)'		
                                    ,'longName'=>'ঐচ্ছিক ছুটি (মুসলিম পর্ব)'		
                                    ,'display_order'=>4		
                                    ,'showInCalendar'=>0		
                                ],

                                [ 
                                    'code'=> 'XU'
                                    ,'shortName'=>'নির্বাহী'		
                                    ,'longName'=>'নির্বাহী আদেশে সরকারী ছুটি'		
                                    ,'display_order'=>2	
                                    ,'showInCalendar'=>1		
                                ],
                                [ 
                                    'code'=> 'GN'
                                    ,'shortName'=>'সাধারণ'		
                                    ,'longName'=>'সাধারণ ছুটি'		
                                    ,'display_order'=>1	
                                    ,'showInCalendar'=>1		
                                ],
                ];



            foreach ($array as $key => $value) {
                HolidayType::create($value);
             }
    }
}
