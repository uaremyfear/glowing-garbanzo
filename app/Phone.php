<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['phone_number','other_key','main_key'];

    // public function setMainKeyAttribute($value)
    // {
    //     $this->attributes['main_key'] = strtolower($value);
    // }
}
