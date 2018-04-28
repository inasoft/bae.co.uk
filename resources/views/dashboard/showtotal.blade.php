@include('admin.dashboard-layout.header')   
<div class="container" style="margin-top:5%; margin-bottom:5%; min-height: 450px;">

      <!-- CONTENT -->
	<div class="row" style="background: #fff; padding: 15px;">
		<div class="col-sm-12 col-lg-12">
			
			 <!--SECOND Table -->


		<h4><strong>Student Information</strong></h4>
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
            <th>Submitted DATE</th>
            <th>Total Ammount</th>
            <th>Expert</th>
            <th>Solution Available</th>
            <th>DESCRIPTION</th>
            <th>Assignment Status</th>
           

            
           
      
            
            
          </tr>
        </thead>
        <tbody>
        
          
            @foreach($rework_asssignment as $data)
            <tr class="odd gradeX">
             <td><a href="/show-assignment-details/{{$data->assignment_id}}"><button type="button" class="btn btn-warning">{{$idFormation->getAssignmentAsOrderId($data->assignment_id,$data->uid)}}</button></a></td>
             <td>{{$data->subject}}</td>
             <td class="center">{{date('d-m-y',$data->due_date)}}</td>
             <td class="center">{{date('d-m-y',$data->submitted_date)}}</td>
              <td>{{$data->total_amount}}</td>
              <td>{{$data->expert_name}}</td>

              <td>{{$data->solution_available}}</td>

            <td>{{$data->description?$data->description:'No Description is available'}}</td>
            <td> @foreach($order_details as $order)
                       
                    {{$order->status}} 
                                
                       @endforeach</td>
                     
                        @if($order_details)
                         <thead>              
                         <th>Payment Status</th>
            <th>Payment left</th>
            <th>Payment Paid</td>
</thead>

             <td>  @foreach($assignment_details  as $assignment)
            
                    {{$assignment->status}} 
                                
                       @endforeach</td>
                   

             <td> <!-- Repeat here -->
                        @foreach($order_details as $order)
            
                    {{$order->payment_left}} 
                                
                       @endforeach
</td>
 <td> <!-- Repeat here -->
                        @foreach($order_details as $order)
            
                    {{$order->payment_paid}} 
                                
                       @endforeach
</td>        

         
                        @else
                        <h4> No order has been generated yet  <h4>
                                 @endif
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
    	

      	 <thead>
          <tr>
             
            <th></th>
           
      
            
            
          </tr>
        </thead>
      	
 
                       


   @include('admin.dashboard-layout.footer')