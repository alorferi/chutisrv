<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ramadan extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date','sehrTime', 'iftarTime',  'areaCode'
    ];

    public function area()
    {
        return $this->belongsTo('App\Models\Area','areaCode','code');
    }
}
