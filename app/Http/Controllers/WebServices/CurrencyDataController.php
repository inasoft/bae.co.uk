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




class CurrencyDataController extends Controller
{
    public function getCurrencyDataForCalculator()
    {
         $response = new SendResponseController();
      
        $check_out_page= @file_get_contents('php://input');
        $check_out_page_data = json_decode($check_out_page, true);
       
         if(!isset($check_out_page_data['id']))
         {
             return $response->responseData('false', 'Assignment Id field is required', '');
         }   
         if(!isset($check_out_page_data['currency_code']))
         {
             return $response->responseData('false', 'Currency Code field is required', '');
         }   
         
        
        $convert_code_into=$check_out_page_data['currency_code'];
        
        $silver_plans       = DB::table('silver_currency_plan')->get();
        $gold_plans         = DB::table('gold_currency_plan')->get();
        $platinum_plans     = DB::table('platinum_currency_plan')->get();
       // $currency_Code=$this->convertCurrency('INR',$convert_code_into);
        $array_data=array();
        foreach($silver_plans as $silver)
        {
            $silver_plan['day_range']=$silver->day_range;
            $silver_plan['amount']=$silver->price;
            $silver_array[]=$silver_plan;
            
        }  
        $array_data[]=$silver_array;
        foreach($gold_plans as $gold)
        {
            $gold_plan['day_range']=$gold->day_range;
            $gold_plan['amount']=$gold->price;
            $gold_array[]=$gold_plan;
            
        }  
        $array_data[]=$gold_array;
        foreach($platinum_plans as $platinum)
        {
            $platinum_plan['day_range']=$platinum->day_range;
            $platinum_plan['amount']=$platinum->price;
            $platinum_array[]=$platinum_plan;
            
        }  
        $array_data[]=$platinum_array;
       return $response->responseData('true', 'Available plans', $array_data);
           
       
        
    }        
    
    
}