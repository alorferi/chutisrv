<?php

use Illuminate\Database\Seeder;
use App\Models\Day;
class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $table->string('dayKey')->unique();     
        // $table->string('title');
        // $table->string('description')->nullable(); 
        // $table->string('dayCategory',3);
        // $table->integer('dayFlag');  
        $array = [
            [ 
            'dayKey'=> '21-FEB'
            ,'title'=>'শহীদ দিবস ও আন্তর্জাতিক মাতৃভাষা দিবস'		
            ,'dayCategory'=>'GNL'	
            ,'religionCode'=>'GNL'	
            ,'dayFlag'=>3
            ],
            
            [
            'dayKey'=> '17-MAR'
            ,'title'=>'জাতির জনক বঙ্গবন্ধু শেখ মজিবুর রাহমান এর জন্ম দিন'
            ,'dayCategory'=>'GNL'
            ,'religionCode'=>'GNL'	
            ,'dayFlag'=>3
            ],
           
            ['dayKey'=> '26-MAR'
                ,'title'=>'স্বাধীনতা ও জাতীয় দিবস'
                ,'dayCategory'=>'GNL'
                ,'religionCode'=>'GNL'	
                ,'dayFlag'=>3],
            
            ['dayKey'=> 'BN-NOBO',
                'title'=>'বাংলা নববর্ষ',
                'dayCategory'=>'GNL',
                'religionCode'=>'GNL',	
                'dayFlag'=>3
            ],
           
            ['dayKey'=> 'MAY-DAY',
            'title'=>'মে দিবস',
            'dayCategory'=>'GNL',
            'religionCode'=>'GNL',	
            'dayFlag'=>3
            ],
            
            ['dayKey'=> 'B-PURNIMA',
            'title'=>'বুদ্ধ পূর্ণিমা',
            'dayCategory'=>'GNL',
            'religionCode'=>'GNL',	
            'dayFlag'=>1
            ],
            
            ['dayKey'=> 'EID-UL-FITAR',
            'title'=>'ঈদ-উল-ফিতর',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1  
            ],

            ['dayKey'=> 'SOBE-KADOR',
            'title'=>'শবে-কদর',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'JUMATUL-BIDAH',
            'title'=>'জুমা-তুল-বিদা',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SOBE-BORAT',
            'title'=>'শবে-বরাত',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
             ],
           
             ['dayKey'=> 'ASHURA',
            'title'=>'পবিত্র  আশুরা',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'DURGA-PUGA-10TH',
            'title'=>'শারদীয় দূর্গাপূজা (বিজয়া দশমী)',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'EID-UL-ADHA',
            'title'=>'ঈদ-উল-আযহা',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'JANMO-ASTOMI',
            'title'=>'শুভ জন্মাষ্টমী',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> '15-AUG',
            'title'=>'জাতীয় শোক দিবস',
            'dayCategory'=>'GNL',
            'religionCode'=>'GNL',	
            'dayFlag'=>3
            ],

            ['dayKey'=> 'BORO-DIN',
            'title'=>'যীশু খ্রীষ্টের জন্মদিন (বড়দিন)',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> '16-DEC',
            'title'=>'বিজয় দিবস',
            'dayCategory'=>'GNL',
            'religionCode'=>'GNL',	
            'dayFlag'=>3
            ],

            ['dayKey'=> 'EID-E-MILADUN',
            'title'=>'ঈদ-ই-মিলাদুন্নবী (সাঃ)',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SOBE-MIRAZ',
            'title'=>'শব-ই-মিরাজ',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'FATEHA-E-YAJDAHUM',
            'title'=>'ফাতেহা-ই-ইয়াজদাহম',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'AKHERI-CAHAR-SOMBA',
            'title'=>'আখেরী চাহার সোম্বা',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SOROSOTI-PUJA',
            'title'=>'শ্রী শ্রী সরস্বতী পূজা',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SHIBRATRI-BROTO',
            'title'=>'শ্রী শ্রী শিবরাত্রী ব্রত',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'DOL-JATRA',
            'title'=>'শুভ দোল যাত্রা',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'THAKUR-ABIRVAB',
            'title'=>'শ্রী শ্রী হরিচাঁদ ঠাকুরের আবির্ভাব',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'MOHALYA',
            'title'=>'শুভ মহালয়া',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'DURGA-PUGA-09TH',
            'title'=>'শ্রী শ্রী দূর্গাপূজা (মহানবমী)',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'LAKSHMI-PUJA',
            'title'=>'শ্রী শ্রী লক্ষ্মী পূজা',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SHAMA-PUJA',
            'title'=>'শ্রী শ্রী শ্যামা পূজা',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'EN-NOBO',
            'title'=>'ইংরেজী নববর্ষ',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'VOSMO-WED',
            'title'=>'ভস্ম বুধবার',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'PUNNO-THR',
            'title'=>'পূণ্য বৃহস্পতিবার',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'PUNNO-SAT',
            'title'=>'পূণ্য শনিবার',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'PUNNO-FRI',
            'title'=>'পূণ্য শুক্রবার',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],


            ['dayKey'=> 'ESTAR-SUN',
            'title'=>'ইস্টার সানডে',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'M-PURNIMA',
            'title'=>'মাঘী পূর্ণিমা',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'CHYTRO-SOKGKRANTI',
            'title'=>'চৈত্র সংক্রান্তি',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'ASHARI-PURNIMA',
            'title'=>'আষাঢ়ী পূর্ণিমা',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'MODHU-PURNIMA',
            'title'=>'মধু পূর্ণিমা (ভাদ্র পূর্ণিমা)',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],
            ['dayKey'=> 'PROBARONA-PURNIMA',
            'title'=>'প্রবারণা পূর্ণিমা (আশ্বিনী পূর্ণিমা)',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],
            ['dayKey'=> 'OTHR',
            'title'=>'বৈসাবি ও পার্বত্য চট্টগ্রামের অন্যান্য ক্ষুদ্র নৃ-গোষ্ঠী সমূহের অনুরূপ সামাজিক উৎসব',
            'dayCategory'=>'OHR',
            'religionCode'=>'OHR',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'DURGA-PUGA-08TH',
            'title'=>'শ্রী শ্রী দূর্গাপূজা (মহাষ্টমী)',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',
            'dayFlag'=>1
            ],



        ];

        foreach ($array as $key => $value) {
            Day::create($value);
         }
    }
}
