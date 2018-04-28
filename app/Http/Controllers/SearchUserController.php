<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Http\Controllers\Amount\WalletController;
use Input;
use App\Http\Requests;


class SearchUserController extends Controller
{
    public function searchOrderId()
    {
        $response = new SendResponseController;
        $payment_logs=null;
        $payment_logs_array=null;
        $put_order_details=null;
        $searched = Input::get("serach_orderid_student");
        $searchResult = strtolower(trim($searched));
                     
              $orders =DB::table('order')
                    ->join('assignment_details', 'assignment_details.order_id', '=', 'order.order_id')
                    ->orWhere('order.order_id', 'like', '%' . $searchResult . '%')
                    ->where('assignment_details.uid',Auth::user()->id)
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

        return view('dashboard.order-details')->with('order_details',$put_order_details);      
  
    }   
    public function searchAssignmentId()
    {
        
    }
    
}
