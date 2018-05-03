<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Mail;
use DB;
use Auth;
use Symfony\Component\HttpFoundation\Request;
use Session;

class NotificationController extends Controller
{
    
    public function sendSmsViaPlivo()
    {
        
    }
    public function sendMail($mail_data,$template,$variables='')
    {
        

         Mail::send($template, ['key' => $variables], function($message) use($mail_data)
         {
             foreach ($mail_data as  $value) 
             {
              $message->to($value['send_to'], $value['name'])->subject($value['subject']);
             }
         });
         
                   
        
        
         $order='';
         $var=0;
         foreach($variables as $value)
         {  
             
               if(isset($value['order_id']))
               {
                $order=$value['order_id'];
                $nam=$value['welcome_name'];

                $var=1;
               }
         }
         if($var==1)
         {
         $emailFrom ='contact@bestassignmentexperts.com';
         $name= 'From BEST ASSIGNMENT EXPERTS';
         $email_to='aakash6590@gmail.com';
         $subject='Congratulations, You got a new order '.$order;
           Mail::raw('Assignement id for the request is : '.  $order  .  ' RequesterName : ' . $nam ,  function($message) use($emailFrom,$name,$email_to,$subject)
           {
                 $message->to($email_to)->subject($subject)->from($emailFrom,$name);
           });
         
         }
    }        
    public function sendMailForFastContact(Request $request)
    {
$validator = Validator::make($request->all(), [
                    'email' => 'required',
                     'subject' => 'required',
                     'message' => 'required',

        ]);
        $messages = $validator->messages();
        if ($validator->fails()) {
     
         return Redirect::to('/users/dashbaord')
                                ->withInput()
                                ->withErrors('Please Fill all the Data');
           
}

        $email_to = $request->email;
        $subject  = $request->subject;
        $body    =  $request->message;
        $emailFrom ='contact@bestassignmentexperts.com';
        $name ="BEST ASSIGNMENT EXPERTS";
                
        try
        {
          Session::flash('mail-send','Your mail has been sent')  ;
           Mail::raw($body,  function($message) use($emailFrom,$name,$email_to,$subject)
           {
                 $message->to($email_to)->subject($subject)->from($emailFrom,$name);
           });
           return redirect('/users/dashboard');
        }
        catch(Exception $ex)
        {
          Session::flash('mail-send','unable to send mail');
          return redirect('/users/dashbaord');  
        }
    }

            
    
}
