      @include('admin.dashboard-layout.header')
       <style type="text/css">
	   .dash_height{
	   height: 220px !important;}
	   
	   .dash_img{
		   width: 70px !important;
		   border: 1px solid rgba(255,255,255,.15);}
	   
	   .dash_font{
		   font-size: 14px !important;}
		   
		    .dash_user_font{
		   font-size: 15px !important;}
		   
		   .dash-unit hr {
    border: 0;
    border-top: 1px solid rgba(255,255,255,.15);
    border-top-style: dashed;
        margin-top: 5px;
}

	   </style>


	   <div class="container" style="margin-top:5%; margin-bottom:5%; min-height: 450px;">
            <!-- FIRST ROW OF BLOCKS -->
            <div class="row">

                <!-- ******************repeat this div -->
                @foreach($expert_profile_data as $expert)
                <div class="col-sm-2 col-lg-2">
                    <a href="/expert-profile/{{$expert->id}}"> 
                    <div class="dash-unit dash_height">
                        <dtitle class="dash_font">
                            User Profile
                        </dtitle>
                        <hr>
                            <div class="thumbnail">
                                <img alt="Marcel Newman" class="img-circle dash_img" src="../dashboard_theme/dist/img/graduate.png">
                                </img>
                            </div>
                            <!-- /thumbnail -->
                            <h1 class="dash_user_font">
                               {{$expert->name}}
                            </h1>
                            <h3>
                               
                            </h3>
                            <br>
                               <!--  <div class="info-user">
                                    <span aria-hidden="true" class="li_user fs1">
                                    </span>
                                    <span aria-hidden="true" class="li_settings fs1">
                                    </span>
                                    <span aria-hidden="true" class="li_mail fs1">
                                    </span>
                                    <span aria-hidden="true" class="li_key fs1">
                                    </span>
                                </div> -->
                            </br>
                        </hr>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
            <!--/row -->
        </div>
        <!-- /container -->
        
        <!-- ************************************************88include Footer -->
@include('admin.dashboard-layout.footer')