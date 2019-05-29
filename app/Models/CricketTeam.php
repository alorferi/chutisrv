<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CricketTeam extends Model
{
    
    
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_code');
    }
}
