<?php

use Illuminate\Database\Seeder;
use App\Models\DayDate;
use App\Models\Day;

class DayDatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // $table->string('holidayCode',2);
            // $table->foreign('holidayCode')->references('code')->on('holidaytypes')->onUpdate('cascade');  
            // $table->string('stared',1)->nullable();
            // $table->date('dayDate');     
            // $table->string('dayKey');

            $array = [
                [ 
                    'holidayCode'=> 'GN'
                    ,'stared'=>null
                    ,'dayDate'=>'2017-02-21'	
                    ,'dayKey'=>'21-FEB'		
                    ], 
                    [ 
                        'holidayCode'=> 'GN'
                        ,'stared'=>null
                        ,'dayDate'=>'2017-03-17'
                        ,'dayKey'=>'17-MAR'		
                        ],
                        [ 
                            'holidayCode'=> 'GN'
                            ,'stared'=>null
                            ,'dayDate'=>'2017-03-26'	
                            ,'dayKey'=>'26-MAR'		
                            ],
                            [ 
                                'holidayCode'=> 'XU'
                                ,'stared'=>null
                                ,'dayDate'=>'2017-04-14'	
                                ,'dayKey'=>'BN-NOBO'		
                                ],
                                [
                                    'holidayCode'=> 'GN'
                                    ,'stared'=>null
                                    ,'dayDate'=>'2017-05-01'	
                                    ,'dayKey'=>'MAY-DAY'		
                                    ],
                                    [
                                        'holidayCode'=> 'GN'
                                        ,'stared'=>'*'
                                        ,'dayDate'=>'2017-05-10'	
                                        ,'dayKey'=>'B-PURNIMA'		
                                        ],
                    [
                        'holidayCode'=> 'GN'
                        ,'stared'=>'*'
                        ,'dayDate'=>'2017-06-26'	
                        ,'dayKey'=>'EID-UL-FITAR'		
                        ],
                        [
                            'holidayCode'=> 'XU'
                            ,'stared'=>'*'
                            ,'dayDate'=>'2017-06-27'	
                            ,'dayKey'=>'EID-UL-FITAR'		
                            ],
                            [
                                'holidayCode'=> 'XU'
                                ,'stared'=>'*'
                                ,'dayDate'=>'2017-06-25'	
                                ,'dayKey'=>'EID-UL-FITAR'		
                                ],
                [
                    'holidayCode'=> 'GN'
                    ,'stared'=>null
                    ,'dayDate'=>'2017-06-23'	
                    ,'dayKey'=>'JUMATUL-BIDAH'		
                    ],
                    [
                        'holidayCode'=> 'XU'
                        ,'stared'=>'*'
                        ,'dayDate'=>'2017-05-12'	
                        ,'dayKey'=>'SOBE-BORAT'		
                        ],
                        [
                            'holidayCode'=> 'XU'
                            ,'stared'=>'*'
                            ,'dayDate'=>'2017-10-01'	
                            ,'dayKey'=>'ASHURA'		
                            ],
            [
                'holidayCode'=> 'GN'
                ,'stared'=>null
                ,'dayDate'=>'2017-09-30'	
                ,'dayKey'=>'DURGA-PUGA-10TH'		
                ],
                [
                    'holidayCode'=> 'XU'
                    ,'stared'=>'*'
                    ,'dayDate'=>'2017-09-01'	
                    ,'dayKey'=>'EID-UL-ADHA'		
                    ],
                    [
                        'holidayCode'=> 'GN'
                        ,'stared'=>'*'
                        ,'dayDate'=>'2017-09-02'	
                        ,'dayKey'=>'EID-UL-ADHA'		
                        ],
                         [
            'holidayCode'=> 'XU'
            ,'stared'=>'*'
            ,'dayDate'=>'2017-09-03'	
            ,'dayKey'=>'EID-UL-ADHA'		
            ],
            [
                'holidayCode'=> 'GN'
                ,'stared'=>null
                ,'dayDate'=>'2017-08-14'	
                ,'dayKey'=>'JANMO-ASTOMI'		
                ],
                [
            'holidayCode'=> 'GN'
            ,'stared'=>null
            ,'dayDate'=>'2017-08-14'	
            ,'dayKey'=>'JANMO-ASTOMI'		
            ],
            [
                'holidayCode'=> 'GN'
                ,'stared'=>null
                ,'dayDate'=>'2017-08-15'	
                ,'dayKey'=>'15-AUG'		
                ],
                [
                'holidayCode'=> 'GN'
                ,'stared'=>null
                ,'dayDate'=>'2017-12-25'	
                ,'dayKey'=>'BORO-DIN'		
                ],
                [
                    'holidayCode'=> 'GN'
                    ,'stared'=>null
                    ,'dayDate'=>'2017-12-16'	
                    ,'dayKey'=>'16-DEC'		
                    ],
                    [
                        'holidayCode'=> 'GN'
                        ,'stared'=>null
                        ,'dayDate'=>'2017-12-01'	
                        ,'dayKey'=>'EID-E-MILADUN'		
                        ],
                        [
                            'holidayCode'=> 'GN'
                            ,'stared'=>null
                            ,'dayDate'=>'2018-03-17'	
                            ,'dayKey'=>'17-MAR'		
                            ],
                            [
                                'holidayCode'=> 'GN'
                                ,'stared'=>null
                                ,'dayDate'=>'2018-03-26'	
                                ,'dayKey'=>'26-MAR'		
],
[
'holidayCode'=> 'XU'
,'stared'=>null
,'dayDate'=>'2018-04-14'	
,'dayKey'=>'BN-NOBO'		
],
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-05-01'	
,'dayKey'=>'MAY-DAY'		
],
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-04-29'	
,'dayKey'=>'B-PURNIMA'		
],
[
'holidayCode'=> 'XU'
,'stared'=>null
,'dayDate'=>'2018-06-15'	
,'dayKey'=>'EID-UL-FITAR'		
],
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-06-16'	
,'dayKey'=>'EID-UL-FITAR'		
],
[
'holidayCode'=> 'XU'
,'stared'=>null
,'dayDate'=>'2018-06-17'	
,'dayKey'=>'EID-UL-FITAR'		
],
[
'holidayCode'=> 'XU'
,'stared'=>null
,'dayDate'=>'2018-06-12'	
,'dayKey'=>'SOBE-KADOR'		
],
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-06-15'	
,'dayKey'=>'JUMATUL-BIDAH'		
],
[
'holidayCode'=> 'XU'
,'stared'=>null
,'dayDate'=>'2018-09-21'	
,'dayKey'=>'ASHURA'		
],
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2018-06-15'	
,'dayKey'=>'JUMATUL-BIDAH'		
],
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2017-09-29'	
,'dayKey'=>'DURGA-PUGA-09TH'		
],
 [
    'holidayCode'=> 'XU'
    ,'stared'=>null
    ,'dayDate'=>'2018-08-23'	
    ,'dayKey'=>'EID-UL-ADHA'		
    ],
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-08-22'	
,'dayKey'=>'EID-UL-ADHA'		
],
[
'holidayCode'=> 'XU'
,'stared'=>null
,'dayDate'=>'2018-08-21'	
,'dayKey'=>'EID-UL-ADHA'		
],
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-09-02'	
,'dayKey'=>'JANMO-ASTOMI'		
],
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-08-15'	
,'dayKey'=>'15-AUG'		
],
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-12-25'	
,'dayKey'=>'BORO-DIN'		
],
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-12-16'	
,'dayKey'=>'16-DEC'		
],  
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-11-21'	
,'dayKey'=>'EID-E-MILADUN'		
],  
[
'holidayCode'=> 'XU'
,'stared'=>null
,'dayDate'=>'2018-05-02'	
,'dayKey'=>'SOBE-BORAT'		
],
[
'holidayCode'=> 'XM'
,'stared'=>'*'
,'dayDate'=>'2017-04-25'	
,'dayKey'=>'SOBE-MIRAZ'		
], 
[
'holidayCode'=> 'XM'
,'stared'=>'*'
,'dayDate'=>'2017-01-10'	
,'dayKey'=>'FATEHA-E-YAJDAHUM'		
],
[
'holidayCode'=> 'XU'
,'stared'=>'*'
,'dayDate'=>'2017-06-23'	
,'dayKey'=>'SOBE-KADOR'		
],
[
'holidayCode'=> 'XM'
,'stared'=>'*'
,'dayDate'=>'2017-06-28'	
,'dayKey'=>'EID-UL-FITAR'		
],
[
'holidayCode'=> 'XM'
,'stared'=>'*'
,'dayDate'=>'2017-09-04'	
,'dayKey'=>'EID-UL-FITAR'		
],
[
'holidayCode'=> 'XM'
,'stared'=>'*'
,'dayDate'=>'2017-11-15'	
,'dayKey'=>'AKHERI-CAHAR-SOMBA'		
], 
[
'holidayCode'=> 'XM'
,'stared'=>'*'
,'dayDate'=>'2017-12-30'	
,'dayKey'=>'FATEHA-E-YAJDAHUM'		
],        
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2017-02-01'	
,'dayKey'=>'SOROSOTI-PUJA'		
],            
[
    'holidayCode'=> 'XH'
    ,'stared'=>null
    ,'dayDate'=>'2017-02-24'	
    ,'dayKey'=>'SHIBRATRI-BROTO'		
    ],
    [
        'holidayCode'=> 'XH'
        ,'stared'=>null
        ,'dayDate'=>'2017-03-12'	
        ,'dayKey'=>'DOL-JATRA'		
        ], 
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2017-03-26'	
,'dayKey'=>'THAKUR-ABIRVAB'		
], 
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2017-09-19'	
,'dayKey'=>'MOHALYA'		
], 
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2017-10-05'	
,'dayKey'=>'LAKSHMI-PUJA'		
], 
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2017-10-19'	
,'dayKey'=>'SHAMA-PUJA'		
], 
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2017-01-01'	
,'dayKey'=>'EN-NOBO'		
], 
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2017-04-14'	
,'dayKey'=>'PUNNO-FRI'		
], 
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2017-04-13'	
,'dayKey'=>'PUNNO-THR'		
], 
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2017-03-01'	
,'dayKey'=>'VOSMO-WED'		
], 
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2017-04-15'	
,'dayKey'=>'PUNNO-SAT'		
],
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2017-04-16'	
,'dayKey'=>'ESTAR-SUN'		
],   
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2017-12-26'	
,'dayKey'=>'BORO-DIN'		
],
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2017-12-24'	
,'dayKey'=>'BORO-DIN'		
],
[
'holidayCode'=> 'XB'
,'stared'=>null
,'dayDate'=>'2017-04-13'	
,'dayKey'=>'CHYTRO-SOKGKRANTI'		
], 
[
'holidayCode'=> 'XB'
,'stared'=>null
,'dayDate'=>'2017-02-10'	
,'dayKey'=>'M-PURNIMA'		
],
[
'holidayCode'=> 'XB'
,'stared'=>null
,'dayDate'=>'2017-10-04'	
,'dayKey'=>'PROBARONA-PURNIMA'		
],  
[
'holidayCode'=> 'XB'
,'stared'=>null
,'dayDate'=>'2017-09-05'	
,'dayKey'=>'MODHU-PURNIMA'		
],                    
[
'holidayCode'=> 'XB'
,'stared'=>null
,'dayDate'=>'2017-06-08'	
,'dayKey'=>'ASHARI-PURNIMA'		
],       
[
    'holidayCode'=> 'XO'
    ,'stared'=>null
    ,'dayDate'=>'2017-04-15'	
    ,'dayKey'=>'OTHR'		
    ],   
    [
    'holidayCode'=> 'XO'
    ,'stared'=>null
    ,'dayDate'=>'2017-04-15'	
    ,'dayKey'=>'OTHR'		
    ],   
    [
        'holidayCode'=> 'XO'
        ,'stared'=>null
        ,'dayDate'=>'2017-04-12'	
        ,'dayKey'=>'OTHR'		
        ],   
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2018-12-24'	
,'dayKey'=>'OTHR'		
],   
[
'holidayCode'=> 'XC'
,'stared'=>null
,'dayDate'=>'2018-12-26'	
,'dayKey'=>'BORO-DIN'		
], 
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-10-19'	
,'dayKey'=>'DURGA-PUGA-10TH'		
],  
[
'holidayCode'=> 'GN'
,'stared'=>null
,'dayDate'=>'2018-02-21'	
,'dayKey'=>'21-FEB'		
], 
[
'holidayCode'=> 'XM'
,'stared'=>null
,'dayDate'=>'2018-01-10'	
,'dayKey'=>'FATEHA-E-YAJDAHUM'		
], 
[
'holidayCode'=> 'XM'
,'stared'=>null
,'dayDate'=>'2018-04-15'	
,'dayKey'=>'SOBE-MIRAZ'		
],   

[
'holidayCode'=> 'XM'
,'stared'=>null
,'dayDate'=>'2018-05-16'	
,'dayKey'=>'EID-UL-FITAR'		
], 
[
'holidayCode'=> 'XM'
,'stared'=>null
,'dayDate'=>'2018-08-22'	
,'dayKey'=>'EID-UL-ADHA'		
],           
[
'holidayCode'=> 'XM'
,'stared'=>null
,'dayDate'=>'2018-11-07'	
,'dayKey'=>'AKHERI-CAHAR-SOMBA'		
],
[
'holidayCode'=> 'XM'
,'stared'=>null
,'dayDate'=>'2018-12-30'	
,'dayKey'=>'FATEHA-E-YAJDAHUM'		
],
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2018-01-22'	
,'dayKey'=>'SOROSOTI-PUJA'		
],    
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2018-02-14'	
,'dayKey'=>'SHIBRATRI-BROTO'		
],
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2018-03-01'	
,'dayKey'=>'DOL-JATRA'		
],
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2018-03-15'	
,'dayKey'=>'THAKUR-ABIRVAB'		
],
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2018-10-08'	
,'dayKey'=>'MOHALYA'		
],
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2018-10-18'	
,'dayKey'=>'DURGA-PUGA-09TH'		
],
[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2018-10-24'	
,'dayKey'=>'LAKSHMI-PUJA'		
],

[
'holidayCode'=> 'XH'
,'stared'=>null
,'dayDate'=>'2018-11-06'	
,'dayKey'=>'SHAMA-PUJA'		
],
[
    'holidayCode'=> 'XH'
    ,'stared'=>null
    ,'dayDate'=>'2018-10-17'	
    ,'dayKey'=>'DURGA-PUGA-08TH'
    ],	
    [
        'holidayCode'=> 'XC'
        ,'stared'=>null
        ,'dayDate'=>'2018-01-01'	
        ,'dayKey'=>'EN-NOBO'
        ],	
        [
            'holidayCode'=> 'XC'
            ,'stared'=>null
            ,'dayDate'=>'2018-03-01'	
            ,'dayKey'=>'VOSMO-WED'
            ],	
            [
                'holidayCode'=> 'XC'
                ,'stared'=>null
                ,'dayDate'=>'2018-04-13'	
                ,'dayKey'=>'PUNNO-THR'
                ],	
                [
                    'holidayCode'=> 'XC'
                    ,'stared'=>null
                    ,'dayDate'=>'2018-04-14'	
                    ,'dayKey'=>'PUNNO-FRI'	
                    ],
                    [
                        'holidayCode'=> 'XC'
                        ,'stared'=>null
                        ,'dayDate'=>'2018-04-15'	
                        ,'dayKey'=>'PUNNO-SAT'
                        ],	
                        [
                            'holidayCode'=> 'XC'
                            ,'stared'=>null
                            ,'dayDate'=>'2018-04-16'	
                            ,'dayKey'=>'ESTAR-SUN'
                            ],	
                            [
                                'holidayCode'=> 'GN'
                                ,'stared'=>null
                                ,'dayDate'=>'2018-12-25'	
                                ,'dayKey'=>'BORO-DIN'
                                ],	
                                [
                                    'holidayCode'=> 'XB'
                                    ,'stared'=>null
                                    ,'dayDate'=>'2018-01-31'	
                                    ,'dayKey'=>'M-PURNIMA'
                                    ],	
                                    [
                                        'holidayCode'=> 'XB'
                                        ,'stared'=>null
                                        ,'dayDate'=>'2018-04-13'	
                                        ,'dayKey'=>'CHYTRO-SOKGKRANTI'
                                        ],	
                                        [
                                            'holidayCode'=> 'XB'
                                            ,'stared'=>null
                                            ,'dayDate'=>'2018-07-27'	
                                            ,'dayKey'=>'ASHARI-PURNIMA'
                                            ],	
                                            [
                                                'holidayCode'=> 'XB'
                                                ,'stared'=>null
                                                ,'dayDate'=>'2018-09-25'	
                                                ,'dayKey'=>'MODHU-PURNIMA'
                                                ],	
                                                [
                                                    'holidayCode'=> 'XU'
                                                    ,'stared'=>'*'
                                                    ,'dayDate'=>'2017-06-25'	
                                                    ,'dayKey'=>'EID-UL-FITAR'		
                                                    ],
                                                    [
                                                        'holidayCode'=> 'GN'
                                                        ,'stared'=>null
                                                        ,'dayDate'=>'2017-06-23'	
                                                        ,'dayKey'=>'JUMATUL-BIDAH'		
                                                        ],
                                                        [
                                                            'holidayCode'=> 'XU'
                                                            ,'stared'=>'*'
                                                            ,'dayDate'=>'2017-05-12'	
                                                            ,'dayKey'=>'SOBE-BORAT'		
                                                            ],
                                                            [
                                                                'holidayCode'=> 'XU'
                                                                ,'stared'=>'*'
                                                                ,'dayDate'=>'2017-10-01'	
                                                                ,'dayKey'=>'ASHURA'		
                                                                ],
                                                                [
                                                                    'holidayCode'=> 'GN'
                                                                    ,'stared'=>null
                                                                    ,'dayDate'=>'2017-09-30'	
                                                                    ,'dayKey'=>'DURGA-PUGA-10TH'		
                                                                    ],
                                                                ];
    



foreach ($array as $key => $value) {
    $day = Day::where('dayKey','=',$value['dayKey'])->first();
  
    if($day)
    $value['dayId'] = $day->id;
    DayDate::create($value);
 }

    }
}
