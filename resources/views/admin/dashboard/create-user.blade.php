<!doctype html>
@include('admin.dashboard-layout.header')
    <div class="container" style="margin-top:5%; margin-bottom:5%;">
        <div class="row">

        	<div class="col-lg-6">
        		
        		<div class="register-info-wraper">
        			<div id="register-info">
        				<div class="cont2">
        					<div class="thumbnail">
								<img src="../dashboard_theme/dist/img/graduate.png" style="width: 100px" alt="Best Assignment Experts" class="img-circle user_profile">
							</div><!-- /thumbnail -->
							<h2>Marcel Newman</h2>
        				</div>
        				<div class="row">
        					<div class="col-lg-6">
        						<div class="cont3">
        							<p><ok>Username:</ok> BASICOH</p>
        							<p><ok>Mail:</ok> hola@basicoh.com</p>
        							<p><ok>Location:</ok> Madrid, Spain</p>
        							<p><ok>Address:</ok> Blahblah Ave. 879</p>
        						</div>
        					</div>
        					<div class="col-lg-6">
        						<div class="cont3">
        						<p><ok>Registered:</ok> April 9, 2010</p>
        						<p><ok>Last Login:</ok> January 29, 2013</p>
        						<p><ok>Phone:</ok> +34 619 663553</p>
        						<p><ok>Mobile</ok> +34 603 093384</p>
        						</div>
        					</div>
        				</div><!-- /inner row -->
						<hr>
						<div class="cont2">
							<h2>Choose Your Option</h2>
						</div>
						<br>
							<div class="info-user2">
								<span aria-hidden="true" class="li_user fs1"></span>
								<span aria-hidden="true" class="li_settings fs1"></span>
								<span aria-hidden="true" class="li_mail fs1"></span>
								<span aria-hidden="true" class="li_key fs1"></span>
								<span aria-hidden="true" class="li_lock fs1"></span>
								<span aria-hidden="true" class="li_pen fs1"></span>
							</div>

        				
        			</div>
        		</div>

        	</div>
 
 
        	<div class="col-sm-6 col-lg-6">
        		<div id="register-wraper">
        		    <form id="register-form" class="form" method="POST" action="/create-user">
        		        <legend>Create User</legend>
						<hr>
        		    
        		        <div class="body">
        		        	<!-- first name -->
                                        @if ($errors->has("name"))<p style="color:red;">{!!$errors->first("name")!!}
                                        </p>@endif
    		        		<label for="name">Name</label>
    		        		<input name="name" class="input-huge" type="text">
        		        	<!-- email -->
                                       @if ($errors->has("email"))<p style="color:red;">{!!$errors->first("email")!!}
                                        </p>@endif
        		        	<label>E-mail</label>
        		        	<input name="email" class="input-huge" type="text">
                      <label for="phone">Phone</label>
                      <input name="phone" class="input-huge" type="text">
        		        	<!-- password -->
                                        @if ($errors->has("password"))<p style="color:red;">{!!$errors->first("password")!!}
                                        </p>@endif
        		        	<label>Password</label>
        		        	<input class="input-huge" type="text" name="password">
                      <!-- <label>Role</label> -->
                      @if ($errors->has("role"))<p style="color:red;">{!!$errors->first("role")!!}
                                        </p>@endif
                      <p>Role</p>
                       
                      <input  type="radio" name="role" value="admin">
                      <label for="student">Admin</label>
                      
                      <input  type="radio" name="role" value="expert">
                      <label for="admin">Expert</label>
                      
                      <input  type="radio" name="role" value="student">
                      <label for="expert">Student</label>
                      
        		        </div>
        		    
        		        <div class="footer">
        		          
        		            <button type="submit" class="btn btn-success">Register</button>
        		        </div>
        		    </form>
        		</div>
        	</div>

        </div>
    </div>

	@include('admin.dashboard-layout.footer')