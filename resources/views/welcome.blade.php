  @include('layout.header')
<body>
<div id="header-scroll" class="header-scroll header-nav hidden-xs hidden-sm tnav">
<div class="main-header-nav navbar-scrolltofixed tnav">
<div class="container">
<div class="row">
<div class="col-md-12">

    <form id="booking_form" class="booking_form" name="booking_form" action="" method="post" novalidate="novalidate" style="padding:15px 25px;">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Name</label>
                                        <input id="form_name" name="form_name" class="form-control" placeholder="Name" required="required" data-error="Name is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                 <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Subject</label>
                                        <input id="form_phone" name="form_phone" class="form-control required" placeholder="enter a Phone" required="required" data-error="Phone Number is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Email</label>
                                        <input id="form_email" name="form_email" class="form-control required email" placeholder="Email" required="required" data-error="Email is required." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Phone</label>
                                        <input id="form_phone" name="form_phone" class="form-control required" placeholder="enter a Phone" required="required" data-error="Phone Number is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label>Deadline</label>
                                        <input id="form_date" name="form_date" class="form-control required datepicker" placeholder="Schedule Time" required="required" data-error="Schedule Time is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                              
                                <div class="col-sm-2">
                                    <div class="form-group">
                                    <label></label>
                                        <input name="form-botcheck" class="form-control" type="hidden" value="">
                                        <button type="submit" class="btn ulockd-btn-thm2 btn-block ">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </form>

</div>
</div>
</div>
</div>
</div>
    
    
    
    <!-- Home Design -->
<div class="home-banner">
        <div class="container text-center">
            <div class="row">
                <div>
                    <div class="col-md-6 col-md-offset-6  col-sm-10 col-sm-offset-1">
                    <div class="col-md-12"> 
                    <div class="row">       
                    <div class="col-md-12 mt-10 mb-5 text-center"> 
                    
                    <br/>
                    <br/>
                    
                    <div class="booking_form_style1 ulockd-bgthm text-center" style="background-color: rgba(0,0,0,.6);">
                        <h3 class="color-white">Booking A Lesson</h3>
                        <!-- Booking Form Sart-->
            <form class="stepform" method="POST" action="">
            <fieldset class="sf-step">
              <legend>1. Basic Details</legend>
              <p>
                <label class="control-label" for="email">Email Address</label>
                <input class="form-control" id="email" name="email" data-validate="email"/>
              </p>
              <p>
                <label class="control-label" for="firstname">Password</label>
                <input class="form-control" id="firstname" name="password" data-validate="6"/>
              </p>
               <p>
                <label class="control-label " for="firstname">Contact Number</label>
                <input class="form-control phone" id="firstname" name="phone" data-validate="10"/>
              </p>
            </fieldset>

            <fieldset class="sf-step">
              <legend>3. Permanent Address</legend>
              <strong></strong>
               <p>
                <label class="control-label" for="email">Address Line 1</label>
                <input class="form-control" id="email" name="address1" data-validate="1"/>
              </p>
              <p>
                <label class="control-label" for="email">Address Line 2</label>
                <input class="form-control" id="email" name="address1" data-validate="1"/>
              </p>
            
               <p>
                <label class="control-label" for="email">Enter State</label>
                <input class="form-control" id="email" name="addressstate" data-validate="1"/>
              </p>
              <p class="text-center">
                <input type="submit" value="Submit" name='submit' class="btn btn-success">
              </p>
            </fieldset>
           

            
          </form>
            </div>
                
                
                
                
                </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    

<section id="sample" class="our-service">
<div class="container">
   <div class="row">
            <div class="col-lg-12 col-md-12">
            
            <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">FREE RESOURCES</h2>
                            <div class="mt-separator"><img src="{{('main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>
            
            <div class="owl-carousel">
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/chemistry.png')}}" alt="">
             <h4>Chemistry</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/finance.png')}}" alt="">
              <h4>Finance</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/computer-science.png')}}" alt="">
             <h4>Computer science</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
              <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/huminidities.png')}}" alt="">
             <h4>Humanities</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
              <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/law.png')}}" alt="">
             <h4>law</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/nursing.png')}}" alt="">
             <h4>Nursing</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
                <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/chemistry.png')}}" alt="">
             <h4>Chemistry</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/finance.png')}}" alt="">
              <h4>Finance</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/computer-science.png')}}" alt="">
             <h4>Computer science</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
              <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/huminidities.png')}}" alt="">
             <h4>Humanities</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             <div class="item">
             <div class="row">
              <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/law.png')}}" alt="">
             <h4>law</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
             
             
             <div class="item">
             <div class="row">
             <div class="col-md-12 sample">
             <img src="{{('main_theme/images/icons/nursing.png')}}" alt="">
             <h4>Nursing</h4>
             <p>Sample</p>
             </div>
             </div>
             </div>
            
            
     </div>
                </div>
            </div>


</div>

</section>
    
        <section class="services half-block">
            <div class="container">
                 <div class="row">
            <div class="col-lg-12 col-md-12">
            
            <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">OUR SERVICES</h2>
                            <div class="mt-separator"><img src="{{('main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>
            
           <div class="three-grid-slider">
        <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
                            <img class="img-responsive img-whp" src="{{('main_theme/images/blog/1.jpg')}}" alt="1.jpg">
                            <ul class="list-inline posted-date">
                                <li><a class="text-thm2" href=""><span class="flaticon-people-2"></span> Ulockd</a></li>
                                <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                            </ul>
                        </div>
                        <div class="bp-details one text-left">
                            <h3 class="post-title">Let's Move With Our Blog</h3>
                            <p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </article>
                            </div>
                            <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
                            <img class="img-responsive img-whp" src="{{('main_theme/images/blog/3.jpg')}}" alt="3.jpg">
                            <ul class="list-inline posted-date">
                                <li><a class="text-thm2" href=""><span class="flaticon-people-2"></span> Ulockd</a></li>
                                <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                            </ul>
                        </div>
                        <div class="bp-details one text-left">
                            <h3 class="post-title">Let's Move With Our Blog</h3>
                            <p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </article>
                            </div>
                        <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
                            <img class="img-responsive img-whp" src="{{('main_theme/images/blog/1.jpg')}}" alt="1.jpg">
                            <ul class="list-inline posted-date">
                                <li><a class="text-thm2" href=""><span class="flaticon-people-2"></span> Ulockd</a></li>
                                <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                            </ul>
                        </div>
                        <div class="bp-details one text-left">
                            <h3 class="post-title">Let's Move With Our Blog</h3>
                            <p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </article>
                            </div>
                            <div class="item">
                                <article class="ulockd-blog-post ulockd-mrgn630">
                        <div class="post-thumb">
                            <div class="img-post-icon ulockd-bgthm"><span class="fa fa-image"></span></div>
                            <img class="img-responsive img-whp" src="{{('main_theme/images/blog/3.jpg')}}" alt="3.jpg">
                            <ul class="list-inline posted-date">
                                <li><a class="text-thm2" href=""><span class="flaticon-people-2"></span> Ulockd</a></li>
                                <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                            </ul>
                        </div>
                        <div class="bp-details one text-left">
                            <h3 class="post-title">Let's Move With Our Blog</h3>
                            <p>Qolor consectetur adipisicing elit. Quasi, neque? Expedita sunt dolor.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </article>
                            </div>
             
            
     </div>
                </div>
            </div>
                </div>
                </section>
    

    
        <section class="ulockd-blog hidden-xs hidden-sm">

        <div class="container">
            <div class="row ulockd-mrgn1225">

            <div class="col-lg-12 col-md-12">
            <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">HOW IT WORKS</h2>
                            <div class="mt-separator"><img src="{{('main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>

            <div class="tab" role="tabpanel">

                        <!-- Nav tabs -->

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active brand-nav"><a href="#Section1" aria-controls="tab1" role="tab" data-toggle="tab"><span>1</span> Place an order</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><span>2</span> Make payment</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab"><span>3</span> Proof reading</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab"><span>4</span> Get the Solution</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab"><span>5</span> Pay the balance</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section6" aria-controls="messages" role="tab" data-toggle="tab"><span>6</span> Your Feedback</a></li>
                            <li role="presentation" class="brand-nav"><a href="#Section7" aria-controls="messages" role="tab" data-toggle="tab"><span>7</span> Good luck</a></li>

                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                             <p>Just put your basic details and attach the requirement file here</p>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                            <p>We assign the best writers once you make the payment</p>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="Section3">  
                            <p>Our proofreaders make sure of mistakes before sending you the solution</p>
                            </div>
                            
                               <div role="tabpanel" class="tab-pane fade" id="Section4">  
                            <p>You will receive the mail once your solution get ready</p>
                            </div>
                            
                               <div role="tabpanel" class="tab-pane fade" id="Section5">  
                            <p>Your solution will be visible on your dashboard as soon as you pay the remaining amount.</p>
                            </div>
                            
                               <div role="tabpanel" class="tab-pane fade" id="Section6">  
                            <p>Don’t forget to share the feedback of your assignment. It is impossible to us.</p>
                            </div>
                            
                              <div role="tabpanel" class="tab-pane fade" id="Section7">  
                            <p>Our sincere wishes are with you. Thank you for choosing us.</p>
                            </div>

                        </div>

                    </div>
            </div>
            </div>

        </div>

    </section>
    

    <!-- Our First Divider -->
    <section class="ulockd-frst-divider style1 parallax" data-stellar-background-ratio="0.3" style="padding: 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="subscriber-form subscribe">
                        <h1 class="color-white">Don’t miss out on the Latest News</h1>
                        <input placeholder="Your Email">
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
            <!-- Our Team -->
    <section class="ulockd-team">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <div class="ulockd-main-title">
                        <h2 class="text-uppercase">OUR <span class="text-thm2">Experts</span></h2>
                        <p>Our writers are the key of our success stories. They are highly qualified and professional in the field of Writing.</p>

</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                    <div class="team-one">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{('main_theme/images/team/1.jpg')}}" alt="team1.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Corey n Jr.</h3>
                            <p>He is one of our best writer with more than 1000 successfull deliveries. He is Having more than 30 years of experience in Finance and Accounting.</p>
                                </div>
                    </div>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                    <div class="team-one">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{('main_theme/images/team/2.jpg')}}" alt="team2.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Maria Wilson</h3>
                            <p>She is helping the students from last 23 years with her excellent Writing skills and tremendous subject knowledge. She is expert in Management and Business Studies</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
                    <div class="team-one">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{('main_theme/images/team/8.jpg')}}" alt="3.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Tom Mooler</h3>
                            <p>A mathematician having 15 years of experience with success rate of 98%. He also deals in physics Assignments.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

        <!-- Our Blog -->
        <section class="ulockd-blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">Testimonial</h2>
                            <div class="mt-separator"><img src="{{('main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>
                        <div class="one-grid-slider">
                            <div class="item">
                                <div class="testimonial-grid text-center">
                                    <div class="t_thumb">
                                        <img class="img-responsive" src="main_theme/images/testimonial/1.jpg" alt="1.jpg">
                                        <i class="fa fa-quote-left icon text-thm2"></i>
                                    </div>
                                    <div class="t_details">
                                        <h4>Maria </h4>
                                        <p>Australia</p>
                                        <p>These peoples are incredible, authentic and reliable. I have got the assignment within the deadline and yes it is quality work.</p>
                                        </div>
                                </div>
                                <div class="testimonial-grid text-center ulockd-mrgn1220">
                                    <div class="t_thumb">
                                        <img class="img-responsive" src="{{('main_theme/images/testimonial/2.jpg')}}" alt="2.jpg">
                                        <i class="fa fa-quote-left icon text-thm2"></i>
                                    </div>
                                    <div class="t_details">
                                        <h4>Balvinder Dhillon</h4>
                                        <p>Canada</p>
                                        <p>You peoples save me from getting failed even the deadline was of couple of hours.</p>

</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-grid text-center">
                                    <div class="t_thumb">
                                        <img class="img-responsive" src="{{('main_theme/images/testimonial/3.jpg')}}" alt="3.jpg">
                                        <i class="fa fa-quote-left icon text-thm2"></i>
                                    </div>
                                    <div class="t_details">
                                        <h4> Lisa Jackson</h4>
                                        <p>United States</p>
                                        <p>Excellent service and experts are truely champ...

Must be a 5star website for Academic Writing.</p>  </div>
                                </div>
                                
                                <div class="testimonial-grid text-center ulockd-mrgn1220">
                                    <div class="t_thumb">
                                        <img class="img-responsive" src="{{('main_theme/images/testimonial/2.jpg')}}" alt="2.jpg">
                                        <i class="fa fa-quote-left icon text-thm2"></i>
                                    </div>
                                    <div class="t_details">
                                        <h4>Balvinder Dhillon</h4>
                                        <p>Canada</p>
                                        <p>You peoples save me from getting failed even the deadline was of couple of hours.</p>

</div>
                                </div>
                                
                            </div>                      
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <div class="ulockd-main-title">
                            <h2 class="text-center ulockd-mrgn120">Latest Blog</h2>
                            <div class="mt-separator"><img src="{{('main_theme/images/resource/graduation.png')}}" alt="graduation.png"></div>
                        </div>
                        <div class="two-grid-slider">
                        <div class="item">
                                <article class="blog_post text-left">
                                    <div class="post_thumb">
                                        <img class="img-responsive img-whp" src="{{('main_theme/images/blog/1.jpg')}}" alt="1.jpg">
                                        <ul class="list-inline post_meta">
                                            <li><a class="text-thm2" href=""><span class="flaticon-people-2"></span> Ulockd</a></li>
                                            <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                                        </ul>
                                    </div>
                                    <div class="post_details">
                                        <h4>Popular Blog Post</h4>
                                        <div class="post_date ulockd-bgthm"><strong>10</strong> <br> Dec 18 </div>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, conse consect etur adipisicing. elit Natus qui dicta vitae sit, eos saepe ratione eaque sint</p>
                                        <a class="tdu-hvr" href="#">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="blog_post text-left">
                                    <div class="post_thumb">
                                        <img class="img-responsive img-whp" src="{{('main_theme/images/blog/2.jpg')}}" alt="2.jpg">
                                        <ul class="list-inline post_meta">
                                            <li><a class="text-thm2" href=""><span class="flaticon-people-2"></span> Ulockd</a></li>
                                            <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                                        </ul>
                                    </div>
                                    <div class="post_details">
                                        <h4>Popular Blog Post</h4>
                                        <div class="post_date ulockd-bgthm"><strong>10</strong> <br> Dec 18 </div>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, conse consect etur adipisicing. elit Natus qui dicta vitae sit, eos saepe ratione eaque sint</p>
                                        <a class="tdu-hvr" href="#">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="blog_post text-left">
                                    <div class="post_thumb">
                                        <img class="img-responsive img-whp" src="{{('main_theme/images/blog/1.jpg')}}" alt="1.jpg">
                                        <ul class="list-inline post_meta">
                                            <li><a class="text-thm2" href=""><span class="flaticon-people-2"></span> Ulockd</a></li>
                                            <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                                        </ul>
                                    </div>
                                    <div class="post_details">
                                        <h4>Popular Blog Post</h4>
                                        <div class="post_date ulockd-bgthm"><strong>10</strong> <br> Dec 18 </div>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, conse consect etur adipisicing. elit Natus qui dicta vitae sit, eos saepe ratione eaque sint</p>
                                        <a class="tdu-hvr" href="#">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="blog_post text-left">
                                    <div class="post_thumb">
                                        <img class="img-responsive img-whp" src="{{('main_theme/images/blog/3.jpg')}}" alt="4.jpg">
                                        <ul class="list-inline post_meta">
                                            <li><a class="text-thm2" href=""><span class="flaticon-people-2"></span> Ulockd</a></li>
                                            <li><a class="text-thm2" href=""><span class="flaticon-chat text-thm2"></span> 9 Comment</a></li>
                                        </ul>
                                    </div>
                                    <div class="post_details">
                                        <h4>Popular Blog Post</h4>
                                        <div class="post_date ulockd-bgthm"><strong>10</strong> <br> Dec 18 </div>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, conse consect etur adipisicing. elit Natus qui dicta vitae sit, eos saepe ratione eaque sint</p>
                                        <a class="tdu-hvr" href="#">Read More <i class="arrow_carrot-2right text-thm2"></i></a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    
    <!-- Our Divider -->
        <section class="divider-triangle half-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-6">
                        <h2 class="ulockd-mrgn120 tac-smd">Why Choose Us?</h2>
                        
                        <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-users text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>Complete satisfaction</h4>
                                <p>Since we have the best assignment experts, there is very less chances of Dissatisfaction.
                                We have highly qualified experts who are ready to help you out from any kind of Assignment pressure.</p>
                            </div>
                        </div>
                            <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-graduation-cap text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>24/7 customer support</h4>
                                <p>We are open 7 days 24X7 to hear from you. Our response time is less than a minute, which makes us different from other.</p>
                            </div>
                        </div>
                        
                        <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-book text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>100% original work</h4>
                                <p>We have the best writers along with the best content plagiarism monitoring softwares. Who combine together and result the best grades. 
                                We make sure that you get the premium quality work.</p>
                            </div>
                        </div>
                        <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-user text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>On time delivery</h4>
                                <p>Our management take special care of time deadline. We prefer to deliver the solution before the expected deadline. Timely delivery is one of the key of our sucess.</p>
                            </div>
                        </div>
                        
                    
                        
                        <div class="icon_box text-left tac-smd">
                            <div class="icon pull-left fn-smd"><i class="fa fa-graduation-cap text-thm2"></i></div>
                            <div class="ib_details">
                                <h4>100% Refund Policy</h4>
                                <p>In case if student don’t like the assignment or if he change his mind. In this case we refund upto 100% amount in his wallet. 
                                Amount is dependent upon the circumstances for dissatisfaction.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

    
        
      @include('layout.footer')

    <!-- Our Footer -->

</body>
  
    <link rel="stylesheet" href="welcome/style.css" type="text/css" media="screen"/>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="welcome/jq.stepform.js"></script>
   
</html>