<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    // create an api function
    function getData(){
        //return something in array format
        return ["name"=>"Kunkky", "age"=>"99","stack"=>"full stack and graphics","color"=>"blue","level"=>"intermediate"];

    }
}
