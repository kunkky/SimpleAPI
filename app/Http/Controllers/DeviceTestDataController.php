<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import your model
use App\Models\Device;
//import validation class
use Validator;

class DeviceTestDataController extends Controller
{
    //
    function TestData (Request $req){
        //set validation Rules
        $rules= array(
        "company_id"=>"required",
        "name"=>"required | max:10 | min:5",
        "amount"=>"required | max:10 | min:3",
        "status"=>"required | max:15 | min:5"
        );
        //validate
        $validator=Validator::make($req->all(),$rules);

        //if validator fails
        if($validator ->fails()){
            return response()->json($validator->errors(),401);

        }
        else{
            //add data to db
            $device = new Device;
            $device->name=$req->name;
            $device->amount=$req->amount;
            $device->status=$req->status;
            $device->company_id=$req->company_id;
            $result=$device->save();
            if ($result){
            return ["Result"=>"Successfully added"];
            }
            else{
            return ["Result"=>"Authenticated but could no be added, please contact admin for help"];

            }
        }

    }
}
