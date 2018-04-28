@include('dashboard-layout.dashboard-header')

@include('dashboard-layout.dashboard-left-sidebar',[$referral='5'])



<div class="content-wrapper" style="background: url(dashboard_theme/dist/img/wallet3.jpg) no-repeat center center fixed; background-size:cover; max-height: 500px ">

     
  @if(Session::has('paypal_wallet_success'))
  <div style="padding: 12.5px; font-size: x-large; " class="fade_show alert-success" id="update-wallet"><span>{{session()->get('paypal_wallet_success')}}</span></div>
  @endif
  @if(Session::has('paypal_wallet_fail'))
  <div style="padding: 12.5px; font-size: x-large; " class="fade_show alert-danger" id="update-wallet"><span>{{session()->get('paypal_wallet_fail')}}</span></div>
  @endif

    <section class="content">
<div class="col-sm-12">
    <div class="box box-widget widget-user">
        <div class="widget-user-header bg-aqua-active">
            <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
        </div>
        <div class="widget-user-image">
            <img class="img-circle" src="dashboard_theme/dist/img/graduate.png" alt="User Avatar">
        </div>

        <div class="box-footer">

            <div class="row">

                <div class="col-sm-4 border-right">

                    <div class="description-block">

                        <h5 class="description-header">{{$no_of_assignment}}</h5>

                        <span class="description-text">Assignments</span>

                    </div>

                    <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-4 border-right">

                    <div class="description-block">

                        <h5 class="description-header">{{$global_referral}}</h5>

                        <span class="description-text">Referrals</span>

                    </div>

                    <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-4">

                    <div class="description-block">

                        <h5 class="description-header">{{$available_solutions}}</h5>

                        <span class="description-text">Solutions</span>

                    </div>

                    <!-- /.description-block -->

                </div>

                <!-- /.col -->

            </div>

            <!-- /.row -->

        </div>

    </div>

    <!-- /.widget-user -->

</div>
<div class="col-md-6">

    <!-- small box -->

    <div class="small-box bg-aqua">

        <div class="inner">

            <h3>{!!$wallet_amount!!}</h3>



            <p>USD</p>

        </div>

        <div class="icon">

            <i class="fa fa-money"></i>

            <i class="fa fa-usd"></i>

        </div>


        <a href="#" class="small-box-footer">

            Amount In Wallet  

        </a>

    </div>

</div>







<div class="col-md-1">

</div>



<div class="col-md-6">

    <!-- small box -->

    <div class="small-box bg-yellow">

        <div class="inner"> 
            <h3>Add Money to Wallet</h3>
           
 <form method="post" action="https://www.paypal.com/cgi-bin/webscr">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="syedriyazzaidi@gmail.com">
<input type="hidden" name="item_name" value="Best Assignment Expert">
<input type="hidden" name="item_number" value="{{Auth::user()->id}}">
<input type="hidden" name="first_name" value="{{Auth::user()->name}}">
<input type ="hidden" name ="rm" value="2">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="cancel_return" value="https://www.bestassignmentexperts.com/paypal-wallet-amount-cancel">
<input type="hidden" name="return" value="https://www.bestassignmentexperts.com/paypal-wallet-amount-success">
<div class="input-group margin">
  <input type="number" min="1" max="1000" class="form-control" placeholder="Enter Amount to Add" name="amount">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat" style="width: 110px;" >Add</button>
                    </span>
 </div>
</form>         
            
            
            
           
        </div>
        <div class="icon">
            <i class="fa fa-usd"></i>
        </div>
    </div>
</div>
<div class="col-md-1">
</div>
</section>

</div>

  <script>
   $(document).ready(function()
    {  
    $("#update-wallet").fadeOut(5500);
    });
    </script>

@include('dashboard-layout.dashboard-footer')