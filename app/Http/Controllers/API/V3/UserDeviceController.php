<?php

namespace App\Http\Controllers\API\V3;


use App\UserDevice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Utils\Data;

class UserDeviceController extends Controller
{
   

    public function register(Request $request)
    {

         ActivityLogHelper::addToLog(__CLASS__,__FUNCTION__,__LINE__);

        //validation
        if($request->package_name!="com.provatsoft.apps.govtholidaysbd"){
            $data =   Data::jsonResponse("FAILED", "invalid package",null);  
        return $data; 
        }

        $userDevice =  UserDevice::where('device_token', $request->device_token)->first();
        $message = "Updated";
        if( $userDevice==null){
            $userDevice = new UserDevice();
            $message = "Saved";
        }       
        $userDevice->device_token = $request->device_token;
        $userDevice->os = $request->os;
        $userDevice->version_number = $request->version_number;
        $userDevice->version_name = $request->version_name;
        $userDevice->package_name = $request->package_name;
        $userDevice->save();
        $userDevice->touch();
        $data =   Data::jsonResponse("OK", $message,null);  
        return $data;

    }
}
