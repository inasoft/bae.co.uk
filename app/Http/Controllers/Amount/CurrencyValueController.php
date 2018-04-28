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

class CurrencyValueController extends Controller
{
    public function addCurrencyPlan()//showCurrencyPlan
    {
        $currency=User::find(Auth::user()->id);
        $convert_code_into=$currency_code;
        
        $silver_plans       = DB::table('silver_currency_plan')->get();
        $gold_plans         = DB::table('gold_currency_plan')->get();
        $platinum_plans     = DB::table('platinum_currency_plan')->get();
        $currency_Code=$this->convertCurrency('INR',$convert_code_into);
        return View('admin.dashboard.currency-calculator')->with(['silver_plans' => $silver_plans,'gold_plans'=> $gold_plans,'platinum_plans'=>$platinum_plans,'currency_code'=>$currency_Code]);
    }        
        
    public function convertCurrency($from_currency='',$to_currency='')
    {
    
    $from_currency    = 'USD';
    $to_currency    = 'INR';
    $amount            = 1;
    $results = $this->converCurrency($from_currency,$to_currency,$amount);
    $regularExpression     = '#\<span class=bld\>(.+?)\<\/span\>#s';
    preg_match($regularExpression, $results, $finalData);
    $var=$finalData[0];
    $returned_value= preg_replace("/[^0-9\.]/", null, $var);
    //print_r(floatval($finalData[0]));
    return $returned_value;


        
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
    
}