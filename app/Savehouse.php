<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Savehouse extends Model
{
	
	protected $fillable = ['name','block','description','address','city_id','category_id','image_name','image_extension','lat','lng'];

	protected $appends = ['township','image_url','phones'];

	public function getTownshipAttribute($value)
    {
        return $this->city()->first()->city_name;
    }

    public function getImageUrlAttribute($value)
    {    	
        return asset("images/savehouse/". $this->image_name . "." . $this->image_extension);
    }

    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class,'other_key','id');
    }

    public function getPhonesAttribute($value)
    {
        return $this->phones()->select('id','phone_number')->where('main_key', 'like', 'S%')->get();
    }
}
