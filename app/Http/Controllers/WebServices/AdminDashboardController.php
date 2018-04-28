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
//use League\Flysystem\Config;       



class AdminDashboardController extends Controller 
{
    public function getDashboardData()
    {
         
      
      $this->getCompletedAssignment();
      $this->getPriorityAssignment();
      $this->getStudents();
      $this->getExperts();
      $this->getAssignmentRequest();
      $this->getPendingAssignment();
      $this->getExpiredAssignment();
      $this->getCoupons();
      $this->getPendingTask();
      $this->getPricePerPage();
      $this->getLastRegisteredUser();
      $this->getNewExpertRequest();
      $this->getNewStudentRequest();
      $this->getLast30DaysStats();
      
      return View('admin.dashboard.admin-dashboard')->with(['percentage_completed_assignment'=> $this->getCompletedAssignment(),
      'percentage_priority_assignment'=>$this->getPriorityAssignment(),'no_of_students'=>$this->getStudents(),
      'no_of_experts'=>$this->getExperts(), 'assignment_request'=>$this->getAssignmentRequest(),'pending_assignments'=>$this->getPendingAssignment(),
      'expired_assignments'=> $this->getExpiredAssignment(),'get_coupons'=>$this->getCoupons(),
      'get_pending_task'=>$this->getPendingTask(),'price_page' => $this->getPricePerPage(),'last_register_user'=> $this->getLastRegisteredUser(),
      'new_expert_request'=>$this->getNewExpertRequest(),'new_student_request'=>$this->getNewStudentRequest()
       ]);
        
   }
    
   public function getCompletedAssignment()
   {
       $countAssignment = Assignment::count();
       $completedCount  =  $allCompletedAssignment= DB::table('assignment_details')
                                  ->join('order', 'assignment_details.order_id', '=', 'order.order_id')
                                  ->select('assignment_details.*', 'order.*')->where('assignment_details.status','completed')
                                  ->count();
       if($countAssignment!=0)
       {   
       $percOfComplAss=  ($completedCount/$countAssignment)*100;
       }
       else
       {
           $percOfComplAss=0;
       }   
       Session::put('completed_assignments_percentage', round($percOfComplAss, 2) );

       return round($percOfComplAss,2);
       
   }       
   public function getPriorityAssignment()
   {
       /*I have considerd priority assignment of those assignment which due date  is atmost after 2 dasy frm nw.
        */
     $allAssignment = Assignment::all();
     $countOfAllAssignment=Assignment::count();
     $count=0;
        foreach($allAssignment as $all)
        {
            
          $dueDateTimestamp = $all->due_date;
          if($dueDateTimestamp > time() && $dueDateTimestamp<=2*86400+time())
          {
              $count++;
          }   
        }
       if($countOfAllAssignment!=0)
       {  
      $perPriAssign= ($count/$countOfAllAssignment)*100;  
       }
       else
       {
           $perPriAssign=0;
       }
       Session::put('priority_assignments_percentage', round($perPriAssign, 2) );
      return round($perPriAssign,2);
            
       
       
   }
   public function getStudents()
   {
       $count = DB::table('role_user')->where('role_id',3)->count();
       return $count;
   }   
   public function getExperts()
   {
       $count = DB::table('role_user')->where('role_id',2)->count();
       return $count;
   }        
   public function getAssignmentRequest()
   {
       $assignmentRequest=Assignment::where('assigned_to',null)->count();
       return $assignmentRequest;
   }     
   public function getPendingAssignment()
   {
       /*/
        * penidng asignments are considerd those assigments whose solutions are not availabe till_due date
        * 
        */
        $count = Assignment::where('assigned_to','!=',null)->where('status','!=','completed')->count();
       return $count;
       
       $allAssignments=Assignment::all();
       $count=0;
       foreach($allAssignments as $all)
       {
           $dueDateTimestamp= strtotime($all->due_date);
           if($dueDateTimestamp<=time()&&$all->solution_availble!=1)
           {
               $count++;
           }  
               
       }   
       return $count;
       
       
   }  
   public function getExpiredAssignment()
   {
       
     /*
      * Expired Assignments are those assignets whose soltuions are not available after 10 days of due date  
      */
       $allExpiredAssignments=DB::table('assignment_details')->where('status','!=','completed')->where('due_date','<=',time())->count();
       return $allExpiredAssignments;
       
       
   }
   public function getCoupons()
   {
       $copuon_count=Coupon::count();
       return $copuon_count;
   }    
  
   public function getPendingTask()
   {
       $adminPendingTaskCount=DB::table('admin_task_to_do')->where('task_status','pending')->count();
       return $adminPendingTaskCount;
   }        
   public function getPricePerPage()
   {
      //$pricePerPage = Config::get('price_per_page'); 
     // return $pricePerPage;
       
   }        
  public function getLastRegisteredUser()
  {
      $last_register_user=DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->whereRaw('(select max(`user_id`) from role_user where `role_id` = 3 )')
             ->orderBy('users.id','DESC') 
            ->first();
      
          
      return $last_register_user;
  }        
 public function getNewStudentRequest()
 {
     $beginOfDay = strtotime("midnight", time());
     $endOfDay   = strtotime("tomorrow", $beginOfDay) - 1;   
     $newStudentList=DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id',3)
            ->whereBetween('time',array($beginOfDay,$endOfDay))    
            ->count();
      return $newStudentList;
     
 }   
 public function getNewExpertRequest()
 {
     $beginOfDay = strtotime("midnight", time());
     $endOfDay   = strtotime("tomorrow", $beginOfDay) - 1;   
     $newExpertList=DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id',2)
            ->whereBetween('time',array($beginOfDay,$endOfDay))    
            ->count();
      
     return $newExpertList;
     
 }        
   
    public function getLast30DaysStats()
    {
      $oneMonthEarlier=time() - 30*86400;
      $noOfAssignments = DB::table('assignment_details')->where('time','>=',$oneMonthEarlier)->count();
      $noOfUsers      =  $newStudentList=DB::table('users')
                        ->join('role_user', 'users.id', '=', 'role_user.user_id')
                        ->where('role_user.role_id',3)
                        ->where('time','>=',$oneMonthEarlier)
                        ->count();
      
      $array['no_of_user']=$noOfUsers;
      $array['no_of_assignents']=$noOfAssignments;
      return $array;
      
    }        
 
}        
