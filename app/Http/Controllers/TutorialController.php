<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TutorialController extends Controller
{   
    public function index()
    {
        return view('welcome');
    }
    
    public function uploads(Request $request)
    {
        $id = $request->input('id');

        $file = $request->file('file');
        // $name = $id . '_' . trim($file->getClientOriginalName());
        $name = trim($file->getClientOriginalName());


        Storage::disk('local')->put('temp/imageUpload/' . $name, File::get($file));

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function store(Request $request)
    {
        dd(['document' => $request->input('document', []), 'document2' => $request->input('document2', [])]);
        $file = null;
        foreach($request->input('document', []) as $file) {
            //your file to be uploaded
            $file;
        }

        // dd($request->file('files'));

    }


}
