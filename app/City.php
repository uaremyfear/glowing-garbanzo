<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
    	'city_name',
    	'state_id',
    	'slug'
    ];

    public function state()
    {
    	return $this->belongsTo(State::class);
    }

    public function savehouses()
    {
    	return $this->hasMany(Savehouse::class);
    }
}
