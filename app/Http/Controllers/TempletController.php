<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Templet;

class TempletController extends Controller
{


    public  function  index(){
        return view('ajouter_templet');
    }


    public function store(Request $request) {
       // dd($request);
        $validated = $request->validate([
            'titre' => 'required|min:5',
            'description' => 'required|min:5',
            'content' => 'required|min:5',
            'media' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4048'
        ]);

        if(auth()->check()) {

            $validated['user_id'] = auth()->id();


            $template = Templet::create($validated);


            $template->addMediaFromRequest('media')->toMediaCollection('media');


            return redirect()->route('ajouter');

        }
    }







}
