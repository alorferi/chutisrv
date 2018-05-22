<?php

namespace App\Utils;

class Data
{
    public static function data($status,$message,$result){
        $data =  [
    'status'=>$status,
    'message'=> $message,
    'result'=>$result
    ] ;
    return $data;
    }
}
