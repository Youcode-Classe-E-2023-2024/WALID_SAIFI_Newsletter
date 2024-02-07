<?php

namespace App\Http\Controllers;

use App\Models\Authentification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Import the Validator class
use Illuminate\Support\Facades\Hash; // Import the Hash class
use App\Models\User; // Import the User model

class AuthentificationController extends Controller
{
    public function pageregister(){
        return view('register');
    }

    public function pagelogin(){
        return view('login');
    }

    public function create()
    {
        // Your create method logic here
    }

    public function registerSave(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->idRole = 2; 
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login.page');
    }


    public function show(string $id)
    {
        // Your show method logic here
    }

    public function edit(string $id)
    {
        // Your edit method logic here
    }

    public function update(Request $request, string $id)
    {
        // Your update method logic here
    }

    public function destroy(string $id)
    {
        // Your destroy method logic here
    }
}
