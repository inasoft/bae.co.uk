<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use \App\Assignment;
use View;
use App\Http\Controllers\AdminControllers\AdminDashboardController;
use App\Http\Controllers\SendResponseController;
use Validator;
use Redirect;
use Mail;

class DashboardController extends Controller
{

   // public function __construct()
   // {
   //     $logged_in_uid = Auth::user()->id;
   //     $walletAmount=DB::table('wallet')->where('uid',$logged_in_uid)->first();
   //     $global_count_of_assignment= Assignment::where('uid',Auth::user()->id)->count();
   //     $global_available_solutions= Assignment::where('uid',Auth::user()->id)->where('solution_available',1)->count();
       
       
   //     if($walletAmount)
   //     {
   //         $global_wallet_amount=$walletAmount->wallet_amount;
   //     }    
   //     else
   //     {
   //          $global_wallet_amount=0;   
   //     }  
      
   //    View::share('global_wallet_amount', $global_wallet_amount);
   // }


/*
  As we can return view through controller too, but as there is need to keep the value in constructor , means to initialize a constructor which is available in 
  Controller.php . Because we need to put the value in sidebar , total assignment and referral , as they are included in view. 
*/
   public function dashboardController()
   {
       $adminDashObj=new AdminDashboardController();
       
       
       $logged_in_uid = Auth::user()->id;
       $walletAmount=DB::table('wallet')->where('uid',$logged_in_uid)->first();
       $no_of_assignmnet= Assignment::where('uid',Auth::user()->id)->count();
       $no_of_available_solutions= Assignment::where('uid',Auth::user()->id)->where('solution_available',1)->count();
       $assignmentObjects = DB::table('assignment_details')->where('uid',Auth::user()->id)->get();
       
       if($walletAmount)
       {
           $available_amount_in_wallet=$walletAmount->wallet_amount;
       }    
       else
       {
            $available_amount_in_wallet=0;   
       }  
       
       
       if(Auth::user()->id==1)
       {   
         
       return $adminDashObj->getDashboardData();   
        
       }
       else
       {
        return View('dashboard.dashboard')->with(['wallet_amount'=>$available_amount_in_wallet,'no_of_assignment'=>$no_of_assignmnet,'no_of_available_solution'=>$no_of_available_solutions,'assignmentData'=>$assignmentObjects,'controller'=>new SendResponseController]);  
       }   
   }    
   
   public function sendSmipleMail(Request $request)
   {
           $validator = Validator::make($request->all(), [
                    'subject' => 'required',
                    'body' => 'required',
                 ]); 
              $email_from=Auth::user()->email;
           
        
          
        $messages = $validator->messages();
        //dd($messages);
        if ($validator->fails()) 
            {
            
              return Redirect::to('/users/dashboard')
                                ->withInput()
                                ->withErrors($messages);
            }
         $this->sendMailFromStudentDashboard($request->body,$request->subject,$request->attachment);
         dd('Looks like mail sent');
   }
   
   
   public function sendMailFromStudentDashboard($body,$subject,$attachment='')
   {
        
      $data='';
      
      $adminUser    =  Db::table('users')
                        ->join('role_user','role_user.user_id','=','users.id')
                        ->where('role_user.role_id','=','1')
                        ->get();
      $emailFrom    =  Auth::user()->email;
      $name         =  Auth::user()->name;

     if($attachment==null)
     { 
         foreach($adminUser as $admin)
         {    
           $adminUser=$admin->email;  
                Mail::raw($body,  function($message) use($emailFrom,$name,$adminUser,$subject)
                {
                 $message->to('aksuhana@gmail.com')->subject($subject)->from('aksuhana@gmail.com',$name);
                });
      dd($name);
         }
     }
     else
     {   
        foreach($adminUser as $admin)
         {    
           $adminUser=$admin->email;  
                Mail::raw($body,  function($message) use($emailFrom,$name,$adminUser,$subject,$attachment)
                {
                 $message->to($adminUser)->subject($subject)->from($emailFrom,$name)->attachment($attachment);
                });
         }
   
     }
 }
}
        
    
   
  
   

