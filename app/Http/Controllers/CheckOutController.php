<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SendResponseController;

use App\Http\Requests;
use Auth;
use DB;

class CheckOutController extends Controller
{
    public function checkOutPageLoadFirstTime()
    { 
        $response = new SendResponseController();
        $id=Session::get('order_id');
        dd($id);
        $check_out_page= @file_get_contents('php://input');
        $check_out_page_data = json_decode($check_out_page, true);
       
         if(empty($id)||$id==null)
         {
             return $response->responseData('false', 'Assignment Id field is required', '');
         }   
        
        
        if(Auth::user())
        {
          
            $this->getChekOutResponse($id);
            
        }
        else
        {
            return $response->responseData('false', 'W r unable to find your data', '');
        }   
        
        
        
    }   
    
    public function checkOutPageafterFirstTime()//Basically on click events
    {
        $response = new SendResponseController();
        $check_out_page= @file_get_contents('php://input');
        $check_out_page_data = json_decode($check_out_page, true);
        $id=Session::get('order_id');
        dd($id);
         if(empty($id)||$id==null)
         {
             return $response->responseData('false', 'Assignment Id field is required', '');
         }  
          if(!isset($check_out_page_data['partal_or_full']))
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

        $assignment_id                 =    $check_out_page_data['id']; 
        $partial_or_full    =    $check_out_page_data['partal_or_full'];
        $apply_coupon       =    $check_out_page_data['apply_coupon'];          
        $pay_through_wallet =    $check_out_page_data['pay_through_wallet'];      
        
         if($partial_or_full=='partial'&& $apply_coupon!=''&&$pay_through_wallet=='')
         {
             $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'1');
         }  
         else if($partial_or_full=='partial'&& $apply_coupon!=''&&$pay_through_wallet!='')
         {
             $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'2');
         }
         else if($partial_or_full=='partial'&& $apply_coupon==''&&$pay_through_wallet!='')
         {
            $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'3');
         }
         else if($partial_or_full=='partial'&& $apply_coupon==''&&$pay_through_wallet=='')
         {
            $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'4');
         }    
         else
         {   
              if($partial_or_full=='full'&& $apply_coupon!=''&&$pay_through_wallet=='')
              {
                $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'5');
              }   
               else if($partial_or_full=='full'&& $apply_coupon!=''&&$pay_through_wallet!='')
              {
               $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'6');
              }
              else if($partial_or_full=='full'&& $apply_coupon==''&&$pay_through_wallet!='')
              {
               $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'7');
              }
              else
              {
                if($partial_or_full=='full'&& $apply_coupon==''&&$pay_through_wallet=='')
                {
                $this->getChekOutResponse($assignment_id,$partial_or_full,$apply_coupon,$pay_through_wallet,'8');
                }
              }    
         }       
         
         
    }      
    public function getChekOutResponse($assignment_id,$partial_or_full='',$apply_coupon='',$pay_through_wallet='',$call_function='')
    {
        $uid=Auth::user()->id;
         if($partial_or_full==''&&$apply_coupon==''&&$pay_through_wallet=='')
         {   
           
           $show_wallet_balance = $this->getWalletAmount($uid);
           $results = \App\Assignment::where('assignment_id',$assignment_id)->first();
           if($results)
           {
            if($results->order_id!=null)
            {
                $order_payment_details = DB::table('order')->where('order_id',$results->order_id)->first();
                $amount_to_pay         = $order_payment_details->payment_left;
                $total_amount          = $amount_to_pay;
                
            }   
            else
            {   
                $total_amount=$results->total_amount;
                $amount_to_pay=$total_amount;
            }    
                        
           } 
          $this->getOnClickSuccessResponse($assignment_id, $total_amount,$amount_to_pay,'full', 'false', '',$show_wallet_balance);     
         }
         if($call_function==1||$call_function==5)
         {
            $coupon= DB::table('coupons')->where('coupon_code',$apply_coupon)->first();
            if($coupon)
            {
              if($coupon->coupon_expiry>=time())
              {
                 $discount_type=$coupon->discount_type;
                 $discount_value=$coupon->coupon_discount_value;
                 $assignment_data=Assignment::find($assignment_id);
                 
                 $subtotal=$assignment_data->total;
                    if($call_function==1)
                    {  
                    $partial_sub_total=$subtotal/2;
                    }
                    if($call_function==5)
                    {
                     $partial_sub_total=$subtotal;
                    }    
                 
                 if($discount_type=='flat')
                 {    
                    if($discount_value > $partial_sub_total)//use config::get() To set partial values
                    {
                    $this->getOnClickErrorResponse($assignment_id,0,'out_of_scope_error');    
                    }   
                    $payable_amount=$partial_sub_total-$discount_value;
                    $partial_or_full= 0;
                    $apply_coupon='true';
                    $coupon_message='coupon applied successfully.';
                 
                
                 }
                 if($discount_type=='percentage')
                 {
                    $payable_amount=$partial_sub_total-$partial_sub_total*$discount_value/100;
                    $partial_or_full= 0;
                    $apply_coupon='true';
                    $coupon_message='coupon applied successfully.'; 
                 } 
                 
                $show_wallet_balance = $this->getWalletAmount($uid);
                $this->getOnClickSuccessResponse($assignment_id, $partial_sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance);     
                 
                  
              }  
              else
              {
                $this->getOnClickErrorResponse($assignment_id,'partial','validation_error');  
              }
            }
            else
            {
                $this->getOnClickErrorResponse($assignment_id,'','wrong_Coupon');  
            }
             
             
        }
        
         if($call_function==2||$call_function==6)
         {
            $coupon= DB::table('coupons')->where('coupon_code',$apply_coupon)->first();
            if($coupon)
            {
              if($coupon->coupon_expiry>=time())
              {
                 $discount_type=$coupon->discount_type;
                 $discount_value=$coupon->coupon_discount_value;
                 $assignment_data=Assignment::find($assignment_id);
                 
                 $subtotal=$assignment_data->total;
                 if($call_function==2)
                 {   
                 $partial_sub_total=$subtotal/2;
                 }
                 if($call_function==6)
                 {
                   $partial_sub_total=$subtotal;  
                 }    
                 
                 if($discount_type=='flat')
                 {    
                    if($discount_value > $partial_sub_total)//use config::get() To set partial values
                    {
                    $this->getOnClickErrorResponse($assignment_id,0,'out_of_scope_error');    
                    }   
                    $payable_amount=$partial_sub_total-$discount_value;
                    $partial_or_full= 0;
                    $apply_coupon='true';
                    $coupon_message='coupon applied successfully.';
                    $wallet_balance = $this->getWalletAmount($uid);
                    if($show_wallet_balance>=$pay_through_wallet)
                    {
                     $show_wallet_balance=$wallet_balance-$payable_amount;
                     $payable_amount=0;
                    }
                    if($wallet_balance<$payable_amount)
                    {
                        $payable_amount=$payable_amount-$wallet_balance;
                        $show_wallet_balance=0;
                    }   
                
                 }
                 if($discount_type=='percentage')
                 {
                    $payable_amount=$partial_sub_total-$partial_sub_total*$discount_value/100;
                    $partial_or_full= 0;
                    $apply_coupon='true';
                    $coupon_message='coupon applied successfully.'; 
                     $wallet_balance = $this->getWalletAmount($uid);
                    if($show_wallet_balance>$pay_through_wallet)
                    {
                     $show_wallet_balance=$wallet_balance-$payable_amount;
                     $payable_amount=0;
                    }   
                     if($wallet_balance<$payable_amount)
                    {
                        $payable_amount=$payable_amount-$wallet_balance;
                        $show_wallet_balance=0;
                    }  
                 } 
                 
               
                $this->getOnClickSuccessResponse($assignment_id, $partial_sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance);     
                 
                  
              }  
              else
              {
                $this->getOnClickErrorResponse($assignment_id,'partial','validation_error');  
              }
            }
            else
            {
                $this->getOnClickErrorResponse($assignment_id,'','wrong_Coupon');  
            }
             
             
        }
        if($call_function==3||$call_function==7)
         {
           
                 $assignment_data=Assignment::find($assignment_id);
                 
                 $subtotal=$assignment_data->total;
                 if($call_function==3)
                 {    
                 $partial_sub_total=$subtotal/2;
                 }
                 if($call_function==7)
                 {
                  $partial_sub_total=$subtotal;   
                 }   
                 $wallet_balance = $this->getWalletAmount($uid);
                 if($wallet_balance>=$partial_sub_total)
                 {
                     $show_wallet_balance=$wallet_balance-$payable_amount;
                     $payable_amount=0;
                }
                if($wallet_balance<$payable_amount)
                {
                   $payable_amount=$payable_amount-$wallet_balance;
                   $show_wallet_balance=0;
                }   
                $partial_or_full= 0;
                $apply_coupon='false';
                $coupon_message='';
             
               
             $this->getOnClickSuccessResponse($assignment_id, $partial_sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance);     
                 
        
    }            
      if($call_function==4||$call_function==8)
         {
           
                 $assignment_data=Assignment::find($assignment_id);
                 
                 $subtotal=$assignment_data->total;
                 if($call_function==4)
                 {   
                 $partial_sub_total=$subtotal/2;
                 }
                 if($call_function==8)
                 {
                 $partial_sub_total=$subtotal;   
                 } 
                 $payable_amount=$partial_sub_total;
                 $show_wallet_balance = $this->getWalletAmount($uid);
                 $partial_or_full= 0;
                 $apply_coupon='false';
                 $coupon_message='';
             
               
             $this->getOnClickSuccessResponse($assignment_id, $partial_sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance);     
                 
        
        }        
    
    
    
    }  
    public function getOnClickErrorResponse($appointmnet_id,$full_or_partial,$error_type)
    {
        
    }
    public function getOnClickSuccessResponse($assignment_id, $sub_total,$payable_amount,$partial_or_full, $apply_coupon, $coupon_message,$show_wallet_balance)
    {
        $response = new SendResponseController();
          $checkoutResponse=array();
          if($show_wallet_balance>0)
          {
              $wallet_disable=1;
          }    
          else
          {
              $wallet_disable=0;
          }
          $checkoutResponse['wallet_amount']    = $show_wallet_balance;
          $checkoutResponse['show_partial']     = $partial_or_full;
          $checkoutResponse['subtotal']         = $sub_total;
          $checkoutResponse['coupon_applied']   = $apply_coupon;
          $checkoutResponse['payable_total']    = $payable_amount;
          $checkoutResponse['check_wallet']      = $wallet_disable;
          return $response->responseData('true', 'check out page data', $checkoutResponse);
        
        
    }      
    public function getWalletAmount()
    {
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
    
}
