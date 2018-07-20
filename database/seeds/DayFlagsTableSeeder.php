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
                ,'name'=>'Holiday'		
                ],
            [ 
            'flag'=> 2
            ,'name'=>'National day'		
            ],
            [ 
            'flag'=> 3
            ,'name'=>'Holiday & National Day'		
            ],
            [ 
                'flag'=> 4
                ,'name'=>'International Day'		
                ],
                [ 
                    'flag'=> 5
                    ,'name'=>'Holiday & International Day'		
                    ],
                    [ 
                        'flag'=> 6
                        ,'name'=>'National & International Day'		
                        ],
                        [ 
                            'flag'=> 7
                            ,'name'=>'Holiday, National Day & International Day'		
                            ],
                            [ 
                                'flag'=> 8
                                ,'name'=>'Birth day'		
                                ],
                                [ 
                                    'flag'=> 16
                                    ,'name'=>'Birth day'		
                                    ],
            ];
            foreach ($array as $key => $value) {
                DayFlag::create($value);
             }

    }
}
