<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SendResponseController;

use App\Http\Requests;
use Auth;
use DB;
//use Firebase\JWT\JWT;
//use Firebase\JWT;
use App\Http\Controllers\JWT;


class BitSixAuthTokenController extends Controller
{
  public function generateTokenForBit6Authentication()
  {
      $response = new SendResponseController();
     

        $tokenFor = file_get_contents('php://input');
        $tokenForData = json_decode($tokenFor, true);

       if((Auth::user()->hasRole('admin')))
       {
        $username='admin';  
        $sendTo=null;
       }
       else
       {
        $username=Auth::user()->name.Auth::user()->id;  
        $sendTo="admin";

       } 
        //dd($username);
                
                $anyvariable='';

               $identities = array("usr:".$username,"mail:".$anyvariable);

               if (!$identities || count($identities) < 1) {
                   throw new \Exception("Must specify at least one identity");
               }
               // Primary identity
               $primary = array_shift($identities);
               // Current time - Unix timestamp
               $now = time();
               // JWT claims
               $data = array (
               // Issued at
               'iat' => $now,
               // Expiration - 50 minutes
               'exp' => $now + 86400*30*60,
               // Bit6 API key as audience claim
               'aud' => '2h1j5-joou2JqAM421',
               // Primary identity as subject
               'sub' => $primary
               );
               // Handle additional identities
               if (count($identities) > 0) 
               {
                   $data['identities'] = $identities;
               }

               $jwt =  JWT::encode($data, 'MM0vj6YbJrUQa2MGfgd7y1nFq1wyrg59');
                
              $jwt_data['jwt_token']= $jwt;
              $jwt_data['send_to']=$sendTo;
              
        return $response->responseData('true', 'JWT Tokens', $jwt_data);
              
       }
       
      
    }
   
  
