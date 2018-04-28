<?php
namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use Session;
use Input,Response;
///use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use App\Http\Controllers\SendResponseController;    
       



class SampleController extends Controller 
{
    
     public function createSample()
     {
         return View('admin.dashboard.create-samples');
         
     }       
     public function insertSample(Request $request)
     {
        $response = new SendResponseController();
       
        if($request->topic&&$request->content&&$request->short_description)
        {
         //   return $response->responseData('false','you cannot blank any field','');
        }
        DB::table('samples')->insert(['title'=>$request->topic,'short_desc'=>$request->short_description,'content'=>$request->content,'time'=>time()]);

        return $response->responseData('success','content added successsfully','');


     }
     public function getSampleData()
     {

           $samples=DB::table('samples')->paginate(100); 
           return view('main-site-pages.samples.samples-page')->with(['sampleData'=>$samples]);     

     }
     public function getWholeSampleData($title)
     {

        $formatted_title=str_replace('-',' ',$title);
        //dd($formatted_title);
         $samples=DB::table('samples')->where('page_title_tag',$formatted_title)->first();
         if($samples)
         { 
         return view('main-site-pages.samples.whole-sample-page')->with(['sampleData'=>$samples]);
         }
         else
         {
             return redirect('/samples');
         }
         
     }
     public function deleteSample($id)
     {
        DB::table('samples')->where('id',$id)->delete();
        Session::put('sample_delete','Sample has been deleted successfully');
        return redirect('/samples');
     }
    
    
}
    