<?php

namespace App\Http\Controllers;

use App\Models\Templet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Template\Template;

class TempletController extends Controller
{


    public  function  index(){
        return view('ajouter_templet');
    }


    public function store() {
        $validated = request()->validate([
            'titre' => 'required|min:5',
            'description' => 'required|min:5',
            'content' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4048'
        ]);

        $userId = auth()->id();
        $validated['user_id'] = $userId;

        $template = Template::create($validated);
        $template->addMediaFromRequest('image')->toMediaCollection('media');

        return redirect()->route('ajouter_templet');
    }





}
