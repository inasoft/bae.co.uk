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
use App\User;
use Validator;
use Redirect;

       


class UserController extends Controller 
{ 
   // protected $user;
    public function __construct(User $user)
    {
      $this->user=$user;  
      parent::__construct(); 
          
    }        
            
    public function createUser()
    {
        return view('admin.dashboard.create-user');
    }       
    
    
    public function createUserPostData(Request $request)
    {
           //This will be on submit of create coupon on coupon page
     
        $user=new User();
        try
        {
        $userName= Input::get('name');
        $userEmail= Input::get('email');
        $userPassword= Input::get('password');
        $userPhone= Input::get('phone');
        $userRole=Input::get('role');
        
        //Validation check
        
              $validator = Validator::make($request->all(), [
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required',
                    'role' =>'required',
                    'name' => 'required|max:255',
                 ]); 
              $messages = $validator->messages();
        //dd($messages);
            if($validator->fails()) 
            {
            
              return Redirect::to('/create-user')
                                ->withInput()
                                ->withErrors($messages);
            }
        
        
        //
        
        
        
        
        if($userRole=='admin')
        {
            $role='1';
        } 
        else if($userRole=='expert')
        {
            $role='2';
        }   
        else
        {
            $role='3';
        }   
       $this->user->name=$userName;
       $this->user->email=$userEmail;
       $this->user->contact_no=$userPhone;
       $this->user->password=bcrypt($userPassword);
       $this->user->save();
       if($this->user->id)
        {   
         DB::table('role_user')->insert(['role_id'=>$role,'user_id'=>$this->user->id]);
          if($role==2)
         {
             DB::table('expert_availability')->insert(['expert_id'=>$this->user->id,'availability'=>1,'timestamp'=>time()]);
         }
        }
        return redirect('/users/dashboard');
      }
      catch(Exception $e)
      {
       return redirect('/users/dashboard');     
      }    
    }       
  public function showAdminProfile($id)
    {
        $student_name  = User::find($id)->name;
        $student_email = User::find($id)->email;
        $mobile_no     = User::find($id)->contact_no;
        $about_me      = User::find($id)->about_me;
        $profile_image = User::find($id)->profile_image;
        $currency      = User::find($id)->currency;
        $registered_on = User::find($id)->created_at;
        $password      = User::find($id)->password;
        $assingmement_count =DB::table('assignment_details')->where('uid',$id)->count();
        $last_login   =  User::find($id)->last_login_timestamp?date('d-m-Y h:i A',User::find($id)->last_login_timestamp):'Not login yet';
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
        
      return view('admin.dashboard.admin-profile')->with(['id'=>$id,'name'=>$student_name,'email'=>$student_email,'mob'=>$mobile_no,
              'about_me'=>$about_me,'image'=>$profile_image,'registered_on'=>$registered_on,'assignment_count'=>$assingmement_count,
              'wallet_amount'=>$wallet_amount,'referrals'=>$referral_count,'password'=>$password,'last_login'=>$last_login ]);  
     
        
    }       
    public  function updateAdmin($id)
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
       return redirect('/show-students');       
   }        
   
    
}
