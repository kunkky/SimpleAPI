<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import your model
use App\Models\Device;

class DevicePostController extends Controller
{
    //
        function PostedData(Request $req){
        /* putalble data
{
    "name":"Infinix",
    "amount":"80000",
    "status":"available",
    "company_id":"2"
}

        */
            $device = new Device;
            $device->name=$req->name;
            $device->amount=$req->amount;
            $device->status=$req->status;
            $device->company_id=$req->company_id;
            $result=$device->save();
            if ($result){
            return ["Result"=>"Success"];
            }
            else{
            return ["Result"=>"Failed"];

            }
    }
}
