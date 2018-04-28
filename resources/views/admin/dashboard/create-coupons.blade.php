<!doctype html>
@include('admin.dashboard-layout.header')


    <div class="container" style="margin-top:5%; margin-bottom:5%;">
        <div class="row">

            <div class="col-lg-6">
                
                <div class="register-info-wraper">
                    <div id="register-info">
                        <div class="cont2">
                            <div class="thumbnail">
                               <img src="../dashboard_theme/dist/img/graduate.png" alt="Best Assignment Experts" class="img-circle user_profile">
                            </div><!-- /thumbnail -->
                            <h2>Coupons Details</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cont3">
                                    <p><ok>Total Coupons</ok> 20</p>
                                    <p><ok>Active Coupons</ok> 4</p>
                                    <p><ok>Seasonal Coupons</ok> 5</p>
                                    <p><ok>Expired Coupons</ok> 9</p>
                                </div>
                            </div>
                            
                        </div><!-- /inner row -->
                        
                              
                        
                    </div>
                </div>

            </div>

            <div class="col-sm-6 col-lg-6">
                <div id="register-wraper">
                    <form id="register-form" class="form" methbod="POST" action="/post-coupon-data">
                        <legend >Create Coupon</legend>
						<hr>
                    
                        <div class="body">
                            
                            <label for="coupon_name">Coupon Name</label>
                            <input name="coupon_name" class="input-huge" type="text" value="" required="">
                            
                            <label for="coupon_code">Coupon Code</label>
                            <input name="coupon_code" class="input-huge" type="text" value="" required="">
                            
                            <label for="coupon_discount">Discount</label>
                            <input name="coupon_discount" class="input-huge" type="text" required="" value="">
                            <p>For Fixed value discount, enter "15" for Rs15.00 off.
                            For Percentage discount, enter "15%" for 15% off.</p>
                            <label for="coupon_expiry">Expiry Date</label>
                            <input  name="coupon_expiry" class="input-huge" required="" type="date" min="<?php echo date("d-m-Y");?>"value="">
                            
                            
                            <label for="coupon_redemption">Maximum Redemption per Coupon </label>
                            <input name="coupon_redemption" class="input-huge" required="" type="text" value="">

                      <label for="coupon_redeemtion_per_user">Maximum Redemption per Coupon per User</label>
                      <input name="coupon_redemption_per_user" class="input-huge" type="text" value="">

                        </div>
                    
                        <div class="footer">
                            <button type="submit" class="btn btn-success">Create New Coupon</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@include('admin.dashboard-layout.footer')