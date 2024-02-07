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

        return redirect()->route('login.page');
    }

    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
        $request->session()->regenerate();
        return redirect()->route('dashebord');
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
