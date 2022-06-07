<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ActivityLogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $from_date = $request->from_date??Carbon::now()->format("Y-m-01");

        $to_date =  $request->to_date??Carbon::now()->format("Y-m-d");

        $ip =  $request->ip?? "";

        $logs =  ActivityLog::
        where(function ($query) use ($ip){
            if($ip!=""){
                $query->where('ip',$ip);
            }
        })
        ->whereBetween('created_at', ["$from_date 00:00:00", "$to_date 23:59:59"])->latest()->paginate();

        $logs->appends($request->all());

        return view('activitylog.index', compact('logs','from_date','to_date','ip'));
    }
}
