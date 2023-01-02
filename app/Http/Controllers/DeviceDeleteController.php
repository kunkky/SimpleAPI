<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import your model
use App\Models\Device;

class DeviceDeleteController extends Controller
{
    //
    function deleteData($id){
        $device=Device::find($id);
        $result=$device->delete();
        if($result){
        return ["Result"=>"Data deleted"];
        }
        else{
                return ["Result"=>"Data Not deleted"];

        }
    }
}
