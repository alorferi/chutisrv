<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

use App\Traits\AutoUuid;

use Request;

class ActivityLog extends Model
{
    use AutoUuid;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


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

     $activityLog =	ActivityLog::create($log);

     return $activityLog;

    }

}

