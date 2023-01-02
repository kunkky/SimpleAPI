<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//please import your controller that was created
use App\Http\Controllers\dummyAPI;
//please import your controller that was created for agents
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DevicePostController;
use App\Http\Controllers\DevicePutController;
use App\Http\Controllers\DeviceSearchController;
use App\Http\Controllers\DeviceDeleteController;
use App\Http\Controllers\DeviceTestDataController;

use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//api route should be here
Route::get("simple_get_api",[dummyAPI::class,'getData']);


//api route for agent should be here
Route::get("devices/{id?}",[DeviceController::class,'getDevice']);

//api route for post should be here
Route::post("post_data",[DevicePostController::class,'PostedData']);


//api route for Put should be here
Route::put("put_data",[DevicePutController::class,'PutData']);


//api route for search should be here
Route::get("search/{name}",[DeviceSearchController::class,'searchData']);

//api route for search should be here
Route::delete("delete/{id}",[DeviceDeleteController::class,'deleteData']);

//api route for post should be here
Route::post("test_data",[DeviceTestDataController::class,'TestData']);


Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's

    });


Route::post("login",[UserController::class,'index']);

