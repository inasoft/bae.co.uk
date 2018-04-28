<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Payment;
class PaymentController extends Controller 
{
    public function payment(Request $request){
           $product=Product::find(1);    
           //dd($product);
      return view('paypal',compact('product'));
    }
    public function paymentInfo(Request $request){        
        if($request->txn_id||$request->mc_gross||$request->item_number||$request->amount)
        {
            if($payment=Payment::where('transaction_id',$request->tx)->first()){
                $payment_id=$payment->id;
            }else{
                
                $payment=new Payment;
                $payment->item_number   =$request->item_number?$request->item_number:"item_not";
                $payment->transaction_id=$request->txn_id?$request->txn_id:"tx_not";
                $payment->currency_code=$request->mc_gross?$request->mc_gross:"gross_not";
                $payment->payment_status=$request->txnid?$request->txnid:"noTXNid";
                $payment->save();
                $payment_id = $payment->id;
                print_R($request->item_name?$request->item_name:"No Name");
                //Token:byuZbBiAHoK2NnRk9eUSPg9FsW9C66aVxYEYC99LSNLXZIgzfzhPrHTV5vi
                print_R($request->custom?$request->custom.'<=Custom ':"CUSTOM");
                print_R($request->item_namex?$request->item_namex.' <=ItemNaMEX ':"ITEMNAMEX");
                print_R($request->item_numberx?$request->item_numberx.' iTEMnUMBERX ':"ITEMNUMBERX");
                

                
                $identity = 'byuZbBiAHoK2NnRk9eUSPg9FsW9C66aVxYEYC99LSNLXZIgzfzhPrHTV5vi';


// Init curl
              
                
                
                
                
                
                
                
                
                
                
            }
        return 'Pyament has been done and your payment id is : '.$payment_id;
        
        }
        elseif(isset($_POST['mc_gross'])||isset($_POST['item_number'])||isset($_POST['amount'])||isset($_POST['tx']))
        {
          return "Success"    ;
        }  
        elseif(isset($_GET['mc_gross'])||isset($_GET['item_number']) ||isset($_GET['amount'])||isset($_GET['tx']))
        {
            return "Get Success";
        }
        else{
            return 'Payment has failed';
        }
    }
}