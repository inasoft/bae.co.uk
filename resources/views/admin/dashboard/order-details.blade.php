@include('admin.dashboard-layout.header')

{!! Html::style('dashboard_theme/dist/css/AdminLTE.css') !!}

  <div class="content-wrapper" style="margin-top:5%; margin-bottom:5%; margin-left: 0;opacity: 0.91">
  <h1 style="padding: 5px;background: white;text-align: center;">Order Details</h1>
                <section class="content">
                    <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-8">

        @if($order_details)
                        <!-- Repeat here -->
                        @foreach($order_details as $order)
                            <ul class="timeline">
                                <li class="time-label">
                                    <span class="bg-red">
                                        Order Id {{$order['order_id']}}
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-map-signs bg-blue">
                                    </i>
                                    <div class="timeline-item">
                                        <span class="time">
                                            <i class="fa fa-clock-o">
                                            </i>
                                            {{$order['oder_time']}}
                                        </span>
                                        <h3 class="timeline-header">
                                            <a href="/show-assignment-details/{{$order['assignment_id']}}">
                                                Assignment Id
                                                <span style="color: orange">
                                                    {{$order['show_assignment_id']}}
                                                </span>
                                            </a>
                                        </h3>
                                        <div class="timeline-body">
                                        <a class=" btn-flat bg-light-blue">
                                                     Payment details are 
                                         </a>
                                         <br>
                                            <div class="order-details-div">
                                         @if($order['payment_logs']!=null)
                                         
                                            @foreach($order['payment_logs'] as $payment)          
                                         
                                           <div>Payment through {{ucfirst($payment['paid_through'])}} :
                                           <span>${{$payment['amount']}} </span>
                                           
                                            @endforeach
                                          @endif  
                                            
                                            
                                            <div>Payment left :<span > ${{$order['payment_left']}}</span></div>
                                             
                                            </div>
                                                                        

                                                    
                                        </div>
                                        <div class="timeline-footer">
                                            <div class="timeline-footer">
                                                <a class="btn btn-warning btn-flat btn-xs">
                                                   <div>Total Amount paid :<span > ${{$order['payment_paid']}}</span></div>
                                                </a>
                                                <br>
                                                
                                                @if($order['payment_left']!=0)
                                                <a class="btn btn-danger btn-xs">Status : Partial Payment Paid</a>
                                                @endif
                                                @if($order['payment_left']==0)
                                                <a class="btn btn-success btn-xs">Status : Payment Completed</a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>


                                </li>

                            </ul>
                        @endforeach
                        @else
                        No order has been generated yet
                        @endif

                            <!-- Repeat end -->

                        </div>
                    <div class="col-md-2"></div>
                    </div>
                </section>
            </div>
    @include('admin.dashboard-layout.footer')
