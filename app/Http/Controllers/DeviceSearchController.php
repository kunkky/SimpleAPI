<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import your model
use App\Models\Device;


class DeviceSearchController extends Controller
{
    //
    function searchData($name){
        $device=Device::where("name","like", "%".$name."%")->get();
        if(isempty($device)){
        return ["Search Result"=>$device];
        }
        else{
            return ["Search Result"=>"No search found"];
        }
    }
}
