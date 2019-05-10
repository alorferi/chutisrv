<?php

namespace App\Utils;

class Crypto
{
    public static  function oct2Date($oct){
            $dec = octdec($oct);
            $ymd = \DateTime::createFromFormat('11Y23m58d13', "$dec")->format('Y-m-d');
            return $ymd;
        }

        public static  function oct2DateDateTime($oct){
            return null;
        }
    
    }