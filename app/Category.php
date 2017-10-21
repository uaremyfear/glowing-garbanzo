<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];
    protected $appends = ['savehouse_count'];

    public function savehouses()
    {
    	return $this->hasMany(Savehouse::class);
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }

    public function foundations()
    {
        return $this->belongsToMany(Foundation::class);
    }

    public function getSavehouseCountAttribute($value)
    {
    	return count($this->savehouses()->get());
    }
}
