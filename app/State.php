<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
    'state_name', 
    'status',
    'slug'
    ];


    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function city() 
    {
        return $this->hasMany('App\City');
    }
}
