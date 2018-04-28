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
use App\Assignment;
use \App\User;


class WalletController extends Controller 
{
  
   public function addAmountInWallet($id,$addAmountInWallet,$extraParam='')
   {
    
       $wallet = DB::table('wallet')->where('uid',$id)->first();
       if($wallet)
       {
           if($wallet->wallet_amount>0)
           {
               $amount=$wallet->wallet_amount;
               if($addAmountInWallet > 0)
               {
               $updated_wallet_amount=$amount+$addAmountInWallet;
               }   
               else
               {
               $updated_wallet_amount=$amount;    
               }
             DB::table('wallet')->where('uid',$id)->update(['wallet_amount'=>$updated_wallet_amount,'time'=>time()]);  
               
           }   
           if($extraParam!=null)
           {
              return redirect("/my-wallet"); 
           }   
       }
       else
       {
           if($addAmountInWallet > 0)
           {   
            DB::table('wallet')->insert(['wallet_amount'=>$addAmountInWallet,'uid'=>$id,'time'=>time()]);
           }
           else 
           {
             DB::table('wallet')->insert(['wallet_amount'=>0,'uid'=>$id,'time'=>time()]);   
           }
         if($extraParam!=null)
           {
              return redirect("/my-wallet"); 
           }         
           
       }  
   }        
    public function deductAmountFromWallet()
    {
        
    }        
    public function showWalletPage()
    {
       $logged_in_uid = Auth::user()->id;
       $walletAmount=DB::table('wallet')->where('uid',$logged_in_uid)->first();
       $no_of_assignmnet= Assignment::where('uid',Auth::user()->id)->count();
       $no_of_available_solutions= Assignment::where('uid',Auth::user()->id)->where('solution_available',1)->count();
       
       
       if($walletAmount)
       {
           $available_amount_in_wallet=$walletAmount->wallet_amount;
       }    
       else
       {
            $available_amount_in_wallet=0;   
       }  
      
       return view('dashboard.wallet-page', [
                  'wallet_amount' => $available_amount_in_wallet,
                  'no_of_assignment'=>$no_of_assignmnet,
                  'referrals'=>'10',
                  'available_solutions'=>$no_of_available_solutions,
           
       ])->render();  
    }     
    
   public function addAmountInWalletViaPaypal()
   {
       

    $uid                      = isset($_REQUEST['item_number'])?$_REQUEST['item_number']:'';
    $paypal_amount           = isset($_REQUEST['mc_gross'])?$_REQUEST['mc_gross']:'';
    if(!is_null($uid)&&!is_null($paypal_amount))
    {  
    Session::flash('paypal_wallet_success','Thankyou, Your wallet amount has been updated successfully');
    return $this->addAmountInWallet($uid,$paypal_amount,'paypal');
    }       
    else
    {
       Session::flash('paypal_wallet_fail','Oops, Unbale to update the wallet amount , contact to the site admin');
        return redirect("/my-wallet");
    }   
   }
   
   public function  cancelAmountInWalletViaPaypal()
   {
        Session::flash('paypal_wallet_fail','Oops, Payment was cancelled');
        return redirect("/my-wallet");
   }        
   
   
}