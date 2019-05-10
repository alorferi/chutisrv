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

    public static function jsonResponse($status,$message,$result){
    
        $data = Data::data($status,$message,$result);

        return response()->json($data);

    }
}
