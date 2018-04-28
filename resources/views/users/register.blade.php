<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>Join to Avail Best Assignment Services | Best Assignment Experts</title>
<meta name="description" content="If you are worried of Assignments then register then join Best Assignment Experts">
@include('layout.header')

<main>
		<section class="fullwidth-background bg-2">
			<div class="grid-row">
				<div class="login-block">
					<div class="logo">
						<img src="../theme/img/images/logo.jpg" data-at2x='../theme/img/images/logo.jpg' alt="Best Assignment Experts" style="width: 250px;">
						
					</div>
                                      @if(Session::has('registration'))
                                     <div class='info-boxes confirmation-message' id="confirm" style="background: #f27c66"><span>{{session()->get('registration')}}</span></div>
                                     @endif
                                    {!! Html::ul($errors->all(), array('class'=>'error
s')) !!}                               {!! Form::open(array('url' => 'users/register','clas
s'=>'form-signin login-form')) !!}
					<form action="users/register" method="post" id="form-signin" class="form-signin login-form">
						<div class="form-group">
                                                    {!! Form::text('name', null, array('class' => 'form­c
ontrol login-input','placeholder' => 'Name')) !!}
							
							<span class="input-icon">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<div class="form-group">
							{!! Form::text('email', null, array('class' => 'form­
control login-input','placeholder' => 'Email')) !!}
							<span class="input-icon">
								<i class="fa fa-envelope-o"></i>
							</span>
						</div>
						<div class="form-group">
                                                     {!! Form::password('password', array('class' => 'for
m­control login-input', 'placeholder' => 'Password')) !!}
							<span class="input-icon">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<div class="form-group">
                                                    {!! Form::password('password_confirmation',['clas
s'=>'form­control login-input' ,'placeholder'=>'Confirm Password']) !!}
							<span class="input-icon">
								<i class="fa fa-lock"></i>
							</span>
						</div>
                                            
                                            	<div class="form-group">
                                                    {!! Form::text('referral_code', null, array('class' => 'form­c
ontrol login-input','placeholder' => 'Referal Code (Optional)')) !!}
							
							<span class="input-icon">
								<i class="fa fa-group"></i>
							</span>
						</div>
                                            
                                            
                                            {!! Form::submit('Sign Up' , array('class' => 'button-fullwidth cws-button bt-color-3 border-radius')) !!}
                                <h1 style="font-family: 'Raleway'"><a href="<?= URL::to('/users/login') ?>" class="button-fullwidth cws-button bt-color-3 border-radius alt">LOGIN</a></h1>
					{!! Form::close() !!}
				</div>
			</div>
		</section>
	</main>

@include('layout.footer')
 <script>       
    $(document).ready(function()
    {  
    $("#confirm").fadeOut(15000);
    });
    </script>
