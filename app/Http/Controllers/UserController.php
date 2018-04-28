<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use DB;
use Auth;
use Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\SendResponseController;
use App\Http\Controllers\NotificationController;
use Validator;
use File;
use \App\User;

class UserController extends Controller
{
    public function myProfile()
    {
     $logged_in_iser=Auth::user()->id;
     $user_data = DB::table('users')->where('id',$logged_in_iser)->first();

     
     if($user_data)
     {
         return view('dashboard.profile-page')->with('results', $user_data);
         
    }  
     else
     {
         return redirect('/my-profile');//with error messge , there is some problem in fettching your data||
     }
     
        
    }   
    
    public function updateProfile(Request $request)
    {
        
        $profileImgRealPath='';
        $name=Input::get('name');
        $email=Input::get('email');
        $new_password=Input::get('new_password');
        $number = Input::get('phone_number');
        $profile_pic=Input::get('profile_picture');
        $about_me=Input::get('about_me');
        $address= Input::get('address');
        $qualification = Input::get('qualification');
       $defaultImgPath='public/profile_pics/graduate.png';             
       $checkImg=User::find(Auth::user()->id)->profile_image;
             $file = Input::file('profile_picture');
             if($file!=null)
             {
                $newfile = $file->getClientOriginalName();
                $fullpath = $file->move('public/profile_pics', $newfile);
                $profileImgRealPath = str_replace('\\', '/', $fullpath);
             }
            
        
        
        if($new_password!=null&&$new_password!=''&&!empty($new_password))
        {   
        $encryptedPassword=bcrypt($new_password);
		if($profileImgRealPath!=null||!empty($profileImgRealPath))
		{
	
	        DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,'password'=>$encryptedPassword,
	        'profile_image'=>$profileImgRealPath,'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);
	        }
	       else
		{
                
                 if($checkImg!=null)	
	         {
		DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,'password'=>$encryptedPassword,
               'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);
		 }
		else
		{	          
	        DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,'password'=>$encryptedPassword,
	        'profile_image'=>$defaultImgPath,'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);
               }
                }
     } 
        else
        {
		if($profileImgRealPath!=null||!empty($profileImgRealPath))
		{
	        DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,
               'profile_image'=>$profileImgRealPath,'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);    
       	       }
               else
              {

                if($checkImg!=null)	
		{
                 DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,
                 'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);    
		}
                else
	        {
	        DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,
               'profile_image'=> $defaultImgPath,'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);    
                }
             }

        }  
       Session::flash('update_profile','You have successfully updated your profile');
       return redirect('/my-profile')->with('status', 'Profile updated!');
    }     


    public function retrieveForgottenPassword()
    {   
         $response=new SendResponseController();
         $notification= new NotificationController();
         $forgetPassword = @file_get_contents('php://input');
         $forgetPasswordData = json_decode($forgetPassword, true);
       
         if(!isset($forgetPasswordData['email']))
         {
             return $response->responseData('false', 'Unable to get the email id', '');
         }
        

        $userEmail = $forgetPasswordData['email'];
        
        $gotUserEmail=DB::table('users')->where('email',$userEmail)->get();
        if($gotUserEmail)
        {
            $generatePassword = str_random(5);
            $encryptPassword = bcrypt($generatePassword);
            try
            { 
            DB::table('users')->where('email',$userEmail)->update(['password'=>$encryptPassword]);
            //Send Mail Function
                $userObj = DB::table('users')->where('email',$userEmail)->first();
                if($userObj)
                {
                    if($userObj->name!=null)
                    {
                        $name=$userObj->name;
                    }   
                    else
                    {
                        $name = $userEmail.' (Set your name from your dashboard profile page)';
                    }  
                }
                else
                {
                    $name = $userEmail.' (Set your name from your dashboard profile page)';
                } 
                
                $send_mail['send_to']   = $userEmail;
                $send_mail['name']      = $name;
                $send_mail['subject']   = "Your Password is here";
                $send_mail_array[]      = $send_mail;
                
                $variables['welcome_name']  = $name;
                $variables['order_id'] = 'BAE-1-4-005';
                $variables['referral_code']='$referral_code';
                $variables_array[]=$variables;
                $notification->sendMail($send_mail_array, 'emails.forget-password', $variables_array);
                
            
            //End of Send Mail Function
            
            return $response->responseData('true','Thank you for your request to update password, we have sent you a mail along with password','');  
            }
            catch(Exception $ex)
            {
             return $response->responseData('false','Oops! Unable to retrieve password at this time, please try again later','');  
            }

        }
        else
        {
            return $response->responseData('false','Oops! The given email id doesn’t exists in our system, please provide a registered email id or register with a new email id from the registration page','');
        }



    }   
    
    
}
