<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thadin extends Model
{
	protected $fillable = ['title','body','image_name','image_extension'];

	protected $appends = ['image_url'];

	public function getImageUrlAttribute($value)
	{    	
		return asset("images/thadin/". $this->image_name . "." . $this->image_extension);
	}
}
