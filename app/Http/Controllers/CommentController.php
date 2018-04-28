<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use \App\Assignment;
use App\Fileentry;
use App\SolutionFileentry;
use Symfony\Component\HttpFoundation\Request;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Validator;
use Redirect;
use Session;
use App\Http\Controllers\NotificationController;
use App\User;
use App\Http\Controllers\SendResponseController;
use Config;



class CommentController extends Controller
{

  public function storeTextMessage()
  {

      $response= new SendResponseController();
         $commentData = @file_get_contents('php://input');
         $commentDataValue = json_decode($commentData, true);
         

         if(!isset($commentDataValue['sender_id']))
         {
        // 	return $response->responseData("false",'Sender id field is required','');
         }	
         if(!isset($commentDataValue['receiver_id']))
         {
         //	return $response->responseData("false",'Receiver id field is required','');
         }	
         if(!isset($commentDataValue['text_message']))
         {
         	return $response->responseData("false",'Text message field is required','');
         }	
         if(!isset($commentDataValue['assignment_id']))
         {
         	return $response->responseData("false",'Assignment id field is required','');
         }	
        
       $sender_id 		=126;//	$commentDataValue['sender_id'];
       $receiver_id		= 2;//  $commentDataValue['receiver_id'];
       $text_message	=   $commentDataValue['text_message'];
       $aid 			= 	$commentDataValue['assignment_id'];
       $thread_status	= "";
       $countThreads = DB::table('comment_for_assignment')->where('assignment_id',$aid)->count();
       
       	if($countThreads>=5)
       	{
       		return $response->responseData("false",'Sorry! We cant proivde for more comment now, For further query please use our chat option, we will get back to you shortly.' ,'');
       	}
       


    $checkUser=DB::table('assignment_details')->where('assignment_id',$aid)->first();
  if($checkUser)
  {

  	  if($checkUser->uid==Auth::user()->id)
  	  {
  		$sender_id  =  $checkUser->uid; 	
  		$receiver_id = "admin";
  	  }
  	  else
  	  {
  	  	$sender_id = "admin";
  	  	$receiver_id = $checkUser->uid;
  	  } 	
  	
  }
  if($text_message=='')
  {
  	//return $response->responseData("false",'Null Message','');
  }
  	
  	DB::table('comment_for_assignment')->insert(['sender_id'=>$sender_id,'receiver_id'=>$receiver_id,'comment_field'=>$text_message,'time'=>time(),'assignment_id'=>$aid,'mute_thread'=>$thread_status]);

  	return $response->responseData("true",'Message sent','');
  }
  public function retrieveTextMessage($id)
  {
      $assignmentData = DB::table('comment_for_assignment')->where('assignment_id',$id)->get();
      return $assignmentData;



  }

}