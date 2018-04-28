@include('admin.dashboard-layout.header')   
<div class="container" style="margin-top:5%; margin-bottom:5%;">

      <!-- CONTENT -->
	<div class="row" style="background: #fff; padding: 15px; min-height: 450px;">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4 style="text-align: center;font-weight: 900; font-size: 25px; text-shadow: 1px 1px 1px red;"><strong>Pending Assignments</strong></h4>
    <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#dt1').dataTable({
        "lengthMenu": [[5, 20, 50, -1], [5, 20, 50, "All"]]
    });
            });
  </script>
   @if(Session::has('assign-expert'))
  <div class="fade_show alert-warning" id="confirm" style="padding-top: 10px; background: orange"><span>{{session()->get('assign-expert')}}</span></div>
  @endif
 
  <div style="overflow-x:auto;width: 100%;">
		<table class="display" id="dt1">
        <thead>
          <tr>
             
            <th>ASSIGNMENT ID</th>
            <th>ORDER ID</th>
            <th>SUBJECT</th>
            <th>TOTAL AMOUNT</th>
            <th>PAYMENT(PAID,LEFT)</th>
            <th>DUE DATE</th>
            <th>DESCRIPTION</th>
            <th>REFERENCE STYLE</th>
            <th>MANUALLY ASSIGN EXPERT</th>
            <th>SOLUTION AVAILABILITY</th>
            
          </tr>
        </thead>
        <tbody>
            @if($pending_assignment_data)
          
            @foreach($pending_assignment_data as $data)
            <tr class="odd gradeX">
                <td><a href="/show-assignment-details/{{$data['assignment_id']}}"><button type="button" class="btn btn-warning">{{$idFormation->getAssignmentAsOrderId($data['assignment_id'],$data['uid'])}}</button></a></td>
                @if($data['order_id'])
                <td><a href="/order-details/{{$data['order_id']}}"><button type="button" class="btn btn-success">O Id</button>{{$data['order_id']}}</a></td>
                @else
                <td><a href="/order-details/{{$data['order_id']}}"><button type="button" class="btn btn-success disabled">O Id</button>{{$data['order_id']}}</a></td>
                @endif
            <td>{{$data['subject']}}</td>
            <td>{{$data['total_amount']}}</td>
            <td class="center">{{Auth::User()->currency?Auth::User()->currency:'$'}}{{$data['payment_paid']}}, {{Auth::User()->currency?Auth::User()->currency:'$'}}{{$data['payment_left']}}</td>
            <td class="center">{{$data['due_date']}}</td>
            <td>{{$data['description']?$data['description']:'No description is chosen by user'}}</td>
            <td>{{$data['reference_style']?$data['reference_style']:'No reference style is chosen by user'}}</td>
            @if($data['assigned_to']=='')
            <td><button data-toggle="modal" data-target="#assignExpertModal" data-id="{{$data['assignment_id']}}" data-request="/pending-assignments"  class="btn btn-success manually-asssign-expert">Assign Expert Manually</button></td>
            @else
            <td><a href="/assign-expert/{{$data['assignment_id']}}"><button type="button" class="btn btn-warning disabled" disabled> Expert is assigned</button></a></td>
            @endif            
            @if($data['solution_available']!=1 && $data['status']=='completed')
            <td style="background:greenyellow">{{$data['status']}}</td>
            @elseif ($data['solution_available']==1 && $data['status']!='completed')
            <td><form action='/complete-assignment'><input type = "hidden" name="assignment_id" value="{{$data['assignment_id']}}"><button class="btn btn-info ">Mark Complete</button></form>
            <a href="/send-rework-request/{{$data['assignment_id']}}"><button class="btn btn-danger ">Assign Rework</button></a>
            </td>
            
            @else
            <td style="background:lightgoldenrodyellow">Waiting for solution</td>
            @endif
          </tr>
          @endforeach
          
          @else
          {
           No Records Found Yet
          }
          @endif
        </tbody>
      </table><!--/END SECOND TABLE -->
	
	
	</div>
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	

      	
      	<br>
   @include('admin.dashboard-layout.footer')
