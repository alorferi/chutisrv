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
    

// XU	*	2017-09-01	EID-UL-ADHA
// GN	*	2017-09-02	EID-UL-ADHA
// XU	*	2017-09-03	EID-UL-ADHA
// GN		2017-08-14	JANMO-ASTOMI
// GN		2017-08-15	15-AUG
// GN		2017-12-25	BORO-DIN
// GN		2017-12-16	16-DEC
// GN		2017-12-01	EID-E-MILADUN
// GN		2018-03-17	17-MAR
// GN		2018-03-26	26-MAR
// XU		2018-04-14	BN-NOBO
// GN		2018-05-01	MAY-DAY
// GN		2018-04-29	B-PURNIMA
// XU		2018-06-15	EID-UL-FITAR
// GN		2018-06-16	EID-UL-FITAR
// XU		2018-06-17	EID-UL-FITAR
// XU		2018-06-12	SOBE-KADOR
// GN		2018-06-15	JUMATUL-BIDAH
// XU		2018-09-21	ASHURA
// XH		2017-09-29	DURGA-PUGA-09TH
// XU		2018-08-23	EID-UL-ADHA
// GN		2018-08-22	EID-UL-ADHA
// XU		2018-08-21	EID-UL-ADHA
// GN		2018-09-02	JANMO-ASTOMI
// GN		2018-08-15	15-AUG
// GN		2018-12-25	BORO-DIN
// GN		2018-12-16	16-DEC
// GN		2018-11-21	EID-E-MILADUN
// XU		2018-05-02	SOBE-BORAT
// XM	*	2017-04-25	SOBE-MIRAZ
// XM	*	2017-01-10	FATEHA-E-YAJDAHUM
// XU	*	2017-06-23	SOBE-KADOR
// XM	*	2017-06-28	EID-UL-FITAR
// XM	*	2017-09-04	EID-UL-ADHA
// XM	*	2017-11-15	AKHERI-CAHAR-SOMBA
// XM	*	2017-12-30	FATEHA-E-YAJDAHUM
// XH		2017-02-01	SOROSOTI-PUJA
// XH		2017-02-24	SHIBRATRI-BROTO
// XH		2017-03-12	DOL-JATRA
// XH		2017-03-26	THAKUR-ABIRVAB
// XH		2017-09-19	MOHALYA
// XH		2017-10-05	LAKSHMI-PUJA
// XH		2017-10-19	SHAMA-PUJA
// XC		2017-01-01	EN-NOBO
// XC		2017-04-14	PUNNO-FRI
// XC		2017-04-13	PUNNO-THR
// XC		2017-03-01	VOSMO-WED
// XC		2017-04-15	PUNNO-SAT
// XC		2017-04-16	ESTAR-SUN
// XC		2017-12-26	BORO-DIN
// XC		2017-12-24	BORO-DIN
// XB		2017-04-13	CHYTRO-SOKGKRANTI
// XB		2017-02-10	M-PURNIMA
// XB		2017-10-04	PROBARONA-PURNIMA
// XB		2017-09-05	MODHU-PURNIMA
// XB		2017-06-08	ASHARI-PURNIMA
// XO		2017-04-15	OTHR
// XO		2017-04-12	OTHR
// XC		2018-12-24	BORO-DIN
// XC		2018-12-26	BORO-DIN
// GN		2018-10-19	DURGA-PUGA-10TH
// GN		2018-02-21	21-FEB
// XM		2018-01-10	FATEHA-E-YAJDAHUM
// XM		2018-04-15	SOBE-MIRAZ
// XM		2018-06-16	EID-UL-FITAR
// XM		2018-08-22	EID-UL-ADHA
// XM		2018-11-07	AKHERI-CAHAR-SOMBA
// XM		2018-12-30	FATEHA-E-YAJDAHUM
// XH		2018-01-22	SOROSOTI-PUJA
// XH		2018-02-14	SHIBRATRI-BROTO
// XH		2018-03-01	DOL-JATRA
// XH		2018-03-15	THAKUR-ABIRVAB
// XH		2018-10-08	MOHALYA
// XH		2018-10-18	DURGA-PUGA-09TH
// XH		2018-10-24	LAKSHMI-PUJA
// XH		2018-11-06	SHAMA-PUJA
// XH		2018-10-17	DURGA-PUGA-08TH
// XC		2018-01-01	EN-NOBO
// XC		2018-03-01	VOSMO-WED
// XC		2018-04-13	PUNNO-THR
// XC		2018-04-14	PUNNO-FRI
// XC		2018-04-15	PUNNO-SAT
// XC		2018-04-16	ESTAR-SUN
// GN		2018-12-25	BORO-DIN
// XB		2018-01-31	M-PURNIMA
// XB		2018-04-13	CHYTRO-SOKGKRANTI
// XB		2018-07-27	ASHARI-PURNIMA
// XB		2018-09-25	MODHU-PURNIMA
// XB		2018-10-24	PROBARONA-PURNIMA


foreach ($array as $key => $value) {
    $day = Day::where('dayKey','=',$value['dayKey'])->first();
    $value['dayId'] = $day->id;
    DayDate::create($value);
 }

    }
}
