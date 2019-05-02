<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\v1\UserResource;
use App\User;
use App\Utils\Data;

class UserController extends Controller
{
    public function index(){

            $data =   Data::data("OK","data found" , UserResource::collection(User::all()) );  
            return response()->json($data);
    }
}
