<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CricketMatch extends Model
{
    protected $fillable = ['start_date', 'start_time', 'team_a_id','team_b_id'];


    public function teamA()
    {
        return $this->belongsTo('App\Models\CricketTeam','team_a_id','id');
    }
    public function teamB()
    {
        return $this->belongsTo('App\Models\CricketTeam','team_b_id','id');
    }

}
