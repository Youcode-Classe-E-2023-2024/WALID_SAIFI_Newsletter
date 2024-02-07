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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $data = $request->validate([
            'email' => 'required | email',
            'password' => 'required '
        ]);

        $newProduit = Authentification::create($data);
        return redirect(route('/login'));

    }
    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
