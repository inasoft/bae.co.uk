<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>BestAssignmentExperts.com - How to contact us?</title>
<meta name="keywords" content="contact us | BestAssignmentExperts.com, reach us , "/>
<meta name="description" content="If you need online Academic help, Programming help or dissertation help services, you can reach us through email or phone"/>


<!-- page content -->
@include('layout.header')
	<div class="page-content woocommerce">
		<!-- map 
		<div class="container clear-fix">
			<div class="map wow fadeInUp">
				<div id="map" class="google-map"></div>
			</div>
		</div>
		 map -->
		   @if(Session::has('registration'))
                                     <div class='info-boxes confirmation-message' id="confirm" style="background: #f27c66"><span>{{session()->get('registration')}}</span></div>
                                     @endif
		<!-- contact form section -->
		<div class="grid-row clear-fix">
			<div class="grid-col-row">
			
	<div class="row">
				      <div class="col-sm-12 col-md-8 col-md-offset-2">
				    <form action="/register" method="post" id="form-signin" class="form-signin login-form">
				        				<h3> <span class="flaticon-house-key"></span> Register</h3>
					 <div class="col-md-12">
					    <div class="form-group">
					 <input type="text" name="name"  class="form-control" id="exampleInputNamexa" placeholder="Name">
					            								</div>
													        </div>
													    
			<div class="col-md-12">
					  <div class="form-group">
					   <input type="email" class="form-control" id="exampleInputEmailx" placeholder="Email">
					      </div>
													        </div>
													        <div class="col-md-12">
					            								<div class="form-group">
					            								    <input type="password" name="password" class="form-control" placeholder="Password">
					            								</div>
													        </div>
													        <div class="col-md-12">
					            								<div class="form-group">
					            								    <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password">
					            								</div>
													        </div>
													        <div class="col-md-12">
					  <div class="form-group">
					   <input type="text"  name="referral_code" class="form-control" id="exampleInputEmailx" placeholder="refercode">
					      </div>
													        <div class="col-md-12">
					            								<div class="form-group text-center">
					            						        	<button type="submit" class="btn btn-default ulockd-btn-thm2">Sign Up</button>
					            								</div>
													        </div>
													    
				        						        </form>
				        				      		</div>
				        				      	</div>
				
			</div>
		</div>
	

	</div>
	<!-- / page content -->
@include('layout.footer')
