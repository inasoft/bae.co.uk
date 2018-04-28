@include('dashboard-layout.dashboard-header')

@include('dashboard-layout.dashboard-left-sidebar')

<div class="content-wrapper">
                <section class="content">
                    <!-- row -->
                     <div class="row">
                     @if($assignment_details)
                       @foreach($assignment_details as $details)
                        <div class="col-md-6">
                            <ul class="timeline">
                                <li class="time-label">
                                    <span class="bg-red">
                                        Assignment Details
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope bg-blue">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">
                                            <a href="#">
                                                Assignment ID
                                                <span style="color: orange">
                                                    {{$details['show_assignment_id']}}
                                                </span>
                                            </a>
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user bg-aqua">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header no-border">
                                            <a href="#">
                                                Subject
                                            </a>
                                            {{$details['subject']}}
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-hourglass-start bg-blue">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">
                                            <a href="#">
                                                Due Date
                                            </a>
                                            {{date("d-m-Y",$details['due_date'])}}
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-comments bg-yellow">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">
                                            <a href="#">
                                               Description
                                            </a>
                                        </h3>
                                        <div class="timeline-body">
                                          {{$details['description']}}
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-street-view bg-gray">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">
                                            <a href="#">
                                                Expert
                                            </a>
                                            {{$details['your_chosen_expert']?$details['your_chosen_expert']:"Not chosen by your choice"}}
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-file bg-yellow">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">
                                            <a href="#">
                                              No of Page 
                                            </a>
                                             {{$details['no_of_pages']}}
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-graduation-cap bg-aqua">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header no-border">
                                            <a href="#">
                                                Reference
                                            </a>
                                            {{$details['reference_style']}}
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-credit-card-alt bg-blue">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">
                                            <a href="#">
                                                Payment
                                            </a>
                                        </h3>
                                        @if($details['payment_paid']==0)
                                        <div class="timeline-body">
                                            Your have not paid any amount for this assignment. Kindly make payment in order to get the solutions
                                        </div>
                                        @endif
                                        @if($details['payment_paid']!=0)
                                        <div class="timeline-body">
                                            Your have made a payment of ${{$details['payment_paid']}} for this assignment.
                                        </div>
                                        @endif
                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-xs">
                                                Payment Paid: ${{$details['payment_paid']}}
                                            </a>
                                            <br>
                                                <a class="btn btn-danger btn-xs">
                                                    Payment Left: ${{$details['payment_left']}}
                                                </a>
                                            </br>
                                        </div>
                                        @if($details['payment_left']!=0)
                                        <div class="timeline-footer">
                                            <a href="/payment-order-submission/paynow?_token={{$details['csrf_token']}}&assignment_id={{$details['assignment_id']}}" class= "btn btn-warning btn-flat btn-xs">
                                                Click here to make payment
                                            </a>
                                        </div>
                                        @endif
                                           @if($details['payment_left']==0)
                                        <div class="timeline-footer">
                                            <a class="disabled btn btn-warning btn-flat btn-xs">
                                                Click here to make payment
                                            </a>
                                        </div>
                                           <div class ='image'>
                                                <img src='https://us.123rf.com/450wm/aquir/aquir1612/aquir161204190/67772590-paid-stamp-sign-seal.jpg?ver=6' alt="Best Assignment Experts" style="width:100px; margin-top: -75px; float:right"></img>
                                    </div>    
                                        @endif
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-clock-o bg-gray">
                                    </i>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="timeline">
                                <li class="time-label">
                                    <span class="bg-aqua">
                                        Uploaded Files
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-cloud-upload bg-purple">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">
                                            <a href="#">
                                                {{$details['no_of_days']>1?$details['no_of_days'].' days ago':$details['no_of_days'].' day ago'}} 
                                            </a>
                                        </h3>
                                    <div class="timeline-body">
                                     @if($details['uploaded_file']!=null)
                                          @foreach($details['uploaded_file'] as $upload_file)  
                                          <a href="/fileentry/get/{{$upload_file['getfile']}}" target="blank"><div class="btn btn-warning">{{$upload_file['filename']}}</div></a>
                                          @endforeach
                                                     <form  action ="/handleUpload"  method ="post" enctype="multipart/form-data" >
                                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">
                                                      <label class="fileLabel" for="fileId">Upload File</label>
                                                   <input type="file"  class="btn btn-warning customFile" name ="image" id="fileId"   onchange="this.form.submit()" /> 
                                                              </form>

                                      @else
                                      <strong>You have not uploaded any files yet, please upload your file/s</strong>

                                                    <form  action ="/handleUpload"  method ="post" enctype="multipart/form-data" >
                                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">
                                                      <label class="fileLabel" for="fileId">Upload File</label>
                                                   <input type="file"  class="btn btn-warning customFile" name ="image" id="fileId"   onchange="this.form.submit()" /> 
                                                              </form>
                                     

 <!-- 
                                       <form action ="/handleUpload"  method ="post" enctype="multipart/form-data">
                                      <input type="hidden" name="id" value="{{$details['assignment_id']}}" id="id">

                                          
                                          <input type = "file"   name ="image">
                                     
                                      <button type= "submit" class="btn btn-warning">upload</button>
                                      </form>
                                    -->
                                      @endif
                                      
                                   </div>
                                    </div>
                                </li>
                                <li class="time-label">
                                    <span class="bg-green">
                                        Avaliable Solutions
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-cloud-download bg-purple">
                                    </i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">
                                            <a href="#">
                                                @if($details['solution_file']!=null)
                                                {{$details['no_of_days']>1?$details['no_of_days'].' days ago':$details['no_of_days'].' day ago'}} 
                                                @else
                                                Solution is not available yet
                                                @endif
                                                
                                            </a>
                                        </h3>
                                        <div class="timeline-body">
                                           
                                        @if($details['solution_file']!=null && $details['status']=='completed')
                                              @if($details['payment_left']!=0)
                                              <span style="color: orange">
                                               Your Solution is Available, please complete your payment to download the solution file/s.
                                             </span>
                                             @else
                                             <span style="color: green">
                                               Your Solution is Available, You can download now
                                              </span>
                                            <div>
                                           @foreach($details['solution_file'] as $solution_file)  
                                             <a href="/fileentry/get/{{$solution_file['getfile']}}" target="blank"><div class="btn btn-instagram">{{$solution_file['filename']}}</div></a>
                                             </div>
                                           @endforeach
                                           @endif
                                        @else
                                        
                                           @if($details['uploaded_file']==null)
                                          Oops! You have not uploaded any assignment file/s yet. Please upload first.
                                          <strong>we serve our best to provide quality based solution before deadline</strong>
                                          
                                           @else
                                          We have recieved your assignment request. One of our best expert has been assigned for your work. Please check dashboard for further notification.
                                          <br>
                                          <strong>We appreciate your patience.</strong>
                                        
                                          @endif
                                        @endif
                                        </div>
                                    </div>
                                    </li>
                                    </ul>


                                    <div class ="cmtError">
                                    <div>
                                    <div class="box box-success" style="margin-bottom:100px;">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Chat</h3>
            </div>
            <div class="slimScrollDiv cmtShow" style="position: relative; height: 250px;"><div class="box-body chat" id="chat-box" style="overflow-y: auto; height: 250px;">
              <!-- chat item -->
              @foreach($messageShow as $message)
               @if($message->sender_id==Auth::user()->id)
              <div class="item" style="margin-bottom: 20px;background: azure;padding: 10px;
    border-radius: 19px;">
                <img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
<!--                     <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
 -->                    {{Auth::user()->name}}
                  </a>
                 <span style="overflow-wrap: break-word;">{{$message->comment_field}}</span>
                </p>
              </div>
              @else
              <div class="item" style="margin-bottom: 20px;background: antiquewhite;padding: 10px;
    border-radius: 19px;">
                
                <img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="offline ">
                <p class="message"  >
                  <a href="#" class="name" >
                    Admin
                  </a>
                  <span style="overflow-wrap: break-word;">{{$message->comment_field}}</span>
                </p>

              </div>
                @endif
                @endforeach
              
            
            </div><div class="slimScrollBar"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
            <!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message..." onkeyup="textCounter(this,'counter',1000);" id="message" style="height: 47px;" >
                <input type="hidden"  maxlength="" size="" value="{{$details['assignment_id']}}" id="getAid">
                <!-- <textarea onkeyup="textCounter(this,'counter',1000);" id="message">
                </textarea> -->
<!--                 <input type="submit" id="sendCmtButton" value="Send">
 -->              

                
                <input disabled  maxlength="" size="" value="1000" id="counter" style="width: 50px;text-align: center; border: none; margin: 5px;">  Characters Left
                <div class="input-group-btn">
                  <button type="button" class="btn btn-success" id="sendCmtButton" style="padding: 15px; margin-top: -30px;"><i class="fa fa-paper-plane" >Send</i></button>
                </div>

              </div>
            </div>
          </div>
                                    <!-- <div class ="cmtShow">
                                    MEssage
                                    @foreach($messageShow as $message)
                                    @if($message->sender_id==Auth::user()->id)
                                     <div  style="font-size:10px; background:red; float:right;">
                                        {{$message->comment_field}}
                                       </div>
                                       @else
                                       <div  style="font-size:15px; background:gray;float: left">
                                        {{$message->comment_field}}
                                       </div> 
                                       @endif
                                    @endforeach
                                    </div> -->
                                     <!-- <div class="timeline-item">
                                      Characters Left
                                        <input disabled  maxlength="" size="" value="1000" id="counter">
                                        <input type="hidden"  maxlength="" size="" value="{{$details['assignment_id']}}" id="getAid">
                                        <textarea onkeyup="textCounter(this,'counter',1000);" id="message">
                                        </textarea>
                                        <input type="submit" id="sendCmtButton" value="Send">


                                      </div> -->
<!--                                    </div>
 -->

                                <!-- 
                                <li>
                                    <i class="fa fa-check bg-gray">
                                    </i>
                                </li> -->
                            <!-- </ul> -->
                        </div>
                        <!-- /.col -->
                    </div>



                    @endforeach
                    @endif
                    
                   

                </section>
                <!-- /.content -->
            </div>
<script>
$('#sendCmtButton').click(function() 
{
        console.log('Send message clicked');
        var text = $('#message').val();
        var aid  = $('#getAid').val();
        if(text==null)
          {
            return ;
          }  
       else
       {
        console.log('sad');

  
            

       var data={
        "assignment_id":aid,
        "text_message":text
        };
        console.log(data);

         $.ajax({
             
             beforeSend: function(xhrObj){
              xhrObj.setRequestHeader("Content-Type","application/json");
              xhrObj.setRequestHeader("Accept","application/json");
             },
             url: "/comment-sent",
             type: "POST",
             data:  JSON.stringify(data),
             contentType: 'application/json; charset=utf-8',
             dataType: 'json',
             
             cache: false,
             success: function (response) 
             {
                console.log(response);
                
                    if(response.success=='true')
                    {   
                    $("#chat-box").addClass("cmtShow").append('<div class="item" style="margin-bottom: 20px;background: azure;padding: 10px;    border-radius: 19px;"><img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="online"><p class="message"><a href="#" class="name">{{Auth::user()->name}}</a><span style="overflow-wrap: break-word;">'+ data.text_message+'</span>  </p></div>');
                    $('#chat-box').scrollTop($('#chat-box').height());
                    }
                   else
                   { 
                   $("#chat-box").addClass("cmtError").append('<div class="item" style="margin-bottom: 20px;background: Red;padding: 10px;    border-radius: 19px;"><img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="online"><p class="message"><a href="#" class="name">Failure!</a><span style="overflow-wrap: break-word;">'+ response.message+'</span></p></div>');


                    $('#chat-box').scrollTop($('#chat-box').height());
                     $(".cmtError").fadeOut(10000);

                   }
                  
              }
          });
      }
    });

function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit);
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
/****Auto refresh *****/


 var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 15000) 
             window.location.reload(true);
         else 
             setTimeout(refresh, 10000);
         $('#chat-box').scrollTop($('#chat-box').height());
     }

     setTimeout(refresh, 10000);
  
</script>
