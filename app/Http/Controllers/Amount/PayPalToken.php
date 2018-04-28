<?php
namespace App\Http\Controllers\Amount;
define("CLIENT_ID", "YOUR CLIENT ID");
define("CLIENT_SECRET", "YOUR CLIENT SECRET");
define("URI_SANDBOX", "https://api.sandbox.paypal.com/v1/");
define("URI_LIVE", "https://api.paypal.com/v1/");

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




class PayPalToken extends Controller 
{
 public function process_payment(Request $request){
    $postvals =json_decode('{
  "intent": "sale",
  "payer":
  {
    "payment_method": "credit_card",
    "funding_instruments": [
    {
      "credit_card":
      {
        "number": "4012888888881881",
        "type": "mastercard",
        "expire_month": 12,
        "expire_year": 2018,
        "cvv2": 111,
        "first_name": "Betsy",
        "last_name": "Buyer"
      }
    }]
  },
  "transactions": [
  {
    "amount":
    {
      "total": "7.47",
      "currency": "USD"
    },
    "description": "This is the payment transaction description."
  }]
}');
    $uri = URI_SANDBOX . "payments/payment";
    $pay = new paypal();
    return $pay->curl($uri, 'POST', $postvals);
} 
}
class paypal{
    private $access_token;
    private $token_type;
    
    /**
    * Constructor
    *
    * Handles oauth 2 bearer token fetch
    * @link https://developer.paypal.com/webapps/developer/docs/api/#authentication--headers
    */
    public function __construct(){
        $postvals = "grant_type=client_credentials";
        $uri = URI_SANDBOX . "oauth2/token";
        
        $auth_response = self::curl($uri, 'POST', $postvals, true);
        $this->access_token = $auth_response['body']->access_token;
        $this->token_type = $auth_response['body']->token_type;
    }
 
    /**
    * cURL
    *
    * Handles GET / POST requests for auth requests
    * @link https://php.net/manual/en/book.curl.php
    */
    public function curl($url, $method = 'GET', $postvals = null, $auth = false){
        $ch = curl_init($url);
        
        //if we are sending request to obtain bearer token
        if ($auth){
            $headers = array("Accept: application/json", "Accept-Language: en_US");
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, CLIENT_ID . ":" .CLIENT_SECRET);
            curl_setopt($ch, CURLOPT_SSLVERSION, 3);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        //if we are sending request with the bearer token for protected resources
        } else {
            $headers = array("Content-Type:application/json", "Authorization:{$this->token_type} {$this->access_token}");
        }
           
        $options = array(
            CURLOPT_HEADER => true,
            CURLINFO_HEADER_OUT => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_VERBOSE => true,
            CURLOPT_TIMEOUT => 10
        );
            
            
        if ($method == 'POST'){
            $options[CURLOPT_POSTFIELDS] = $postvals;
            $options[CURLOPT_CUSTOMREQUEST] = $method;
        }
        
        curl_setopt_array($ch, $options);
           
        $response = curl_exec($ch);
        $header = substr($response, 0, curl_getinfo($ch,CURLINFO_HEADER_SIZE));
        $body = json_decode(substr($response, curl_getinfo($ch,CURLINFO_HEADER_SIZE)));
        curl_close($ch);
            
        return array('header' => $header, 'body' => $body);
    }
}


