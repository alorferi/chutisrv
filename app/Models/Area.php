<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function country()
    {
        return $this->belongsTo('App\Models\Country','countryCode');
    }

    public function ramadans()
    {
        return $this->hasMany('App\Models\Ramadan','areaCode','code');
    }
}
