<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthentificationController extends Controller
{
    public function pageregister()
    {
        return view('register');
    }

    public function pagelogin()
    {
        return view('login');
    }

    public function registerSave(Request $request)
    {
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

        Auth::login($user);
        return view('dashboard');
    }

    public function loginAction()
    {
        //dd(request());
        $formFields = request()->validate([
            "email" => 'required',
            "password" => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            request()->session()->regenerate();
        }
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


    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
