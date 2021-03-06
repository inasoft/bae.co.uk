@include('admin.dashboard-layout.header')   
<div class="container" style="margin-top:5%; margin-bottom:5%; min-height: 450px;">

      <!-- CONTENT -->
	<div class="row" style="background: #fff; padding: 15px;">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4><strong>Rework Request Sent Assignments</strong></h4>
    <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#dt1').dataTable({
        "lengthMenu": [[5, 20, 50, -1], [5, 20, 50, "All"]]
    });
            });
  </script>
  
      @if(count($rework_asssignment))
		<table class="display" id="dt1">
        <thead>
          <tr>
             
            <th>ASSIGNMENT ID</th>
            <th>SUBJECT</th>
            <th>DUE DATE</th>
            <th>REWORK REQUEST SENT TO</th>
            <th>DESCRIPTION</th>
            <th>STATUS</th>
            <th>MARK AS COMPLETE</th>
            
            
          </tr>
        </thead>
        <tbody>
        
          
            @foreach($rework_asssignment as $data)
            <tr class="odd gradeX">
             <td><a href="/show-assignment-details/{{$data->assignment_id}}"><button type="button" class="btn btn-warning">{{$idFormation->getAssignmentAsOrderId($data->assignment_id,$data->uid)}}</button></a></td>
             <td>{{$data->subject}}</td>
             <td class="center">{{date('d-m-y',$data->due_date)}}</td>
            <td class="center">{{App\User::find($data->assigned_to)?App\User::find($data->assigned_to)->name:''}}</td>
            <td>{{$data->description?$data->description:'No Description is available'}}</td>
            <td>Rework request is sent</td>
            <td><form action='/complete-assignment'><input type = "hidden" name="assignment_id" value="{{$data->assignment_id}}"><button class="btn btn-info ">Mark Complete</button></form>
             
           </tr>
          @endforeach
          
         
        </tbody>
      </table><!--/END SECOND TABLE -->
	 @else
         
         <h4>No Records Found Yet</h4>
         
          @endif
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	

      	
      	<br>
   @include('admin.dashboard-layout.footer')