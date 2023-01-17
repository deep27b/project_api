<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\emails;

class dentalController extends Controller
{
    //
    function list() //getting appointment requests from emails table
    {
return emails::where('isdeleted','=','0')->get();
    }
    function emailupdate($id) //getting appointment requests from emails table
    {
   
         $patient_details= new emails; 
        $patient_details=emails::find($id);

        $patient_details->isdeleted='1';  
        $result1= $patient_details->save();
        if($result1)
        {
            return["result"=>"Data is updated"];
        }
        else{
            return["result"=>"Fail to update data"]; 
        }

    }
  
}
