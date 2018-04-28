    

@include('dashboard-layout.dashboard-header')
@include('dashboard-layout.dashboard-left-sidebar')  
<!-- Content Wrapper. Contains page content -->
 
 <style>
 .profile_pge{
	 border-top: 4px solid #3c8dbc;
	 background-color: #fff;
	 padding: 20px;
 }
 </style>

  <div class="content-wrapper" style="background: url(../dashboard_theme/dist/img/1.jpg) no-repeat center center fixed; background-size:cover;min-height:500px; ">
    
   @if(Session::has('update_profile'))
  <div style="padding: 12.5px; font-size: x-large; " class="fade_show alert-success" id="update-profiles"><span>{{session()->get('update_profile')}}</span></div>

  @endif
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
<!--              <img class="profile-user-img img-responsive img-circle" src="../dashboard_theme/dist/img/graduate.png" alt="User profile picture">-->
              <img class="profile-user-img img-responsive img-circle" src="{{asset(Auth::user()->profile_image)}}" class="img-responsive img-thumbnail" alt="User profile picture" width="115" height="115">
              <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Wallet Amount</b> 
                  <a class="pull-right badge bg-blue">{{$global_wallet_amount}}</a>
                </li>
                <li class="list-group-item">
                  <b>Assignments</b> <a class="pull-right badge bg-aqua">{{$global_count_of_assignment}}</a>
                </li>
                <li class="list-group-item">
                  <b>Total Referrals</b> <a class="pull-right badge bg-red">{{$global_referral}}</a>
                </li>
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education Qualification</strong>
               <p class="text-muted">
                {!! $results->education_qualification !!}
              </p>
              <strong><i class="fa fa-book margin-r-5"></i> Skills</strong>

              <p class="text-muted">
                {!! $results->about_me !!}
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i>Location</strong>

              <p class="text-muted">{!! $results->address !!}</p>

              <hr>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
        
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
              <h1><span class="info-box-number">Profile Settings</span></h1>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          
                 <form action="/update-profile" method="POST" class="form-horizontal profile_pge" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>
 
                    <div class="col-sm-9">
                        <input type="text" name ="name" value="{!! $results->name !!}" class="form-control" id="inputName" placeholder="Name">
                    </div>
 
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" name ="email" value="{!! $results->email !!}" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
<!--                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Current Password</label>

                    <div class="col-sm-9">
                      <input type="password" name="old_password" value="{!! $results->password !!}"class="form-control" id="inputName" placeholder="Current Password" name="profile_current_password">
                    </div>
                  </div>-->
                   <div class="form-group">
                    <label for="inputName"  class="col-sm-3 control-label">New Password</label>

                    <div class="col-sm-9">
                      <input type="password" name="new_password" class="form-control" id="inputName" placeholder="New Password" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Phone Number</label>

                    <div class="col-sm-9">
                      <input type="number" name="phone_number" value="{!! $results->contact_no !!}" class="form-control" id="inputName" placeholder="Phone Number" >
                    </div>

                  </div>
                  <div class="form-group">
                        <label  for="inputProfilePicture"  class="col-sm-3 control-label">Profile Picture</label>
                        <div class="col-sm-9">
                          <input type="file" name="profile_picture" class="form-control" accept="image/*">
                        </div>
                      </div>
                  <div class="form-group">
                    <label for="inputSkills"  class="col-sm-3 control-label">About Me</label>

                    <div class="col-sm-9">
                      <input type="text" name = "about_me" value="{!! $results->about_me !!}" class="form-control" id="inputSkills" placeholder="Introduction" >
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="education"  class="col-sm-3 control-label">Qualification</label>

                    <div class="col-sm-9">
                      <input type="text" placeholder="Bachelor of Engineering, Computer Science & Engineering" name = "qualification" value="{!! $results->education_qualification !!}" class="form-control" id="inputSkills" >
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label for="address"  class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input type="text" name = "address" value="{!! $results->address !!}" class="form-control" id="inputSkills" placeholder="353 West 48ERth Street, Top Floor, New York, NY 123456, United States">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-9">
                    <center>
                      <button type="submit" class="btn btn-danger">Update Profile</button>
                      </center>
                    </div>






                  </div>
                </form>
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
   $(document).ready(function()
    {  
    $("#update-profiles").fadeOut(5500);
    });
    </script>

  @include('dashboard-layout.dashboard-footer')
     
