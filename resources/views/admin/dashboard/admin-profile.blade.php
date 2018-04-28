@include('admin.dashboard-layout.header')




    <div class="container" style="margin-top:5%; margin-bottom:5%;">
        <div class="row">

        	<div class="col-lg-6">
        		
        		<div class="register-info-wraper">
        			<div id="register-info">
        				<div class="cont2">
        					<div class="thumbnail">
								<img src="../dashboard_theme/dist/img/graduate.png"  alt="Best Assignment Experts" class="img-circle user_profile">
							</div><!-- /thumbnail -->
							<h2>{{$name}}</h2>
        				</div>
        				<div class="row">
        					<div class="col-lg-6">
        						<div class="cont3">
        							<p><ok>Name:</ok>{{$name}}</p>
        							<p><ok>Mail:</ok> {{$email}}</p>
        							<p><ok>Phone:</ok>{{$mob}}</p>
        						  <p><ok>Registered:</ok> {{$registered_on}}</p>
        						</div>
        					</div>
        					<div class="col-lg-6">
        						<div class="cont3">
        						
        						<p><ok>Last Login:</ok>{{$last_login}}</p>
        						<!--<p><ok>Assignments</ok> {{$assignment_count}}</p>
        						<p><ok>Wallet</ok>{{$wallet_amount}}</p>
                    <p><ok>Referrals</ok>{{$referrals}}</p>-->
        						</div>
        					</div>
        				</div><!-- /inner row -->
						<hr>
						<div class="cont2">
							<h2>Choose Your Option</h2>
						</div>
						<br>
							<div class="info-user2">
								
								
								<button data-toggle="modal" data-target="#walletModal" class="fa fa-money"></button>
								<button data-toggle="modal" data-target="#blockModal" class="fa fa-ban"></button>
                <button data-toggle="modal" data-target="#deleteModal" class="fa fa-trash"></button>
								
							</div>

        				
        			</div>
        		</div>

        	</div>

        	<div class="col-sm-6 col-lg-6">
        		<div id="register-wraper">
        		    <form id="register-form" class="form" method="POST" action="/student-profile/{{$id}}">
        		        <legend>Profile</legend>
						<hr>
        		    
        		        <div class="body">
        		        	
    		        		<label for="profile_name">Name</label>
    		        		<input name="profile_name" class="input-huge" type="text" value="{{$name}}" required="">
        		        
        		        	<label for="profile_email">Email</label>
        		        	<input name="profile_email" class="input-huge" type="email" value="{{$email}}" required="">
        		        	
        		        	<label for="profile_password">Password</label>
        		        	<input  name="profile_password" class="input-huge" type="password" value="{{$password}}" required="">
        		        	
        		        	<label for="profile_phone">Phone</label>
        		        	<input name="profile_phone" class="input-huge" type="number" value="{{$mob}}" >

                      <label for="profile_image">Profile Picture</label>
                      <input name="profile_image" class="input-huge" type="file" value="{{$image}}" accept="image/*">

                      <label for="profile_about">About Myself</label>
                      <textarea name="profile_about" class="input-huge"  value="{{$about_me}}"></textarea>

        		        </div>
        		    
        		        <div class="footer">
        		            <button type="submit" class="btn btn-success">Save</button>
        		        </div>
        		    </form>
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
      <div class="modal-body">
        <div id="wallet-wraper">
                <form id="wallet-form" class="form" methbod="POST" action="">
                    
                    <div class="body">
                      
                    <label for="wallet_amount">Amount</label>
                    <input name="wallet_amount" class="input-huge" type="number" value="" required="">
                    
                    </div>
                </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
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
      <div class="modal-body">
        Do you really want to block user ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Block</button>
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
      <div class="modal-body">
        Do you really want to delete user ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>

@include('admin.dashboard-layout.footer')

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

 -->
