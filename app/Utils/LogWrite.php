<?php

namespace App\Utils;

use Illuminate\Support\Facades\Log;

class LogWrite
{
    public static function info(string $tag,  ...$messages)
    {
        $text = "";
        $i = 0;
        Log::info("$tag:: Start");
        foreach ($messages as $message) {
            $text .= "\n [$i] => $message";
            $i++;
        }
        Log::info($text);
        Log::info("$tag:: End");
    }
}
