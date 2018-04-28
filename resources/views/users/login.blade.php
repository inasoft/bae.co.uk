<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>Login with BestAssignmentExperts and Get Instant Assignment Help</title>
<meta name="description" content="Login with BestAssignmentExperts and Get Instant Essay Assignment Help">
 <link hreflang="en" media="all" type="text/css" rel="stylesheet" href="https://www.bestassignmentexperts.com/theme/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @include('layout.header')

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="/theme/css/login.css">


<style>   
header.only-color{
display:none!important;
} 
  
  footer{
    display:none!important;
  }
  
</style>  

  
    


  
  

  
  
  
  
  
  <!-- page content -->
  
  
  <div class="page-content container clear-fix cntnr">

    <div class="grid-col-row">
    
    
    <div class="grid-col grid-col-6">
    
    <div class="signup clearfix">
  <div class="left">
  
   <div class="bottom">
          <img src="../theme/img/images/sign-up.jpg" alt="sign-up" class="bottom_img"  style="width:100%">
        </div>
  
      <div class="top">
          <h1>Top Quality Assignment Help and Writing Service</h1>
            <hr>
          <p>Over 50,000 Satisfied Students, In-house team of 150 Ex-Professors for completing your project.</p>
      <a href="https://www.bestassignmentexperts.com/place-order">Order Now</a>
        </div>
       
    </div>
    <div class="left1x">
    </div>
</div>
    </div>
  
  <div class="grid-col grid-col-6">
        <!-- main content -->
        <main>
          <section class="clear-fix">
          
          <div class="log_h5">
          
          <h5><a href="https://www.bestassignmentexperts.com/"><i class="fa fa-arrow-circle-left"></i> Back To Home</a></h5>
          </div>
          
     @if(Session('user'))
                                <div class="alert alert-success"    id="my">
                                   <span  style="color:green;"> {{Session('user')}}</span>
                                </div>
                                @endif      
        
<div class="row" id="login-box">





  <div class="left1">
  
  <div class="login-block">
          <div class="logo">
            <img src="../theme/img/images/logo.jpg" data-at2x='../theme/img/images/logo.jpg' alt="Best Assignment Experts" class="logo_w">
            
          </div>      
                                     @if(Session::has('registration'))
                                     <div class='info-boxes confirmation-message' id="confirm"><span>{{session()->get('registration')}}</span></div>
                                     @endif
          <!-- <a href="#" class="facebook cws-button border-radius half-button">Facebook</a>
          <a href="#" class="twitter cws-button border-radius half-button">Twitter</a> -->
          
                                         {!! Html::ul($errors->all(), array('class'=>'alert alert-danger errors')) !!}
                                          <form action="<?=URL::to('/users/login')?>" method="post" id="form-signin" class="form-signin login-form">
                            
                                <div class="input-group form-group">
                                    <input type="text" class="form-control login-input" name="email" placeholder="example@gmail.com">
                                    <span class="input-icon">
                <i class="fa fa-user"></i>
              </span>
                                </div>
                                <div class="input-group form-group">
                                    <input type="password" class="form-control login-input" name="password" placeholder="Password">
                                    <span class="input-icon">
                <i class="fa fa-lock"></i>
              </span>
                                </div>
                            
                            
                                <p class="small">
                                    <a href="<?= URL::to('/password/email') ?>"><b>Forget Password ? </b></a>
                                    
                                </p>   
                            
                                <button type="submit" class="button-fullwidth cws-button bt-color-3 border-radius cws_buttonx">LOGIN</button>
                                <h1 style="font-family: 'Raleway'">
<a href="<?= URL::to('/users/register') ?>" class="button-fullwidth cws-button bt-color-3 border-radius alt">REGISTER</a></h1>
                            
                        </form>
                    </div>
  </div>
  

  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <a href="/auth/facebook" target="_blank"><button class="social-signin facebook">Log in with facebook</button></a>
     <a href="/auth/google" target="_blank"><button class="social-signin google">Log in with Google+</button></a>
  </div>
  <div class="or">OR</div>
  
  

  </div>        
          
          </section>
          
        
          
        </main>
        <!-- / main content -->
      </div>
  
      
      
      
    </div>
  </div>
  
    
  <main class="main1">
  
    <section class="fullwidth-background bg-2">
    
    
    
      <div class="grid-row">
      
        <div class="login-block">
          <div class="logo">
              <img src="../theme/img/images/logo.jpg" data-at2x='../theme/img/images/logo.jpg' alt="Best Assignment Experts">
            
          </div>
           @if(Session::has('registration'))
                                     <div class='info-boxes confirmation-message' id="confirm"><span>{{session()->get('registration')}}</span></div>
                                     @endif
          
          
            {!! Html::ul($errors->all(), array('class'=>'alert alert-danger errors')) !!}
          
          <a href="/auth/facebook" target="_blank"class="facebook cws-button border-radius half-button">Facebook</a>
          <a href="/auth/google"  target="_blank"class="Google cws-button border-radius half-button">Google+</a>
          <div class="clear-both"></div>
          <div class="login-or">
            <hr class="hr-or">
            <span class="span-or">or</span>
          </div>
          <form   action="<?=URL::to('/users/login')?>"  method="post" id="form-signin" class="login-form">
            <div class="form-group">
              <input type="text" class="login-input"  name="email" placeholder="example@gmail.com">
              <span class="input-icon">
                <i class="fa fa-user"></i>
              </span>
            </div>
            <div class="form-group">
              <input type="password" class="login-input" name="password" placeholder="Password">
              <span class="input-icon">
                <i class="fa fa-lock"></i>
              </span>
            </div>
            <p class="small">
               <a href="<?= URL::to('/password/email') ?>"><b>Forget Password ? </b></a>
            </p>
            <button type="submit" class="button-fullwidth cws-button bt-color-3 border-radius">LOGIN</button>
                               
<a href="<?= URL::to('/users/register') ?>" class="button-fullwidth cws-button bt-color-3 border-radius alt">REGISTER</a>
          </form>
        </div>
      </div>
      <div class="log_h51">
          
          <h5><a href="https://www.bestassignmentexperts.com/"><i class="fa fa-arrow-circle-left"></i> Back To Home</a></h5>
          </div>
    </section>
  </main>

  
   @include('layout.footer')
  
  
  
  <script>       
    $(document).ready(function()
    {  
    $("#confirm").fadeOut(11000);
    });
    </script>

   <script>
        $(document).ready(function(){
$('#my').fadeOut(10000);
});
    </script>
  
  
  
  
  
  
  
  