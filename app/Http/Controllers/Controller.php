<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;
use Auth;
use DB;
use \App\Assignment;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
   {
       
      
       if(Auth::user())
       {
           $logged_in_uid = Auth::user()->id;
       
            if($logged_in_uid!='')
            {   
            $walletAmount=DB::table('wallet')->where('uid',$logged_in_uid)->first();
            $global_count_of_assignment= Assignment::where('uid',Auth::user()->id)->count();
            $global_available_solutions= Assignment::where('uid',Auth::user()->id)->where('solution_available',1)->count();
            $global_referral=DB::table('user_referral_used')->where('reference_user',Auth::user()->id)->count();
            $order_count=DB::table('order')
               ->join('assignment_details', 'assignment_details.order_id', '=', 'order.order_id')
               ->where('assignment_details.uid',Auth::user()->id)->count();

            if($walletAmount)
            {
                $global_wallet_amount='$'.$walletAmount->wallet_amount;
            }    
            else
            {
                 $global_wallet_amount='$0';   
            }  

            /*
                 Get Available Expert
             */
            
             $available_experts=DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('expert_availability','users.id','=','expert_availability.expert_id')
            ->where('role_user.role_id',2)
            ->where('expert_availability.availability',1)    
            ->get();
             if($available_experts)
             {
                 $available_experts_data=$available_experts;
             }  
             else
             {
                 $available_experts_data=null;
             }
             } 
        
      
            
            
             /*
             * End of get Available Expert Logic
             */ 
             
           View::share(['global_wallet_amount'=>$global_wallet_amount,'global_count_of_assignment'=>$global_count_of_assignment,'global_referral'=>$global_referral,'global_order_count'=>$order_count,'global_available_experts'=>$available_experts_data]);
           
           //Need to make No of avaiolable solution, no of ofrfers
         }
   }
   
}
