@include('admin.dashboard-layout.header')

    <style type="text/css">
.cont3 {
    text-align: left;
    margin-left: 25px;
       color: #fff;
}
</style>

    <div class="container" style="margin-top:5%; margin-bottom:5%;">
        <div class="row">

        	<div class="col-sm-6 col-lg-6">
        		
        		<div class="register-info-wraper">
        			<div id="register-info">
        				<div class="cont2">
        					<div class="thumbnail">
								<img src="../dashboard_theme/dist/img/graduate.png" style="width: 100px" alt="Best Assignment Experts" class="img-circle user_profile ">
							</div><!-- /thumbnail -->
							<h2 style="font-weight: 600;    color: #fff; padding-bottom: 15px;">{{$name}}</h2>
        				</div>
        				<div class="row">
        					<div class="col-lg-6">
        						<div class="cont3">
                <p><ok>ID:</ok>  {{$id}}</p>
        							<p><ok>Name:</ok>  {{$name}}</p>
        							<p><ok>Mail:</ok>  {{$email}}</p>
        							<p><ok>Phone:</ok>  {{$mob}}</p>
        						  <p><ok>Registered:</ok>  {{$registered_on}}</p>
        						</div>
        					</div>
        					<div class="col-lg-6">
        						<div class="cont3">
        						
        						<p><ok>Last Login:</ok>  {{$last_login}}</p>
        <a href = "/showtotal/{{$id}}">	<p><ok>Assignments</ok>  {{$assignment_count}}</p></a>
        						<p><ok>Wallet</ok>  {{$wallet_amount}}</p>
                    <p><ok>Referrals</ok>  {{$global_referral}}</p>
        						</div>
        					</div>
        				</div><!-- /inner row -->
						<hr>
						<div class="cont2">
							<h2>Choose Your Option</h2>
						</div>
						<br>
							<div class="info-user2">
								
								<button data-toggle="modal" data-target="#solutionModal" class="fa fa-fax"></button>
								<button data-toggle="modal" data-target="#msgModal" class="fa fa-envelope"></button>

								<button data-toggle="modal" data-target="#walletModal" class="fa fa-money"></button>
                                                                
                                                                @if($status==='0')
                                                                <button data-toggle="modal" data-target="#unblockModal" class="fa fa-unlock"></button>
                                                                @else
								<button data-toggle="modal" data-target="#blockModal"  class="fa fa-ban"></button>
                                                                @endif
                         <button data-toggle="modal" data-target="#deleteModal" data-idid="5" class="fa fa-trash"></button>
								
							</div>

        				
        			</div>
        		</div>

        	</div>

        	<div class="col-sm-6 col-lg-6">
        <div id="register-wraper" style="margin-top: 0px;">
        		    <form id="register-form" class="form" method="POST" action="/student-profile/{{$id}}">
                   <input type="hidden" name="_Token" value="{{ csrf_token() }}">
        		        <legend>Profile</legend>
						<hr>
        		    
        		        <div class="body">
        		        		<!--<div class="form-group">
								<label for="profile_password">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
								
									<input  name="profile_password" class="input-huge" type="password" value="{{$password}}" required="">
								</div>
							</div>
						</div>-->
							
							
							<label for="profile_name">Name</label>
    		        		<input name="profile_name" class="input-huge" type="text" value="{{$name}}" required="">
							
						
        		        	<label for="profile_email">Email</label>
        		        	<input name="profile_email" class="input-huge" type="email" value="{{$email}}" required="">
        		        	
        		        	<label for="profile_password">Password</label>
        		        	<input  name="profile_password" class="input-huge" type="password" value="{{$password}}" required="">
        		        	
        		        	<label for="profile_phone">Phone</label>
        		        	<input name="profile_phone" class="input-huge" type="number" value="{{$mob}}" >

                             <label for="profile_address">Address</label>
        		        	<input name="profile_address" class="input-huge" type="text" value="{{$address}}" >

                            <label for="profile_image">Profile Picture</label>
							<input name="profile_image" class="input-huge" type="file" value="{{$image}}" accept="image/*">

							<label for="profile_about">About Myself</label>
							<textarea name="profile_about" class="input-huge"  value="{{$about_me}}"></textarea>

        		        </div>
        		    
        		        <div class="footer">
        		            <button type="submit" class="btn btn-success">Save</button>
        		        </div>
        		    </form>
					
					
					
					
					
					<!--<form method="post" name="register" action="">
                <span class="tabaddon"><i class="fa fa-user fa-2x"></i></span>
                <input class="field" name="usernamesignup" required="" type="text" placeholder="myusername">
                <span class="tabaddon"><i class="fa fa-envelope fa-2x"></i></span>
                <input class="field" name="emailsignup" required="" type="email" placeholder="myusername@gmail.com">
                <span class="tabaddon"><i class="fa fa-lock fa-2x"></i></span>
                <input class="field" name="passwordsignup" required="" type="password" placeholder="mypassword">
                <span class="tabaddon"><i class="fa fa-lock fa-2x"></i></span>
                <input class="field" name="passwordsignup_confirm" required="" type="password" placeholder="mypassword">
               
              </form>-->
					
        		</div>
				
				
				
        	</div>

        </div>
    </div>

<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Send Message</h4>
      </div>
      <div class="modal-body">
       <div id="msg-wraper">
                <form id="msg-form" class="form" methbod="POST" action="">
                     <input type="hidden" name="_Token" value="{{ csrf_token() }}">
                
                    <div class="body">
                      
                    <label for="msg_text">Message</label>
                    <textarea name="msg_text" class="input-huge" type="text" value="" required=""></textarea>


                    
                    </div>
                </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="solutionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload Solutions</h4>
      </div>
      <div class="modal-body">
        <div id="solution-wraper">
                <form id="solution-form" class="form" methbod="POST" action="">
                   
                    <div class="body">
                      
                    <label for="solution1">Upload Solution 1</label>
                    <input name="solution1" class="input-huge" type="file" accept="image/*" value="" required="">

                    <label for="solution2">Upload Solution 2</label>
                    <input name="solution2" class="input-huge" type="file" accept="image/*" value="" >

                    <label for="solution3">Upload Solution 3</label>
                    <input name="solution3" class="input-huge" type="file" accept="image/*" value="">
                     
                     <label for="text_message">Send message</label>
                    <textarea name="text_message" class="input-huge" type="text" value=""></textarea>
                    </div>
                </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="walletModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Money to Wallet</h4>
      </div>
        <div class ="show-message-content">
        </div>
        
      <div class="modal-body">
        <div id="wallet-wraper">
                <form id="wallet-form" class="form" methbod="POST" action="">
                    
                    <div class="body">
                      
                    <label for="wallet_amount">Amount</label>
                    <input name="wallet_amount"id="wallet-amount" class="input-huge" type="number" value="" required="">
                    
                    </div>
                </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary profile-wallet-money">Add</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="blockModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Block User</h4>
      </div>
       <div class ='on-block-response'>
       </div>   
      <div class="modal-body">
        Do you really want to block student {{App\User::find($id)?ucfirst(App\User::find($id)->name):''}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary block-student">Block</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="unblockModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">UnBlock User</h4>
      </div>
       <div class ='on-unblock-response'>
       </div>   
      <div class="modal-body">
        Do you really want to Unblock student {{App\User::find($id)?ucfirst(App\User::find($id)->name):''}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary unblock-student">Unblock</button>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete User</h4>
      </div>
        <div class="on-delete-response">
        </div>  
      <div class="modal-body">
        Do you really want to delete student {{App\User::find($id)?App\User::find($id)->name:""}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary delete-student">Delete Student</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).on("click", ".profile-wallet-money", function () 
  {
             
              var data=
              {
                 uid:   <?php echo json_encode($id);?>,
                 wallet_amount: $(".modal-body #wallet-amount").val(),
                 type:          "success"
              }; 
              
                $.ajax({
                 url: '/add-amount-in-user-wallet',
                 type: 'POST',
                 data: JSON.stringify(data),
                 contentType: 'application/json; charset=utf-8',
                 dataType: 'json',
                 async: false, 
                 success: function(s_response)
                 {
                    if(s_response.success=='true')
                    {  
                        $(".show-message-content").addClass("show-message-content message-success").append("<div class='info-boxes confirmation-message-success alert-success' id='feedback-form-success'><strong>Success!</strong><br><p>"+s_response.message+"</p><button class='btn btn-primary' data-dismiss='modal'>Close</button></div>");
                        $(".modal-footer").css("display","none");
                        $(".modal-body").css("display","none");                                      
                    }
                    else
                    {
                        $(".show-message-content").addClass("show-message-content").append("<div class='info-boxes confirmation-message alert-danger' id='feedback-form-success'><strong>Oops!</strong><br><p>"+s_response.message+"</p><button class='btn btn-primary confirm-wallet'>Confirm</button></div>");                                         
                        $(".show-message-content").delay(500).hide(500, function(){
                        $(this).text("").fadeIn(600);});
                    }   
                   }
                 });
               });
   $(document).on("click", ".delete-student", function () 
  {
        
    // var assignment_id = $(this).data('id');
    // var user_id = $(this).data('idid');
    //   console.log($(this).data('idid'));
    var uid=<?php echo json_encode($id);?>;
    
     var data=
              {
                uid: uid
              };  
      
       $.ajax({
                url: '/delete-student',
                type: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                async: false,
                success: function(s_response)
                {
        
                 console.log(data);
                 console.log(s_response);
                    if(s_response.success == 'true')
                    {
                      $(".on-delete-response").addClass("on-delete-response message-success").append("<div class='info-boxes confirmation-message alert-success' id='feedback-form-success'><strong>Success!</strong><br><p>"+s_response.success+"</p><a href='/show-students'><button class='btn btn-success'>Ok</button></a></div>");
                        $(".modal-footer").css("display","none");
                        $(".modal-body").css("display","none");
                    } 
                 else 
                   { 
                      $(".on-delete-response").addClass("on-delete-response message-success").append("<div class='info-boxes confirmation-message alert-danger' id='feedback-form-success'><strong>Success!</strong><br><p>"+s_response.success+"</p><a href='/show-students'><button class='btn btn-success'>Ok</button></a></div>");
                     // $(".modal-footer").css("display":"none");
                   }
               }

        });
    
    
 });
   $(document).on("click", ".block-student", function () {
        
    // var assignment_id = $(this).data('id');
    // var user_id = $(this).data('idid');
    //   console.log($(this).data('idid'));
    var uid=<?php echo json_encode($id);?>;
    
     var data=
              {
                uid: uid
              };  
      
       $.ajax({
                url: '/block-student',
                type: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                async: false,
                success: function(s_response)
                {
                     var linkFormation="<a href='/student-profile/"+uid+"'><button class='btn btn-success'>Ok</button></a>";
                     if(s_response.success == 'true')
                     {
                     $(".on-block-response").addClass("on-block-response message-success").append("<div class='info-boxes confirmation-message alert-success' id='feedback-form-success'><strong>Success!</strong><br><p>"+s_response.message+"</p>"+linkFormation+"</div>");
                     $(".modal-footer").css("display","none");
                     $(".modal-body").css("display","none");
                     } 
                     else 
                     {   
                     $(".on-block-response").addClass("on-block-response message-success").append("<div class='info-boxes confirmation-message alert-success' id='feedback-form-success'><strong>Success!</strong><br><p>"+s_response.message+"</p>"+linkFormation+"</div>");
                     $(".modal-footer").css("display","none");
                     $(".modal-body").css("display","none");
                     }
                     
               }

    
    });
    });  
     $(document).on("click", ".unblock-student", function () {
        
    // var assignment_id = $(this).data('id');
    // var user_id = $(this).data('idid');
    //   console.log($(this).data('idid'));
    var uid=<?php echo json_encode($id);?>;
    
     var data=
              {
                uid: uid
              };  
      
       $.ajax({
                url: '/unblock-student',
                type: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                async: false,
                success: function(s_response)
                {
                    
                     var linkFormation="<a href='/student-profile/"+uid+"'><button class='btn btn-success'>Ok</button></a>";
                     if(s_response.success == 'true')
                     {
                     $(".on-unblock-response").addClass("on-unblock-response message-success").append("<div class='info-boxes confirmation-message alert-success' id='feedback-form-success'><strong>Success!</strong><br><p>"+s_response.message+"</p>"+linkFormation+"</div>");
                     $(".modal-footer").css("display","none");
                     $(".modal-body").css("display","none");
                     } 
                     else 
                     {   
                     $(".on-unblock-response").addClass("on-unblock-response message-success").append("<div class='info-boxes confirmation-message alert-success' id='feedback-form-success'><strong>Success!</strong><br><p>"+s_response.message+"</p>"+linkFormation+"</div>");
                     $(".modal-footer").css("display","none");
                     $(".modal-body").css("display","none");
                     }
            }
        });
     });
 </script>   
@include('admin.dashboard-layout.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

