<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CricketTeam extends Model
{
    
    
    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_code');
    }

    public function getLogoPath(){    
        return  storage_path("app/public/images/cricket_team_logos");
      }

      public  function getLogoUrl($photo_name){  
        return  "/images/$photo_name/cricket_team_logo";
         }

         public  function  getLogoName($photo){
          return "team_logo_$this->id.".$photo->getClientOriginalExtension();
        }
}
