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
use App\Http\Controllers\AssignmentBookingController;
use Redirect;

//use League\Flysystem\Config;       



class AssignExpertController extends Controller 
{
    public function assignExpertManually()
    {
        
       $assignment_id= Input::get('assignment-id');
       $to_assign_expert_id=Input::get('select-for-expert-assign');
       $redirect_url=Input::get('page-request');
       
       
       $send_to='';
       if($redirect_url==null || empty($redirect_url)||$redirect_url=='')
       {
           Session::flash('show_on_dashboard','Oops, We are unable to process the request, please try again later');
           $send_to="dashboard";
           $redirect_url="/users/dashboard";
       }  
        $expert_id_obj=DB::table('expert_availability')->where('expert_id',$to_assign_expert_id)->first();
       
        if($expert_id_obj)
        {
            if($expert_id_obj->availability==1)
            {
             
             return $this->sendAcceptAndRejectNotificationToExpert($assignment_id,$to_assign_expert_id,$redirect_url);
             
            }   
             else
            {
            Session::flash('assign-expert','This expert is not availble at this time');
            
            return Redirect::to($redirect_url);
            }
            
        }
        else
        {
            if($send_to=="dashboard")
            {  
                
             return Redirect::to($redirect_url);   
            }
            Session::flash('assign-expert','This expert is not availble at this time');
            return Redirect::to($redirect_url);
        }
       //Session::flash('expert_assigned','Success, Accept and reject notification has been sent sucessfully to the selected expert');
       $assignCtrlObj = new AssignmentController();
       return $assignCtrlObj->showAssignmentRequest();
        
    }
     public function sendAcceptAndRejectNotificationToExpert($assignment_id,$expert_id,$redirect_url)
    {
        
        $check_assignment_only=DB::table('acceptance_notification_logs')->where('assignment_id',$assignment_id)->first();
        if($check_assignment_only)
        { 
            if($check_assignment_only->status=='accept') 
           { 
              if($check_assignment_only->expert_id==$expert_id)
              {
              
               Session::flash('assign-expert','This assignment has been already accepted by this expert');
               return Redirect::to($redirect_url);
              }  
              else
              {   
             
             Session::flash('assign-expert','This assignment has been already accepted by someone');
             return Redirect::to($redirect_url);
              }
           }  
           if($check_assignment_only->status=='reject') 
           { 
              if($check_assignment_only->expert_id==$expert_id)
              {
             // return "This assignment has been rejected by this expert id";   
                    DB::table('acceptance_notification_logs')->where('assignment_id', $assignment_id)->update(['assignment_id'=>$assignment_id,'expert_id'=>$expert_id,'status'=>'waiting','timestamp'=>time()]);
                Session::flash('assign-expert','Success, Accept and reject notification has been sent to the selected expert successfully');
                return Redirect::to($redirect_url);  
                  
              }  
             
           }  
           if($check_assignment_only->status=='waiting') 
           { 
              if($check_assignment_only->expert_id==$expert_id)
              {
               
              Session::flash('assign-expert','This assignment request has been already sent to this expert, confirmation is stil pending');
              
              DB::table('acceptance_notification_logs')->where('assignment_id',$assignment_id)->update(['expert_id'=>$expert_id,'status'=>'waiting','timestamp'=>time()]);
              return Redirect::to($redirect_url);      
              
              }  
              else
              {
              Session::flash('assign-expert',"This assignment request has been already sent to someone, confirmation is still pending");
             
              return Redirect::to($redirect_url);          
               
              }   
             
           }
        }  
        
        Session::flash('assign-expert',"Success, Accept and reject notification has been sent to the selected expert successfully");
        DB::table('acceptance_notification_logs')->insert(['assignment_id'=>$assignment_id,'expert_id'=>$expert_id,'status'=>'waiting','timestamp'=>time()]);
        return Redirect::to($redirect_url);
        
    
   }
 
}


