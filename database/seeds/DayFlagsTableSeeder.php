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
        // $table->bigInteger('flag')->primary();
        // $table->string('name');

        $array = [
            [ 
                'flag'=> 1
                ,'name_en'=>'Holiday'		
                ,'name_bn'=>'ছুটির দিন'		
                ,'display_order'=>0		
                ],
            [ 
            'flag'=> 2
            ,'name_en'=>'National day'
            ,'name_bn'=>'জাতীয় দিবস'
            ,'display_order'=>2						
            ],
            // [ 
            // 'flag'=> 3
            // ,'name'=>'Holiday & National Day'		
            // ],
            [ 
                'flag'=> 4
                ,'name_en'=>'International Day'	
                ,'name_bn'=>'আন্তর্জাতিক দিবস'
                ,'display_order'=>1					
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
                                ,'display_order'=>3					
                                ],
                                // [ 
                                //     'flag'=> 11
                                //     ,'name'=>'Holiday, National day & Birthdayday'		
                                //     ],
                                [ 
                                    'flag'=> 16
                                    ,'name_en'=>'Day of Death'		
                                    ,'name_bn'=>'মৃত্যুর দিন'	
                                    ,'display_order'=>4			
                                    ],
                                    [ 
                                        'flag'=> 32
                                        ,'name_en'=>'Events'		
                                        ,'name_bn'=>'ঘটনাবলী'	
                                        ,'display_order'=>5			
                                        ],
            ];
            foreach ($array as $key => $value) {
                DayFlag::create($value);
             }

    }
}
