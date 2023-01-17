<?php

namespace App\Http\Controllers;
use  App\Models\personal_details;


use Illuminate\Http\Request;

class registerPatients extends Controller
{
    //
    function registerPatient(Request $req)
    {
        $patient_details= new personal_details;
        $patient_details->title=$req->title; 
       $patient_details->first_name=$req->firstName;
       $patient_details->last_name=$req->lastName;
    //   $patient_details->dob=$req->dob;
    $patient_details->mobile=$req->mobile;
    $patient_details->email=$req->email;
    $patient_details->address=$req->address;
    $patient_details->city=$req->city;
    $patient_details->state=$req->state;
    $patient_details->postcode=$req->postcode;
    $patient_details->occupation=$req->occupation;
    $patient_details->heard=$req->heard;
      $result= $patient_details->save();
       if($result)
       {
        return["result"=>"Registered Successfully"];
       }
       else{
        return["result"=>"Failed to save Data"];
       }
    }
     function updatePatient(Request $req)
     {
        $patient_details= new personal_details;
        $id=$req->pid;
        $patient_details= personal_details::find($id);

        $patient_details->title=$req->title; 
        $patient_details->first_name=$req->firstName;
        $patient_details->last_name=$req->lastName;
        //   $patient_details->dob=$req->dob;
        $patient_details->mobile=$req->mobile;
        $patient_details->email=$req->email;
        $patient_details->address=$req->address;
        $patient_details->city=$req->city;
        $patient_details->state=$req->state;
        $patient_details->postcode=$req->postcode;
        $patient_details->occupation=$req->occupation;
        $patient_details->heard=$req->heard;
        
        $result1= $patient_details->save();
        if($result1)
        {
            return["result"=>"Data is updated"];
        }
        else{
            return["result"=>"Fail to update data"]; 
        }

       
     }

     function listRegisteredPatients() //getting registered patients from the personal details
    {
    return personal_details::all();
    }

    function getonePatient($id) //getting one patient to edit from the personal details
    {
       
    $user= personal_details::find($id);
    return $user;
    }
       
    
}