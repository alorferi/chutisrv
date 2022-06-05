<?php


namespace App\Helpers;
use Request;
use App\Models\ActivityLog;
use Auth;

class ActivityLogHelper
{


    public static function addToLog($class,$function,$line,$tags=null)
    {

      $data = json_encode(request()->except('password'));

    	$log = [
            'data' => $data,
            'method' => Request::method(),
            'url' => Request::fullUrl(),
            'class' => $class,
            'function' => $function,
            'line' => $line,
            'ip' => Request::ip(),
            'agent' =>  Request::header('user-agent'),
            'user_id' => auth()->check() ? auth()->user()->id : null,
            'tags' => $tags,
        ];

    	ActivityLog::create($log);
    }


    public static function logActivityLists()
    {
    	return ActivityLog::latest()->paginate();
    }


}
