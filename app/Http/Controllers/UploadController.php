<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function upload(Request $request){
        $arquivo = "";
        //dd($request->file('arquivo')[0],$request->all());
        for($i = 0; $i < count($request->allFiles()['arquivo']); $i++){
            $arquivo = $request->file('arquivo')[$i];
            $arquivo->path = $arquivo->store('teste');
        }
        //dd($arquivo->path);
        return view('upload.form', ['arquivo'=>$arquivo->path]);
    }
}
