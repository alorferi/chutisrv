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

          
               public static function dayDateBannersPath(){    
                return  storage_path("app/public/images/daydate_banners");
              }
    
              public static function dayDateBannerUrl($banner_name){  
                return  "/images/$banner_name/daydate_banner";
                 }
       
}
