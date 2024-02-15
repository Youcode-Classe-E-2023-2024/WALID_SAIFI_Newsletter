<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Media;

class MediaController extends Controller
{
    public function media(Request $request) {
        $request->validate([
            'media' => 'required',
        ]);

        $upload = Media::create([
            'created_by' => auth()->user()->id,
        ]);

        $upload->addMedia($request->file('media'))->toMediaCollection('media');

        return back()->with('success', 'Media uploaded successfully');
    }
}
