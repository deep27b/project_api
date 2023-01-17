<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\users;

class login extends Controller
{
    function users(Request $req)
    {
        $user=users::where('email' , $req->username )->where('pass' , $req->password )->first();
          if(!$user){
            return response([
                'error'=>["Email or password is not matched"]
            ]);
          }  
          return "true";
    }
}
