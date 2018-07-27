<?php

namespace App\Utils;

class Dir
{
   
             public static function dayPhotosPath(){    
              return  storage_path("app/public/images/day_photos");
            }
  
            public static function dayPhotoUrl($photo_name){  
              return  "/images/$photo_name/day_photo";
               }
        
       
}
