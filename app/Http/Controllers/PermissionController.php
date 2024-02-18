<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{


    public  function  index(){
        $permission = Permission::all();

        return  view('/permission',['permissions' => $permission]);

    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required']);

        $existingPermission = Permission::where('name', $validated['name'])->first();

        if ($existingPermission) {
            return back()->with('error', 'La permission existe déjà.');
        }

        Permission::create($validated);

        return redirect(route('permission.list'));
    }

    public function edit(Permission $permission)
    {
       return view('editpermission', ['permission' => $permission]);
    }

    public  function update(Permission $permission,Request $request ){
        $data = $request->validate([
            'name' => 'required ',
        ]);
        $existingPermission = Permission::where('name', $data['name'])->first();

        if ($existingPermission) {
            return back()->with('error', 'La permission existe déjà.');
        }
        $permission->update($data);

        return redirect(route('permission.list'));
    }
    public  function  destroy(Permission $permission){

            $permission->delete();

            return redirect(route('permission.list'));
    }

}
