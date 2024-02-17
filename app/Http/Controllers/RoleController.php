<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
     public  function  index(){
        $roles =Role::all();
         return view('role',compact('roles'));
     }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);


      //  Role::create($validated);
        Role::create([
            'name' => $validated['name'],
            'guard_name' => 'web', // Remplacez 'web' par le nom du gardien utilisé dans votre application
        ]);

        return redirect(route('role'))->with('success', 'Le rôle a été ajouté avec succès.');
    }

}
