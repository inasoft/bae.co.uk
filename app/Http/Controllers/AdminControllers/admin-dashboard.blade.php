@include('admin.dashboard-layout.header')
    <div class="container" style="margin-top:5%; margin-bottom:5%;">
 @if(Session::has('show_on_dashboard'))
  <div class="fade_show alert alert-warning" id="confirm"><span>{{session()->get('show_on_dashboard')}}</span></div>
  @endif
  @if(Session::has('click-completed'))
  <div class="fade_show alert alert-warning" id="confirm"><span>{{session()->get('click-completed')}}</span></div>
  @endif
   @if(Session::has('mail-send'))
  <div class="fade_show alert alert-warning" id="confirm"><span>{{session()->get('mail-send')}}</span></div>
  @endif
   @if(Session::has('rework_request_sent'))
   <div class="fade_show alert alert-success" id="confirm"><span>{{session()->get('rework_request_sent')}}</span></div>
   @endif
    @if(Session::has('rework_request_error'))
   <div class="fade_show alert alert-success" id="confirm"><span>{{session()->get('rework_request_error')}}</span></div>
   @endif
  
        
	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3"> 
        <a href="/on-my-profile/{{Auth::user()->id}}">
      		<div class="dash-unit">
	      		<dtitle>User Profile</dtitle>
	      		<hr>
				<div class="thumbnail">
					<img src="../dashboard_theme/dist/img/graduate.png" alt="Best Assignment Experts" class="img-circle" style="width: 100px">
				</div><!-- /thumbnail -->
				<h1>{{Auth::user()->name}}</h1>
				<h3></h3>
				<br>
<!--					<div class="info-user">
						<span aria-hidden="true" class="li_user fs1"></span>
						<span aria-hidden="true" class="li_settings fs1"></span>
						<span aria-hidden="true" class="li_mail fs1"></span>
						<span aria-hidden="true" class="li_key fs1"></span>
					</div>-->
				</div>
				</a>
        </div>

      <!-- DONUT CHART BLOCK -->
        
      
        <div class="col-sm-3 col-lg-3">
        <a href ="/show-completed-assignments">
      		<div class="dash-unit">
		 	<dtitle>Completed Assignments(Paid)</dtitle>
		  		<hr>
	        	<div id="load"></div>
	        	<h2>{{$percentage_completed_assignment}}%</h2>
			</div>
			</a>
        </div>



        <div class="col-sm-3 col-lg-3">
        <a href ="/show-only-completed-assignments">
      		<div class="dash-unit">
		 	<dtitle>Completed Assignments</dtitle>
		  		<hr>
	        	<div id="load"></div>
	        	<h2>{{$percentage_completed_assignment}}%</h2>
			</div>
			</a>
        </div>
        
        

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
            
            <a href="/show-priority-assignments">
      		<div class="dash-unit">
		  		<dtitle>Priority Assignments</dtitle>
		  		<hr>
	        	<div id="space"></div>
	        	<h2>{{$percentage_priority_assignment}}%</h2>
			</div>
                </a>
        </div>
        
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
	      		<dtitle>Assignments</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><bold>{{$assignment_request}}</bold> | <a href="/assignment-request"><ok>Assignment Requests</ok></a></p>
					<br>
					<p><bold>{{$pending_assignments}}</bold> | <a href="/pending-assignments">Pending Assignments</a></p>
					<br>
					<p><bold>{{$expired_assignments}}</bold> | <a href="/expired-assignments"><bad>Expired Assignments</bad></a></p>
					<br>
					<p><img src="../admin-dashboard/images/up-small.png" alt="Best Assignment Experts"> </p>

				</div>

			</div>

     
      		

        </div>
      </div><!-- /row -->
      
      
	  <!-- SECOND ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
      		<div class="dash-unit">
      		<dtitle>Expert Assigned Assignments</dtitle>
      		<hr>
      		<div class="cont">
					
					<br>
					<p><bold></bold> | <a href="/expert-rework-assignments">Rework Assignments</a></p>
					<br>
					<br>
					<p><img src="../admin-dashboard/images/up-small.png" alt="Best Assignment Experts"> </p>

	       </div>
		</div><!-- /dash-unit -->
    </div><!-- /span3 -->

	  <div class="col-sm-3 col-lg-3">
	   <!-- LIVE VISITORS BLOCK --> 

	   <div class="half-unit">
                  
	      		<dtitle>Add Money to Wallet</dtitle>
	      		<hr>
	      		<div class="cont">

	      		<button data-toggle="modal" data-target="#showWalletModal" style="background: transparent;border: none;" >
                       <p><bold><i class="fa fa-dollar add-money" aria-hidden="true"></i> Add Money</bold></p>
                        </button>      
	      		</div>
       	</div>    
      		<a href="/show-coupons"><div class="half-unit">
	      		<dtitle>COUPONS</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>{{$get_coupons}}</bold></p>
      			<!-- <p><img src="admin-dashboard/images/up-small.png" alt=""> 412 Max. | <img src="admin-dashboard/images/down-small.png" alt=""> 89 Min.</p> -->
	      		</div>
      		</div></a>
      		
	  <!-- PAGE VIEWS BLOCK --> 
	       
			</div>
	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
        <a href="/create-coupon"><div class="half-unit">
	      		<dtitle>CREATE COUPONS</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>Create Coupons</bold></p>
      			<p><img src="../admin-dashboard/images/up-small.png" alt="Best Assignment Experts"></p>
	      		</div>
      		</div></a>
      		
	 
          <a href="/create-user"><div class="half-unit">
	      		<dtitle>Create Users </dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>Create Admin, Expert Or Student</bold></p>
      			
	      		</div>
              </div></a>
        
      		
        </div>
        
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-3">

      		
			<a href="/show-experts"><div class="half-unit">
	      		<dtitle>Expert</dtitle>
	      		<hr>
		      		<div class="cont">
      			<p><bold>{{$no_of_experts}} Expert</bold></p>
      			<p><img src="../admin-dashboard/images/up-small.png" alt="Best Assignment Experts"> {{$new_expert_request}} Expert Requests   </p>
	      		</div>
			</div></a>

			<a href="/show-students"><div class="half-unit">
	      		<dtitle>Students</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><bold>{{$no_of_students}} Students</bold></p>
      			<p><img src="../admin-dashboard/images/up-small.png" alt="Best Assignment Experts"> {{$new_student_request}} New Students   </p>
	      		</div>
			</div></a>
        </div>
      </div><!-- /row -->
     
 
	  <!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
      	

      	<div class="col-sm-6 col-lg-6">
            


				<div class="dash-unit">
	      		<dtitle>Fast Contact</dtitle>
	      		<hr>
	      		<div class="cont">
                	<form action="/send-mail-by-admin" method="POST" id="contact">
                    	<input type="text" id="contactname" name="email" placeholder="Email" style=" margin-top: -4%;
                        width: 94%;
                        margin: auto;
                        margin-top: -4%;
                        margin-bottom: 1%;
                        ">
                    	<input type="text" id="subject" name="subject" placeholder="Subject" style="
                            width: 94%;
                            margin: auto;
                            margin-bottom: 1%;
                            padding: 0px;
                        ">
                    	<div class="textarea-container"><textarea id="message" name="message" placeholder="Message" style="
                            width: 100%;
                            margin: auto;
                            height: 119px;
                            color: #000;
                        "></textarea></div>
                    	<input type="submit" id="submit" name="submit" value="Send" style="
    width: 95%;
">
                    </form>
				</div>
				</div>
	     
      		
      	</div>

      	<div class="col-sm-3 col-lg-3">
	      <div class="dash-unit">
	      		<dtitle>Sample Content</dtitle>
	      		<hr>
	      		<br>
	      		<br>
	            <div class="cont">
                        <p><a href="/create-samples"><bold>Create Samples</bold></a></p>
                        <div class="cont">
                            <p><a href="/samples"><bold>Manage Samples</bold></a></p>
      			
	      		</div>
      			
	      		</div>
			</div>
      		
      	</div>

	  <!-- LATEST NEWS BLOCK -->     
      	<div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Latest News</dtitle>
	      		<hr>
				<div class="info-user">
					<span aria-hidden="true" class="li_news fs2"></span>
				</div>
				<br>
      			<div class="text">
      				<p><b></b> Currently, There is no latest news.</p>
      				<p><grey></grey></p>
      			</div>
      		</div>
      	</div>
      </div><!-- /row -->
      
     
      
 	  <!-- FOURTH ROW OF BLOCKS -->     
		<div class="row">

 	  
			
			<div class="col-sm-3 col-lg-3">

 	  		<!-- LAST USER BLOCK -->  
				<div class="half-unit">
	      		<dtitle>Last Registered User</dtitle>
	      		<hr>
	      			<div class="cont2" data-toggle="modal" data-target="#myModal">
	      				<img src="../dashboard_theme/dist/img/graduate.png" alt="user" style="width:50px;">
	      				<br>
	      				<br>
	      				<p>{{$last_register_user?$last_register_user->name:'No user has registerd yet'}}</p>
	      				
	      			</div>
				</div>				
      		</div>
                    
                    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Last Ragister User Information</h4>
      </div>
      <div class="modal-body">
          <p>ID: {{$last_register_user?$last_register_user->id:'No user has registerd yet'}}</p>
                    <p>NAME:   {{$last_register_user?$last_register_user->name:'No user has registerd yet'}}</p>
                           <p>EMAIL:   {{$last_register_user?$last_register_user->email:'No user has registerd yet'}}</p>
      <p>Contact:   {{$last_register_user?$last_register_user->contact_no:'No user has registerd yet'}}</p>
                <p>ExpertName:   {{$last_register_user?$last_register_user->expert_name:'No user has registerd yet'}}</p>
                       <p>Status:   {{$last_register_user?$last_register_user->status:'No user has registerd yet'}}</p>
                                                <p>AssignmentId:   {{$last_register_user?$last_register_user->assignment_id:'No user has registerd yet'}}</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

				
			<div class="col-sm-3 col-lg-3">	
			<div class="half-unit">
                   <a href="/plan-with-currency">
	      		<dtitle>Currency Plans Calculator</dtitle>
	      		<hr>
	      		<div class="cont">
                       <p><bold><i class="fa fa-inr" aria-hidden="true"></i> 14.744</bold></p>
                      
	      		</div>
	      		</a>
			</div>
			</div>
			  <div class="col-sm-3 col-lg-3">
	  
	  <!-- BARS CHART - lineandbars.js file -->     
      		<a href="/paypal-link-generator"><div class="half-unit">
	      		<dtitle>Generate Paypal Link</dtitle>
	      		<hr>
	      		<div class="cont">
	      		 <div class="info-aapl">
	      		 
			        <h3>PAYPAL</h3>
			      
			      </div>
			      </div>
      		</div></a>
      		</div>

	  <!-- TO DO LIST --> 
	       <div class="col-sm-3 col-lg-3">
      		<!-- <div class="half-unit">
	      		<dtitle>To Do List</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><bold>{{$get_pending_task}}</bold> | Pending Tasks</p>
				</div>
		             <div class="progress">
				        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;"><span class="sr-only">60% Complete</span>
					        
				        </div>
				     </div>
      		</div> -->
      	</div>

 	  		

		</div><!--/row -->
     
    
        
     <div class="modal fade" id="showWalletModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Money to Wallet</h4>
            </div>
             <div class="show-message-content">
                 
             </div>
            <div class="modal-body">
                <input type="text" name="uid" id="user-id" placeholder="Enter use id of user to add money" style="width: 100%;height: 45px;color: #000;">
                <input type="number" name="wallet_amount" id="wallet-amount" placeholder="Enter Amount to Add" style="width: 50%;height: 40px;">

             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add-wallet-money">Add Money</button>
             </div>
          </div>
    </div>
</div>
    
    
	</div> <!-- /container -->

	@include('admin.dashboard-layout.footer')
	<script type="text/javascript">
		/*** First Chart in Dashboard page ***/
	var completed_assignments_percentage=<?php echo json_encode(floatval(Session::get('completed_assignments_percentage')));?>;
        var completed_assignments_remaining_percentage=100.0-completed_assignments_percentage;
	var priority_assignments_percentage=<?php echo json_encode(floatval(Session::get('priority_assignments_percentage')));?>;
        var priority_assignments_remaining_percentage=100.0-priority_assignments_percentage;
        console.log(completed_assignments_percentage);
        console.log(priority_assignments_percentage);
        console.log(completed_assignments_remaining_percentage);

	$(document).ready(function() 
        {
		info = new Highcharts.Chart({
			chart: {
				renderTo: 'load',
				margin: [0, 0, 0, 0],
				backgroundColor: null,
                plotBackgroundColor: 'none',
							
			},
			
			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y +' %';
						
				} 	
			},
			credits: {
                 enabled: false
            },
		    series: [
				{
				borderWidth: 2,
				borderColor: '#F1F3EB',
				shadow: false,	
				type: 'pie',
				name: 'Income',
				innerSize: '75%',
				data: [
					{ name: 'load percentage', y: completed_assignments_percentage, color: '#b2c831' },
					{ name: 'rest', y: completed_assignments_remaining_percentage, color: '#3d3d3d' }
				],
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
		
	});

/*** second Chart in Dashboard page ***/

	$(document).ready(function() {
		info = new Highcharts.Chart({
			chart: {
				renderTo: 'space',
				margin: [0, 0, 0, 0],
				backgroundColor: null,
                plotBackgroundColor: 'none',
							
			},
			
			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y +' %';
						
				} 	
			},
			credits: {
                 enabled: false
            },
		    series: [
				{
				borderWidth: 2,
				borderColor: '#F1F3EB',
				shadow: false,	
				type: 'pie',
				name: 'SiteInfo',
				innerSize: '75%',
				data: [
					{ name: 'Used', y: priority_assignments_percentage, color: '#fa1d2d' },
					{ name: 'Rest', y: priority_assignments_remaining_percentage, color: '#3d3d3d' }
				],
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
		
	});
	</script>
        <script>
       $(document).on("click", ".add-money", function () {
          alert("add");
          console.log("opened");
       });
       </script>
        
        
    <script>
            $(document).on("click", ".add-wallet-money", function () {
                
              var data=
              {
                 uid:           $(".modal-body #user-id").val(),
                 wallet_amount: $(".modal-body #wallet-amount").val(),
                 type:          ""
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
                  
                 console.log(data);
                 console.log(s_response);
                
                    if(s_response.success == 'true')
                    {        
                            
                      
                            $(".show-message-content").addClass("show-message-content message-success").append("<div class='info-boxes alert-warning confirmation-message' id='feedback-form-success'><strong>Success!</strong><br><p>"+s_response.message+"</p><button class='btn btn-primary confirm-wallet'>Confirm</button></div>");
                            $(".modal-footer").css("display","none");
                            $(".modal-body").css("display","none");
                             $(document).on("click", ".confirm-wallet ", function ()     
                             {
                                 data.type="success";
                                 console.log(data);
                                 
                                 
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
                                           $(".confirmation-message").css("display","none");                                          
                                        }
                                        else
                                        {
                                           $(".show-message-content").addClass("show-message-content").append("<div class='info-boxes confirmation-message alert-danger' id='feedback-form-success'><strong>Oops!</strong><br><p>"+s_response.message+"</p><button class='btn btn-primary confirm-wallet'>Confirm</button></div>");                                         }   
                                                                                   
                                    }
                                    
        
                                 });
                                 
                                 
                                 
                                 
                                 
                                 
                             });
    
                                                   
                   } 
                 else 
                   {   
                         //$(".show-message-content").removeClass("show-message-content");
                         $(".show-message-content").addClass("show-message-content message-error").append("<div class='message_box error-box alert-danger'><div class='message_box_header'>Oops!</div><p> "+s_response.message+ "</p></div>");
                         $(".show-message-content").delay(500).hide(500, function(){
                         $(this).text("").fadeIn(600);
                        // $(".show-message-content").css("display","none");
                         
                       });
                 }
               }

        });
      
      });
 </script>  
 <script>
   $(document).ready(function()
    {  
    $("#confirm").fadeOut(8500);
    });
    </script> 

