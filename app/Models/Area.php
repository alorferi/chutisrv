<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{
    use SoftDeletes;

    public function country()
    {
        return $this->belongsTo('App\Models\Country','countryCode');
    }

    public function ramadans()
    {
        return $this->hasMany('App\Models\Ramadan','areaCode','code');
    }
}
