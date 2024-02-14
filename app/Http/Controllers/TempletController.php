<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TempletController extends Controller
{
    public  function  index(){
        return view('ajouter_templet');
    }
    public function add_templet(Request $request){

        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required'
        ]);


    }




}
