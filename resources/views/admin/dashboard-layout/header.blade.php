<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Admin|Dashbaord</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

       {!! Html::style('admin-dashboard/bootstrap/css/bootstrap.min.css') !!}
       {!! Html::style('admin-dashboard/css/main.css') !!}
       {!! Html::style('admin-dashboard/css/table.css') !!}
       {!! Html::style('admin-dashboard/css/font-style.css') !!}
       {!! Html::style('admin-dashboard/css/flexslider.css') !!}
       {!! Html::style('admin-dashboard/css/main.css') !!}
       {!! Html::style('admin-dashboard/css/main.css') !!}
       {!! Html::style('admin-dashboard/css/register.css') !!}
    
       {!! Html::script('admin-dashboard/js/jquery.js') !!}
              {!! Html::style('admin-dashboard/js/datatables/jquery.dataTables.css') !!}

       {!! Html::script('admin-dashboard/js/datatables/jquery.dataTables.js') !!}
       {!! Html::script('admin-dashboard/bootstrap/js/bootstrap.min.js') !!}
       {!! Html::script('admin-dashboard/js/lineandbars.js') !!}
       {!! Html::script('admin-dashboard/js/dash-charts.js') !!}
       {!! Html::script('admin-dashboard/js/gauge.js') !!}
       {!! Html::script('admin-dashboard/js/noty/jquery.noty.js') !!}
       {!! Html::script('admin-dashboard/js/noty/layouts/top.js') !!}
       {!! Html::script('admin-dashboard/js/noty/layouts/topLeft.js') !!}
       {!! Html::script('admin-dashboard/js/noty/layouts/topRight.js') !!}
       {!! Html::script('admin-dashboard/js/noty/layouts/topCenter.js') !!}
       {!! Html::script('admin-dashboard/js/noty/themes/default.js') !!}
       {!! Html::script('https://code.highcharts.com/highcharts.js') !!}
       {!! Html::script('admin-dashboard/js/jquery.flexslider.js') !!}
       {!! Html::script('admin-dashboard/js/admin.js') !!}
       
    <style type="text/css">
      body {
        padding-top: 60px;
      }

.nav>li>a {
    padding: 21px;
    font-size: 16px;
    font-weight: 700;
}

    </style>
    
    <!-- Showing Popup Model Code-->
    <div class="modal fade" id="assignExpertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Assign Expert</h4>
      </div>
      <div class="modal-body">
         @if($global_available_experts!=''||$global_available_experts!=null||!empty($global_available_experts)) 
        <form name="assignexpertForm" id="get_form" method="POST" action="/assign-expert-manually">
        
        <small>Assign Expert for Assignment Id</small>
        <input type="text" class="show-id" name="assignment-id" id="assignment-id" value="" readonly />
        <input type="hidden" class="show-id" name="page-request" id="page-request" value="" />
        <label for="assignexpert">Select Expert to which you want to assign Assignment</label>
        <br>
        <select name="select-for-expert-assign" style="width: 30%;height: 30px;">
            
            <option>--Select--</option>
             
             @foreach($global_available_experts as $expert)
            
             <option  value="{{$expert->expert_id}}" >{{$expert->name}}</option>
            @endforeach
         </select>
         @else
          No Experts are available at this time
         @endif
        
        
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="form_submit()" class="btn btn-primary">Assign</button>
      </div>
    </div>
  </div>
</div>
    
  <!-- Script Code for Model SHow -->  
   <script>
    $(document).on("click", ".manually-asssign-expert", function () {
        
    // var assignment_id = $(this).data('id');
     var assignment_id = $(this).data('id');
     var page_request_from= $(this).data('request');
     $(".modal-body #assignment-id").val(assignment_id);
     $(".modal-body #page-request").val(page_request_from);
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
function form_submit() {
    document.getElementById("get_form").submit();
   }   
  </script>  
  
 <!-- End of Script Code for Model SHow --> 
<!--Added Code --> 
    
  <!--End of Showing Popup Model Code-->  
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });  });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>    
  </head>
  <body>
  
    <!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container" style="margin-top: 1%">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/users/dashboard"><img src="../theme/img/images/logo.jpg" alt="" style=" max-width: 170px; margin-top: -15px;margin-left: -100px;"> </a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <!-- <li class="active"><a href="/users/dashboard"><i class="fa fa-home"></i> Home</a></li> -->

              <li><a href="/order-details-for-admin"><i class="fa fa-book"></i> Orders</a></li>
              @if(Auth::user())
                @if(Auth::user()->email=='aksuhana@gmail.com' || Auth::user()->email=='bestassignmentexperts@gmail.com'|| Auth::user()->email=='syedriyazzaidi@gmail.com')
               <li><a href="/my-chat" target="_blank"><i class="fa fa-comments"></i> Chat</a></li>
                @endif
              @endif
              <li><a href="/users/logout"><i class="fa fa-lock"></i> Logout</a></li>
              
              <li> <form action="/search-order" method="get" class="form-padding"> 
                    {{ csrf_field() }}
                    <div >
                        <input  id="value" type="text" name="search_orderid" class="form-control" />
                    </div>
                    <div class="search-button">
                        <button style="" type="submit" id="tablesearch" class="btn btn-info">Search OrderId</button>
                    </div>
                </form>
              </li>
              <li> <form action="/search-admin-student-all" method="get" class="form-padding"> 
                    {{ csrf_field() }}
                    <div>
                        <input  id="value" type="text" name="search_student" class="form-control" />
                    </div>
                    <div class="search-button">
                        <button style="" type="submit" id="tablesearch" class="btn btn-info">Search Student </button>
                    </div>
                </form>
              </li>
             
              <li> <form action="/search-admin-student-by-id/" method="get" class="form-padding"> 
                    {{ csrf_field() }}
                    <div >
                        <input  id="value" type="text" name="search_student_by_id" class="form-control" />
                    </div>
                    <div class="search-button">
                        <button style="" type="submit" id="tablesearch" class="btn btn-info">Search Student By Id</button>
                    </div>
                </form>
              </li>
              <li> <form action="/search-admin-expert" method="get" class="form-padding"> 
                    {{ csrf_field() }}
                    <div>
                        <input  id="value" type="text" name="search_expert" class="form-control" />
                    </div>
                    <div class="search-button">
                        <button style="" type="submit" id="tablesearch" class="btn btn-info">Search Expert</button>
                    </div>
                </form>
              </li>
 
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>