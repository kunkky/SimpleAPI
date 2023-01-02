<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import your model
use App\Models\Device;


class DevicePutController extends Controller
{
    //
    function PutData(Request $req){
            /* putalble data
{
    "name":"Infinix",
    "amount":"80000",
    "status":"available",
    "company_id":"2"
}

        */

        //find the involved id
        $device=Device::find($req->id);
        $device->name=$req->name;
        $device->amount=$req->amount;
        $device->status=$req->status;
        $device->company_id=$req->company_id;
        $result=$device->save();
        //update desired results
        if ($result){
            return ["Result"=>"Success"];
            }
            else{
            return ["Result"=>"Failed"];

            }

    }
}
