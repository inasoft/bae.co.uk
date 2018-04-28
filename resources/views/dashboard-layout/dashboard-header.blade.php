<head>

  

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Best Assignment Experts|Dashboard</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.6 -->

<!--  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

   Font Awesome 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

   Ionicons 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

   Theme style -->

<!--  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">

  <link rel="stylesheet" href="plugins/morris/morris.css">

  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">

  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">

  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">-->



        {!! Html::style('dashboard_theme/bootstrap/css/bootstrap.min.css') !!}

        {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') !!}

        {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') !!}



        {!! Html::style('dashboard_theme/dist/css/AdminLTE.min.css') !!}

        {!! Html::style('dashboard_theme/dist/css/skins/_all-skins.min.css') !!}

        {!! Html::style('dashboard_theme/plugins/iCheck/flat/blue.css') !!}

        {!! Html::style('dashboard_theme/plugins/morris/morris.css') !!}

        {!! Html::style('dashboard_theme/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}

        {!! Html::style('dashboard_theme/plugins/datepicker/datepicker3.css') !!}

        {!! Html::style('dashboard_theme/plugins/datatables/dataTables.bootstrap.css') !!}

        {!! Html::style('dashboard_theme/plugins/daterangepicker/daterangepicker.css') !!}

        {!! Html::style('dashboard_theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}

  

  <!-- Hotjar Tracking Code for https://bestassignmentexperts.com -->
  <style type="text/css">

   .customFile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.fileLabel{
  cursor: pointer;
  background: #ff9800;
  padding: 8px 14px;
      margin-top: 15px;
}
    .customFile + label.fileLabel {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: black;
    display: inline-block;
    cursor: pointer;
}

.customFile:focus + label.fileLabel,
.customFile + label.fileLabel:hover {
    background-color: red;
    cursor: pointer;
}
  </style>
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:446211,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

  

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">



  <header class="main-header">

    <!-- Logo -->

    <a href="/users/dashboard" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>A</b>LT</span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>Student</b> Dashboard</span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

        <span class="sr-only">Toggle navigation</span>

      </a>



      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

          

          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img src="{{asset(Auth::user()->profile_image)}}" class="img-circle" alt="User Image" height="17" width="25";">
              <!-- {{ HTML::image('dashboard_theme/dist/img/user2-160x160.jpg') }} -->

              <span class="hidden-xs">{!! Auth::user()->name!!}</span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">

              <img src="{{asset(Auth::user()->profile_image)}}" class="img-circle" alt="User Image">


                <p>

                 {!! Auth::user()->name!!}

                  <small>{!! Auth::user()->name!!}</small>

                </p>

              </li>

              <!-- Menu Body -->

              <!-- <li class="user-body">

                <div class="row">

                  <div class="col-xs-4 text-center">

                    <a href="#">Followers</a>

                  </div>

                  <div class="col-xs-4 text-center">

                    <a href="#">Sales</a>

                  </div>

                  <div class="col-xs-4 text-center">

                    <a href="#">Friends</a>

                  </div>

                </div>

                

              </li> -->

              <!-- Menu Footer-->

              <li class="user-footer">

                <div class="pull-left">

                  <a href="/my-profile" class="btn btn-default btn-flat">Profile</a>

                </div>

                <div class="pull-right">

                  <a href="/users/logout" class="btn btn-default btn-flat">Logout</a>

                </div>

              </li>

            </ul>

          </li>

          <!-- Control Sidebar Toggle Button -->

          <li style="display:none;">

            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>

          </li>

        </ul>

      </div>

    </nav>
 <div id="comm100-button-136"></div>
<script type="text/javascript">
  var Comm100API=Comm100API||{};(function(t){function e(e){var a=document.createElement("script"),c=document.getElementsByTagName("script")[0];a.type="text/javascript",a.async=!0,a.src=e+t.site_id,c.parentNode.insertBefore(a,c)}t.chat_buttons=t.chat_buttons||[],t.chat_buttons.push({code_plan:136,div_id:"comm100-button-136"}),t.site_id=223133,t.main_code_plan=136,e("https://chatserver.comm100.com/livechat.ashx?siteId="),setTimeout(function(){t.loaded||e("https://hostedmax.comm100.com/chatserver/livechat.ashx?siteId=")},5e3)})(Comm100API||{})
</script>
<style>

#comm100-float-button-2{
        background: url(/theme/img/chat.gif) 0% 0% no-repeat scroll transparent !important;
    left: 1100px !important;
    top: 602px !important;
    bottom:0px !important;
    width: 220px !important;


}
</style>
  </header>
     {!! Html::script('dashboard_theme/plugins/jQuery/jquery-2.2.3.min.js') !!}
     {!! Html::script('dashboard_theme/plugins/datepicker/bootstrap-datepicker.js') !!}
