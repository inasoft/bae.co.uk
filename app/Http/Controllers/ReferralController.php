<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Http\Controllers\Amount\WalletController;;


class ReferralController extends Controller
{
  public function getReferral()
  {
    
      $user_id = Auth::user()->id;
      $get_referral=DB::table('user_referral')->where('uid',$user_id)->first();
      if($get_referral)
      {  
     
     
      return view('dashboard.referral-page', [
                  'referral_code' => $get_referral->referral_code,
       ])->render();  
      }
      else
      {
          return view('dashboard.referral-page', [
                  'referral_code' => 'No referral code is available, please contact to the site administrator .',
       ])->render();  
      }   
  }  
  
  
  public function useReferralCode($referral,$id='')
  {
      $wallet=new WalletController();
      $getReferralId = DB::table('user_referral')->where('referral_code',$referral)->first();
      if($getReferralId)
      {
          $usedReferralCount=DB::table('user_referral_used')->where('rid',$getReferralId->rid)->count();
          if($usedReferralCount>=5)
          {
              return "max_used";
          }  
          else
          {
             return $getReferralId;
          }   
      }
       else
      {
       return "invalid_referral";    
      }
  }
  public function earnFromReferral($id,$getReferralId)
  {       
      $wallet=new WalletController();     
      DB::table('user_referral_used')->insert(['new_user'=>$id,'reference_user'=>$getReferralId->uid,'rid'=>$getReferralId->rid,'time'=>time()]);
      $wallet->addAmountInWallet($id, 10);
      $wallet->addAmountInWallet($getReferralId->uid, 5);
      return 10;           
             
          
  
  }
}
    
    
    

