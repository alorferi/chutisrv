<?php
namespace App\Http\Controllers\API\V3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ramadan;
use App\Utils\Data;
use App\Http\Resources\V3\RamadanResource;

class RamadanController extends Controller
{
 
       

    public function getRamadan($id){
        $ramadan = new RamadanResource(Ramadan::find($id));
        if($ramadan==null){
            return  Data::data("FAILED","Ramadan id: $id not found",$ramadan);
        }else{
            return  Data::data("OK","Ramadan id: $id found",$ramadan);
        }
    }

    public function update(Request $request, Ramadan $ramadan)
    {
        $ramadan->update($request->all());
        return response()->json(new RamadanResource($ramadan), 200);
    }
}
