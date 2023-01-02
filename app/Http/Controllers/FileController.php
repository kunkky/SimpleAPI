<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model
use App\Models\UploadedFile;


class FileController extends Controller
{
    //
    function UploadFile(Request $req){
        $result=$req->file("file")->store("APIDocs");
      if($result){
            //save info in a db
            $fileUploaded = new UploadedFile;
            $fileUploaded->name=$req->name.rand(0,9999999);
            $fileUploaded->file_path=$result;
            $uploadResult=$fileUploaded->save();
            if ($uploadResult){
            return ["Result"=>"Success"];
            }
            else{
            return ["Result"=>"Failed"];

            }

        }
        else{
        return ['result'=>'Error Uploading files'];
        }

//        return ['result'=>$result];
    }

}
