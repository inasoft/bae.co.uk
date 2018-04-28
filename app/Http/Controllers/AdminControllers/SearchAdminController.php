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
use App\Http\Controllers\Amount\WalletController;
use App\Http\Controllers\SendResponseController;       


class SearchAdminController extends Controller 
{
    public function searchOrders(Request $request)
    {

        
        $response = new SendResponseController;
        $payment_logs=null;
        $payment_logs_array=null;
        $put_order_details=null;
        
        $searched = Input::get("search_orderid");
        $searchResult = strtolower(trim($searched));
                                
        $orders=DB::table('order')
               ->join('assignment_details', 'assignment_details.order_id', '=', 'order.order_id')
                ->orWhere('order.order_id', 'like', '%' . $searchResult . '%')
               ->get();
        
        if($orders)
        {
            foreach($orders as $order)
            {   
                $payment_logs_data=DB::table('payment_logs')->where('order_id',$order->order_id)->get();
                if($payment_logs_data)
                {
                 foreach($payment_logs_data as $payment_logs)   
                 {
                 $order_details['paid_through']=$payment_logs->paid_through;
                 $order_details['time']=   date('d-m-y',$payment_logs->time);
                 $order_details['transaction_id']=$payment_logs->transaction_id;
                 $order_details['amount']=$payment_logs->amount;
                 $payment_logs_array[]=$order_details;
                 }
                }  
             $assignmetData=DB::table('assignment_details')->where('order_id',$order->order_id)->first();
              $order_details['order_id']          =   $response->getOrderId($order->order_id,Auth::user()->id);
              $order_details['payment_left']      =   $order->payment_left;
              $order_details['payment_paid']      =   $order->payment_paid;
              $order_details['status']             =   $order->status;
              $order_details['assignment_id']      =   $assignmetData->assignment_id;
              $order_details['oder_time']           =  date('d-m-y,h:i:s',$order->time);
              $order_details['show_assignment_id']  =  $response->getAssignmentAsOrderId($assignmetData->assignment_id,Auth::user()->id);
              $order_details['payment_logs']    =   $payment_logs_array;
              $put_order_details[]=$order_details;
           }
            
        } 
//      foreach($put_order_details as $order)
//      {  
//        foreach($order['payment_logs'] as $payment)   
//        {
//           print_r($payment['payment_logs'][0]->paid_through);
//        }  
//      }  
      //dd($put_order_details);
          if ($request->ajax()) 
            {
              return Response::json(View::make('admin.dashboard.order-details')->with('order_details',$put_order_details)->renderSections()['content']);
            }
        return view('admin.dashboard.order-details')->with('order_details',$put_order_details);
    }
    
    public function serachAssignmentId()
    {

        
    }   
    public function searchStudentById(Request $request)
    {
      
        $searched = Input::get("search_student_by_id");
        $searchResult = strtolower(trim($searched));
                  
          $results =DB::table('users')
                    ->join('role_user', 'role_user.user_id', '=', 'users.id')
                    ->Where('users.id', $searchResult)
                    ->where('role_user.role_id',3)
                    ->get();
        
            if ($request->ajax()) 
            {
              return Response::json(View::make('admin.dashboard.show-students')->with('students_profile_data',$results)->renderSections()['content']);
            }
                        
            return View('admin.dashboard.show-students')->with('students_profile_data',$results);              
    }   
       
    public function searchExperts(Request $request)
    {
        
        //$searched = Input::get("search_expert");
        //$searchResult = strtolower(trim($searched));
            
            $results =DB::table('users')
            ->join('role_user', 'role_user.user_id', '=', 'users.id')
            ->where('role_user.role_id',2)
            ->where(function($query)
              {
                $searched = Input::get("search_expert");
                $searchResult = strtolower(trim($searched));
                $query->Where('users.id', 'like', '%' . $searchResult . '%')
                    ->orWhere('users.name', 'like', '%' . $searchResult . '%')
                    ->orWhere('users.contact_no', 'like', '%' . $searchResult . '%')
                    ->orWhere('users.email', 'like', '%' . $searchResult . '%');
              })
            ->get();
                        
            if ($request->ajax()) 
            {
              return Response::json(View::make('admin.dashboard.show-experts')->with('students_profile_data',$results)->renderSections()['content']);
            }
           
            return View('admin.dashboard.show-experts')->with('expert_profile_data',$results);  
            
        }
        
      public function searchStudentByAllParameters(Request $request)
      {

        $results=array();
         $searched = Input::get("search_student");

        $searchResult = strtolower(trim($searched));

        if(DB::table('users')->where('name', 'like', '%' . $searchResult . '%')->first())
        {
          $results =DB::table('users')
                    ->join('role_user', 'role_user.user_id', '=', 'users.id')
                    ->Where('users.name', 'like', '%' . $searchResult . '%')
                    ->where('role_user.role_id',3)
                    ->get();
          
        }
        else if(DB::table('users')->where('email', 'like', '%' . $searchResult . '%')->first())
        {
          $results =DB::table('users')
                    ->join('role_user', 'role_user.user_id', '=', 'users.id')
                    ->Where('users.email', 'like', '%' . $searchResult . '%')
                    ->where('role_user.role_id',3)
                    ->get();
         

        }
        else if(DB::table('users')->where('contact_no', 'like', '%' . $searchResult . '%')->first())
        {
          $results =DB::table('users')
                    ->join('role_user', 'role_user.user_id', '=', 'users.id')
                    ->Where('users.contact_no', 'like', '%' . $searchResult . '%')
                    ->where('role_user.role_id',3)
                    ->get();
          
        }
        
        if ($request->ajax()) 
        {
          return Response::json(View::make('admin.dashboard.show-students')
            ->with('students_profile_data',$results)
            ->renderSections()['content']);
        }
                        
            return View('admin.dashboard.show-students')
            ->with('students_profile_data',$results);            
      }        
           
}
