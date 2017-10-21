<?php

use Illuminate\Database\Seeder;
use App\State;
use App\City;

class TownshipAndStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$theString = $this->getTownship();
    	
    	State::unguard();
    	State::truncate();
    	City::unguard();
    	City::truncate();

    	foreach ($theString as $key => $value) {



    		if( count(State::where('state_name',$value->StateRegion)->get()) < 1 )
    		{
    			$state = State::create(['state_name' => $value->StateRegion,
    				'status' => 1,
    				'slug' =>  str_slug($value->StateRegion,"-")
    				]);
    		}

    		$city = City::create([
    			'city_name' => $value->MyoNel,
    			'state_id' => $state->id,           
    			'slug' => str_slug($value->MyoNel,"-")
    		]);
    	}

		State::reguard();
		City::reguard();
	}

    private function getTownship()
    {
    	$t_array = 
    	'[
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Gangaw District",
    		"MyoNel": "Gangaw "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Gangaw District",
    		"MyoNel": "Tilin "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Gangaw District",
    		"MyoNel": "Saw "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Magway District",
    		"MyoNel": "Magway "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Magway District",
    		"MyoNel": "Yenangyaung "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Magway District",
    		"MyoNel": "Chauck "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Magway District",
    		"MyoNel": "Taungdwingyi "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Magway District",
    		"MyoNel": "Myothit "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Magway District",
    		"MyoNel": "Natmauk "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Minbu District",
    		"MyoNel": "Minbu "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Minbu District",
    		"MyoNel": "Pwintbyu "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Minbu District",
    		"MyoNel": "Ngape "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Minbu District",
    		"MyoNel": "Salin "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Minbu District",
    		"MyoNel": "Sidoktaya "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Pakokku District",
    		"MyoNel": "Myaing "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Pakokku District",
    		"MyoNel": "Pakokku "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Pakokku District",
    		"MyoNel": "Pauk "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Pakokku District",
    		"MyoNel": "Seikphyu "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Pakokku District",
    		"MyoNel": "Yesagyo "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Thayet District",
    		"MyoNel": "Aunglan "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Thayet District",
    		"MyoNel": "Kamma "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Thayet District",
    		"MyoNel": "Mindon "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Thayet District",
    		"MyoNel": "Minhla "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Thayet District",
    		"MyoNel": "Sinbaungwe "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Magway Region",
    		"NameofDistrict": "Thayet District",
    		"MyoNel": "Thayet "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Kyaukse District",
    		"MyoNel": "Kyaukse "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Kyaukse District",
    		"MyoNel": "Myittha "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Kyaukse District",
    		"MyoNel": "Sintgaing "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Kyaukse District",
    		"MyoNel": "Tada-U "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Mandalay District",
    		"MyoNel": "Amarapura "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Mandalay District",
    		"MyoNel": "Aungmyethazan "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Mandalay District",
    		"MyoNel": "Chanayethazan "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Mandalay District",
    		"MyoNel": "Chanmyathazi "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Mandalay District",
    		"MyoNel": "Mahaaungmye "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Mandalay District",
    		"MyoNel": "Patheingyi "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Mandalay District",
    		"MyoNel": "Pyigyidagun "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Meiktila District",
    		"MyoNel": "Mahlaing "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Meiktila District",
    		"MyoNel": "Meiktila "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Meiktila District",
    		"MyoNel": "Thazi "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Meiktila District",
    		"MyoNel": "Wundwin "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Myingyan District",
    		"MyoNel": "Kyaukpadaung "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Myingyan District",
    		"MyoNel": "Myingyan "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Myingyan District",
    		"MyoNel": "Natogyi "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Myingyan District",
    		"MyoNel": "Nganzun "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Myingyan District",
    		"MyoNel": "Thaungtha "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Nyaung-U District",
    		"MyoNel": "Nyaung-U "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Pyin Oo Lwin District",
    		"MyoNel": "Madaya "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Pyin Oo Lwin District",
    		"MyoNel": "Mogok "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Pyin Oo Lwin District",
    		"MyoNel": "Pyinoolwin "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Pyin Oo Lwin District",
    		"MyoNel": "Singu "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Pyin Oo Lwin District",
    		"MyoNel": "Thabeikkyin "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Yamethin District",
    		"MyoNel": "Pyawbwe "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Mandalay Region",
    		"NameofDistrict": "Yamethin District",
    		"MyoNel": "Yamethin "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Naypyidaw Union Territory",
    		"NameofDistrict": "Naypyitaw District",
    		"MyoNel": "Lewe "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Naypyidaw Union Territory",
    		"NameofDistrict": "Naypyitaw District",
    		"MyoNel": "Pyinmana "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Naypyidaw Union Territory",
    		"NameofDistrict": "Naypyitaw District",
    		"MyoNel": "Tatkon "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Naypyidaw Union Territory",
    		"NameofDistrict": "Naypyitaw District",
    		"MyoNel": "Ottarathiri "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Naypyidaw Union Territory",
    		"NameofDistrict": "Naypyitaw District",
    		"MyoNel": "Dekkhinathiri "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Naypyidaw Union Territory",
    		"NameofDistrict": "Naypyitaw District",
    		"MyoNel": "Pobbathiri "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Naypyidaw Union Territory",
    		"NameofDistrict": "Naypyitaw District",
    		"MyoNel": "Zabuthiri "
    	},
    	{
    		"Location": "Central Burma",
    		"StateRegion": "Naypyidaw Union Territory",
    		"NameofDistrict": "Naypyitaw District",
    		"MyoNel": "Zeyathiri "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "Kayah State",
    		"NameofDistrict": "Bawlakhe District",
    		"MyoNel": "Bawlakhe "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "Kayah State",
    		"NameofDistrict": "Bawlakhe District",
    		"MyoNel": "Hpasawng "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "Kayah State",
    		"NameofDistrict": "Bawlakhe District",
    		"MyoNel": "Mese "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "Kayah State",
    		"NameofDistrict": "Loikaw District",
    		"MyoNel": "Loikaw "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "Kayah State",
    		"NameofDistrict": "Loikaw District",
    		"MyoNel": "Demoso "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "Kayah State",
    		"NameofDistrict": "Loikaw District",
    		"MyoNel": "Hpruso "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "Kayah State",
    		"NameofDistrict": "Loikaw District",
    		"MyoNel": "Shadaw "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Kengtong District",
    		"MyoNel": "Kengtung "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Kengtong District",
    		"MyoNel": "Mong Khet "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Kengtong District",
    		"MyoNel": "Mong Yang "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Mongsat District",
    		"MyoNel": "Mong Hsat "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Mongsat District",
    		"MyoNel": "Mong Ping "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Mongsat District",
    		"MyoNel": "Mong Tong "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Mong Hpayak District",
    		"MyoNel": "Mong Hpayak "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Mong Hpayak District",
    		"MyoNel": "Mong Yawng "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Techilelk District",
    		"MyoNel": "Tachileik "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "East Shan State",
    		"NameofDistrict": "Techilelk District",
    		"MyoNel": "Kyaing Lap (Kenglap)"
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kunlong District",
    		"MyoNel": "Kunlong "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kunlong District",
    		"MyoNel": "Hopang "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kyaukme District",
    		"MyoNel": "Kyaukme "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kyaukme District",
    		"MyoNel": "Nawnghkio "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kyaukme District",
    		"MyoNel": "Hsipaw "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kyaukme District",
    		"MyoNel": "Namtu "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kyaukme District",
    		"MyoNel": "Namhsan "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kyaukme District",
    		"MyoNel": "Mongmit "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kyaukme District",
    		"MyoNel": "Mabein "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Kyaukme District",
    		"MyoNel": "Mantong "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Laukkaing District",
    		"MyoNel": "Laukkaing "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Lashio District",
    		"MyoNel": "Lashio "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Lashio District",
    		"MyoNel": "Hseni "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Lashio District",
    		"MyoNel": "Mongyai "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Lashio District",
    		"MyoNel": "Tangyan "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Muse District",
    		"MyoNel": "Mu Se "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Muse District",
    		"MyoNel": "Namhkam "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "North Shan State",
    		"NameofDistrict": "Muse District",
    		"MyoNel": "Kutkai "
    	},    	
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Langkho District",
    		"MyoNel": "Langkho "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Langkho District",
    		"MyoNel": "Mong Nai "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Langkho District",
    		"MyoNel": "Mawkmai "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Langkho District",
    		"MyoNel": "Mong Pan "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Loilen District",
    		"MyoNel": "Loilen "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Loilen District",
    		"MyoNel": "Lai-Hka "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Loilen District",
    		"MyoNel": "Nansang "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Loilen District",
    		"MyoNel": "Kunhing "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Loilen District",
    		"MyoNel": "Kyethi "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Loilen District",
    		"MyoNel": "Mong Kung "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Loilen District",
    		"MyoNel": "Mong Hsu "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Taunggyi "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Nyaungshwe "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Hopong "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Hsi Hseng "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Kalaw "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Pingdaya "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Ywangan "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Lawksawk "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Pinlaung "
    	},
    	{
    		"Location": "East Burma",
    		"StateRegion": "South Shan State",
    		"NameofDistrict": "Taunggyi District",
    		"MyoNel": "Pekon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Hinthada District",
    		"MyoNel": "Hinthada "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Hinthada District",
    		"MyoNel": "Zalun "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Hinthada District",
    		"MyoNel": "Laymyethna "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Hinthada District",
    		"MyoNel": "Myanaung "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Hinthada District",
    		"MyoNel": "Kyangin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Hinthada District",
    		"MyoNel": "Ingapu "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Labutta District",
    		"MyoNel": "Labutta "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Labutta District",
    		"MyoNel": "Mawlamyinegyun "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Maubin District",
    		"MyoNel": "Ma-ubin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Maubin District",
    		"MyoNel": "Pantanaw "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Maubin District",
    		"MyoNel": "Nyaungdon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Maubin District",
    		"MyoNel": "Danuphyu "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Myaungmya District",
    		"MyoNel": "Myaungmya "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Myaungmya District",
    		"MyoNel": "Einme "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Myaungmya District",
    		"MyoNel": "Wakema "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pathein District",
    		"MyoNel": "Pathein "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pathein District",
    		"MyoNel": "Kangyidaunk "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pathein District",
    		"MyoNel": "Thabaung "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pathein District",
    		"MyoNel": "Ngapudaw "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pathein District",
    		"MyoNel": "Kyonpyaw "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pathein District",
    		"MyoNel": "Yekyi "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pathein District",
    		"MyoNel": "Kyaunggon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pyapon District",
    		"MyoNel": "Pyapon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pyapon District",
    		"MyoNel": "Bogale "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pyapon District",
    		"MyoNel": "Kyaiklat "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Ayeyarwady Region",
    		"NameofDistrict": "Pyapon District",
    		"MyoNel": "Dedaye "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Bago District",
    		"MyoNel": "Bago "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Bago District",
    		"MyoNel": "Kawa "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Bago District",
    		"MyoNel": "Thanatpin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Bago District",
    		"MyoNel": "Waw "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Bago District",
    		"MyoNel": "Daik-U "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Bago District",
    		"MyoNel": "Nyaunglebin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Bago District",
    		"MyoNel": "Shwegyin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Taungoo District",
    		"MyoNel": "Taungoo "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Taungoo District",
    		"MyoNel": "Oktwin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Taungoo District",
    		"MyoNel": "Tantabin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Taungoo District",
    		"MyoNel": "Yedashe "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Taungoo District",
    		"MyoNel": "Pyu "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Taungoo District",
    		"MyoNel": "Kyauktaga "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "East Bago Region",
    		"NameofDistrict": "Taungoo District",
    		"MyoNel": "Kyaukkyi "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Pyay District",
    		"MyoNel": "Pyay "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Pyay District",
    		"MyoNel": "Pauk Kaung "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Pyay District",
    		"MyoNel": "Thegon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Pyay District",
    		"MyoNel": "Shwedaung "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Pyay District",
    		"MyoNel": "Padaung "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Pyay District",
    		"MyoNel": "Paungde "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Pyay District",
    		"MyoNel": "Nattalin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Pyay District",
    		"MyoNel": "Zigon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Thayarwady District",
    		"MyoNel": "Thayarwady "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Thayarwady District",
    		"MyoNel": "Gyobingauk "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Thayarwady District",
    		"MyoNel": "Letpadan "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Thayarwady District",
    		"MyoNel": "Minhla "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Thayarwady District",
    		"MyoNel": "Monyo "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "West Bago Ragion",
    		"NameofDistrict": "Thayarwady District",
    		"MyoNel": "Okpho "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Eastern District",
    		"MyoNel": "Botataung "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Eastern District",
    		"MyoNel": "Dagon Seikkan "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Eastern District",
    		"MyoNel": "East Dagon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Eastern District",
    		"MyoNel": "North Dagon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Eastern District",
    		"MyoNel": "North Okkalapa "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Eastern District",
    		"MyoNel": "Pazundaung "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Eastern District",
    		"MyoNel": "South Dagon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Eastern District",
    		"MyoNel": "South Okkalapa "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Eastern District",
    		"MyoNel": "Thingangyun "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Northern District",
    		"MyoNel": "Hlaing "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Northern District",
    		"MyoNel": "Hlaingthaya "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Northern District",
    		"MyoNel": "Insein "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Northern District",
    		"MyoNel": "Kamayut "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Northern District",
    		"MyoNel": "Mayangon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Northern District",
    		"MyoNel": "Mingaladon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Northern District",
    		"MyoNel": "Shwepyitha "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Northern District",
    		"MyoNel": "Yankin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Southern District",
    		"MyoNel": "Dala "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Southern District",
    		"MyoNel": "Dawbon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Southern District",
    		"MyoNel": "Mingala Taungnyunt "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Southern District",
    		"MyoNel": "Seikkyi Kanaungto "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Southern District",
    		"MyoNel": "Tamwe "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Southern District",
    		"MyoNel": "Thaketa "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Ahlon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Bahan "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Dagon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Kyauktada "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Kyimyindaing "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Lanmadaw "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Latha "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Pabedan "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Sanchaung "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "Western District (downtown)",
    		"MyoNel": "Seikkan "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Cocokyun "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Hlegu "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Hmawbi "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Htantabin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Kawhmu "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Kayan "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Kungyangon "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Kyauktan "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Taikkyi "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Thanlyin "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Thongwa "
    	},
    	{
    		"Location": "Lower Burma",
    		"StateRegion": "Yangon Region",
    		"NameofDistrict": "s outside Yangon City",
    		"MyoNel": "Twante "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Bhamo District",
    		"MyoNel": "Bhamo "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Bhamo District",
    		"MyoNel": "Shwegu "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Bhamo District",
    		"MyoNel": "Momauk "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Bhamo District",
    		"MyoNel": "Mansi "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Mohnyin District",
    		"MyoNel": "Mohnyin "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Mohnyin District",
    		"MyoNel": "Mogaung "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Mohnyin District",
    		"MyoNel": "Hpakant "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Myitkyina District",
    		"MyoNel": "Myitkyina "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Myitkyina District",
    		"MyoNel": "Waingmaw "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Myitkyina District",
    		"MyoNel": "Injangyang "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Myitkyina District",
    		"MyoNel": "Tanai "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Myitkyina District",
    		"MyoNel": "Chipwi "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Myitkyina District",
    		"MyoNel": "Hsawlaw "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Putao District",
    		"MyoNel": "Putao "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Putao District",
    		"MyoNel": "Sumprabum "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Putao District",
    		"MyoNel": "Machanbaw "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Putao District",
    		"MyoNel": "Kawnglanghpu "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Kachin State",
    		"NameofDistrict": "Putao District",
    		"MyoNel": "Nogmung "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Hkamti District",
    		"MyoNel": "Hkamti "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Hkamti District",
    		"MyoNel": "Homalin "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Hkamti District",
    		"MyoNel": "Lahe "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Hkamti District",
    		"MyoNel": "Lay Shi  (Lashe )"
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Hkamti District",
    		"MyoNel": "Nanyun "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Kalay District",
    		"MyoNel": "Kale  (Kalemyo )"
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Kalay District",
    		"MyoNel": "Kalewa "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Kalay District",
    		"MyoNel": "Mingin "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Katha District",
    		"MyoNel": "Banmauk "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Katha District",
    		"MyoNel": "Indaw "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Katha District",
    		"MyoNel": "Katha "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Katha District",
    		"MyoNel": "Kawlin "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Katha District",
    		"MyoNel": "Pinlebu "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Katha District",
    		"MyoNel": "Tigyaing "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Katha District",
    		"MyoNel": "Wuntho "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Mawlaik District",
    		"MyoNel": "Mawlaik "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Mawlaik District",
    		"MyoNel": "Paungbyin "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Monywa District",
    		"MyoNel": "Ayadaw "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Monywa District",
    		"MyoNel": "Budalin "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Monywa District",
    		"MyoNel": "Chaung-U "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Monywa District",
    		"MyoNel": "Kani "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Monywa District",
    		"MyoNel": "Monywa "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Monywa District",
    		"MyoNel": "Pale "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Monywa District",
    		"MyoNel": "Salingyi "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Monywa District",
    		"MyoNel": "Tabayin "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Monywa District",
    		"MyoNel": "Yinmabin "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Sagaing District",
    		"MyoNel": "Myaung "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Sagaing District",
    		"MyoNel": "Myinmu "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Sagaing District",
    		"MyoNel": "Sagaing "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Shwebo District",
    		"MyoNel": "Kanbalu "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Shwebo District",
    		"MyoNel": "Khin-U "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Shwebo District",
    		"MyoNel": "Kyunhla "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Shwebo District",
    		"MyoNel": "Shwebo "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Shwebo District",
    		"MyoNel": "Taze "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Shwebo District",
    		"MyoNel": "Wetlet "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Shwebo District",
    		"MyoNel": "Ye-U "
    	},
    	{
    		"Location": "North Burma",
    		"StateRegion": "Sagaing Region",
    		"NameofDistrict": "Tamu District",
    		"MyoNel": "Tamu "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Kayin State",
    		"NameofDistrict": "Hpa-an District",
    		"MyoNel": "Hpa-an "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Kayin State",
    		"NameofDistrict": "Hpa-an District",
    		"MyoNel": "Hlaignbwe "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Kayin State",
    		"NameofDistrict": "Hpa-an District",
    		"MyoNel": "Hpapun "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Kayin State",
    		"NameofDistrict": "Hpa-an District",
    		"MyoNel": "Thandang "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Kayin State",
    		"NameofDistrict": "Kawkareik District",
    		"MyoNel": "Kawkareik "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Kayin State",
    		"NameofDistrict": "Kawkareik District",
    		"MyoNel": "Kyain Seikgyi "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Kayin State",
    		"NameofDistrict": "Myawaddy District",
    		"MyoNel": "Myawaddy "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Mawlamyine District",
    		"MyoNel": "Mawlamyine "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Mawlamyine District",
    		"MyoNel": "Kyaikmaraw "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Mawlamyine District",
    		"MyoNel": "Chaungzon "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Mawlamyine District",
    		"MyoNel": "Thanbyuzayat "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Mawlamyine District",
    		"MyoNel": "Mudon "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Mawlamyine District",
    		"MyoNel": "Ye "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Thaton District",
    		"MyoNel": "Thaton "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Thaton District",
    		"MyoNel": "Paung "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Thaton District",
    		"MyoNel": "Kyaikto "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Mon State",
    		"NameofDistrict": "Thaton District",
    		"MyoNel": "Bilin "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Dawei District",
    		"MyoNel": "Dawei "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Dawei District",
    		"MyoNel": "Launglon "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Dawei District",
    		"MyoNel": "Thayetchaung "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Dawei District",
    		"MyoNel": "Yebyu "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Kawthoung District",
    		"MyoNel": "Bokpyin "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Kawthoung District",
    		"MyoNel": "Kawthoung "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Myeik District",
    		"MyoNel": "Kyunsu "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Myeik District",
    		"MyoNel": "Myeik "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Myeik District",
    		"MyoNel": "Palaw "
    	},
    	{
    		"Location": "South Burma",
    		"StateRegion": "Tanintharyi Region",
    		"NameofDistrict": "Myeik District",
    		"MyoNel": "Tanintharyi "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Chin State",
    		"NameofDistrict": "Falam District",
    		"MyoNel": "Falam "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Chin State",
    		"NameofDistrict": "Falam District",
    		"MyoNel": "Haka "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Chin State",
    		"NameofDistrict": "Falam District",
    		"MyoNel": "Htantlang "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Chin State",
    		"NameofDistrict": "Falam District",
    		"MyoNel": "Tiddim "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Chin State",
    		"NameofDistrict": "Falam District",
    		"MyoNel": "Ton Zang "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Chin State",
    		"NameofDistrict": "Mindat District",
    		"MyoNel": "Mindat "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Chin State",
    		"NameofDistrict": "Mindat District",
    		"MyoNel": "Matupi "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Chin State",
    		"NameofDistrict": "Mindat District",
    		"MyoNel": "Kanpetlet "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Chin State",
    		"NameofDistrict": "Mindat District",
    		"MyoNel": "Paletwa "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Kyaukpyu District",
    		"MyoNel": "Kyaukpyu "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Kyaukpyu District",
    		"MyoNel": "Manaung "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Kyaukpyu District",
    		"MyoNel": "Ramree "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Kyaukpyu District",
    		"MyoNel": "Ann "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Maungdaw District",
    		"MyoNel": "Maungdaw "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Maungdaw District",
    		"MyoNel": "Buthidaung "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Sittwe District",
    		"MyoNel": "Sittwe "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Sittwe District",
    		"MyoNel": "Ponnagyun "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Sittwe District",
    		"MyoNel": "Mrauk-U "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Sittwe District",
    		"MyoNel": "Kyauktaw "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Sittwe District",
    		"MyoNel": "Minbya "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Sittwe District",
    		"MyoNel": "Myebon "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Sittwe District",
    		"MyoNel": "Pauktaw "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Sittwe District",
    		"MyoNel": "Rathedaung "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Thandwe District",
    		"MyoNel": "Thandwe "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Thandwe District",
    		"MyoNel": "Toungup "
    	},
    	{
    		"Location": "West Burma",
    		"StateRegion": "Rakhine State",
    		"NameofDistrict": "Thandwe District",
    		"MyoNel": "Gaw "
    	}
    	]';    	
    	return json_decode($t_array);
    }
}