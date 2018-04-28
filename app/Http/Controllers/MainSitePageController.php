<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SendResponseController;

use App\Http\Requests;
use Auth;
use DB;
use Session;
use Input;
use App\User;
use  Mail;



class MainSitePageController extends Controller
{

    public  function emailSubscriber()
    {
       $email=Input::get('email');
       $userSubscribers=DB::table('email_subscribers')->where('email_id',$email)->get();
      
       if($userSubscribers)
       {
       Session::flash('site_mail_error','Oops, You have already subscribed for newsletter');    
       return redirect('/');
       }   
       DB::table('email_subscribers')->insert(['email_id'=>$email,'time'=>time()]);
       Session::flash('site_mail_success','Thankyou You have been successfully subscribed your newsletter');
       return redirect('/'); 
        
    }        
    
   public function queryEmailFromFooterSitePage(Request $request)
   {

      // $userdetails = array();
       $response = new SendResponseController();
       $emailFrom    = 'contact@bestassignmentexperts.com';
       $name         = 'From Contact Us BAE';
       $subject      = 'MAIL FROM CONTACT US FORM';
          $userdetails    =   explode("&",$request->values);


       $body         = 'Mail from '. $userdetails[0] . ' with  '.(str_replace("%40","  ","$userdetails[1]")).' Message => :'.  $userdetails[3];
       $returnValue =  $this->sendMailFromSitePage($name,$emailFrom,$subject,$body);
      
       
       if($returnValue=='success')
       {
           return $response->responseData('success', '', '');
       }  
       else
       {
           return $response->responseData('error', '', '');
       }  
   }     

   public function queryEmailFromRightsidebarSitePage()
   {
       $emailFrom   = 'contact@bestassignmentexperts.com';//Input::get('email');
       $name        = Input::get('name');
       $subject     = Input::get('subject');
       $body        = Input::get('body');
       $this->sendMailFromSitePage($name,$emailFrom,$subject,$body);
       
   }        
   public function sendMailFromSitePage($name,$emailFrom,$subject,$body)
   {
      
      
        $adminUser    =  Db::table('users')
                        ->join('role_user','role_user.user_id','=','users.id')
                        ->where('role_user.role_id','=','1')
                        ->get();
    
      try
      {
         foreach($adminUser as $admin)
         {    
           $adminEmail=$admin->email;
           
                Mail::raw($body,  function($message) use($emailFrom,$name,$adminEmail,$subject)
                {
                 $message->to($adminEmail)->subject($subject)->from($emailFrom,$name);
                });
         }
        return "success";
        
    
          
      } 
       catch(\Exception $ex)
       {
        
           return redirect('/'); 
        
       }
       
   }        

    
}

