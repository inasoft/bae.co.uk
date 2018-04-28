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
use App\Assignment;;
use App\Coupon;
use App\User;
use App\Http\Controllers\AdminControllers\AssignmentController;
use App\Http\Controllers\SendResponseController;
//use League\Flysystem\Config;       



class ExpertController extends Controller 
{
     
    public function   showExperts()
    {
    
         $profile_data=DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_id', '=', 2 )
            ->orderBy('users.id','DESC') 
            ->get();
       
        return View('admin.dashboard.show-experts')->with('expert_profile_data',$profile_data);
            
    }       
   
    public function deleteExpert()
    {
       $response     = new SendResponseController();
       $deleteStudent   = @file_get_contents('php://input');
       $deleteStudentData = json_decode($deleteStudent, true);
        
             
       if(!isset($deleteStudentData['uid']))
       {
        return $response->responseData('false','Unable to get the student information to delete','');
       }  
       $user_id=$deleteStudentData['uid'];
        if($user_id)
        {
            $available_user=User::find($user_id);
            $get_user_role=DB::table('role_user')->where('user_id',$user_id)->first();
            if($get_user_role)
            {   
                if($get_user_role->role_id!=2)
                {
                return $response->responseData('false','Oops, this is not the id of the student,please try again','');
                }
            }    
            if($available_user)
            {    
            DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('users.id', '=', $user_id )->delete();
            //Session::flash('user deleted successfully');//Need to alss check for /id so that directy any one could not able to delete the user
              return $response->responseData('true','Student deleted successfully','');
            }
            else
            {
                //Session::flash('No user found');
             return $response->responseData('false','Oops, No record found for the given user to delete','');
            }  
        }
            //Session::flash('No user found');
            // return redirect('/show-students');
   }
   
   public function blockExpert(Request $request)
   {
       
       $response     = new SendResponseController();
       $blockExpert   = @file_get_contents('php://input');
       $blockExpertData = json_decode($blockExpert, true);
                 
       if(!isset($blockExpertData['uid']))
       {
        return $response->responseData('false','Unable to get the expert information to block','');
       }  
       
            $user_id=$blockExpertData['uid'];
             $available_user=User::find($user_id);
            $get_user_role=DB::table('role_user')->where('user_id',$user_id)->first();
            if($get_user_role)
            {   
             if($get_user_role->role_id!=2)
             {
              return $response->responseData('false','Oops, this is not the id of the expert, please try again','');
             }
            } 
            if($available_user)
            {    
            DB::table('users')->where('users.id', '=', $user_id )->update(['status'=>0]);
            //Auth::logout($user_id);
            //Session::flash('user deleted successfully');//Need to alss check for /id so that directy any one could not able to delete the user
            return $response->responseData('true','Expert blocked successfully','');
            }
            else
            {
                //Session::flash('No user found');
              return $response->responseData('false','Oops, No record found for the given user to delete','');
            }  
        }
        
        
       public function unblockExpert(Request $request)
   {
       
       $response     = new SendResponseController();
       $unblockExpert   = @file_get_contents('php://input');
       $unblockExpertData = json_decode($unblockExpert, true);
                 
       if(!isset($unblockExpertData['uid']))
       {
        return $response->responseData('false','Unable to get the expert information to block','');
       }  
       
            $user_id=$unblockExpertData['uid'];
             $available_user=User::find($user_id);
            $get_user_role=DB::table('role_user')->where('user_id',$user_id)->first();
            if($get_user_role)
            {   
             if($get_user_role->role_id!=2)
             {
              return $response->responseData('false','Oops, this is not the id of the expert, please try again','');
             }
            } 
            if($available_user)
            {    
            DB::table('users')->where('users.id', '=', $user_id )->update(['status'=>1]);
            //Auth::logout($user_id);
            //Session::flash('user deleted successfully');//Need to alss check for /id so that directy any one could not able to delete the user
            return $response->responseData('true','Expert blocked successfully','');
            }
            else
            {
                //Session::flash('No user found');
              return $response->responseData('false','Oops, No record found for the given user to delete','');
            }  
        } 
        
       
   public function showExpertProfile($id)
    {
         $checkExpert=DB::table('users')
                     ->join('role_user', 'users.id', '=', 'role_user.user_id')
                     ->where('role_id', '=', 2 )
                     ->where('users.id',$id)
                     ->first();
         if(is_null($checkExpert)||empty($checkExpert))
         {
             Session::flash('expert-error','Oops expert does not exist');
             return redirect("/show-experts");
         }
       
        
       
       
        $student_name  = User::find($id)->name;
        $student_email = User::find($id)->email;
        $mobile_no     = User::find($id)->contact_no;
        $about_me      = User::find($id)->about_me;
        $profile_image = User::find($id)->profile_image;
        $currency      = User::find($id)->currency;
        $registered_on = User::find($id)->created_at;
        $password      =User::find($id)->password;
        $status         =User::find($id)->status;
        $last_login   =  User::find($id)->last_login_timestamp?date('d-m-Y h:i A',User::find($id)->last_login_timestamp):'Not login yet';
        $assingmement_count =DB::table('assignment_details')->where('uid',$id)->count();
        $wallet_amount_obj      = DB::table('wallet') ->where('uid',$id)->first();
        $referral_count=5;

        if($wallet_amount_obj)
        {
            $wallet_amount=$currency?$currency .$wallet_amount_obj->wallet_amount:'$'.' 0';
        }  
        else
        {
            $wallet_amount=0;
        }  
        
      return view('admin.dashboard.expert-profile')->with(['id'=>$id,'name'=>$student_name,'email'=>$student_email,'mob'=>$mobile_no,
              'about_me'=>$about_me,'image'=>$profile_image,'registered_on'=>$registered_on,'assignment_count'=>$assingmement_count,
              'wallet_amount'=>$wallet_amount,'referrals'=>$referral_count,'password'=>$password,'last_login'=>$last_login,'status'=>$status]);  
     
        
    }       
    public  function updateExpert($id)
    {
       
      
       $name= Input::get('profile_name');
       $email=Input::get('profile_email');
       $pass= bcrypt(Input::get('profile_password'));
       $mobile_no=Input::get('profile_phone');
       $profile_image=Input::get('profile_image');
       $about_me=Input::get('profile_about');
       DB::table('users')->where('id',$id)->update(['name'=>$name,'email'=>$email,'password'=>$pass,
                                  'contact_no'=>$mobile_no,'profile_image'=>$profile_image,
                                  'about_me'=>$about_me]);
       
       
      //Session::flash('Profile Updated successfully');//Need to alss check for /id so that directy any one could not able to delete the user
       return redirect('/show-experts');       
   }        
   public function getListOfAvailableExperts()
   {
       
     $available_experts =  DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('expert_availability','expert_availability.expert_id','=','users.id')                    
            ->where('role_user.role_id', '=', 2 )
            ->where('expert_availability.availability', '=', 1 )->get();
            
     return $available_experts;
            
       
   }        
    
   public function submitAssignmentWithSolution(Request $request)
   {
       $assignment_id=$request->assignment_id;
       $file_path=$path;
       
       DB::table('assignment_solutions')->insert(['assignment_id',$assignment_id,'solution_file_path'=>$file_path,'timestamp'=>time()]);
       DB::table('assignment_details')->where('assignment_id' ,$assignment_id)->update(['sloution_available'=>1]);
       
   }      
   
    
    
}
