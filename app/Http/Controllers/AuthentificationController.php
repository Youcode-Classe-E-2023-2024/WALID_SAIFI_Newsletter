<?php

namespace App\Http\Controllers;

use App\Models\Authentification;
use Illuminate\Http\Request;

class AuthentificationController extends Controller
{
     public  function pageregiter(){
         return view('register');
     }
    public function  pagelogin(){
        return view('login');
    }


    public function create()
    {

    }


    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);

        return redirect()->route('login');
    }



    public function show(string $id)
    {

    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {
    }
}
