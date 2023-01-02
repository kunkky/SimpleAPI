<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//connect your model
use App\Models\Device;

class DeviceController extends Controller
{
    // create an api function
    function getDevice($id=null){
        //return something in array format
        return $id?Device::find($id):Device::all();
    }
}
