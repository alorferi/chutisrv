<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function country()
    {
        return $this->belongsTo('App\Models\Country','countryCode');
    }

    public function days()
    {
        return $this->hasMany('App\Models\Day');
    }
}
