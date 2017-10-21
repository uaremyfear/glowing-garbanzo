<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\City;

class LocationApiCOntroller extends Controller
{
    public function getStates()
    {
    	$states = ['states' => State::orderBy('state_name')->get() ];
    	return $states;
    }

    public function getCityByState($id)
    {
    	return [ 'cities' => City::where('state_id',$id)->has('savehouses')->orderBy('city_name')->get() ];
    }
}
