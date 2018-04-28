@include('admin.dashboard-layout.header')   
<div class="container" style="margin-top:5%; margin-bottom:5%; min-height: 450px;">

      <!-- CONTENT -->
	<div class="row" style="background: #fff; padding: 15px;">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4><strong>All Completed Assignments</strong></h4>
    <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#dt1').dataTable({
        "lengthMenu": [[5, 20, 50, -1], [5, 20, 50, "All"]]
    });
            });
  </script>
  @if($completed_assignment_data)
		<table class="display" id="dt1">
        <thead>
          <tr>
             
            <th>ASSIGNMENT ID</th>
            <th>ORDER ID</th>
            <th>SUBJECT</th>
            <th>PAYMENT(Paid, Left)</th>
            <th>DUE DATE</th>
            <th>EXPERT</th>
            <th>DESCRIPTION</th>
            <th>RATINGS</th>
            <th>STATUS</th>
            <th>Send Rework Request</th>
            
          </tr>
        </thead>
        <tbody>
            
          
            @foreach($completed_assignment_data as $data)
            <tr class="odd gradeX">
             <td><a href="/show-assignment-details/{{$data->assignment_id}}"><button type="button" class="btn btn-warning">{{$idFormation->getAssignmentAsOrderId($data->assignment_id,$data->uid)}}</button></a></td>
            <td>{{$data->order_id}}</td>
            <td>{{$data->subject}}</td>
            <td class="center">{{Auth::User()->currency?Auth::User()->currency:'$'}}{{$data->payment_paid}}, {{Auth::User()->currency?Auth::User()->currency:'$'}}{{$data->payment_left}}</td>
            <td class="center">{{date('d-m-y',$data->due_date)}}</td>
            <td class="center">{{App\User::find($data->assigned_to)?App\User::find($data->assigned_to)->name:''}}</td>
            <td>{{$data->description?$data->description:'No Description is available'}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->status}}</td>
            <td><a href="/send-rework-request/{{$data->assignment_id}}"><button type="button" class="btn btn-success">Assign Rework</button></a></td>
          </tr>
          @endforeach
          
        
        </tbody>
      </table><!--/END SECOND TABLE -->
	  @else
          
          <h4>  No Records Found Yet </h4>
          
          @endif
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	

      	
      	<br>
   @include('admin.dashboard-layout.footer')