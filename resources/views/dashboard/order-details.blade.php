@include('dashboard-layout.dashboard-header')
@include('dashboard-layout.dashboard-left-sidebar')  


  <div class="content-wrapper">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">

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
                                            <a href="/assignment-details/{{$order['assignment_id']}}">
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
                    </div>
                </section>
            </div>
  @include('dashboard-layout.dashboard-footer')
