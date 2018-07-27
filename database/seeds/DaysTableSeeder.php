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
            ,'date'=> '1952-02-21'	
            ,'isFixedDate'=> true
            ,'title'=>'শহীদ দিবস ও আন্তর্জাতিক মাতৃভাষা দিবস'	
            ,'dayCategory'=>'GNL'	
            ,'religionCode'=>'GNL'	
            ,'dayFlag'=>7
            ],
            
            [
            'dayKey'=> '17-MAR'
            ,'date'=> '1920-03-17'	
            ,'isFixedDate'=> true
            ,'title'=>'জাতির জনক বঙ্গবন্ধু শেখ মজিবুর রাহমান এর জন্ম দিন'
            ,'dayCategory'=>'GNL'
            ,'religionCode'=>'GNL'	
            ,'dayFlag'=>11
            ],
           
            ['dayKey'=> '26-MAR'
            ,'date'=> '1971-03-26'	
            ,'isFixedDate'=> true
                ,'title'=>'স্বাধীনতা ও জাতীয় দিবস'
                ,'dayCategory'=>'GNL'
                ,'religionCode'=>'GNL'	
                ,'dayFlag'=>3],
            
            ['dayKey'=> 'BN-NOBO',
            'date'=> '1920-04-14',	
            'isFixedDate'=> true,
                'title'=>'বাংলা নববর্ষ',
                'dayCategory'=>'GNL',
                'religionCode'=>'GNL',	
                'dayFlag'=>3
            ],
           
            ['dayKey'=> 'MAY-DAY',
            'date'=> '1920-05-1',
            'isFixedDate'=> true,	
            'title'=>'মে দিবস',
            'dayCategory'=>'GNL',
            'religionCode'=>'GNL',	
            'dayFlag'=>3
            ],
            
            ['dayKey'=> 'B-PURNIMA',
            'date'=> null,
            'title'=>'বুদ্ধ পূর্ণিমা',
            'dayCategory'=>'GNL',
            'religionCode'=>'GNL',	
            'dayFlag'=>1
            ],
            
            ['dayKey'=> 'EID-UL-FITAR',
            'date'=>null,	
            'title'=>'ঈদ-উল-ফিতর',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1  
            ],

            ['dayKey'=> 'SOBE-KADOR',
            'date'=> null,	
            'title'=>'শবে-কদর',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'JUMATUL-BIDAH',
            'date'=> null,	
            'title'=>'জুমা-তুল-বিদা',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SOBE-BORAT',
            'date'=> null,	
            'title'=>'শবে-বরাত',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
             ],
           
             ['dayKey'=> 'ASHURA',
             'date'=> null,	
            'title'=>'পবিত্র  আশুরা',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'DURGA-PUGA-10TH',
            'date'=> null,	
            'title'=>'শারদীয় দূর্গাপূজা (বিজয়া দশমী)',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'EID-UL-ADHA',
            'date'=> null,	
            'title'=>'ঈদ-উল-আযহা',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'JANMO-ASTOMI',
            'date'=> null,	
            'title'=>'শুভ জন্মাষ্টমী',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> '15-AUG',
            'date'=> '1975-08-15',	
            'isFixedDate'=> true,
            'title'=>'জাতীয় শোক দিবস', 
            'dayCategory'=>'GNL',
            'religionCode'=>'GNL',	
            'dayFlag'=>3
            ],

            ['dayKey'=> 'BORO-DIN',
            'date'=> '0000-12-25',	
            'isFixedDate'=> true,
            'title'=>'যীশু খ্রীষ্টের জন্মদিন (বড়দিন)',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> '16-DEC',
            'date'=> '1971-12-16',	
            'isFixedDate'=> true,
            'title'=>'বিজয় দিবস',
            'dayCategory'=>'GNL',
            'religionCode'=>'GNL',	
            'dayFlag'=>3
            ],

            ['dayKey'=> 'EID-E-MILADUN',
            'date'=> null,	
            'title'=>'ঈদ-ই-মিলাদুন্নবী (সাঃ)',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SOBE-MIRAZ',
            'date'=> null,	
            'title'=>'শব-ই-মিরাজ',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'FATEHA-E-YAJDAHUM',
            'date'=> null,	
            'title'=>'ফাতেহা-ই-ইয়াজদাহম',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'AKHERI-CAHAR-SOMBA',
            'date'=> null,	
            'title'=>'আখেরী চাহার সোম্বা',
            'dayCategory'=>'MLM',
            'religionCode'=>'MLM',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SOROSOTI-PUJA',
            'date'=> null,	
            'title'=>'শ্রী শ্রী সরস্বতী পূজা',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SHIBRATRI-BROTO',
            'date'=> null,	
            'title'=>'শ্রী শ্রী শিবরাত্রী ব্রত',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'DOL-JATRA',
            'date'=> null,	
            'title'=>'শুভ দোল যাত্রা',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'THAKUR-ABIRVAB',
            'date'=> null,	
            'title'=>'শ্রী শ্রী হরিচাঁদ ঠাকুরের আবির্ভাব',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'MOHALYA',
            'date'=> null,	
            'title'=>'শুভ মহালয়া',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'DURGA-PUGA-09TH',
            'date'=> null,	
            'title'=>'শ্রী শ্রী দূর্গাপূজা (মহানবমী)',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'LAKSHMI-PUJA',
            'date'=> null,	
            'title'=>'শ্রী শ্রী লক্ষ্মী পূজা',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'SHAMA-PUJA',
            'date'=> null,	
            'title'=>'শ্রী শ্রী শ্যামা পূজা',
            'dayCategory'=>'HDU',
            'religionCode'=>'HDU',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'EN-NOBO',
            'date'=> null,	
            'title'=>'ইংরেজী নববর্ষ',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'VOSMO-WED',
            'date'=> null,	
            'title'=>'ভস্ম বুধবার',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'PUNNO-THR',
            'date'=> null,	
            'title'=>'পূণ্য বৃহস্পতিবার',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'PUNNO-SAT',
            'date'=> null,	
            'title'=>'পূণ্য শনিবার',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'PUNNO-FRI',
            'date'=> null,	
            'title'=>'পূণ্য শুক্রবার',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],


            ['dayKey'=> 'ESTAR-SUN',
            'date'=> null,	
            'title'=>'ইস্টার সানডে',
            'dayCategory'=>'CRN',
            'religionCode'=>'CRN',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'M-PURNIMA',
            'date'=> null,	
            'title'=>'মাঘী পূর্ণিমা',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'CHYTRO-SOKGKRANTI',
            'date'=> null,	
            'title'=>'চৈত্র সংক্রান্তি',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'ASHARI-PURNIMA',
            'date'=> null,	
            'title'=>'আষাঢ়ী পূর্ণিমা',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'MODHU-PURNIMA',
            'date'=> null,	
            'title'=>'মধু পূর্ণিমা (ভাদ্র পূর্ণিমা)',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],
            ['dayKey'=> 'PROBARONA-PURNIMA',
            'date'=> null,	
            'title'=>'প্রবারণা পূর্ণিমা (আশ্বিনী পূর্ণিমা)',
            'dayCategory'=>'BDO',
            'religionCode'=>'BDO',	
            'dayFlag'=>1
            ],
            ['dayKey'=> 'OTHR',
            'date'=> null,	
            'title'=>'বৈসাবি ও পার্বত্য চট্টগ্রামের অন্যান্য ক্ষুদ্র নৃ-গোষ্ঠী সমূহের অনুরূপ সামাজিক উৎসব',
            'dayCategory'=>'OHR',
            'religionCode'=>'OHR',	
            'dayFlag'=>1
            ],

            ['dayKey'=> 'DURGA-PUGA-08TH',
            'date'=> null,	
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
