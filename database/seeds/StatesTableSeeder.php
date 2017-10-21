<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	State::unguard();
    	State::truncate();
        
    	$state = State::create(['state_name' => 'ပဲခူးတုိင္းေဒသျကီး',
    		'status' => 1,
    		'slug' => 'ပဲခူးတုိင္းေဒသျကီး'
    		]);
    	

    	$state = State::create(['state_name' => 'မန္းေလးတုိင္းေဒသျကီး',
    		'status' => 1,
    		'slug' => 'မန္းေလးတုိင္းေဒသျကီး'
    		]);
    	

    	$state = State::create(['state_name' => 'ရန္ကုန္တုိင္းေဒသျကီး',
    		'status' => 1,
    		'slug' => 'ရန္ကုန္တုိင္းေဒသျကီး'
    		]);
    	

    	$state = State::create(['state_name' => 'ဧရာ၀တီတုိင္းေဒသျကီး',
    		'status' => 1,
    		'slug' => 'ဧရာ၀တီတုိင္းေဒသျကီး'
    		]);
    	

    	$state = State::create(['state_name' => 'ကခ်င္ျပည္နယ္',
    		'status' => 1,
    		'slug' => 'ကခ်င္ျပည္နယ္'
    		]);
    	
    	
    	$state = State::create(['state_name' => 'ရွမ္းျပည္နယ္ေျမာက္ပိုင္း',
    		'status' => 1,
    		'slug' => 'ရွမ္းျပည္နယ္ေျမာက္ပိုင္း'
    		]);
    	

    	$state = State::create(['state_name' => 'မေကြးတိုင္း',
    		'status' => 1,
    		'slug' => 'မေကြးတိုင္း'
    		]);
    	

    	
    	$state = State::create(['state_name' => 'ေနျပည္ေတာ္ေကာင္စီ',
    		'status' => 1,
    		'slug' => 'ေနျပည္ေတာ္ေကာင္စီ'
    		]);
    	

    	$state = State::create(['state_name' => 'မြန္ျပည္နယ္',
    		'status' => 1,
    		'slug' => 'မြန္ျပည္နယ္'
    		]);
    	

    	$state = State::create(['state_name' => 'ရခုိင္ျပည္နယ္',
    		'status' => 1,
    		'slug' => 'ရခုိင္ျပည္နယ္'
    		]);    	

    	State::reguard();
    }
}
