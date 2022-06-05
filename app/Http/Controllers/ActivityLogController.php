<?php

namespace App\Http\Controllers;

use App\Helpers\ActivityLogHelper;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs =  ActivityLogHelper::logActivityLists();
        return view('activitylog.index', compact('logs'));
    }
}
