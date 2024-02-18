<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;


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

        $role = new Role();
        $role->name = $validated['name'];
        $role->save();

        return redirect(route('role'))->with('success', 'Le rôle a été ajouté avec succès.');
    }


}
