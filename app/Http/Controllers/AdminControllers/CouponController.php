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
       



class CouponController extends Controller 
{
    
     public function createCoupons()
     {
         return View('admin.dashboard.create-coupons');
         
     }       
     
     public function postCouponData()
     {
         
         //This will be on submit of create coupon on coupon page
        $coupon_name= Input::get('coupon_name');
        $coupon_code= strtoupper(Input::get('coupon_code'));
        $coupon_discount= Input::get('coupon_discount');
        $coupon_expiry= strtotime(Input::get('coupon_expiry'));
        $coupon_max_red=Input::get('max_redemption');
        $coupon_max_red_per_user= Input::get('max_redemption_per_user');
        $update_coupon_data=Input::get('update');
        $delete_coupon_data=Input::get('delete');
        $coupon_id=Input::get('coupon_id');
        $coupon_discount_data=$coupon_discount;
            if($delete_coupon_data=='delete')
            {
              DB::table('coupons')->where('id',$coupon_id)->delete();
             }  
        
        if(preg_match('/%/', $coupon_discount))
        {
            $coupon_discount='percentage';
            $str = $coupon_discount_data;
           $coupon_discount_value= filter_var( $str, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) ;


        }      
        else
       {
            $coupon_discount='flat';
            $str = $coupon_discount_data;
            $coupon_discount_value=filter_var( $str, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) ; 
       } 
        
        if($update_coupon_data=='')
        {   
            
        DB::table('coupons')->insert(['coupon_type'=>$coupon_name,'coupon_code'=>$coupon_code,'discount_type'=>$coupon_discount,
                                    'coupon_discount_value'=>$coupon_discount_value,'coupon_expiry'=>$coupon_expiry,'max_redemption'=>$coupon_max_red,
                                    'max_redemption_per_user'=>$coupon_max_red_per_user]); 
        return redirect('show-coupons');
         
        }
        else
        {
         DB::table('coupons')->where('id',$coupon_id)->update(['coupon_type'=>$coupon_name,'coupon_code'=>$coupon_code,'discount_type'=>$coupon_discount,
                                    'coupon_expiry'=>$coupon_expiry,'max_redemption'=>$coupon_max_red,
                                    'max_redemption_per_user'=>$coupon_max_red_per_user]); 
         
        return redirect('show-coupons');    
        }  
       //return Session::flash('Coupon data posted');
        
     }  
    
     public function showCoupons()
    {
         
      $get_all_coupons=DB::table('coupons')->get();
      
      return View('admin.dashboard.show-coupons')->with('all_coupon_data',$get_all_coupons);
      //Need to make a view and URL
    } 
     
    
}
    