<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foundation extends Model
{
    protected $fillable = ['foundation_name','address','description','image_name','image_extension'];

	protected $appends = ['image_url','phones'];

	public function getImageUrlAttribute($value)
	{    	
		return asset("images/foundation/". $this->image_name . "." . $this->image_extension);
	}
	
	public function categories()
	{
		return $this->belongsToMany(Category::class);
	}

	public function images()
	{
		return $this->belongsTo(MarketingImage::class,'image_id','id');
	}

	public function phones()
	{
		return $this->hasMany(Phone::class,'other_key','id');
	}

	public function getPhonesAttribute($value)
	{
		return $this->phones()->select('id','phone_number')->where('main_key', 'like', 'F%')->get();
	}
}
