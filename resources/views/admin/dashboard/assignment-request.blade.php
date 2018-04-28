@include('admin.dashboard-layout.header')   
<div class="container" style="margin-top:5%; margin-bottom:5%;">

      <!-- CONTENT -->
	<div class="row" style="
    background: #fff;
    padding: 15px;
">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4><strong>Assignment Requests</strong></h4>
    <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#dt1').dataTable( {
        "lengthMenu": [[5, 20, 50, -1], [5, 20, 50, "All"]]
    } );

            });
  </script>
  </div>
  @if(Session::has('assign-expert'))
  <div class="fade_show alert-success" id="update-request" style="padding: 20px;margin-top: 40px;margin-bottom: 10px;"><span>{{session()->get('assign-expert')}}</span></div>
  @endif
  
		<table class="display" id="dt1" style="overflow-x:auto;width: 100%;border-collapse: collapse;">
        <thead>
          <tr>
             
            <th>ASSIGNMENT ID</th>
            <th>SUBJECT</th>
            <th>TOTAL AMOUNT</th>
            <th>SUBMITTED DATE</th>
            <th>DUE DATE</th>
            <th>DESCRIPTION</th>
            <th>REFERENCE STYLE</th>
            <th>MANUALLY ASSIGN EXPERT</th>
            
          </tr>
        </thead>
        <tbody>
            @if($assignment_request_data)
          
            @foreach($assignment_request_data as $data)
            <tr class="odd gradeX">
            <td><a href="/show-assignment-details/{{$data->assignment_id}}"><button type="button" class="btn btn-warning">{{$idFormation->getAssignmentAsOrderId($data->assignment_id,$data->uid)}}</button></a></td>
            <td>{{$data->subject}}</td>
            <td>{{$data->total_amount}}</td>
            <td class="center">{{$data->submitted_date?date('d-m-y',$data->submitted_date):''}}</td>
            <td class="center">{{$data->due_date?date('d-m-y',$data->due_date):''}}</td>
            <td>{{$data->description?$data->description:'No further description is available'}}</td>
            <td>{{$data->reference_style?$data->reference_style:'Oops, No reference style is chosen by user'}}</td>
            <td><button data-toggle="modal" data-target="#assignExpertModal" data-id="{{$data->assignment_id}}" data-request="/assignment-request" class="btn btn-success manually-asssign-expert">Assign Expert Manually</button></td>
            
            
          </tr>
          @endforeach
          
          @else
          {
           No Records Found Yet
          }
          @endif
        </tbody>
      </table><!--/END SECOND TABLE -->
	
		</div><!--/span12 -->
      </div><!-- /row -->
      
     </div> <!-- /container -->
    	

      	
      	<br>
   <!-- MODAL CODE -->
   
  
   

   
   <style type="text/css">
       
    .show-id {
    border: none !important;
    border-color: transparent !important;
    background: gray !important;
    width: 10% !important;
}
       </style>
   
   <!-- END OF MODAL CODE -->
        
   @include('admin.dashboard-layout.footer')
 <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    -->


<script>
   $(document).ready(function()
    {  
    $("#update-request").fadeOut(8500);
    });
    </script>