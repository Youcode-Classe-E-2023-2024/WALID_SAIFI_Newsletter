<?php

namespace App\Http\Controllers;


use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Templet;

class TempletController extends Controller
{


    public function index()
    {
        $medias = Media::all();
        return view('ajouter_templet',['medias' => $medias]);
    }


    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'titre' => 'required|min:5',
            'description' => 'nullable|min:5',
            'content' => 'required',
            'selected_media' => 'nullable|array', // Assurez-vous que c'est un tableau
        ]);

        // Création du modèle
        $template = Templet::create([
            'titre' => $validated['titre'],
            'description' => $validated['description'],
            'content' => $validated['content'],
            'user_id' => auth()->id(),
        ]);

        // Associer les médias sélectionnés au modèle
        if (isset($validated['selected_media'])) {
            $template->syncMedia($validated['selected_media']);
        }

        // Redirection
        return redirect()->route('ajouter');
    }


    public function show_media()
    {
        $medias = Media::all();
        return view('ajouter_templet', compact('medias'));
    }



}
