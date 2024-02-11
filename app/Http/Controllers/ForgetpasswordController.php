<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetpasswordController extends Controller
{
    public  function fogetpassword(){
        return view('forget_password');
    }

    public  function fogetpasswordPost(Request $request){


    }
}
