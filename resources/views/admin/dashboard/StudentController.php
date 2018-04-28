<?php
namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Input,Response;
use App\Fileentry;
use App\Http\Controllers\CommentController;
//use App\Http\Controllers\Controller;
use App\Assignment;       
use Session;
use View;

///use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use App\User;
use App\Http\Controllers\Amount\WalletController;
use App\Http\Controllers\SendResponseController;       


class StudentController extends Controller 
{
 public function __construct()
      {
           $this->idForFormation = new SendResponseController();
      }   
    public function showStudents()
    {
         $profile_data=DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_id', '=', 3 )
            ->orderBy('users.id','DESC') 
            ->get();
      
        return View('admin.dashboard.show-students')->with('students_profile_data',$profile_data);
    }        
    public function deleteStudent()
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
                if($get_user_role->role_id!=3)
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
   
   public function blockStudent(Request $request)
   {
       
       $response     = new SendResponseController();
       $blockStudent   = @file_get_contents('php://input');
       $blockStudentData = json_decode($blockStudent, true);
                 
       if(!isset($blockStudentData['uid']))
       {
        return $response->responseData('false','Unable to get the student information to block','');
       }  
       
            $user_id=$blockStudentData['uid'];
             $available_user=User::find($user_id);
            $get_user_role=DB::table('role_user')->where('user_id',$user_id)->first();
            if($get_user_role)
            {   
             if($get_user_role->role_id!=3)
             {
              return $response->responseData('false','Oops, this is not the id of the student,please try again','');
             }
            } 
            if($available_user)
            {
                
            DB::table('users')->where('users.id', '=', $user_id )->update(['status'=>0]);
           // Auth::logout($user_id);
            //Session::flash('user deleted successfully');//Need to alss check for /id so that directy any one could not able to delete the user
            return $response->responseData('true','Student blocked successfully','');
            }
            else
            {
                //Session::flash('No user found');
              return $response->responseData('false','Oops, No record found for the given user to delete','');
            }  
     }
     
     
      public function unblockStudent(Request $request)
   {
       
       $response     = new SendResponseController();
       $blockStudent   = @file_get_contents('php://input');
       $blockStudentData = json_decode($blockStudent, true);
                 
       if(!isset($blockStudentData['uid']))
       {
        return $response->responseData('false','Unable to get the student information to block','');
       }  
       
            $user_id=$blockStudentData['uid'];
            $available_user=User::find($user_id);
            $get_user_role=DB::table('role_user')->where('user_id',$user_id)->first();
            if($get_user_role)
            {   
             if($get_user_role->role_id!=3)
             {
              return $response->responseData('false','Oops, this is not the id of the student,please try again','');
             }
            } 
            if($available_user)
            {
                
            DB::table('users')->where('users.id', '=', $user_id )->update(['status'=>1]);
           // Auth::logout($user_id);
            //Session::flash('user deleted successfully');//Need to alss check for /id so that directy any one could not able to delete the user
            return $response->responseData('true','Student unblocked successfully','');
            }
            else
            {
                //Session::flash('No user found');
              return $response->responseData('false','Oops, No record found for the given user to delete','');
            }  
     }   
    public function showStudentProfile($id)
    {
        
          $checkStudent=DB::table('users')
                     ->join('role_user', 'users.id', '=', 'role_user.user_id')
                     ->where('role_id', '=', 3 )
                     ->where('users.id',$id)
                     ->first();
         if(is_null($checkStudent)||empty($checkStudent))
         {
             Session::flash('student-error','Oops student does not exist');
             return redirect("/show-students");
         }
        
        $student_name  = User::find($id)->name;
        $student_email = User::find($id)->email;
        $mobile_no     = User::find($id)->contact_no;
        $about_me      = User::find($id)->about_me;
        $profile_image = User::find($id)->profile_image;
        $currency      = User::find($id)->currency?User::find($id)->currency:"$";
        $registered_on = User::find($id)->time?date('d-m-Y h:i A',User::find($id)->time):'';
        $password      = User::find($id)->password;
        $status        = User::find($id)->status; 
        $last_login   =  User::find($id)->last_login_timestamp?date('d-m-Y h:i A',User::find($id)->last_login_timestamp):'Not login yet';
	$address     = User::find($id)->address;
                
        $assingmement_count =DB::table('assignment_details')->where('uid',$id)->count();
        $wallet_amount_obj      = DB::table('wallet') ->where('uid',$id)->first();

        if($wallet_amount_obj)
        {
            $wallet_amount=$currency .$wallet_amount_obj->wallet_amount;
        }  
        else
        {
            $wallet_amount=$currency.'0';
        }  
        
      return view('admin.dashboard.student-profile')->with(['id'=>$id,'name'=>$student_name,'email'=>$student_email,'mob'=>$mobile_no,
              'about_me'=>$about_me,'image'=>$profile_image,'registered_on'=>$registered_on,'assignment_count'=>$assingmement_count,
              'wallet_amount'=>$wallet_amount,'password'=>$password,'last_login'=>$last_login,'status'=>$status,'address'=>$address]);  
     
        
    }       
    public  function updateStudent($id)
    {
       
          $checkStudent=DB::table('users')
                     ->join('role_user', 'users.id', '=', 'role_user.user_id')
                     ->where('role_id', '=', 3 )
                     ->where('users.id',$id)
                     ->first();
         if(is_null($checkStudent)||empty($checkStudent))
         {
             Session::flash('student-error','Oops, An Invalid id encountered to update');
             return redirect("/show-students");
         }
        
        
      
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
       return redirect('/show-students');       
   }        
   
   public function addAmountInUserWallet()
   {
       $response     = new SendResponseController();
       $obj          = new WalletController(); 
       $WalletData   = @file_get_contents('php://input');
       
       $WalletDataValue = json_decode($WalletData, true);
       
         if(!isset($WalletDataValue['uid']))
         {
             return $response->responseData('false','Plese provide the userid to which you want to add the wallet amount',$WalletDataValue);
         }  
         if(!isset($WalletDataValue['wallet_amount']))
         {
              return $response->responseData('false','Provide the amount that to be added in wallet','');
         }  
          if(!isset($WalletDataValue['type']))
         {
              return $response->responseData('false','Type field is required','');
         } 
           
         $uid          =$WalletDataValue['uid'];
         $addAmount    =$WalletDataValue['wallet_amount'];
         $type         =$WalletDataValue['type'];
         
         if($addAmount==null||empty($addAmount))
         {
              return $response->responseData('false','Provide a wallet amount','');
         }   
         if(!ctype_digit($addAmount))
         {
              return $response->responseData('false','Wallet amount should be in numeric format','');
         }
          $getUserData = User::find($uid)?User::find($uid)->name:'';
            if($getUserData==''||$getUserData==null||empty($getUserData))
                {
                    return $response->responseData('false','A user of the given id was not found, please use a valid student id','');
                }
            if($type==''||$type==null||empty($type))
           {
                  if(User::find($uid)->hasRole('authenticated_user'))
                  {
                      return $response->responseData('true', 'You are going to add an amout of $'.$addAmount.'to the '.$getUserData.' wallet. The updated balance will be 585', '');
                  } 
                  else
                  {
                    return $response->responseData('false','A user of the given id does not contain a student role. Please use the valid student id','');  
                  }
                      
             }   
       
       
              
     
         if(User::find($uid)->hasRole('authenticated_user'))
         {
               $obj->addAmountInWallet($uid,$addAmount);
               return $response->responseData('true', $addAmount. 'has been added to the user waller successfully', '');
           
         } 
         else
         {
           return $response->responseData('false','A user of the given id does not contain a student role. Please use the valid student id','');  
         }
   }  
    public function ShowTotalAssignment($id){
          
           $rewokAssignments = $assignmentRequests =DB::table('users')
                     ->join('assignment_details', 'users.id', '=', 'assignment_details.uid')
                     ->where('users.id',$id)->get();
                     //dd($rewokAssignments);
           return view('admin.dashboard.showtotal')->with(['rework_asssignment'=>$rewokAssignments,'idFormation'=>$this->idForFormation]);
            
    }
        
           

    }       
