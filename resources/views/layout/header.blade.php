<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->
<link rel="stylesheet" href="{{asset('main_theme/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('main_theme/css/style.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/animate.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/bootsnav.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/elegantIcons.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/fancyBox.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/flipclock.css')}}">

<link rel="stylesheet" href="{{('main_theme/css/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/hover.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/isotop.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/owl.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/responsive.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/slider.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/timecounter.css')}}">
<link rel="stylesheet" href="{{('main_theme/css/colors/default.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{('main_theme/css/responsive.css')}}">
<!-- Title -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>B</title>

</head>
<div class="wrapper">
    <div class="preloader">
        <div class="preloader_container"></div>
    </div>
     <div class="header-top">
        <div class="container">
            <div class="row">
            
                <div class="col-md-4">
                    <div class="welcm-ht text-center">
                        <a href="/" class="ulockd-main-logo"><img src="{{('main_theme/images/logo.png')}}" alt=""></a>
                    </div>
                </div>
            
                <div class="col-md-4">
                    <!--<div class="social-linked ulockd-mrgn1215">
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>-->
                </div>
            
                <div class="col-md-4">
                    <div class="welcm-ht text-right ulockd-mrgn1215">
                        <ul class="list-inline">
                            <!--<li>
                                <div class="dropdown lang-button text-center">
                                    <button class="dropbtn"><i class="fa fa-globe text-thm2"></i> Lang</button>
                                    <div class="dropdown-content">
                                        <a href="#"> <span><img src="main_theme/images/resource/english.jpg" alt=""></span> Engl</a>
                                        <a href="#"> <span><img src="main_theme/images/resource/franch.jpg" alt=""></span> Fren</a>
                                        <a href="#"> <span><img src="main_theme/images/resource/spanish.jpg" alt=""></span> Span</a>
                                    </div>
                                </div>
                            </li>-->
                            <li>
                                <a href="#" data-toggle="modal" data-target=".bs-example-modal-md" data-whatever="@mdo"><i class="fa fa-user text-thm2"></i> Sign In</a>
                                <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title text-center" id="exampleModalLabel">Login</h4>
                                                <p class="text-center">Sign in and choose your service to have access to all our service.</p>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-8 col-md-offset-2 text-center">
                                                        <form class="ulockd-login-form">
                                                            <h3><span class="flaticon-lock"></span> Login</h3>
                                                            <p>Enter username and password to login:</p>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" id="email" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Password">
                                                            </div>
                                                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Login to account</button>
                                                        </form>
                                                    </div>
                                                </div>  
                                            </div>
                                            <!-- modal footer start here-->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#"> | </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo"><i class="fa fa-edit text-thm2"></i> Sign Up</a>
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title text-center" id="exampleModalLabel">Register</h4>
                                                <p class="text-center">Sign in and choose your service to have access to all our service.</p>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-8 col-md-offset-2">
                                                        <form class="ulockd-reg-form text-center row">
                                                            <h3> <span class="flaticon-house-key"></span> Register</h3>
                                                            <p>Join our community today:</p>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleInputNamexa" placeholder="First Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="exampleInputNamexb" placeholder="Last Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" id="exampleInputEmailx" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control" placeholder="Password">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control" placeholder="Repeat password">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group text-center">
                                                                    <button type="submit" class="btn btn-default ulockd-btn-thm2">Sign Me Up</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxs-12 col-xs-5 col-sm-5 col-md-5">
                                                                <a href="#" class="btn btn-lg btn-primary btn-block color-white">Facebook</a>
                                                            </div>
                                                            <div class="col-xxs-12 col-xs-2 col-sm-2 col-md-2">
                                                                <a href="#">OR</a>
                                                            </div>
                                                            <div class="col-xxs-12 col-xs-5 col-sm-5 col-md-5">
                                                                <a href="#" class="btn btn-lg btn-info btn-block color-white">Google</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>  
                                            </div>
                                            <!-- modal footer start here-->
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <header class="header-nav">
        <div class="main-header-nav navbar-scrolltofixed">
            <div class="container">
                <nav class="navbar navbar-default bootsnav menu-style1">
                    <div class="container ulockd-pdng0">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pad330-md" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li><a href="/" class="active">Home</a>  </li>
                               <li><a href="/about-us">About</a>  </li>
                                <li><a href="/faq">Faq</a>  </li>
                                <li><a href="/blogs">Blog</a>  </li>
                                <li><a href="/contact-us">Contact</a>  </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/economics">Economic Assignment Help</a></li>
                                        <li><a href="/economics">Management Assignment Help</a></li>
                                        <li><a href="/economics">Finanace Assignment Help</a></li>
                                        <li><a href="/economics">Law Assignment Help</a></li>
                                        <li><a href="/economics">Programming Assignment Help</a></li>
                                        <li><a href="/economics">Assignment Help Uk</a></li>
                                    </ul>
                                  </li>
                            </ul>
                            <ul class="ulockd-quote-btn pull-right hidden-xs hidden-sm">
                                <li><a href="#" class="btn btn-lg ulockd-btn-thm2"> Place Order </a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
        </div>      
    </header>