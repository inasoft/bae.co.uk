<?php
namespace App\Http\Controllers\Auth;
use App\User;
use App\RoleUser;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\loginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use DB;
use App\Http\Controllers\NotificationController;
use Session;
use App\Http\Controllers\ReferralController;
use Auth;
use Socialite;
use App\SocialProvider;


class AuthController extends Controller {

    /**
     * User model instance
     * @var User
     */
    protected $user;

    /**
     * For Guard
     *
     * @var Authenticator
     */
    protected $auth;

    use AuthenticatesAndRegistersUsers,
        ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth, User $user) {
        $this->user = $user;
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:1',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'profile_image' => $data['profile_pic'],
                    'provider_id' => $data['provider_id'],

                    'password' => bcrypt($data['password']),
        ]);
    }

    /* Login get post methods */

    protected function getLogin() {
        return View('users.login');
    }

    protected function postLogin(loginRequest $request) {
 
        if ($this->auth->attempt(['email' => $request->email, 'password' => $request->password])) {
           //return "dsg";
              //return $request->only('id');    
            $this->updateLoginTimestamp(Auth::user()->id);
            return redirect('users/dashboard');
            
        }
        return redirect('users/login')->withErrors([
                    'email' => 'The email or the password is invalid. Please try again.',
        ]);
    }

    /* Register get post methods */

    protected function getRegister() {

        return View('users.register');
    }

    protected function postRegister(RegisterRequest $request) 
    {
        $notification=new NotificationController();
        $referral =new ReferralController();
        $ref_response=null;
        $responseData=null;
        
        if($request->referral_code!=''&&!empty($request->referral_code))
        {
            $referral_code=$request->referral_code;
            $responseData=$referral->useReferralCode($referral_code);
            switch($responseData)
            {
                case 'max_used':
                  Session::flash('registration', 'Oops, this referal code has reached the maximum level of redeemption, please use a valid one(if you have) otherwise keep the field blank and then try again.');
                  return redirect('users/register');
                  break;
                case 'invalid_referral':
                  Session::flash('registration', 'Oops,please provide a correct referal code or register without referal code');
                  return redirect('users/register');
                  break;
            }
        }            
        
                
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->profile_image='public/profile_pics/graduate.png';
        $this->user->time     =time();
        //$this->user->extra_field=$request->password;
        //$this->user->user_role = $request->permission_lists;
        $this->user->save();
        if($this->user->id)
        {   
        $unique_referral_code = strtoupper(substr($this->user->name,0,3)).'~'.$this->user->id.'~'. strtoupper(str_random(5));
        DB::table('user_referral')->insert(['uid' => $this->user->id, 'referral_code' => $unique_referral_code,'time'=>time()]);
        DB::table('role_user')->insert(['role_id'=>3,'user_id'=>$this->user->id]);
        if($responseData!=null)
        {   
        $ref_response = $referral->earnFromReferral($this->user->id,$responseData);
        }
        }
        
        
        if($ref_response!=null)
        {   
        Session::flash('registration', 'Congratulations!, You have successfully registered.Your referal code has been applied successfully, An amount of $'.$ref_response.'has been added in your wallet, continue login to use our service');
        }
        else
        {
        Session::flash('registration', 'Congratulations!, You have successfully registered. You can now login');    
        }    
        
        
        
        try
        {
              
            $send_mail['send_to']   =$this->user->email;
            $send_mail['name']      =$this->user->name;
            $send_mail['subject']   ="Registration Successfull!!!";
            $send_mail_array[]=$send_mail;
            
            $variables['welcome_name']  = $this->user->name;
            $variables['referral_code'] = $unique_referral_code;
            $variables_array[]=$variables;

            //Sending Mail Functions
            $notification->sendMail($send_mail_array, 'emails.registration', $variables_array);
            //End of sending mail function
      
        } 
        catch (Exception $ex) 
        {
        return redirect('users/login');
        }
       return redirect('users/login');
     
    }

        /**
     * Log the user out of the application.
     *
     * @return Response
     */
    protected function getLogout() {
        $this->auth->logout();
        return redirect('users/login');
    }
    
    
    
    public function updateLoginTimestamp($id)
    {
        DB::table('users')->where('id',$id)->update(['last_login_timestamp'=>time()]);
        
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
   public function redirectToProvider($provider)
    {
        
       return Socialite::driver($provider)->redirect();
        
        
       // return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
         $notification=new NotificationController();
       
        try
        {
                $user = Socialite::driver($provider)->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))->user();
              //  dd($user);
              //  print_R($user);
                
            if(!$user->email)
            {
              Session::flash('User_email_not_found', 'Sorry, Your account is not created beacuse email Id is not found in your facebook account. Please register with valid email address'); 
              return redirect('/users/register');  
            }
            
            $create['name'] = $user->name?$user->name:$user->user['name'];
            $create['email'] = isset($user->email)?$user->email:'';
            $create['provider_id'] = isset($user->id)?$user->id:'';
            $create['password'] = str_random(5);
            // $create['facebook_nickname'] = isset($user->nickname)?$user->nickname:'';
            // $create['facebook_first_name'] = isset($user->user['first_name'])?$user->user['first_name']:'';
            // $create['facebook_last_name'] = isset($user->user['last_name'])?$user->user['last_name']:'';
            // $create['dob'] = isset($user->user['birthday'])?$user->user['birthday']:'';
            // $create['facebok_location_id'] = isset($user->user['location']['id'])?$user->user['location']['id']:'';
            // $create['facebok_location_name'] = isset($user->user['location']['name'])?$user->user['location']['name']:'';
            // $create['user_type'] = 'U';
            // $create['is_mobile_verified'] = 0;
            // $create['gender'] = isset($user->user['gender'])?$user->user['gender']:'';
            $create['profile_pic']=$user->avatar_original?$user->avatar_original:'http://2.bp.blogspot.com/-kuIOVDu2Y4Y/UtySix13PQI/AAAAAAAAATc/4wJjhxdUJoA/s1600/facebook-profile-image.jpg';


            $createdUser= User::where('provider_id',$user->id)->orWhere('email',$user->email)->first();
           
            //End of sending mail function
               
//Referral Code Generation

       
        
         //End OF COde R CG
         if(!$createdUser)
            { 
              $createdUser=$this->create($create); 
               $unique_referral_code = strtoupper(substr($create['name'],0,3)).'~'.$createdUser->id.'~'. strtoupper(str_random(5));
        DB::table('user_referral')->insert(['uid' => $createdUser->id, 'referral_code' => $unique_referral_code,'time'=>time()]);
        DB::table('role_user')->insert(['role_id'=>3,'user_id'=>$createdUser->id]); 
            $send_mail['send_to']   = $create['email'];
            $send_mail['name']      = $create['name'];
            //$send_mail['password']      = $create['password'];
            $send_mail['subject']   ="Registration Successfull!!!";
            $send_mail_array[]=$send_mail;
            
            $variables['welcome_name']  = $create['name'];
            $variables['referral_code'] = $unique_referral_code;
            $variables['password'] =$create['password'];//
            $variables_array[]=$variables;

            //Sending Mail Functions
            $notification->sendMail($send_mail_array, 'emails.registration', $variables_array);

        }
            Auth::loginUsingId($createdUser->id);
            DB::table('users')->where('id',Auth::user()->id)->update(['profile_image'=>  $user->avatar_original?$user->avatar_original:'http://2.bp.blogspot.com/-kuIOVDu2Y4Y/UtySix13PQI/AAAAAAAAATc/4wJjhxdUJoA/s1600/facebook-profile-image.jpg']);    

            return redirect('/users/dashboard');
         }
         catch(Exception $ex)
         {
          
          return redirect('/');
         }
        
    }

}
