@include('dashboard-layout.dashboard-header')
@include('dashboard-layout.dashboard-left-sidebar')
  <!-- @if ($errors->has("body")||$errors->has("subject")||$errors->has("email_from")||$errors->has("email_to"))<p style="color:red;">See below the error for the required field</p>@endif -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: url(../dashboard_theme/dist/img/2.jpg) no-repeat center center fixed; background-size:cover;min-height:500px; ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>
   
  

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $global_count_of_assignment}}</h3>

              <p>Assignments</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="https://www.bestassignmentexperts.com/my-assignment" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $global_wallet_amount}}<sup style="font-size: 20px"></sup></h3>

              <p>Wallet</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="https://www.bestassignmentexperts.com/my-wallet" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$no_of_available_solution}}</h3>

              <p>No of Available Solution/s</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>>

            </div><a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
         <!--  <div class="col-lg-3 col-xs-6">
        
          <div class="small-box bg-red">
            <div class="inner">
              <h3>No Offers</h3>

              <p>Offers</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>-->
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- <div class="small-box">

        <div class="box box-info col-sm-6">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>
            </div>
           
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Assignment ID</th>
                    <th>Status</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                     @if($assignmentData!=null)
                    @foreach($assignmentData as $data)
                  <tr>
                     @if($data->status=='pending') 
                    <td><a href="/assignment-details/{{$data->assignment_id}}">{{$controller::getAssignmentAsOrderId($data->assignment_id,Auth::user()->id)}}</a></td>
                    <td><span class="label label-warning">Pending</span></td>
                    @elseif($data->status=='processing')
                    <td><a href="/assignment-details/{{$data->assignment_id}}">{{$controller::getAssignmentAsOrderId($data->assignment_id,Auth::user()->id)}}</a></td>
                    <td><span class="label label-info">Processing</span></td>
                    @elseif($data->status=='solution_ready')
                     <td><a href="/assignment-details/{{$data->assignment_id}}">{{$controller::getAssignmentAsOrderId($data->assignment_id,Auth::user()->id)}}</a></td>
                    <td><span class="label label-info bg-light-blue">Solution Ready</span></td>
                    @else
                    <td><a href="/assignment-details/{{$data->assignment_id}}">{{$controller::getAssignmentAsOrderId($data->assignment_id,Auth::user()->id)}}</a></td>
                    <td><span class="label label-success">Completed</span></td>
                    @endif
                    
                    
                  </tr>
                  @endforeach
                  @else
                   You have not placed any order yet
                  @endif
                  </tbody>
                  
                </table>
              </div>
             
            </div>
          
            <div class="box-footer clearfix">
              <a href="/add-assignment" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="/my-assignment" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
          
          </div>
           
      </div> -->
      <div class="row">
      
        <section class="col-lg-7 connectedSortable">
         <div class="small-box">

        <div class="box box-info col-sm-6">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>
            </div>
           
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Assignment ID</th>
                    <th>Status</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                     @if($assignmentData!=null)
                    @foreach($assignmentData as $data)
                  <tr>
                     @if($data->status=='pending') 
                    <td><a href="/assignment-details/{{$data->assignment_id}}">{{$controller::getAssignmentAsOrderId($data->assignment_id,Auth::user()->id)}}</a></td>
                    <td><span class="label label-warning">Pending</span></td>
                    @elseif($data->status=='processing')
                    <td><a href="/assignment-details/{{$data->assignment_id}}">{{$controller::getAssignmentAsOrderId($data->assignment_id,Auth::user()->id)}}</a></td>
                    <td><span class="label label-info">Processing</span></td>
                    @elseif($data->status=='solution_ready')
                     <td><a href="/assignment-details/{{$data->assignment_id}}">{{$controller::getAssignmentAsOrderId($data->assignment_id,Auth::user()->id)}}</a></td>
                    <td><span class="label label-info bg-light-blue">Solution Ready</span></td>
                    @else
                    <td><a href="/assignment-details/{{$data->assignment_id}}">{{$controller::getAssignmentAsOrderId($data->assignment_id,Auth::user()->id)}}</a></td>
                    <td><span class="label label-success">Completed</span></td>
                    @endif
                    
                    
                  </tr>
                  @endforeach
                  @else
                   <div style="background: rgb(221, 75, 57);color: #fff; padding: 10px;font-weight: 500;font-size: large;   border-radius: 5px;">
                   You have not placed any order yet</div>
                  @endif
                  </tbody>
                  
                </table>
              </div>
             
            </div>
          
            <div class="box-footer clearfix">
              <a href="/add-assignment" class="btn btn-sm btn-info btn-flat pull-left" style="width: 140px;padding: 10px; font-size: 17px;">Place New Order</a>
              <a href="/my-assignment" class="btn btn-sm btn-default btn-flat pull-right" style="width: 140px;padding: 10px; font-size: 17px;">View All Orders</a>
            </div>
          
          </div>
           
      </div>


        <!-- 


          
        
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Chat</h3>
            </div>
            <div class="box-body chat" id="chat-box">
             
              <div class="item">
                <img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                    Mike Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
                <div class="attachment">
                  <h4>Attachments:</h4>

                  <p class="filename">
                    Theme-thumbnail-image.jpg
                  </p>

                  <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                  </div>
                </div>
               
              </div>
              
              <div class="item">
                <img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                    Alexander Pierce
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div>
            
              <div class="item">
                <img src="../dashboard_theme/dist/img/graduate.png" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                    Susan Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div>
             
            </div>
            
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message...">

                <div class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div> -->
         



        </section>
        <section class="col-lg-5 connectedSortable">
        
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
             
            </div>
            <div class="box-body">
              <form action="/send-quick-mail" method="GET">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email to: support@assignmentrelief.com" value="Admin" readonly>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" value="">
                </div>
                   <div class="form-group">
                  <input type="file" class="form-control" name="file" placeholder="Attach File" value="">
                </div>
                <div>
                    @if ($errors->has("body"))<p style="color:red;">{!!$errors->first("body")!!}</p>@endif
                  <textarea class="textarea" name="body" placeholder="Drop your message here" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="message"></textarea>
                </div>
              
            
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send Mail 
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
         </form>
                </div>
          </div>

        </section>
       
      </div>
   

    </section>
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('dashboard-layout.dashboard-footer')