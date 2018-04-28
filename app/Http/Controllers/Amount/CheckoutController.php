<?php
namespace App\Http\Controllers\Amount;
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
use App\Http\Controllers\SendResponseController;
use App\Http\Controllers\AssignmentController;


class CheckoutController extends Controller 
{
    
    public function onCheckoutPage(Request $request)
    { 
        
        
        $response = new SendResponseController();
        $id=$request->assignment_id;
        Session::put('order_id',$id);
        $order_id['order_id']=$id;
          $assignmentCtrl=new AssignmentController();
        $checkAssigmentId=DB::table('assignment_details')->where('assignment_id',$id)->where('uid',Auth::user()->id)->first();
        if($checkAssigmentId)
        {
            
            if($checkAssigmentId->order_id!=null && !empty($checkAssigmentId->order_id))
            {
             $paid_amount=DB::table('order')->where('order_id',$checkAssigmentId->order_id)->first();   
             if($paid_amount->payment_left<=0)
             {    
             Session::flash('checkout_success', 'You have already made  your payment for this order');
             return $assignmentCtrl->showAssignment();
             }
            }
            
            
            
         if($request->isJson())
          {
            if($id!=null || !empty($id))
            {   
            return $response->responseData('true', 'Order_id', $order_id);
            }
            else
            {
            return $response->responseData('fasle','invalid order id',$order_id);
            }  
         }  
         if($id!=null||!empty($id))
         {
           $show_assignment_id=$response->getAssignmentAsOrderId($id, Auth::user()->id);
           return View('dashboard.checkout')->with(['assignment_id'=>$id,'show_assignment_id'=>$show_assignment_id]);
         } 
        
        
         else
         {
             
             Session::flash('checkout_false', 'Oops, we are unable to process the transaction at this time');
             return $assignmentCtrl->showAssignment();
            //with message that sorry We are getting an Invalid Response please tryagain later or contact to the admin
         }  
        }
        else
        {
             Session::flash('checkout_false', 'Oops, we are unable to identify the order id for which you have requested for, please try again or contact with our support team, Thank you.');
             return $assignmentCtrl->showAssignment(); 
        }
    }
    
}