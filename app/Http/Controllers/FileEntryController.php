<?php namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Fileentry;
use Symfony\Component\HttpFoundation\Request;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
//use Symfony\Component\HttpFoundation\File\File;

use Illuminate\Http\Response;
 use Input;
 use App\Http\Controllers\AssignmentController;
use  DB;
 
class FileEntryController extends Controller {
 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$entries = Fileentry::all();
 
		return view('fileentries.index', compact('entries'));
	}
 
	public function add(Request $request) {
            $assignmentC=new AssignmentController();
            $assignment_id=$request->assignment_id;
                    
             $file = \Illuminate\Support\Facades\Request::file('filefield');
             if($file!=null)
               {  
//		$extension = $file->getClientOriginalExtension();
//		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
//		$entry = new Fileentry();
//		$entry->mime = $file->getClientMimeType();
//		$entry->original_filename = $file->getClientOriginalName();
//		$entry->filename = $file->getFilename().'.'.$extension;
// 
//		$entry->save();
                $assignmentC->putSolutionFileData($assignment_id, $file);
 
		return redirect('http://inasoftsolutions.com/pending-assignment/uploaded');
               }
               else
               {
                   ///Message Upload file failed
                return redirect('http://inasoftsolutions.com/pending-assignment/uploadfail');
               }
		
	}
	public function get($filename){
	  $entry = Fileentry::where('original_filename', '=', $filename)->first();
            if(count($entry))
            {  
		$file = Storage::disk('local')->get($entry->original_filename);
 
		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
            }
            else
            {
               try
               { 
               $entry = DB::table('assignment_solutions')->where('filename', '=', $filename)->first();
               if($entry)
               {   
		$file = Storage::disk('local')->get($entry->original_filename);
 
		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
               }
               }
               catch(\Exception $ex)
               {
                   return redirect('users/dashboard');
               }
            } 
	}
 
}
