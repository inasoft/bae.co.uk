@include('dashboard-layout.dashboard-header')

@include('dashboard-layout.dashboard-left-sidebar')



 <style>
 
 .text-center{
	 font-size: 3em;
    text-align: center;
    text-shadow: 0 -3px 0 #333, 0 6px 8px rgba(0,0,0,.4), 0 9px 10px rgba(0,0,0,.15), 0 30px 10px rgba(0,0,0,.18), 0 15px 10px rgba(0,0,0,.21);
	}
 
  .outer{
      padding: 2em 1em;
      box-shadow: 5px 5px 5px #d9d9d9;
  }

  .headerbar{
      background: #f39c12 !important;
      color: #ffffff !important;
      position: relative;
      margin-bottom: 1.5em;
      margin-right: -2.5em;
      margin-left: -2.5em;
      box-shadow: 5px 5px 5px #d9d9d9;
  }
  .headerbar:before{
      content: "";
      position: absolute;
      border-bottom: 1.5em solid #333;
      border-left: 1.5em solid transparent;
      left: 0;
      top: -1.5em;
      
  }
  .headerbar:after{
      content: "";
      position: absolute;
      border-top: 1.5em solid #333;
      border-right: 1.5em solid transparent;
      right: 0;
      bottom: -1.5em;
  }

  .headerbar:hover {
    transform:scale(1,1.1);
  }
  </style>
  

<div class="content-wrapper" style="background: url(dashboard_theme/dist/img/refrel.jpg) no-repeat center center fixed; background-size:cover; max-height: 500px ">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1>

            

            <br>



        </h1>


    </section>



    <!-- Main content -->

    <section class="content">
	
	

        <div class="col-md-6 col-md-offset-6" style="float:right;">

            <!-- Widget: user widget style 1 -->

            <div class="box box-widget widget-user panel panel-default outer ">

                <!-- Add the bg color to the header using any of the bg-* classes -->
				
				<div class="panel-heading headerbar">
                       <h3 class="text-center">Refer & Earn</h3>
                    </div>

                <div class="widget-user-header bg-aqua-active panel-body text-justify" style="height:auto;">

                    <center>

                         <h1>  <strong class="widget-user-username">Share this referral code with your friends. You will get $5 and $10 will be credited into your friends account. Once he/she complete the order </strong></h1>

                        <h1 class="widget-user-desc" style="text-shadow :1px 2px 1px #dd4b39; color:#000;">{!! $referral_code!!}</h1>

                        <br>

                    </center>

                </div>

                <div class="widget-user-image" style="top:120px;">



                   

                </div>

                <div class="box-footer">

                    <div class="row">

                        <div class="col-sm-4 border-right">

                            <div class="description-block">

                                <h5 class="description-header">{{$global_referral}}</h5>

                                <span class="description-text">Referrals</span>

                            </div>

                            <!-- /.description-block -->

                        </div>

                        <!-- /.col -->

                        <div class="col-sm-4 border-right">

                            <div class="description-block">

                                <h5 class="description-header">{{$global_count_of_assignment}}</h5>

                                <span class="description-text">Assignments</span>

                            </div>

                            <!-- /.description-block -->

                        </div>

                        <!-- /.col -->

                        <div class="col-sm-4">

                            <div class="description-block">

                                <h5 class="description-header">{{$global_wallet_amount}}</h5>

                                <span class="description-text">Wallet</span>

                            </div>

                            <!-- /.description-block -->

                        </div>

                        <!-- /.col -->

                    </div>

                    <!-- /.row -->

                </div>

            </div>

            <!-- /.widget-user -->

        </div>

        <!-- /.row -->

    </section>

    <!-- /.content -->

</div>



<!-- Control Sidebar -->

@include('dashboard-layout.dashboard-footer')
