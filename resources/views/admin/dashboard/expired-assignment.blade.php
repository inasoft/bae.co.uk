@include('admin.dashboard-layout.header')   



<div class="container dash_margin" style="margin-top:5%; margin-bottom:5%;">

      <!-- CONTENT -->
	<div class="row" style="background: #fff; padding: 15px;">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4><strong>All Expired Assignments</strong></h4>
    <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#dt1').dataTable({
        "lengthMenu": [[5, 20, 50, -1], [5, 20, 50, "All"]]
    });
            });
  </script>
   @if(Session::has('assign-expert'))
  <div class="fade_show" id="confirm"><span>{{session()->get('assign-expert')}}</span></div>
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
            
          </tr>
        </thead>
        <tbody>
            @if($all_expired_assignment)
          
            @foreach($all_expired_assignment as $data)
            <tr class="odd gradeX">
                <td><a href="/show-assignment-details/{{$data['assignment_id']}}"><button type="button" class="btn btn-warning"><button type="button" class="btn btn-warning">{{$idFormation->getAssignmentAsOrderId($data['assignment_id'],$data['uid'])}}</button></button></a></td>
                @if($data['order_id'])
                <td><a href="/order-details/{{$data['order_id']}}"><button type="button" class="btn btn-success">O Id</button><button type="button" class="btn btn-warning">{{$data['order_id']}}</button></a></td>
                @else
                <td><a href="/order-details/{{$data['order_id']}}"><button type="button" class="btn btn-success disabled">O Id</button><button type="button" class="btn btn-warning disabled">{{$data['order_id']}}</button></a></td>
                @endif
            <td>{{$data['subject']}}</td>
            <td>{{$data['total_amount']}}</td>
            <td class="center">{{Auth::User()->currency?Auth::User()->currency:'$'}}{{$data['payment_paid']}}, {{Auth::User()->currency?Auth::User()->currency:'$'}}{{$data['payment_left']}}</td>
            <td class="center">{{$data['due_date']}}</td>
            <td>{{$data['description']?$data['description']:'No description is available'}}</td>
            <td>{{$data['reference_style']?$data['reference_style']:'No reference style is chosen by user'}}</td>
            @if($data['assigned_to']=='')
            <td><button data-toggle="modal" data-target="#assignExpertModal" data-id="{{$data['assignment_id']}}"data-request="/expired-assignments" class="btn btn-success manually-asssign-expert">Assign Expert Manually</button></td>
            @else
            <td><a href="/assign-expert/{{$data['assignment_id']}}"><button type="button" class="btn btn-warning disabled" disabled>Expert is assigned</button></a></td>
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
	
		</div></div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	

      	
      	<br>
   @include('admin.dashboard-layout.footer')