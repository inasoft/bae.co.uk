<?php
namespace App\Http\Controllers\WebServices;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SendResponseController;
use Symfony\Component\HttpFoundation\Request;
use DB;
use Auth;
use Pusher;
use Plivo\RestAPI;
use Alert;
use App\Assignment;
use App\Http\Controllers\Amount\CurrencyValueController;
use Session;

class CheckOutController extends Controller
{
    
    public function changeCurrency()
    {
        $assignment_id=4;
        $currency_code='USD';
        $logged_in_user_id=Auth::user()->id;
        
        $currency_object=new CurrencyValueController();
        $data= $currency_object->convertCurrency('INR','USD');
        if($data)
        {
            $multiplier=$data;
        }   
        else
        {
            $multiplier=1;
        }   
        $if_available_data=DB::table('user_currency_selection')->where('aid',$assignment_id)->first();
        if($if_available_data)
        {   
            DB::table('user_currency_selection')->where('aid',$assignment_id)->update(['used_currency'=>$currency_code]);
            $conversion_amount=$if_available_data->fixed_amount;
            $converted_amount=$conversion_amount*$multiplier;
            DB::table('assignment_details')->where('assignment_id',$assignment_id)->update(['total_amount'=>$converted_amount]);
            $wallet=DB::table('wallet')->where('uid',$logged_in_user_id)->first();
        if($wallet)
        {   
            $get_fixed_amount=$wallet->fixed_wallet_amount_in_inr;
            $wallet_amount=$get_fixed_amount*$multiplier;
            DB::table('wallet')->where('uid',$logged_in_user_id)->update(['wallet_amount'=>$wallet_amount]);
        }
     }       
    }
    
    public function checkOutPageLoadFirstTime()
    { 
        $response = new SendResponseController();
         $id=Session::get('order_id');
    //dd($id);
        $check_out_page= @file_get_contents('php://input');
        $check_out_page_data = json_decode($check_out_page, true);
       
         if(empty($id)||$id==null)
         {
             return $response->responseData('false', 'Assignment Id field is required', '');
         }   
           
        
          
         
        if(Auth::user())
        {
          
          return $response->responseData('true', 'Available data for checkout is', $this->getChekOutResponse($id));
            
        }
        else
        {
            return $response->responseData('false', 'W r unable to find your data', '');
        }   
        
        
        
    }   
    
    public function checkOutPageafterFirstTime()//Basically on click events
    {//{"id":"1","partial_or_full":"partial","apply_coupon":"XcVR","pay_through_wallet":""}
        $response = new SendResponseController();
        $check_out_page= @file_get_contents('php://input');
        $check_out_page_data = json_decode($check_out_page, true);
        $id=Session::get('order_id');
        
         if(empty($id)||$id==null)
         {
             return $response->responseData('false', 'Assignment Id field is required', '');
         }    
          if(!isset($check_out_page_data['partial_or_full']))
         {
             return $response->responseData('false', 'Patial or full field is required', '');
         }  
          if(!isset($check_out_page_data['apply_coupon']))
         {
             return $response->responseData('false', 'Apply coupon field is required', '');
         }  
          if(!isset($check_out_page_data['pay_through_wallet']))
         {
             return $response->responseData('false', 'Pay through wallet or not conirmation field is required', '');
         } 
         
        $assignment_id      =    $id;
        $partial_or_full    =    $check_out_page_data['partial_or_full'];
        $apply_coupon       =    $check_out_page_data['apply_coupon'];          
        $pay_through_wallet =    $check_out_page_data['pay_through_wallet'];      
        if($pay_through_wallet==true)
        {
            $pay_through_wallet=1;
        }  
        else
        {
        $pay_through_wallet=null;
        }
        
         if($partial_or_full=='partial'&& $apply_coupon!=''&&$pay_through_wallet=='')
         {
             $response_data = $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'1');
             
             if($response_data!='false')
                {
                return $response->responseData('true', 'Available data for checkout is', $response_data);
                }
                else
                {
                return $response->responseData('false', 'Oops, No records are found for the selected assignment', '');  
                }   
            
         }  
         else if($partial_or_full=='partial'&& $apply_coupon!=''&&$pay_through_wallet!='')
         {
           return $response->responseData('true', 'Available data for checkout is', $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'2'));
         }
         else if($partial_or_full=='partial'&& $apply_coupon==''&&$pay_through_wallet!='')
         {
            return $response->responseData('true', 'Available data for checkout is', $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'3')); 
           
         }
         else if($partial_or_full=='partial'&& $apply_coupon==''&&$pay_through_wallet=='')
         {
           return $response->responseData('true', 'Available data for checkout is', $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'4'));
         }    
         else
         {   
              if($partial_or_full=='full'&& $apply_coupon!=''&&$pay_through_wallet=='')
              {
              return $response->responseData('true', 'Available data for checkout is', $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'5'));
              }   
               else if($partial_or_full=='full'&& $apply_coupon!=''&&$pay_through_wallet!='')
              {
              return $response->responseData('true', 'Available data for checkout is', $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'6'));
              }
              else if($partial_or_full=='full'&& $apply_coupon==''&&$pay_through_wallet!='')
              {
              return $response->responseData('true', 'Available data for checkout is', $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'7'));
              }
              else
              {
                if($partial_or_full=='full'&& $apply_coupon==''&&$pay_through_wallet=='')
                {
                return $response->responseData('true', 'Available data for checkout is', $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'8'));
                }
              }    
         }       
         
         
    }      
    public function getChekOutResponse($assignment_id,$partial_or_full='',$apply_coupon='',$pay_through_wallet='',$call_function='')
    {
        $response = new SendResponseController();
          if(Auth::user())
          {
              $uid=Auth::user()->id;
          }   
           else
           {
           return   redirect('/users/login');
            }     
        
         if($partial_or_full==''&&$apply_coupon==''&&$pay_through_wallet=='')
         {   
           
           $wallet_balance = $this->getWalletAmount($uid);
           $results = \App\Assignment::where('assignment_id',$assignment_id)->first();
           if($results)
           {
               
            if($results->order_id!=null)
            {
                $order_payment_details = DB::table('order')->where('order_id',$results->order_id)->first();
                if($order_payment_details)
                {    
                $total_amount         = $order_payment_details->payment_left;
                    if($wallet_balance>=$total_amount)
                     {
                        $show_wallet_balance=$wallet_balance-$total_amount;
                        $amount_to_pay=0;
                        $payment_using_wallet=$total_amount;
                     }
                     if($wallet_balance<$total_amount)
                     {
                         $amount_to_pay = $total_amount-$wallet_balance;
                         $show_wallet_balance=0;
                         $payment_using_wallet=$wallet_balance;
                     }    
                
                $partial_or_full  = 0;
                }
                else
                {
                  return $response->responseData('false', "We are unable to process that request", ''); 
                }    
                
            }   
            else
            {   
                $total_amount=$results->total_amount;
                 if($wallet_balance>=$total_amount)
                     {
                        $show_wallet_balance=$wallet_balance-$total_amount;
                        $amount_to_pay=0;
                        $payment_using_wallet=$total_amount;
                     }
                     if($wallet_balance<$total_amount)
                     {
                         $amount_to_pay = $total_amount-$wallet_balance;
                         $show_wallet_balance=0;
                         $payment_using_wallet=$wallet_balance;
                     }    
                $partial_or_full       = 1;
            }    
           return  $this->getOnClickSuccessResponse($assignment_id, $total_amount,$amount_to_pay,$partial_or_full, 'false', '',$show_wallet_balance,$payment_using_wallet);     
           }
           else
           {
               return "We are not able to find this the data for this assignment";
           } 
        
         }
         if($call_function==1||$call_function==5)
         {  
            
             
            $discount_value=0;
            $pay_through_wallet=0;
            $partial_or_full= 1;
            $apply_coupon_discount_value = '$0 off'; 
            $coupon= DB::table('coupons')->where('coupon_code',$apply_coupon)->first();
                     
            $assignment_data=Assignment::find($assignment_id);
            $used_coupon=DB::table('apply_coupon_details')->where('order_id',$assignment_data->order_id)->first(); 
            $show_wallet_balance = $this->getWalletAmount($uid);
            
               if($assignment_data!=null)
               {
                  if($assignment_data->order_id==null)
                  { 
               
                   $subtotal=$assignment_data->total_amount;
                    if($call_function==1)
                     {  
                     $partial_sub_total=$subtotal/2;
                     }
                    if($call_function==5)
                     {
                    $partial_sub_total=$subtotal;
                     }
                 }
                 else
                 {
                    $order_data=DB::table('order')->where('order_id',$assignment_data->order_id)->first();
                    if($order_data)
                    {
                      $subtotal=$order_data->payment_left;
                      if($subtotal!=0||!empty($subtotal)||$subtotal!='')
                      {
                          $partial_sub_total=$subtotal;//This will be the partial payment left amount
                          $partial_or_full=0;
                      }
                      else
                      {
                          $partial_sub_total=$assignment_data->total_amount; //Means payment is not made; or payment is not received.
                      }  
                      
                    }
                    else
                    {
                       $partial_sub_total=$assignment_data->total_amount;  
                       
                       
                    }  
                    
                 }
               }
                else
                 {
                  
                  return 'false';
                   //Redirect Here to the show assignment page;
                  
                }    
          
            
            if($coupon)
            {
                 if($used_coupon)
                   {
                      $apply_coupon='false';  
                      $coupon_message='You have already used coupon for this order!';
                      return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$pay_through_wallet,'','true');      
                    }  
                
                 if($coupon->coupon_expiry>=time())
                {
                 $discount_type     = $coupon->discount_type;
                 $discount_value    = $coupon->coupon_discount_value;
                                                              
                 
                 if($discount_type=='flat')
                 {    
                     
                     
                    if($discount_value > $partial_sub_total)//use config::get() To set partial values
                    {
                        
                      $apply_coupon='false';  
                      $coupon_message='Invalid Coupon for this order!';
                      return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$pay_through_wallet,'','true');    
                    }
                    
                   
                    $apply_coupon_discount_value = '$'.$discount_value.' off'; 
                    $payable_amount=$partial_sub_total-$discount_value;
                    $apply_coupon='true';
                    $coupon_message='coupon applied successfully.';
                 
                
                 }
                 if($discount_type=='percentage')
                 {
                    $apply_coupon_discount_value = $discount_value.'% off'; 
                    $discount_value =$partial_sub_total*$discount_value/100;
                    $payable_amount=$partial_sub_total-$discount_value;
                    //$partial_or_full= 'partial';
                    $apply_coupon='true';
                    $coupon_message='coupon applied successfully.'; 
                 } 
                  /*Code to Custom Coupon*/
                   $returedValue=$this->testCouponTypeToAvailDiscount($coupon->coupon_code,$partial_sub_total);
                  
                   if($returedValue==100)
                    {
                      $apply_coupon='false';  
                      $coupon_message='Oops, this coupon is applicable for first order only.';
                      return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$pay_through_wallet,'','true');      
                    } 
                       
                    if($returedValue==200)
                    {
                      $apply_coupon='false';  
                      $coupon_message='Your total order must be greater than or equal to $200 to avail this coupon. ';
                      return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$pay_through_wallet,'','true');      
                    } 
                    if($returedValue==300)
                    {
                      $apply_coupon='false';  
                      $coupon_message='Your total order must be greater than or equal to $300 to avail this coupon. ';
                      return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$pay_through_wallet,'','true');        
                    }    
                       
                 /*End Code to Custom Coupon*/
                
                 return $this->getOnClickSuccessResponse($assignment_id, $partial_sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$pay_through_wallet,$discount_value,$apply_coupon_discount_value);    
                 
                  
              }  
              else
              {
                $apply_coupon="false";
                $coupon_message="This coupon has been expired!";
                return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$pay_through_wallet,'','true');    
              }
            }
            else
            {
               $apply_coupon="false"; 
               $coupon_message="Wrong coupon was enterd, please enter a valid coupon!" ;
               return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$pay_through_wallet,'','true');    
            }
             
             
        }
        
         if($call_function==2||$call_function==6)
         {
             //dd('I am in 2 or 6');
             $discount_value=0;
             $partial_or_full= 1;
             $apply_coupon_discount_value = '$0 off'; 
            
            $wallet_balance = $this->getWalletAmount($uid); 
            
            $coupon= DB::table('coupons')->where('coupon_code',$apply_coupon)->first();
            $assignment_data=Assignment::find($assignment_id);
            $used_coupon=DB::table('apply_coupon_details')->where('order_id',$assignment_data->order_id)->first(); 
            
               if($assignment_data!=null)
               {
                  if($assignment_data->order_id==null)
                  { 
               
               
                   $subtotal=$assignment_data->total_amount;
                    if($call_function==2)
                     {  
                     $partial_sub_total=$subtotal/2;
                     }
                    if($call_function==6)
                     {
                    $partial_sub_total=$subtotal;
                     }
                 }
                   else
                 {
                    $order_data=DB::table('order')->where('order_id',$assignment_data->order_id)->first();
                    if($order_data)
                    {
                      $subtotal=$order_data->payment_left;
                      if($subtotal!=0||!empty($subtotal)||$subtotal!='')
                      {
                          $partial_sub_total=$subtotal;//This will be the partial payment left amount
                          $partial_or_full=0;
                      }
                      else
                      {
                          $partial_sub_total=$assignment_data->total_amount; //Means payment is not made; or payment is not received.
                      }  
                      
                    }
                    else
                    {
                       $partial_sub_total=$assignment_data->total_amount;  
                       
                       
                    }  
                    
                 }
               }
            
                else
                {   
                return "false";
                } 
            if($coupon)
             {  
                
                  if($used_coupon)
                   {
                      $apply_coupon='false';  
                      $coupon_message='You have already used coupon for this order!';
                        if($wallet_balance>=$partial_sub_total)
                                  { 
                                  $show_wallet_balance=$wallet_balance-$partial_sub_total;
                                  $payable_amount=0;
                                  $payment_using_wallet=$partial_sub_total;
                                  }
                                 if($wallet_balance<$partial_sub_total)
                                  {
                                     $payable_amount=$partial_sub_total-$wallet_balance;
                                     $show_wallet_balance=0;
                                     $payment_using_wallet=$wallet_balance;
                                  }   
                      return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet,'','true');      
                   } 
                
                
                 if($coupon->coupon_expiry>=time())
                 {
                    $discount_type=$coupon->discount_type;
                    $discount_value=$coupon->coupon_discount_value;
                    
                  
                       
                     if($discount_type=='flat')
                     {    
                         if($discount_value > $partial_sub_total)//use config::get() To set partial values
                         {
                                if($wallet_balance>=$partial_sub_total)
                                  { 
                                  $show_wallet_balance=$wallet_balance-$partial_sub_total;
                                  $payable_amount=0;
                                  $payment_using_wallet=$partial_sub_total;
                                  }
                                 if($wallet_balance<$partial_sub_total)
                                  {
                                     $payable_amount=$partial_sub_total-$wallet_balance;
                                     $show_wallet_balance=0;
                                     $payment_using_wallet=$wallet_balance;
                                  }    
                             
                            $apply_coupon='false';  
                            $coupon_message='Invalid Coupon for this order!';  
                            return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$payable_amount,0, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet,'','true');    
                     }   
                     
                     
                     
                     
                    $payable_amount=$partial_sub_total-$discount_value;
                    $apply_coupon='true';
                    $coupon_message='coupon applied successfully.';
                    $apply_coupon_discount_value = '$'.$discount_value.' off'; 
                    if($wallet_balance>=$payable_amount )
                    {
                     $show_wallet_balance=$wallet_balance-$payable_amount;
                     $payment_using_wallet=$payable_amount;
                     $payable_amount=0;
                     
                    }
                    if($wallet_balance<$payable_amount)
                    {
                        $payable_amount=$payable_amount-$wallet_balance;
                        $show_wallet_balance=0;
                        $payment_using_wallet=$wallet_balance;
                    }   
                
                 }
             
                 if($discount_type=='percentage')
                 {
                    $payable_amount=$partial_sub_total-$partial_sub_total*$discount_value/100;
                    
                    
                    $apply_coupon='true';
                    $coupon_message='coupon applied successfully.'; 
                    $apply_coupon_discount_value = $discount_value.'% off'; 
                    $discount_value=$partial_sub_total*$discount_value/100;
                    if($wallet_balance>$payable_amount)
                    {
                     $show_wallet_balance=$wallet_balance-$payable_amount;
                     $payment_using_wallet=$payable_amount;
                     $payable_amount=0;
                     
                    }   
                     if($wallet_balance<$payable_amount)
                    {
                        $payable_amount=$payable_amount-$wallet_balance;
                        $show_wallet_balance=0;
                        $payment_using_wallet=$wallet_balance;
                    }  
                 } 
                 /*Code to Custom Coupon*/
                   $returedValue=$this->testCouponTypeToAvailDiscount($coupon->coupon_code,$partial_sub_total);
                   if($returedValue==100||$returedValue==200||$returedValue==300)  
                   {  
                        if($wallet_balance>=$partial_sub_total)
                        { 
                        $show_wallet_balance=$wallet_balance-$partial_sub_total;
                        $payable_amount=0;
                        $payment_using_wallet=$partial_sub_total;
                        }
                        if($wallet_balance<$partial_sub_total)
                        {
                        $payable_amount=$partial_sub_total-$wallet_balance;
                        $show_wallet_balance=0;
                        $payment_using_wallet=$wallet_balance;
                        }   
                    if($returedValue==100)
                    {
                      
                      $apply_coupon='false';  
                      $coupon_message='Oops, this coupon is applicable for first order only.';
                      return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet,'','true');      
                    } 
                       
                    if($returedValue==200)
                    {
                      $apply_coupon='false';  
                      $coupon_message='Your total order must be greater than or equal to $200 to avail this coupon. ';
                      return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet,'','true');      
                    } 
                    if($returedValue==300)
                    {
                      $apply_coupon='false';  
                      $coupon_message='Your total order must be greater than or equal to $300 to avail this coupon. ';
                      return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$partial_sub_total,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet,'','true');        
                    }  
                   }
                       
                 /*End Code to Custom Coupon*/
               
               return $this->getOnClickSuccessResponse($assignment_id, $partial_sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet,$discount_value,$apply_coupon_discount_value);     
                 
                  
              }  
              else
              { 
                $apply_coupon="false";
                $coupon_message="This coupon has been expired!";  
                
                if($wallet_balance>=$partial_sub_total)
                { 
                     $show_wallet_balance=$wallet_balance-$partial_sub_total;
                     $payable_amount=0;
                     $payment_using_wallet=$partial_sub_total;
                }
                if($wallet_balance<$partial_sub_total)
                {
                        $payable_amount=$partial_sub_total-$wallet_balance;
                        $show_wallet_balance=0;
                        $payment_using_wallet=$wallet_balance;
                }   
               
                return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$payable_amount,0, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet,'','true');    
              }
            }
            else
            { 
                
               $apply_coupon="false"; 
               $coupon_message="Wrong coupon was enterd, please enter a valid coupon!" ;
               if($wallet_balance>=$partial_sub_total)
               {
                     $show_wallet_balance=$wallet_balance-$partial_sub_total;
                     $payable_amount=0;
                     $payment_using_wallet=$partial_sub_total;
               }
               if($wallet_balance<$partial_sub_total)
               {
                        $payable_amount=$partial_sub_total-$wallet_balance;
                        $show_wallet_balance=0;
                        $payment_using_wallet=$wallet_balance;
               }
               return $this->getOnClickErrorResponse($assignment_id, $partial_sub_total,$payable_amount,1, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet,'','true');    
            
             
             
        }
      } 
        if($call_function==3||$call_function==7)
        {
            
             $partial_or_full= 1;
             
             $assignment_data=Assignment::find($assignment_id);
             if($assignment_data!=null)
             {
                  if($assignment_data->order_id==null)
                  { 
                        
                   $subtotal=$assignment_data->total_amount;
                    if($call_function==3)
                     {  
                     $partial_sub_total=$subtotal/2;
                     }
                    if($call_function==7)
                     {
                    $partial_sub_total=$subtotal;
                     }
                 }
                   else
                 {
                    $order_data=DB::table('order')->where('order_id',$assignment_data->order_id)->first();
                    if($order_data)
                    {
                      $subtotal=$order_data->payment_left;
                      if($subtotal!=0||!empty($subtotal)||$subtotal!='')
                      {
                          $partial_sub_total=$subtotal;//This will be the partial payment left amount
                          $partial_or_full=0;
                      }
                      else
                      {
                          $partial_sub_total=$assignment_data->total_amount; //Means payment is not made; or payment is not received.
                      }  
                      
                    }
                    else
                    {
                       $partial_sub_total=$assignment_data->total_amount;  
                       
                       
                    }
                 } 
                    $wallet_balance = $this->getWalletAmount($uid);
                     if($wallet_balance>=$partial_sub_total)
                      {
                     $show_wallet_balance=$wallet_balance-$partial_sub_total;
                     $payable_amount=0;
                     $payment_using_wallet=$partial_sub_total;
                     }
                     if($wallet_balance<$partial_sub_total)
                     {
                      $payable_amount=$partial_sub_total-$wallet_balance;
                      $show_wallet_balance=0;
                      $payment_using_wallet=$wallet_balance;
                     }   
                  
                  $apply_coupon='none';
                  $coupon_message='';
                  return $this->getOnClickSuccessResponse($assignment_id, $partial_sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet);     
       
        
       } 
       else
       {
           return "false";
       }
      }
       
       if($call_function==4||$call_function==8)
       {
         $pay_through_wallet=0; 
         $partial_or_full=1;
         $show_wallet_balance = $this->getWalletAmount($uid);                 
         $assignment_data=Assignment::find($assignment_id);
          if($assignment_data!=null)
           {
                  if($assignment_data->order_id==null)
                  { 
                        
                   $subtotal=$assignment_data->total_amount;
                    if($call_function==4)
                     {  
                     $partial_sub_total=$subtotal/2;
                     }
                    if($call_function==8)
                     {
                    $partial_sub_total=$subtotal;
                     }
                 }
                   else
                 {
                    $order_data=DB::table('order')->where('order_id',$assignment_data->order_id)->first();
                    if($order_data)
                    {
                      $subtotal=$order_data->payment_left;
                      if($subtotal!=0||!empty($subtotal)||$subtotal!='')
                      {
                          $partial_sub_total=$subtotal;//This will be the partial payment left amount
                          $partial_or_full=0;
                      }
                      else
                      {
                          $partial_sub_total=$assignment_data->total_amount; //Means payment is not made; or payment is not received.
                      }  
                    }  
                    else
                    {
                       $partial_sub_total=$assignment_data->total_amount; //Means payment is not made; or payment is not received.   
                    }  
                 }
                 $payable_amount=$partial_sub_total;
                 $apply_coupon='none';
                 $coupon_message='';         
           return  $this->getOnClickSuccessResponse($assignment_id, $partial_sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$pay_through_wallet);     
                 
        
        }
        else
        {
        return  "false";
        }
     }
    }
      public function getOnClickErrorResponse($assignment_id, $sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet='',$coupon_discount_value='',$is_error_message='')
    {
          $response = new SendResponseController();
          $checkoutResponse=array();
          $amount_in_wallett= $this->getWalletAmount(Auth::user()->id);
          if($show_wallet_balance>0)
          {
              $wallet_disable="true";
          }    
          else
          {
              $wallet_disable="false";
          }
          
          //payment Details Array
                 $payment_deatils['subtotal']                              =$sub_total; 
                 $payment_deatils['coupon_discount_balance']               =$coupon_discount_value;
                 $payment_deatils['paying_through_wallet']                 =$payment_using_wallet;
                 $payment_deatils['net_payable_amount']                    =$payable_amount;     
                 $payment_deatils_array[]=$payment_deatils;
          //Response Array
                 
          $checkoutResponse['remaining_wallet_balance_after_wallet_is_selected']= $show_wallet_balance;
          $checkoutResponse['amount_in_wallet']                     = $amount_in_wallett;
          $checkoutResponse['show_partial_or_full']                 = $partial_or_full;
          $checkoutResponse['coupon_applied']                       = $apply_coupon;
          $checkoutResponse['coupon_message']                       = $coupon_message;
          $checkoutResponse['is_error_message']                     = $is_error_message;
          //$checkoutResponse['payable_total']                        = $payable_amount;
          $checkoutResponse['enabled_wallet']             = $wallet_disable;
         // $checkoutResponse['payment_using_wallet']                 = $payment_using_wallet;
          $checkoutResponse['payment_details']                      = $payment_deatils_array;
          
          return $checkoutResponse;
    }
    public function getOnClickSuccessResponse($assignment_id, $sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance,$payment_using_wallet='',$coupon_discount_value='',$apply_coupon_discount_value='')
    {
        
          $response = new SendResponseController();
          $checkoutResponse=array();
          if($show_wallet_balance>0)
          {
              $wallet_disable="true";
          }    
          else
          {
              $wallet_disable="false";
          }
          $amount_in_wallett= $this->getWalletAmount(Auth::user()->id);
          //payment Details Array
                 $payment_deatils['subtotal']                              =$sub_total; 
                 $payment_deatils['coupon_discount_balance']               =$coupon_discount_value;
                 $payment_deatils['paying_through_wallet']                 =$payment_using_wallet;
                 $payment_deatils['net_payable_amount']                    =$payable_amount;     
                 $payment_deatils['apply_coupon_discount_value']           = $apply_coupon_discount_value;
                 $payment_deatils_array[]=$payment_deatils;
          //Response Array
                 
          $checkoutResponse['remaining_wallet_balance_after_wallet_is_selected']= $show_wallet_balance;
          $checkoutResponse['amount_in_wallet']                     = $amount_in_wallett;
          $checkoutResponse['show_partial_or_full']                 = $partial_or_full;
          $checkoutResponse['coupon_applied']                       = $apply_coupon;
          $checkoutResponse['coupon_message']                       = $coupon_message;
          //$checkoutResponse['payable_total']                        = $payable_amount;
          $checkoutResponse['enabled_wallet']             = $wallet_disable;
         // $checkoutResponse['payment_using_wallet']                 = $payment_using_wallet;
          $checkoutResponse['payment_details']                      = $payment_deatils_array;
          
         
          
          
          return $checkoutResponse;
        
        
    }      
    public function getWalletAmount()
    {
         $uid=Auth::user()->id;
         $wallet_amount=DB::table('wallet')->where('uid',$uid)->first();
         if($wallet_amount)
         {
          $available_balance=$wallet_amount->wallet_amount;
          if($available_balance>0)
          {    
            return $available_balance;
          }
          else
          {
            
            return 0;
          }   
         }       
         return 0;
    }        
    public function testCouponTypeToAvailDiscount($coupon,$partial_sub_total)
    {
        
        $discountCoupon = strtolower($coupon);
        
        $total_amount=$partial_sub_total;
        if($discountCoupon=='begin20')
        {
            
            $countOfCompletedAssignment = DB::table('assignment_details')->where('uid',Auth::user()->id)->where('status','completed')->count();
          // dd($countOfCompletedAssignment);
            if($countOfCompletedAssignment > 0)
            {
                return 100;
            }
            
            return "true";
        }
        if($discountCoupon=="bae200")
        {
            if($total_amount>=200)
            {
                return "true";
            }  
            else
            {
                return 200;
            }   
        }
        if($discountCoupon=="bae300")
        {
            if($total_amount>=300)
            {
                return "true";
            }    
            else
            {
                return 300;
            } 
        }
       }   
            
    
}