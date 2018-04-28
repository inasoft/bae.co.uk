<?php

namespace App\Http\Controllers;

use App\Fileentry;
use Auth;
use App\file;
use DB;
use Input;
use App;
use App\Http\Controllers\AdminControllers\AssignExpertController;
//use Storage;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Resource;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\SendResponseController;

//use Request;
class filecontroller extends Controller {

    public function handleUpload(Request $request) {



        // $this->validate($request, [
        //       'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //  ]);

        if ($request['image'] == null) {
            \Session::flash('message', 'Please choose a file first.');
            \Session::flash('alert-class', 'alert-warning');
            return redirect()->back();
        }


        $assignment_id = ($request->id);
        //dd($request->id);
        $user = new file;
        if ($request->hasFile('image')) {

            $file = $request->file("image");

            $request->assignment_id;

            $d = $request->image->getClientMimeType();
            $e = $request->image->getClientOriginalExtension();
            //dd($e);
            $fi = $request->user()->id;
            //return   $request->
            $request->image->path();
            // dd($n);
            $fileName = $file->getClientOriginalName();
            $filename = $file->getFilename() . '.' . $e;
            //dd($fileName);
            // $fil = Storage::disk('local')->get($file->filename);
            // $destinationPath = public_path().'/public/';
            //$s =  $file->move($destinationPath,$fileName);
            Storage::put('/' . $fileName, file_get_contents($request->file('image')->getRealPath()));

            $user->original_filename = $fileName;

            $user->mime = $file->getClientMimeType();
            $user->filename = $file->getFilename() . '.' . $e;
            $user->assignment_id = $assignment_id;
            // $e=    $file->getClientMimeType();
        }
        ($user->save());
        $id = $user->assignment_id;
        return redirect('assignment-details/' . $id);
        //else{
        //return " no file selected";
    }

}

//public funpublic function  handle(Request $request )

   