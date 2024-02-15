<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController
{
    public function store(Request $request)
    {
      // dd($request);
        $request->validate([
            'media' => 'required|file',
        ]);
       // dd($request);

        if ($request->hasFile('media')) {

            $upload = Upload::create([
                'created_by' => auth()->user()->id,
            ]);

            $upload->addMedia($request->file('media'))->toMediaCollection('images');

            return back()->with('success', 'Media uploaded successfully');
        } else {

            return back()->withErrors(['media' => 'Please upload a media file.']);
        }
    }
}
