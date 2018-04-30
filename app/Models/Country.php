<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
    public function areas()
    {
        return $this->hasMany('App\Models\Area','countryCode','code');
    }
}
