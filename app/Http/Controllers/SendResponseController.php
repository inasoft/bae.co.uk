<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use DB;
use Auth;
use Response;

class SendResponseController extends Controller
{

 public static function responseData($success, $message, $data) 
 {
        $output = array();
        $output['success'] = $success;
        $output['message'] = $message;
        $output['data']    = $data;
//                $output['new_token'] = $new_token;
//                if ($message == 't') {
//                    return Response::json($output, 200);
//                }
//                if ($message == '403') {
//                    return Response::json($output, 403);
//                }



        return Response::json($output);
 }
 public static function getAssignmentAsOrderId($assignment_id,$uid)
 {
 
          $data  =  DB::select('select count(assignment_id) AS count from assignment_details 
                               where assignment_id <=:asssignment_id AND uid= :user_id order by assignment_id asc',['asssignment_id' => $assignment_id,'user_id'=>$uid]);
                      
        $detailsOfAssignment  =  DB::table('assignment_details')->where('assignment_id',$assignment_id)->first();
       if($detailsOfAssignment)
       {  
        $deadlineDdate = date("dmY",$detailsOfAssignment->due_date);
        $count=$data[0]->count;
        return 'BAE-'.$deadlineDdate.'-'.str_pad($uid, 4, '0', STR_PAD_LEFT).'-'.$count.'-'.$assignment_id ; 
       }
       else
       {    
        return $assignment_id;
       }
 }     
 public static function getOrderId($order_id,$uid)
 {
    $data =   DB::select('select count(o.order_id) AS count from `order` o INNER JOIN
                         `assignment_details` ad on ad.order_id=o.order_id
                         where o.order_id <=:order_id AND ad.uid=:user_id order by o.order_id asc',['order_id' => $order_id,'user_id'=>$uid]);
         
    $orderDetails=DB::table('order')->where('order_id',$order_id)->first() ;
    
    if($orderDetails)
    {
        $count=$data[0]->count;
        $orderDate=date('dmY',$orderDetails->time);
         return 'BAE-'.$orderDate.'-'.str_pad($uid, 4, '0', STR_PAD_LEFT).'-'.$count.'-'.$order_id ; 
    }
    else
     {    
       return $order_id;
     }
     
 }        
    
}  

