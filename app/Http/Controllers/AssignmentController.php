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
use App\Http\Controllers\CommentController;



class AssignmentController extends Controller
{
 
     public function putAssignmetData(Request $request)
     {  
         
         
        // dd(filesize(\Illuminate\Support\Facades\Request::file('uploaded_file1')));
         //dd('ss');

          $validator = Validator::make($request->all(), [
                    'subject' => 'required',
                     'no_of_pages' => 'required',
                     'ref_style' => 'required',
                     'due_date' => 'required',
                    'expert' => 'required',
                    'description' => 'required',
                   'uploaded_file1' => 'max:500000',
                    'uploaded_file1' => 'mimes:pdf,doc,docx,png,jpg,jpeg,zip,rar'
                    //'id' => 'required',
                    
                    
        ]);
        $messages = $validator->messages();
        if ($validator->fails()) {
     
         return Redirect::to('/add-assignment')
                                ->withInput()
                                ->withErrors('Please Fill all the Data');
           
        }
        // dd($request->subject);
            
       $login_user_id = Auth::user()->id;
        $subject      =       $request->subject;
        $due_date     =       strtotime($request->due_date);
        $no_of_pages  =       $request->no_of_pages;
        $ref_style    =       $request->ref_style;
        $expert       =       $request->expert;
        $description  =       $request->description;
        $file1        =      \Illuminate\Support\Facades\Request::file('uploaded_file1');  //$request->uploaded_file1;
        $file2        =      \Illuminate\Support\Facades\Request::file('uploaded_file2'); 
        $file3        =      \Illuminate\Support\Facades\Request::file('uploaded_file3'); 
       
       return  $this->insertValuesInAssignment($login_user_id,$due_date,$subject,$no_of_pages,$ref_style,$expert,$description,$file1,$file2,$file3);
       
          
     } 
       public function   postplaceform(){
       return view('test1');
        }      
     public function showAssignment()
     {
       $response = new SendResponseController(); 
       $assignmentData=Assignment::where('uid',Auth::user()->id)->get();
       $assingnment_data=array();
       $put_in_array=array();
       if($assignmentData)
       {
       foreach($assignmentData as $data)
       {
          if($data->order_id!=null && !empty($data->order_id))
          {
              $order =DB::table('order')->where('order_id',$data->order_id)->first();
              $assingnment_data['payment_left']  = $order->payment_left;
              $assingnment_data['payment_paid'] =  $order->payment_paid;
              $assingnment_data['order_id']     =$data->order_id; 
          }
          else
          {
              $assingnment_data['payment_left'] = $data->total_amount;
              $assingnment_data['payment_paid']  = 0;
              $assingnment_data['order_id']     = ''; 
          }
          $assingnment_data['assignment_id']=   $data->assignment_id;
          $assingnment_data['show_assignment_id']=$response->getAssignmentAsOrderId($data->assignment_id, Auth::user()->id);
          $assingnment_data['subject']=$data->subject;
          $assingnment_data['due_date']=date('d-m-y',$data->due_date);
          $assingnment_data['status']=$data->status;
          $assingnment_data['reference_style']=$data->reference_style;
          $assingnment_data['no_of_pages']=$data->no_of_pages;
          $assingnment_data['subtotal']=$data->total_amount;
          $put_in_array[]=$assingnment_data;
          
       }   
       }
       else
       {
        $put_in_array[]='';
       }
       
       return View('dashboard.show-assignment')->with('assignment_data',$put_in_array);
         
         
         
      
     }
   public function addAssignment()
   {
   return View('dashboard.add-assignment');  
   }
    public function putFileData($assignment_id,$file_data)
    {
        $file = $file_data;
        
	$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$entry = new Fileentry();
                $entry->assignment_id = $assignment_id;
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
                $entry->save();
    }
    
     public function putSolutionFileData($assignment_id,$file_data)
    {
        $file = $file_data;
        
	$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$entry = new SolutionFileentry();
                $entry->assignment_id = $assignment_id;
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
                $entry->save();
                
        DB::table('assignment_details')->where('assignment_id',$assignment_id)->update(['solution_available'=>1]);        
    }
    
    public function  insertValuesInAssignment($login_user_id,$due_date,$subject,$no_of_pages,$ref_style,$expert,$description,$uploaded_file1='',$uploaded_file2='',$uploaded_file3='',$extra_param='')
    {
       
        $response = new SendResponseController();
        $total_amount=$no_of_pages*Config::get('page_cost_per_page_multiplier');
        $notification = new NotificationController();
         
     // dd($subject.' '.$due_date.' '.$no_of_pages.' '.$ref_style);
        if(!empty($subject&&$due_date&&$no_of_pages&&$ref_style))
        {
         
             try
             {  
//              if($uploaded_file->size()>=Config::get('assignment_file_size'))
//              {
//                  //return with error tha t the file size exceeds:
//              }
              
                 
                 
                $last_assignment_id= DB::table('assignment_details')
                 ->insertGetId(['uid' =>$login_user_id , 'order_id' => null,
                          'subject'=>$subject,'due_date'=>$due_date,
                          'submitted_date'=>time(),
                          'no_of_pages'=>$no_of_pages,'reference_style'=>$ref_style,
                          'expert_name'=>$expert,'description'=>$description,
                          'total_amount'=>$total_amount,'status'=>'pending','solution_available'=> 0, 'time'=>time()
                          ]);
                
                if($uploaded_file1!=null&&!empty($uploaded_file1))
                { 
                $this->putFileData($last_assignment_id,$uploaded_file1);  
                }
                if($uploaded_file2!=null&&!empty($uploaded_file2))
                { 
                $this->putFileData($last_assignment_id,$uploaded_file2);  
                }if($uploaded_file3!=null&&!empty($uploaded_file3))
                { 
                $this->putFileData($last_assignment_id,$uploaded_file3);  
                }
                 DB::table('user_currency_selection')
                 ->insert(['aid' =>$last_assignment_id , 'fixed_currency' => 'INR',
                          'used_currency'=>'USD',
                          'fixed_amount'=>$total_amount,
                          ]);
                 
		  Session::flash('add-assignment','Your order has placed successfully');
                 //Send Mail Function
                    try
                     {
                    $user_referral=  DB::table('user_referral')->where('uid',Auth::user()->id)->first();
                    $send_mail['send_to']   =User::find($login_user_id)->email;
                    $send_mail['name']      =User::find($login_user_id)->name;
                    $send_mail['subject']   ="Thank You! Your Order has placed successfully";
                    $send_mail_array[]=$send_mail;
                   
                    $variables['welcome_name']  = User::find($login_user_id)?User::find($login_user_id)->name:User::find($login_user_id)->email.' (Set your name from the profile page)';
                    $variables['order_id'] = $response->getAssignmentAsOrderId($last_assignment_id, Auth::user()->id);

                    $variables['referral_code']=$user_referral?$user_referral->referral_code:'Oops Referral code is not generated yet, Please contact our site administrator';

                    $variables_array[]=$variables;

                     $notification->sendMail($send_mail_array, 'emails.place-order-registration', $variables_array);
                     }
                    catch (Exception $ex) 
                    {
                         Session::flash('add-assignment','Your order has placed successfully');
                         return redirect('/add-assignment'); 
                    }
                 
                 //End Of Mail Function
                 return redirect('/add-assignment'); 
            }
            catch(Exception $ex)
            {
                 if($extra_param=="place_order_form")
                 {
                     return "false";
                 } 
                Session::flash('add-assignment','We are having a trouble during submitting your data, please try again later');
                return redirect('/add-assignment'); 
            }
        }
        else
        {   
            
                if($extra_param=="place_order_form")
                {
                     return "false";
                } 
          
          return redirect('/add-assignment');
        }
        
    }
    
    public function showAssignmentDetails($id)
    {
      
      
       $response=new SendResponseController();
       $assignmentId                = $id;
       $put_soln_file_data          = null;
       $array_assignment_details    = null;
       $put_in_array                = null;  
       $uploaded_file_array         = null;
       Session::flash('my-assignment','Oops! We got an invalid response for your assignment data.');
       if($assignmentId)
       {    
             $details = DB::table('assignment_details')->where('assignment_id',$assignmentId)->first();
             if($details)
             {
              if($details->uid!=Auth::user()->id)
             {  
                return redirect('/my-assignment');
             }  
                
           
             if(!empty($details) && $details!='')
             {
                 
               $uploadedFiles=DB::table('assignment_files')->where('assignment_id',$details->assignment_id)->get();  
               if($uploadedFiles)
               {
                   foreach($uploadedFiles as $file)
                   {
                       $uploaded_file['filename']=$file->original_filename;
                       $uploaded_file['getfile']=$file->filename;
                       $uploaded_file_array[]=$uploaded_file;
                   }   
               }
               else
               {
                   $uploaded_file_array=null;
               }  
                 
            
                 
              if($details->order_id!='')
              {
                 $orders=DB::table('order')->where('order_id',$details->order_id)->first();
                 $array_assignment_details['order_id']=$details->order_id;
                 if($orders)
                 {
                 $array_assignment_details['payment_left']=$orders->payment_left;
                 $array_assignment_details['payment_paid']=$orders->payment_paid;
                 }
                 else
                 {
                 $array_assignment_details['payment_left']=$orders->total_amount;
                 $array_assignment_details['payment_paid']=0;
                 }    
             }
             else
             {
                 $array_assignment_details['order_id']='NaN';
                 $array_assignment_details['payment_left']=$details->total_amount;
                 $array_assignment_details['payment_paid']=0;
                 
             }
              $array_assignment_details['show_assignment_id']      = $response->getAssignmentAsOrderId($details->assignment_id, Auth::user()->id) ;
              $array_assignment_details['assignment_id']      = $details->assignment_id;
              $array_assignment_details['total_amount']       =   $details->total_amount;
              $array_assignment_details['subject']            =   $details->subject;
              $array_assignment_details['due_date']           =   $details->due_date;
              $array_assignment_details['description']        =   $details->description;
              $array_assignment_details['reference_style']    =   $details->reference_style;
              $array_assignment_details['status']             =   $details->status;
              $array_assignment_details['your_chosen_expert'] =   $details->expert_name;
              $array_assignment_details['no_of_pages']        =   $details->no_of_pages;
              $array_assignment_details['no_of_days']         =   $this->returnNoOfDays($details->submitted_date);
              $array_assignment_details['csrf_token']         =   csrf_token();
              
              if($details->solution_available==1)
              {
                  $availSolutionFile = DB::table('assignment_solutions')->where('assignment_id',$details->assignment_id)->get();
                  if($availSolutionFile)
                  {
                       foreach($availSolutionFile as $solnFile)
                       {
                           $solution_files_data['filename']=$solnFile->original_filename;
                           $solution_files_data['getfile']=$solnFile->filename;
                           $put_soln_file_data[]=$solution_files_data;
                       }   
                  } 
                  else
                   {
                      $put_soln_file_data=null;
                   }
              }  
            else
              {
                $put_soln_file_data=null;
              }
              $array_assignment_details['solution_file']  =  $put_soln_file_data;
              $array_assignment_details['uploaded_file']  =  $uploaded_file_array;
              
           
              
              
              
//              if($details->assigned_to!='')
//              {
//                 $array_assignment_details['assigned_to']  =User::find($details->assigned_to)->name;   
//              }
//              else
//              {   
//              $array_assignment_details['assigned_to']='';    
//              }
            $put_in_array[]=$array_assignment_details;
           //dd($put_in_array);
      
            ///neW aDDED CODE
            $commentData= new CommentController();
           $textMessages = $commentData->retrieveTextMessage($details->assignment_id);
           //endnew code
         return View('dashboard.assignment-details')->with(['assignment_details'=>$put_in_array,'file_count'=>count($put_soln_file_data),'messageShow'=>$textMessages]);
     }   
         else
         {
         return redirect('/my-assignment');
         }
     } 
     }
      return redirect('/my-assignment');       
     
     
    }
    
    public function returnNoOfDays($start_date)
    {
         $diff = time()-$start_date; 
         return round($diff / 86400);
        

    }       
    
    
           
}
