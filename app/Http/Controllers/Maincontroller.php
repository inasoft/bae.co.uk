<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SendResponseController;
use Symfony\Component\HttpFoundation\Request;
use DB;
use Auth;
use Pusher;
use Plivo\RestAPI;
use Alert;
use \App\User;
use Config;
use Input;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AssignmentController;

class MainController extends Controller
{
     public function createUserAndRedirectToDashboard(Request $request)
    {
     //dd($request->all());
         $response = new SendResponseController();
      //{"order_details":{"email":"nn@b3rtyhj.dfgvbnfg","subject":"fgvbn","duedate":"12/23/2016"},"page_no":1,"order_info":{"file":"C:\\fakepath\\V_20161103_141448.mp4","reference":"ghfh","phone":"4531356896532","description":"ghnb"}}
         
         
                    
        $assignmentObj=new AssignmentController();
        $response = new SendResponseController();
        $notification= new NotificationController();
      
               
       $email_id    = $request->email;
       $no_of_pages =  $request->count;
      
            
       $file1        =      \Illuminate\Support\Facades\Request::file('image');
      
       $file2        ='';
       $file3        ='';
       $due_date    =  strtotime($request->due_date);
       $subject     = $request->subject;
       $ref_style   = $request->place_order_reference;
       $expert      = 'expert';//$place_order_data_data_value['order_details']['expert'];
       $description = $request->description;
       $mobile_no =  $request->phone;
      
      
        //Auth::logout();
        //$email_id=';
        $plain_password     =str_random(5);
        $enccrypted_password=bcrypt($plain_password);
        try
        {
        
        $user_id=DB::table('users')->insertGetId(['name'=>'Hello Guest', 'email'=>$email_id,'password'=>$enccrypted_password,'profile_image'=>'public/profile_pics/graduate.png','contact_no'=>$mobile_no]);
        if($user_id)
        {   
        $unique_referral_code = strtoupper(substr('ANY',0,3)).'~'.$user_id.'~'. strtoupper(str_random(5));
        DB::table('user_referral')->insert(['uid' => $user_id, 'referral_code' => $unique_referral_code,'time'=>time()]);
        DB::table('role_user')->insert(['role_id'=>3,'user_id'=>$user_id]);
        }
        $user_object=User::find($user_id);
        Auth::login($user_object);
        
           $get_assignment_id=$assignmentObj->insertValuesInAssignment($user_id, $due_date, $subject, $no_of_pages, $ref_style, $expert, $description, $file1, $file2, $file3,"place_order_form");  
           // Use Mail Function Here
                $send_mail['send_to']   =$email_id;
                $send_mail['name']      =$email_id;
                $send_mail['subject']   ="Your Order with Registration placed successfully";
                $send_mail_array[]=$send_mail;

                $variables['welcome_name']  = $email_id.' (Set your name from your dashboard profile page)';
                $variables['order_id']      = $response->getAssignmentAsOrderId($get_assignment_id,$user_id);
                $variables['referral_code'] = $unique_referral_code;
                $variables['password']      = $plain_password;
                $variables_array[]=$variables;

                $notification->sendMail($send_mail_array, 'emails.place-order-registration', $variables_array);
           //End of mail Function 
           return redirect('/users/dashboard');
        }
        catch(\Exception $ex)
        {
          Session::flash('place_order_exception','Oops we got an error while taking your form data, It seems that you have tried to submit the form multiple times or Please check your email') ; 
          return redirect('/users/dashboard');
        }
       return  $response->responseData('true', 'success', '');
    }        
    }