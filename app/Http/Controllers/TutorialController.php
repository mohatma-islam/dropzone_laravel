<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{   
    public function index()
    {
        return view('welcome');
    }
    
    public function uploads(Request $request)
    {
        // dd($request);
        // $path = storage_path('tmp/uploads');

        // !file_exists($path) && mkdir($path, 0777, true);

        // $params = $request->params;

        $id = $request->input('id');

        $file = $request->file('file');
        $name = $id . '_' . trim($file->getClientOriginalName());
        // $file->move($path, $name);

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
