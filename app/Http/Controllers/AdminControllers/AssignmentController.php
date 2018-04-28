<?php
namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\SendResponseController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Assignment;       
use App\User;
use Session;
use View;
use DB;
use Input;



  class AssignmentController extends Controller //To show Assignment File , Show it on Click on Assignment Id
  {
  
      public function __construct()
      {
           $this->idForFormation = new SendResponseController();
      }       
      public function  showPaidAssignment()
      {
    
            $allPriorityAssignment = Assignment::where('due_date','<=',2*86400+time())->where('due_date','>=',time())->get();

            $allPriorityAssignmentCheck=$allPriorityAssignment;

            if(!empty($allPriorityAssignmentCheck->toArray()))
            {
             $sendAllPriorityAssignmentData=$allPriorityAssignment;
            }   
            else
            {
             $sendAllPriorityAssignmentData='';
            }
            return View('admin.dashboard.priority-assignment')->with('priority_assignment_data',$sendAllPriorityAssignmentData);
      }
    
      public function showCompletedAssignment()
      {
           $allCompletedAssignment= DB::table('assignment_details')
                                  ->join('order', 'assignment_details.order_id', '=', 'order.order_id')
                                  ->select('assignment_details.*', 'order.*')->where('assignment_details.status','completed')
                                  ->get();
       
            if(count($allCompletedAssignment))
            {
              $allCompletedAssignmentData=$allCompletedAssignment;  
            }  
            else
            {
                $allCompletedAssignmentData='';
            }
           return View('admin.dashboard.completed-assignment')->with(['completed_assignment_data'=>$allCompletedAssignmentData,'idFormation'=>$this->idForFormation]);
         
      }
     
      public function  showPriorityAssignment()
      {

       
       
          $allPriorityAssignment  = Assignment::where('due_date','<=',2*86400+time())->where('due_date','>=',time())->where('status','pending')->get();

            if(!$allPriorityAssignment->isEmpty())
            {
             $sendAllPriorityAssignmentData=$allPriorityAssignment;
            }   
            else
            {
              $sendAllPriorityAssignmentData='';
            }
            return View('admin.dashboard.priority-assignment')->with(['priority_assignment_data'=>$sendAllPriorityAssignmentData,'idFormation'=>$this->idForFormation]);
      }
    
     public function  showAssignmentRequest()
     {
      
            $allAssignmentRequest = Assignment::where('assigned_to',null)->get();
            $allAssignmentRequestCheck=$allAssignmentRequest;
            if(!$allAssignmentRequestCheck->isEmpty())
            {
                $sendAllAssignmentRequestData=$allAssignmentRequest;
            }   
            else
            {
                $sendAllAssignmentRequestData='';
            }
            return View('admin.dashboard.assignment-request')->with(['assignment_request_data'=>$sendAllAssignmentRequestData,'available_experts'=>$this->getAvailableExperts(),'idFormation'=>$this->idForFormation]);
     }
     public function  showPendingAssignment()
     {
  
         $allPendingAssignment = Assignment::where('assigned_to','!=',null)->where('status','!=','completed')->get();
     
         //dd($allPendingAssignment);
           if(!$allPendingAssignment->isEmpty())
           {
             foreach($allPendingAssignment as $all_pending)
             {             
                if($all_pending->order_id!='')
                {
                    $orders=DB::table('order')->where('order_id',$all_pending->order_id)->first();
                    $array_pending_assignment['order_id']=$all_pending->order_id;
                    if($orders)
                    {
                    $array_pending_assignment['payment_left']=$orders->payment_left;
                    $array_pending_assignment['payment_paid']=$orders->payment_paid;
                    }
                    else
                    {
                    $array_pending_assignment['payment_left']='';
                    $array_pending_assignment['payment_paid']='';
                    }    
                }
                else
                {
                    $array_pending_assignment['order_id']='';
                    $array_pending_assignment['payment_left']='';
                    $array_pending_assignment['payment_paid']='';

                }
                $array_pending_assignment['assignment_id']      =$all_pending->assignment_id;
                $array_pending_assignment['solution_available'] =$all_pending->solution_available;
                $array_pending_assignment['status'] =$all_pending->status;                
                $array_pending_assignment['total_amount']  =$all_pending->total_amount;
                $array_pending_assignment['subject']       =$all_pending->subject;
                $array_pending_assignment['uid']           =$all_pending->uid;
                $array_pending_assignment['due_date']      =$all_pending->due_date?date('d-m-y',$all_pending->due_date):'';
                $array_pending_assignment['description']   =$all_pending->description;
                $array_pending_assignment['reference_style']   =$all_pending->reference_style;
                if($all_pending->assigned_to!='')
                {
                
                    $array_pending_assignment['assigned_to']  =$all_pending->assigned_to?User::find($all_pending->assigned_to)?User::find($all_pending->assigned_to)->name:"":"";   
                }
                else
                {   
                    $array_pending_assignment['assigned_to']='';    
                }
                $put_in_array[]=$array_pending_assignment;
           }   
         }   
        else
        {
         $put_in_array='';
        }
     
     return View('admin.dashboard.pending-assignment')->with(['pending_assignment_data'=>$put_in_array,'idFormation'=>$this->idForFormation]);
     }
      public function  showExpiredAssignment()
      {
      $allExpiredAssignment=DB::table('assignment_details')->where('status','!=','completed')->where('due_date','<=',time())->get();
      
       if(count($allExpiredAssignment))
       {
         foreach($allExpiredAssignment as $all_expired)
         {
             
             if($all_expired->order_id!='')
             {
                 $orders=DB::table('order')->where('order_id',$all_expired->order_id)->first();
                 $array_expired_assignment['order_id']    = $all_expired->order_id;
                 if($orders)
                 {
                 $array_expired_assignment['payment_left']= $orders->payment_left;
                 $array_expired_assignment['payment_paid']= $orders->payment_paid;
                 }
                 else
                 {
                 $array_expired_assignment['payment_left']='';
                 $array_expired_assignment['payment_paid']='';
                 }    
             }
             else
             {
                 $array_expired_assignment['order_id']     ='';
                 $array_expired_assignment['payment_left'] ='';
                 $array_expired_assignment['payment_paid'] ='';
                 
             }
              $array_expired_assignment['assignment_id']   = $all_expired->assignment_id;
              $array_expired_assignment['total_amount']    = $all_expired->total_amount;
              $array_expired_assignment['subject']         = $all_expired->subject;
              $array_expired_assignment['uid']             = $all_expired->uid;
              $array_expired_assignment['due_date']        = $all_expired->due_date?date('d-m-y',$all_expired->due_date):'';
              $array_expired_assignment['description']     = $all_expired->description;
              $array_expired_assignment['reference_style'] = $all_expired->reference_style;
              if($all_expired->assigned_to!='')
              {
               $array_expired_assignment['assigned_to']  =User::find($all_expired->assigned_to)?User::find($all_expired->assigned_to)->name:'';   
              }
              else
              {   
               $array_expired_assignment['assigned_to']='';    
              }
              $put_in_array[]=$array_expired_assignment;
         }   
     }   
     else
     {
         $put_in_array='';
     }
      return View('admin.dashboard.expired-assignment')->with(['all_expired_assignment'=>$put_in_array,'idFormation'=>$this->idForFormation]);;
    }
    
    public function getAvailableExperts()
    {
        $available_experts=DB::table('users')
                         ->join('role_user', 'users.id', '=', 'role_user.user_id')
                         ->join('expert_availability','users.id','=','expert_availability.expert_id')
                         ->where('role_user.role_id',2)
                         ->where('expert_availability.availability',1)    
                         ->get();
        
        return $available_experts;
    }  
    
    public function showAssignmentDetailsOnAdminSide($id)
    {
      
       $response=new SendResponseController();
                      
       $assignmentId                = $id;
       $put_soln_file_data          = null;
       $array_assignment_details    = null;
       $put_in_array                = null;  
       $uploaded_file_array         = null;
       Session::flash('my-assignment','Oops! We got an invalid response for your assignment data.');
       if($assignmentId)
       {    
             $details = DB::table('assignment_details')->where('assignment_id',$assignmentId)->first();
             
             if(is_null($details))
             {
              
                return redirect('/users/dashboard');
             }  
                
           
             if(!empty($details) && $details!='')
             {
                 
               $uploadedFiles=DB::table('assignment_files')->where('assignment_id',$details->assignment_id)->get();  
               if($uploadedFiles)
               {
                   foreach($uploadedFiles as $file)
                   {
                       $uploaded_file['filename']=$file->original_filename;
                       $uploaded_file['getfile']=$file->filename;
                       $uploaded_file_array[]=$uploaded_file;
                   }   
               }
               else
               {
                   $uploaded_file_array=null;
               }  
                 
            
                 
              if($details->order_id!='')
              {
                 $orders=DB::table('order')->where('order_id',$details->order_id)->first();
                 $array_assignment_details['order_id']=$details->order_id;
                 if($orders)
                 {
                 $array_assignment_details['payment_left']=$orders->payment_left;
                 $array_assignment_details['payment_paid']=$orders->payment_paid;
                 }
                 else
                 {
                 $array_assignment_details['payment_left']=$orders->total_amount;
                 $array_assignment_details['payment_paid']=0;
                 }    
             }
             else
             {
                 $array_assignment_details['order_id']='NaN';
                 $array_assignment_details['payment_left']=$details->total_amount;
                 $array_assignment_details['payment_paid']=0;
                 
             }
              $array_assignment_details['show_assignment_id']      = $response->getAssignmentAsOrderId($details->assignment_id, $details->uid) ;
              $array_assignment_details['assignment_id']      = $details->assignment_id;
              $array_assignment_details['total_amount']       =   $details->total_amount;
              $array_assignment_details['subject']            =   $details->subject;
              $array_assignment_details['due_date']           =   $details->due_date;
              $array_assignment_details['description']        =   $details->description;
              $array_assignment_details['reference_style']    =   $details->reference_style;
              $array_assignment_details['status']             =   $details->status;
              $array_assignment_details['your_chosen_expert'] =   $details->expert_name;
              $array_assignment_details['no_of_pages']        =   $details->no_of_pages;
              $array_assignment_details['no_of_days']         =   $this->returnNoOfDays($details->submitted_date);
              $array_assignment_details['csrf_token']         =   csrf_token();
              
              if($details->solution_available==1)
              {
                  $availSolutionFile = DB::table('assignment_solutions')->where('assignment_id',$details->assignment_id)->get();
                  if($availSolutionFile)
                  {
                       foreach($availSolutionFile as $solnFile)
                       {
                           $solution_files_data['filename']=$solnFile->original_filename;
                           $solution_files_data['getfile']=$solnFile->filename;
                           $put_soln_file_data[]=$solution_files_data;
                       }   
                  } 
                  else
                   {
                      $put_soln_file_data=null;
                   }
              }  
            else
              {
                $put_soln_file_data=null;
              }
              $array_assignment_details['solution_file']  =  $put_soln_file_data;
              $array_assignment_details['uploaded_file']  =  $uploaded_file_array;
              
           
              
              
              
//              if($details->assigned_to!='')
//              {
//                 $array_assignment_details['assigned_to']  =User::find($details->assigned_to)->name;   
//              }
//              else
//              {   
//              $array_assignment_details['assigned_to']='';    
//              }
            $put_in_array[]=$array_assignment_details;
           //dd($put_in_array);
       
           
            ///neW aDDED CODE
            $commentData= new CommentController();
           $textMessages = $commentData->retrieveTextMessage($details->assignment_id);
         return View('admin.dashboard.admin-assignment-details')->with(['assignment_details'=>$put_in_array,'file_count'=>count($put_soln_file_data),'messageShow'=>$textMessages]);
     }   
         else
         {
         return redirect('/my-assignment');
         }
     } 
     
      return redirect('/my-assignment');     
     
    }
    
     public function completeAssignment()
     {
         
         $assignment_id=Input::get('assignment_id');


         $checkIfSolnAvailability=DB::Table('assignment_details')->where('assignment_id',$assignment_id)->where('solution_available',1)->first();
       
         if($checkIfSolnAvailability)
         {  
            if($assignment_id)
            {   
            DB::table('assignment_details')->where('assignment_id',$assignment_id)->update(['status'=>'completed']);
            Session::flash('click-completed','Thank you, you have marked as completed for the assignment id '.$assignment_id);     	       
            return redirect('/users/dashboard'); 		
            }
         Session::flash('click-completed','Oops, Unable to set the assignment status as complete, please try again');  
         return redirect('/users/dashboard');
         }
         Session::flash('click-completed','Oops, Unrecognized assignment to complete,May be solution is not available for this assignment please try again');  
         return redirect('/users/dashboard');
     }   
    public function returnNoOfDays($start_date)
    {
         $diff = time()-$start_date; 
         return round($diff / 86400);
        

    }     
    public function sendReworkRequest($id)
    {
        $getData=DB::table('assignment_details')->where('assignment_id',$id)->first();
        
        if($getData)
        {
            
            try
            {
            DB::table('assignment_details')->where('assignment_id',$id)->update(['status'=>'rework']);
            Session::flash('rework_request_sent','Success, Rework requeset is sent to the assosiated expert');
            }
            catch(\Exception $ex)
            {
              Session::flash('rework_request_error','Oops, unable to send the rework request to the expert, try again later');  
              
            }
            
        }  
        else
        {
            Session::flash('rework_request_error','Oops, unable to send the rework request to the expert, try again later');  
            
        }  
        return redirect('users/dashboard');
    }
    
    public function expertReworkRequest()
    {
           $rewokAssignments = $assignmentRequests = DB::table('assignment_details')->where('status','rework')->get();
           return view('admin.dashboard.rework-assignment')->with(['rework_asssignment'=>$rewokAssignments,'idFormation'=>$this->idForFormation]);
            
    }
    
           
public function showonlyCompletedAssignment()
      {
           $allCompletedAssignment= DB::table('assignment_details')
                                  ->select('assignment_details.*')->where('assignment_details.status','completed')
                                  ->get();
       
            if(count($allCompletedAssignment))
            {
              $allCompletedAssignmentData=$allCompletedAssignment;  
            }  
            else
            {
                $allCompletedAssignmentData='';
            }
           return View('admin.dashboard.completed-only-assignment')->with(['completed_assignment_data'=>$allCompletedAssignmentData,'idFormation'=>$this->idForFormation]);
         
      }
        
    }
    
    
    

    
