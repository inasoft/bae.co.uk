@include('admin.dashboard-layout.header')

<div class="container" style="margin-top:5%; margin-bottom:5%; min-height: 450px;">

      <!-- CONTENT -->
	<div class="row" style="background: #fff; padding: 15px;">
		<div class="col-sm-12 col-lg-12 ">
			
			 <!--SECOND Table --> 


		<h4><strong>Available Coupons</strong></h4>
    <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#dt1').dataTable({
        "lengthMenu": [[5, 20, 50, -1], [5, 20, 50, "All"]]
    });
            });
  </script>
  

		<table class="display" id="dt1" style="overflow-x:auto;width: 100%;border-collapse: collapse;">
        <thead>
          <tr>
            <th>Coupon ID</th>
            <th>COUPON CODE</th>
            <th>COUPON NAME</th>
            <th>COUPON EXPIRY(dd/mm/yy)</th>
            <th>COUPON DISCOUNT TYPE</th>
            <th>COUPON DISCOUNT VALUE</th>
            <th>MAX REDEEMTION</th>
            <th>MAX REDEEMTION PER USER</th>
            
            
          </tr>
        </thead>
        <tbody>
            
          @foreach($all_coupon_data as $coupons)  
          <tr class="odd gradeX">
            <td>{{$coupons->id}}</td>
            <td>{{$coupons->coupon_code}}</td>
            <td>{{$coupons->coupon_type}}</td>
            <td>{{date('d-m-y',$coupons->coupon_expiry)}}</td>
            <td>{{$coupons->discount_type}}</td>
            <td>{{$coupons->coupon_discount_value}} @if($coupons->discount_type=='percentage')% @endif</td>
            
            <td>{{$coupons->max_redemption_per_user}}</td>
            <td>{{$coupons->max_redemption}}</td>
            
          </tr>
         @endforeach
        </tbody>
       
      </table><!--/END SECOND TABLE -->
	
	</div><!--/span12 -->
      </div><!-- /row -->
      
      <hr>

       <a href="/create-coupon" style="padding:10px;border: none; background: #a9c600;color: #fff;">Create Coupon</a>
     </div> <!-- /container -->
    	

      	
      	<br>




@include('admin.dashboard-layout.footer')