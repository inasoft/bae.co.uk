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



class OrderController extends Controller 
{
    
    public function onSuccessfulPayment()
    {
    $coupon_applied='';  
    $payment_paid=''; 
    $assignment_id                      = isset($_REQUEST['item_number'])?$_REQUEST['item_number']:'';
    $paypal_amount                      = isset($_REQUEST['mc_gross'])?$_REQUEST['mc_gross']:'';
    $wallet_with_partial_and_full_data  = isset($_REQUEST['custom'])?$_REQUEST['custom']:'';
   
        if($assignment_id!=null && $paypal_amount !==null && $wallet_with_partial_and_full_data !=null)
        {   
            
            $wallet_and_partial_data = explode('_',$wallet_with_partial_and_full_data);
            $payment_through_wallet = $wallet_and_partial_data[0];
            $payment_method         = $wallet_and_partial_data[1];
            $payment_through_paypal =$paypal_amount;
            if($payment_through_wallet>0)
            {
                $wallet_payment=$payment_through_wallet;
            }  
            else
            {
                $wallet_payment=0;
            } 
            
            if($payment_through_paypal>0)
            {
               $paypal_payment=$payment_through_paypal;
            }  
            else
            {
                $paypal_payment=0;
            }   
            
            $paid_amount=$wallet_payment+$paypal_payment;
            
            

               $check_assignment_id=DB::table('assignment_details')->where('assignment_id',$assignment_id)->first();
               if($check_assignment_id)
               {
                   $check_order_id=DB::table('order')->where('order_id',$check_assignment_id->order_id)->first();
                    if($check_assignment_id->order_id!=null||!empty($check_assignment_id->order_id))
                     {
                        if($check_order_id)
                        {
                        if($check_assignment_id->total_amount > $check_order_id->payment_paid)   
                        {   
                            if($paid_amount>=$check_order_id->payment_left)
                            {
                            $payment_paid=$paid_amount+$check_order_id->payment_paid;
                             $payment_left=0;   
                            }   
                            
                            else
                            {
                             $payment_paid=$paid_amount+$check_order_id->payment_paid;
                             $payment_left=0;    
                             $coupon_applied="true";
                            }   
                         $wallet_amount = DB::table('wallet')->where('uid',Auth::user()->id)->first();
                         if($wallet_amount)
                         {
                            if($wallet_amount->wallet_amount>0)
                            {
                                $available_wallet_amount=$wallet_amount->wallet_amount-$wallet_payment;
                                DB::table('wallet')->where('uid',Auth::user()->id)->update(['wallet_amount'=>$available_wallet_amount,'time'=>time()]);
                                $this->insertPaymentLogs($check_assignment_id->order_id,'wallet','',$wallet_payment);
                            }   
                         }  
                        if($coupon_applied=="true")
                        {
                            $aplyCoupons=DB::table('apply_coupon_details')->where('order_id',$check_assignment_id->order_id)->first();
                            if(!$aplyCoupons)
                            {
                              DB::table('apply_coupon_details')->insert(['order_id'=>$check_assignment_id->order_id,'used_coupon_code'=>'xxxfdfe','discount_amount'=>100]);  
                            }   
                        }   
                            
                                           
                        DB::table('order')->where('order_id',$check_assignment_id->order_id)->update(['payment_paid'=>$payment_paid,'payment_left'=>$payment_left,'status'=>'paid']); 
                        }
                        else
                        {
                        //hardly this will be executed : No Execution
                            
                         DB::table('order')->where('order_id',$check_assignment_id->order_id)->update(['payment_paid'=>$payment_paid,'payment_left'=>0,'status'=>'excess_paid']);     
                        }
                        } 
                      $order_id=$check_assignment_id->order_id;
                     }
                     else
                     {
                        $total_amount = $check_assignment_id->total_amount;  
                        if($payment_method=="full")
                        {
                            if($paid_amount>=$total_amount)
                            {
                               $payment_left=0; 
                               $payment_paid=$paid_amount;
                            }   
                            else 
                            {
                                $payment_left=0; 
                                $payment_paid=$paid_amount;
                                $coupon_applied="true";
                            }   
                            
                            
                        }  
                        
                        if($payment_method=="partial")
                        {
                            if($paid_amount>=$total_amount/2)
                            {
                               $payment_left=$total_amount-$paid_amount;
                               $payment_paid=$paid_amount;
                            }   
                            else 
                            {
                                $payment_left=$total_amount/2;
                                $payment_paid=$paid_amount;
                                $coupon_applied="true";
                            }   
                        }  
                        
                        if($payment_left<=0)
                        {
                            $status="paid";
                            
                        }   
                        else
                        {
                            $status="partial";
                        }   
                        $order_id=DB::table('order')->insertGetId(['payment_paid'=>$payment_paid,'payment_left'=>$payment_left,'status'=>$payment_method]);
                        DB::table('assignment_details')->where('assignment_id',$assignment_id)->update(['order_id'=>$order_id]);   
                       
                        $wallet_amount = DB::table('wallet')->where('uid',Auth::user()->id)->first();
                         if($wallet_amount)
                         {
                            if($wallet_amount->wallet_amount>0)
                            {
                                $available_wallet_amount=$wallet_amount->wallet_amount-$wallet_payment;
                                DB::table('wallet')->where('uid',Auth::user()->id)->update(['wallet_amount'=>$available_wallet_amount,'time'=>time()]);
                                $this->insertPaymentLogs($order_id,'wallet','',$wallet_payment);   
                            }   
                         }  
                        if($coupon_applied=="true")
                        {
                            $aplyCoupons=DB::table('apply_coupon_details')->where('order_id',$order_id)->first();
                            if(!$aplyCoupons)
                            {
                              DB::table('apply_coupon_details')->insert(['order_id'=>$order_id,'used_coupon_code'=>'xxxfdfe','discount_amount'=>100]);  
                            }   
                        }   
                        
                     }
                  $this->insertPaymentLogs($order_id,'paypal','',$paypal_payment);      
                   return view('dashboard.payment-paid');
            }    
            else
            {
             
             DB::table('order')->insert(['payment_paid'=>$payment_paid,'payment_left'=>0,'status'=>'unknown_paid']);     
             return view('dashboard.payment-paid');
            } 
             
             
            
        }
        else
        {
         
          return redirect('/failed-payment');
            
        }  
        
        
        
    }
    
    public function insertPaymentLogs($order_id,$paid_through,$txn_id,$amount)
    {
        try
        {
        DB::table('payment_logs')->insert(['order_id'=>$order_id,'paid_through'=>$paid_through,'time'=>time(),'transaction_id'=>$txn_id,'amount'=>$amount]);
        }
        catch(Exception $ex)
        {
        }    
   
    }
    
    
    
    public function paypalPayment()
    {
        print_R("d");
        return View('dashboard.paypal');
    }        
    
    public function setCurrencyWithPlan()
    {
        
        
    }        
    
    
    public function getDataForCurrencyCalculation()
    {
       
    $from_currency    = 'GBP';
    $to_currency    = 'INR';
    $amount            = 1;
    $results =$this->converCurrency($from_currency,$to_currency,$amount);
    $regularExpression     = '#\<span class=bld\>(.+?)\<\/span\>#s';
    preg_match($regularExpression, $results, $finalData);
    echo $finalData[0];
 
	

        return View('dashboard.currency-calculator');
    }        
    
    function converCurrency($from,$to,$amount){
		$url = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to"; 
		$request = curl_init(); 
		$timeOut = 0; 
		curl_setopt ($request, CURLOPT_URL, $url); 
		curl_setopt ($request, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt ($request, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
		curl_setopt ($request, CURLOPT_CONNECTTIMEOUT, $timeOut); 
		$response = curl_exec($request); 
		curl_close($request); 
		return $response;
	} 
    public function orderDetailsPageOnAdminSide()
    {
        $response = new SendResponseController;
        $payment_logs=null;
        $payment_logs_array=null;
        $put_order_details=null;
        $orders=DB::table('order')
               ->join('assignment_details', 'assignment_details.order_id', '=', 'order.order_id')
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
              unset($payment_logs_array);
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
        return view('admin.dashboard.order-details')->with('order_details',$put_order_details);
        
        
    }
    
    
    public function orderDetailsPageOnStudentSide()
    {
        $response = new SendResponseController;
        $payment_logs=null;
        $payment_logs_array=null;
        $put_order_details=null;
        $orders=DB::table('order')
               ->join('assignment_details', 'assignment_details.order_id', '=', 'order.order_id')
               ->where('assignment_details.uid',Auth::user()->id)->get();
        
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
              unset($payment_logs_array);
           }
            
        } 
//      foreach($put_order_details as $order)
//      {  
//        foreach($order['payment_logs'] as $payment)   
//        {
//           print_r($payment['payment_logs'][0]->paid_through);
//        }  
//      }  

        return view('dashboard.order-details')->with('order_details',$put_order_details);
        
        
    } 
   
     public function returnUrlOnCancelPayment(){

      Session::flash("payment-cancelled",'You have cancelled your payment, you may try again');
      return redirect("/my-assignment");

    }

    public function returnUrlOnSuccessfulPayment()
    {

        
        $x="0_full";
        $y = explode('_',$x);
        print_R($y);
        $assignment_id            = isset($_REQUEST['item_number'])?$_REQUEST['item_number']:"No ITEM No ";
	$paypal_amount         = isset($_REQUEST['mc_gross'])?$_REQUEST['mc_gross']:"NO MC GROSS "; // Paypal received amount
	$wallet_with_partial_and_full_data         = isset($_REQUEST['custom'])?$_REQUEST['custom']:"NO custom "; 

	
	echo $item_no;
	echo "</br>";
	echo $item_price;
	
	echo $item_c;
 

        
        
        return "Success";
    }
    
    
}
