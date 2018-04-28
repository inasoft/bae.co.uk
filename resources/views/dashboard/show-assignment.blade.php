@include('dashboard-layout.dashboard-header')



@include('dashboard-layout.dashboard-left-sidebar')

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" style="background: url(dashboard_theme/dist/img/2.jpg) no-repeat center center fixed; background-size:cover; min-height:500px;">

    <!-- Content Header (Page header) -->
        @if(Session::has('my-assignment'))
                                     <div class="fade_show" id="confirm"><span>{{session()->get('my-assignment')}}</span></div>
         @endif
	 @if(Session::has('payment-cancelled'))
                                     <div class="fade_show alert-danger bt-color-3" id="confirm" style="color: #18bb7c; font-weight: bold;"><span>{{session()->get('payment-cancelled')}}</span></div>
         @endif
    <!-- Main content -->
        @if(Session::has('checkout_false'))
        <div class="fade_show alert-danger bt-color-3" id="confirm" style="color: #18bb7c; font-weight: bold;"><span>{{session()->get('checkout_false')}}</span></div>
       {{Session::forget('checkout_false')}}
        @endif
        @if(Session::has('checkout_success'))
        <div class="fade_show alert-success bt-color-3" id="confirm" style="color: #18bb7c; font-weight: bold;"><span>{{session()->get('checkout_success')}}</span></div>
        {{Session::forget('checkout_success')}}
        @endif
    
    

    <section class="content">

      <div class="row">

          <div class="col-xs-12">

          <div class="box">

            <div class="box-header">

              <h3 class="box-title">All Submitted Assignments</h3>

            </div>

            <!-- /.box-header -->

            <div class="box-body"  style="overflow-x: auto;width:99%;">

              <table id="example1" class="table table-bordered table-striped">

                <thead>

                <tr>

                  <th>Submitted AssignmentId</th>

                  <th>Subject</th>

                  <th>Due Date</th>



                  <th>Reference</th>

                  <th>SubTotal</th>
                  <th>Click To Pay</th>
                  <th>Payment (Left)</th>
                  <th>Payment (Paid)</th>
              </tr>
              </thead>
              <tbody>
               @foreach($assignment_data as $data)
               <tr>
                 <td><a href="/assignment-details/{{$data['assignment_id']}}">{{$data['show_assignment_id']}}</a></td>
                  <td>{{$data['subject']}}</td>
                  <td>{{$data['due_date']}}</td>
                  <td>{{$data['reference_style']}}</td>
                  <td>{{$data['subtotal']}}</td>
                  @if($data['payment_left']==='0')
                  
                  <td><button type ="submit" class="btn btn-success disabled" disabled="">Payment Completed</button></td>
                  
                  @else
                  <td>
<!--                    <form action='/payment-order-submission/paynow'>-->

                      {{ Form::open(array('url'=>'payment-order-submission/paynow/','method'=>'GET')) }}
                    <!-- Rest of the form fields -->
                        {{ csrf_field() }}
                   
                   <input type="hidden" name ="assignment_id" value="{{$data['assignment_id']}}">
                    <button type ="submit" class="btn btn-primary">Pay ${{$data['payment_left']}} Now</button>
                    
                    {{ Form::close() }}  
<!--                    </form>-->
                  </td>
                  @endif
                  <td>{{$data['payment_left']}}</td>
                  <td>{{$data['payment_paid']}}</td>
               </tr>
                 @endforeach
          </tbody>
     </table>
    </div>
     <!-- /.box-body -->
    </div>
       <!-- /.box -->
     </div>
  <!-- /.col -->
    </div>
     <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- jQuery 2.2.3 -->
  {!! Html::script('dashboard_theme/plugins/jQuery/jquery-2.2.3.min.js') !!}
  {!! Html::script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') !!}
  {!! Html::script('dashboard_theme/bootstrap/js/bootstrap.min.js') !!}
  {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') !!}
  {!! Html::script('dashboard_theme/plugins/datatables/jquery.dataTables.min.js') !!}
  {!! Html::script('dashboard_theme/plugins/datatables/dataTables.bootstrap.min.js') !!}
  {!! Html::script('dashboard_theme/plugins/slimScroll/jquery.slimscroll.min.js') !!}
  {!! Html::script('dashboard_theme/plugins/fastclick/fastclick.js') !!}
<script>
  $(function () 
  {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

  });

</script>
<script>
 $(document).ready(function()
    {  
    $("#confirm").fadeOut(11000);
    });
  </script>
  
  <script>
$('.dropdown-toggle').dropdown();
</script>
 @include('dashboard-layout.dashboard-footer')



