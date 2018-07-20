<?php

use Illuminate\Database\Seeder;

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
            ,'dayFlag'=>3
            ],
            
            [
            'dayKey'=> '17-MAR'
            ,'title'=>'জাতির জনক বঙ্গবন্ধু শেখ মজিবুর রাহমান এর জন্ম দিন'
            ,'dayCategory'=>'GNL'
            ,'dayFlag'=>3
            ],
        ];

// 26-MAR	স্বাধীনতা ও জাতীয় দিবস		GNL	3
// BN-NOBO	বাংলা নববর্ষ		GNL	3
// MAY-DAY	মে দিবস		GNL	5
// B-PURNIMA	বুদ্ধ পূর্ণিমা		BDO	1
// EID-UL-FITAR	ঈদ-উল-ফিতর		MLM	1
// SOBE-KADOR	শবে-কদর		MLM	1
// JUMATUL-BIDAH	জুমা-তুল-বিদা		MLM	1
// SOBE-BORAT	শবে-বরাত		MLM	1
// ASHURA	পবিত্র  আশুরা		MLM	1
// DURGA-PUGA-10TH	শারদীয় দূর্গাপূজা (বিজয়া দশমী)		HDU	1
// EID-UL-ADHA	ঈদ-উল-আযহা		MLM	1
// JANMO-ASTOMI	শুভ জন্মাষ্টমী		HDU	1
// 15-AUG	জাতীয় শোক দিবস		GNL	3
// BORO-DIN	যীশু খ্রীষ্টের জন্মদিন (বড়দিন)		CRN	1
// 16-DEC	বিজয় দিবস		GNL	3
// EID-E-MILADUN	ঈদ-ই-মিলাদুন্নবী (সাঃ)		MLM	1
// SOBE-MIRAZ	শব-ই-মিরাজ		MLM	1
// FATEHA-E-YAJDAHUM	ফাতেহা-ই-ইয়াজদাহম		MLM	1
// AKHERI-CAHAR-SOMBA	আখেরী চাহার সোম্বা		MLM	1
// SOROSOTI-PUJA	শ্রী শ্রী সরস্বতী পূজা		HDU	1
// SHIBRATRI-BROTO	শ্রী শ্রী শিবরাত্রী ব্রত		HDU	1
// DOL-JATRA	শুভ দোল যাত্রা		HDU	1
// THAKUR-ABIRVAB	শ্রী শ্রী হরিচাঁদ ঠাকুরের আবির্ভাব		HDU	1
// MOHALYA	শুভ মহালয়া		HDU	1
// DURGA-PUGA-09TH	শ্রী শ্রী দূর্গাপূজা (মহানবমী)		HDU	1
// LAKSHMI-PUJA	শ্রী শ্রী লক্ষ্মী পূজা		HDU	1
// SHAMA-PUJA	শ্রী শ্রী শ্যামা পূজা		HDU	1
// EN-NOBO	"ইংরেজী নববর্ষ	"		CRN	1
// VOSMO-WED	ভস্ম বুধবার		CRN	1
// PUNNO-THR	পূণ্য বৃহস্পতিবার		CRN	1
// PUNNO-SAT	পূণ্য শনিবার		CRN	1
// PUNNO-FRI	পূণ্য শুক্রবার		CRN	1
// ESTAR-SUN	ইস্টার সানডে		CRN	1
// M-PURNIMA	মাঘী পূর্ণিমা		BDO	1
// CHYTRO-SOKGKRANTI	চৈত্র সংক্রান্তি		BDO	1
// ASHARI-PURNIMA	আষাঢ়ী পূর্ণিমা		BDO	1
// MODHU-PURNIMA	মধু পূর্ণিমা (ভাদ্র পূর্ণিমা)		BDO	1
// PROBARONA-PURNIMA	প্রবারণা পূর্ণিমা (আশ্বিনী পূর্ণিমা)		BDO	1
// OTHR	বৈসাবি ও পার্বত্য চট্টগ্রামের অন্যান্য ক্ষুদ্র নৃ-গোষ্ঠী সমূহের অনুরূপ সামাজিক উৎসব		"	OHR"	1
// DURGA-PUGA-08TH	শ্রী শ্রী দূর্গাপূজা (মহাষ্টমী)		HDU	1
    }
}
