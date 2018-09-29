<?php

use Illuminate\Database\Seeder;
use App\Models\DayFlag;

class DayFlagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->integer('flag')->primary();
        // $table->string('name');

        $array = [
            [ 
                'flag'=> 1
                ,'name_en'=>'Holiday'		
                ,'name_bn'=>'ছুটির দিন'		
                ],
            [ 
            'flag'=> 2
            ,'name_en'=>'National day'
            ,'name_bn'=>'জাতীয় দিবস'				
            ],
            // [ 
            // 'flag'=> 3
            // ,'name'=>'Holiday & National Day'		
            // ],
            [ 
                'flag'=> 4
                ,'name_en'=>'International Day'	
                ,'name_bn'=>'আন্তর্জাতিক দিবস'			
                ],
                // [ 
                //     'flag'=> 5
                //     ,'name'=>'Holiday & International Day'		
                //     ],
                    // [ 
                    //     'flag'=> 6
                    //     ,'name'=>'National & International Day'		
                    //     ],
                    //     [ 
                    //         'flag'=> 7
                    //         ,'name'=>'Holiday, National Day & International Day'		
                    //         ],
                            [ 
                                'flag'=> 8
                                ,'name_en'=>'Date of Birth'	
                                ,'name_bn'=>'জন্ম দিন'			
                                ],
                                // [ 
                                //     'flag'=> 11
                                //     ,'name'=>'Holiday, National day & Birthdayday'		
                                //     ],
                                [ 
                                    'flag'=> 16
                                    ,'name_en'=>'Day of Death'		
                                    ,'name_bn'=>'মৃত্যুর দিন'		
                                    ],
            ];
            foreach ($array as $key => $value) {
                DayFlag::create($value);
             }

    }
}
