<?php
namespace App\Http\Controllers\WebServices;
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

class PlaceOrderController extends Controller
{
    public function  checkUser()
    {
    
         $response = new SendResponseController();
          
         $place_order = @file_get_contents('php://input');
         $place_order_data = json_decode($place_order, true);
       
         if(!isset($place_order_data['order_details']['email']))
         {
             return $response->responseData('false', 'Unable to get the email id', '');
         }
         if(!isset($place_order_data['order_details']['subject']))
         {
            return  $response->responseData('false', 'please provide the name of the subject', '');
         }  
          if(!isset($place_order_data['order_details']['duedate']))
         {
            return  $response->responseData('false', 'provide date of solution', '');
         }  
           if(!isset($place_order_data['page_no']))
          {
            return $response->responseData('false', 'Provide no of pages', '');
         }  
         
         $email     = $place_order_data['order_details']['email'];
         $get_user  = DB::table('users')->where('email', $email)->get();
        
       
         if($get_user)
         {
           return $response->responseData('false','The given email id already exists in our system, please login to continue.', '');
         }   
         else
         {
             $email             =$place_order_data['order_details']['email'];
             $subject           =$place_order_data['order_details']['subject'];
             $due_date          =$place_order_data['order_details']['duedate'];
             $no_of_pages_no    =$place_order_data['page_no'];
             
              Session::put('email', $email);
              Session::put('subject', $subject);
              Session::put('due_date', $due_date);
              Session::put('no_of_pages', $no_of_pages_no);
              
               
             
             return $response->responseData('true','Proceed next, this is a new user', '');
         }
    }   
 
     public function createUserAndRedirectToDashboard(Request $request)
    {
         $response = new SendResponseController();
      //{"order_details":{"email":"nn@b3rtyhj.dfgvbnfg","subject":"fgvbn","duedate":"12/23/2016"},"page_no":1,"order_info":{"file":"C:\\fakepath\\V_20161103_141448.mp4","reference":"ghfh","phone":"4531356896532","description":"ghnb"}}
         
         
                    
        $assignmentObj=new AssignmentController();
        $response = new SendResponseController();
        $notification= new NotificationController();
      
               
       $email_id    =  Session::get('email');
       $no_of_pages =  Session::get('no_of_pages');
      
            
       $file1        =      \Illuminate\Support\Facades\Request::file('uploaded_file1');
      
       $file2        ='';
       $file3        ='';
       $due_date    = strtotime(str_replace('/', '-', Session::get('due_date')));
       $subject     = Session::get('subject');
       $ref_style   = Input::get('place_order_reference');
       $expert      = 'expert';//$place_order_data_data_value['order_details']['expert'];
       $description = Input::get('description');
       $mobile_no =   Input::get('phone');
      
      
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
    
       public function sendPush()
    { 
       Session::flash('message', 'This is a message!');
       
    

Mail::send('emails.welcome', ['key' => 'value'], function($message)
{
    $message->to('aksuhana@gmail.com', 'John Smith')->subject('Welcome!');
});



        //return redirect('/');
//        $app_id = '163505';
//        $app_key = 'fe8eb5d987f4f9253a84';
//        $app_secret = '4e931b54b4ea3b5f1727';
//
//        
//        $pusher = new Pusher($app_key, $app_secret, $app_id, array('encrypted' => true));
//        $pusher->trigger('taxi_app_channel', 'taxi_event', 'OI');
//        return "Hello";
    }            
    
    public function sendMessage()
    {
        $auth_id = "MAM2YYNMI2ZTDIY2E1ZM";
        $auth_token = "MjI0NzdmOTljZDA2ZmRiMGJkNWM5Y2FjYTExZDQ4";

        $p = new RestAPI($auth_id, $auth_token);

        // Set message parameters
        $params = array(
            'src' => '+918130865897', // Sender's phone number with country code
            'dst' => '+917053761005', // Receiver's phone number with country code
            'text' => 'Your One Time Password is :' , // Your SMS text message
            // To send Unicode text
            //'text' => 'こんにちは、元気ですか？' # Your SMS Text Message - Japanese
            //'text' => 'Ce est texte généré aléatoirement' # Your SMS Text Message - French
            'url' => 'https://example.com/report/', // The URL to which with the status of the message is sent
            'method' => 'POST' // The method used to call the url
        );
        // Send message
        $p->send_message($params);
    }       
    
}
