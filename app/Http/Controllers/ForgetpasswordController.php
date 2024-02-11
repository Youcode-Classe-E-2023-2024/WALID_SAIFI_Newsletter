<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetpasswordController extends Controller
{
    public  function fogetpassword(){
        return view('forget_password');
    }

    public  function fogetpasswordPost(Request $request){
     $request->validate([
         'email' => 'required|email'
     ]);
     $token = Str::random(64);

     DB::teble('password_reset_tokens')->insert([
          'email' => $request->email,
          'token' => $request->token,
          'created_at' => Carbon::now()
     ]);
     Mail::send('Email.forget_password' , ['token' => $token]);

    }

    public function rest_password(){

    }
}
