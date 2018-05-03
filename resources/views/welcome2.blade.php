  @include('layout.header')
<body ng-app="">
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
                        <h3 class="color-white">BEST ASSIGNMENT HELP ONLINE</h3>
                        <!-- Booking Form Sart-->
<form id="booking_form" class="booking_form stepform" name="booking_form" action="" method="post" novalidate="novalidate" style="padding:15px 25px;">				
          
            <fieldset class="sf-step">
             <div class="row">
				               
				                <div class="col-sm-12">
				                    <div class="form-group">
				                    	<input class="form-control required email" id="firstname" placeholder="Email"  name="fname" data-validate="1"/>
										<div class="help-block with-errors"></div>
				                    </div>
				                </div>
								 <div class="col-sm-12">
				                    <div class="form-group">
										<input id="form_name" name="form_name" class="form-control" placeholder="Subject" required="required" data-error="subject is required." type="text" data-validate="5">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
								
				                <div class="col-sm-6">
				                    <div class="form-group">
					                    <input id="form_phone" name="form_phone" class="form-control phone" placeholder="enter a Phone" required="required" data-error="Phone Number is required." type="text"  data-validate="10">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
				                <div class="col-sm-6">
				                    <div class="form-group">
										<input id="form_date" name="form_date" class="form-control required datepicker" placeholder="Due date" required="required" data-error="Due date is required." type="text"  data-validate="1">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
				                <div class="col-sm-12">
				                    <div class="form-group">
					                    <div class="ulockd-select-style">
					                        <select id="form_option" class="form-control form_control required" name="form_option" required="required" data-error="Option is required.">
				                                <option value="">Select An Option</option>
				                                <option value="discuss">Primary Level</option>
				                                <option value="discuss">O Level</option>
				                                <option value="dental">A Level</option>
				                                <option value="neurology">Higher Level</option>
				                                <option value="discuss">Coupluter Course</option>
				                                <option value="discuss">Online Course</option>
				                                <option value="discuss">Other Discuss</option>
					                        </select>
					                    </div>
										<div class="help-block with-errors"></div>
				                    </div>
				                </div>
				            <div class="form-group ">

                        <div class="grid-buttons ">
                        <div class="row" style="display: inline-flex;/*! width: -27%; */">
                            <button  type="button"  ng-click="count = count - 1"  ng-disabled="count < 1" class="cws-button border-radius icon-left col-sm-1" style="min-width: 2px;"><i class="fa fa-minus"></i></button>
                            
                            <input class="login-input col-sm-10 ng-pristine ng-valid" placeholder="Pages" name="count" ng-model="count" type="text" numbers-only>

                            <button  type="button" ng-click="count = count + 1" class="cws-button border-radius icon-right col-sm-1" style="min-width: 10px;margin: auto;"><i class="fa fa-plus"></i></button>

                            </div>
                           @{{count * 250}}  Words

                        </div>
                 
                    </div>
			                </div>
            </fieldset>

            <fieldset class="sf-step">
                 <div class="row">
				                <div class="col-sm-12">
				                    <div class="form-group">
										<input id="form_name" name="form_name" class="form-control" placeholder="Name" required="required" data-error="Name is required." type="text">
										<div class="help-block with-errors"></div>
									</div>
				                </div>
				               <div class="form-group">
                        <input type="file" class="login-input file" placeholder="Choose a File" name="uploaded_file1" required="" >
    
                    <span class="input-icon file_span">
                            <i class="fa fa-paperclip file_fa"></i>
                        </span>    
                    </div>
			   <div class="form-group">
                        <label>Select Reference</label>
                        <select type="text" class="form-control form_control required" placeholder="Reference" name="place_order_reference" value="Select Reference">
                        <span class="input-icon">
                            <i class="fa fa-user"></i>
                        </span>

                                        <option value="AGLC">AGLC</option>

                                        <option value="APA">APA</option>

                                        <option value="BMJ">BMJ</option>

                                        <option value="Chicago">Chicago</option>

                                        <option value="Footnotes">Footnotes</option>

                                        <option value="Footnotes and bibliography">Footnotes and bibliography</option>

                                        <option value="Harvard">Harvard</option>

                                        <option value="MHRA">MHRA</option>

                                        <option value="MLA">MLA</option>

                                        <option value="Open">Open</option>

                                        <option value="OSCOLA">OSCOLA</option>

                                        <option value="Turabian">Turabian</option>

                                        <option value="Vancouver">Vancouver</option>

                        </select>
                         <div class="col-md-4 col-sm-6 mb-10 change-adjust">
                              <select name="countryCode" id="countryCode" class="form-control bg-white">
                                                                <option  value="12">AU (+61)</option>
                                                                <option  value="1148">COD (+243)</option>
                                                                <option  value="1163">CUW (+599)</option>
                                                                <option  value="221">GB (+44)</option>
                                                                <option  value="1154">GG (+44)</option>
                                                                <option  value="1146">HRV (+385)</option>
                                                                <option  value="1143">JEY (+44)</option>
                                                                <option  value="1145">LAO (+856)</option>
                                                                <option  value="1151">LBY (+218)</option>
                                                                <option  value="1144">MDA (+373)</option>
                                                                <option  value="1155">MNE (+382)</option>
                                                                <option  value="152">NZ (+64)</option>
                                                                <option  value="1142">PSE (+970)</option>
                                                                <option  value="187">SG (+65)</option>
                                                                <option  value="1152">SSD (+211)</option>
                                                                <option  value="1164">SXM (+1)</option>
                                                                <option  value="1165">TLS (+670)</option>
                                                                <option  value="222">US (+1)</option>
                                                                <option  value="1150">VG (+1)</option>
                                                                <option  value="1149">VGB (+1)</option>
                                                                <option  value="5">AD (+376)</option>
                                                                <option  value="220">AE (+971)</option>
                                                                <option  value="1">AF (+93)</option>
                                                                <option  value="7">AI (+1)</option>
                                                                <option  value="2">AL (+355)</option>
                                                                <option  value="10">AM (+374)</option>
                                                                <option  value="150">AN (+599)</option>
                                                                <option  value="6">AO (+244)</option>
                                                                <option  value="8">AQ (+672)</option>
                                                                <option  value="9">AR (+54)</option>
                                                                <option  value="4">AS (+1)</option>
                                                                <option  value="13">AT (+43)</option>
                                                                <option  value="11">AW (+297)</option>
                                                                <option  value="14">AZ (+994)</option>
                                                                <option  value="26">BA (+387)</option>
                                                                <option  value="18">BB (+1)</option>
                                                                <option  value="17">BD (+880)</option>
                                                                <option  value="20">BE (+32)</option>
                                                                <option  value="33">BF (+226)</option>
                                                                <option  value="32">BG (+359)</option>
                                                                <option  value="16">BH (+973)</option>
                                                                <option  value="34">BI (+257)</option>
                                                                <option  value="1141">BIH (+387)</option>
                                                                <option  value="22">BJ (+229)</option>
                                                                <option  value="23">BM (+1)</option>
                                                                <option  value="31">BN (+673)</option>
                                                                <option  value="25">BO (+591)</option>
                                                                <option  value="29">BR (+55)</option>
                                                                <option  value="15">BS (+1)</option>
                                                                <option  value="24">BT (+975)</option>
                                                                <option  value="28">BV (+47)</option>
                                                                <option  value="27">BW (+267)</option>
                                                                <option  value="19">BY (+375)</option>
                                                                <option  value="21">BZ (+501)</option>
                                                                <option  value="37">CA (+1)</option>
                                                                <option  value="45">CC (+891)</option>
                                                                <option  value="49">CD (+243)</option>
                                                                <option  value="40">CF (+236)</option>
                                                                <option  value="48">CG (+242)</option>
                                                                <option  value="203">CH (+41)</option>
                                                                <option  value="52">CI (+225)</option>
                                                                <option  value="50">CK (+682)</option>
                                                                <option  value="42">CL (+56)</option>
                                                                <option  value="36">CM (+237)</option>
                                                                <option  value="43">CN (+86)</option>
                                                                <option  value="46">CO (+57)</option>
                                                                <option  value="51">CR (+506)</option>
                                                                <option  value="54">CU (+53)</option>
                                                                <option  value="38">CV (+238)</option>
                                                                <option  value="44">CX (+61)</option>
                                                                <option  value="55">CY (+357)</option>
                                                                <option  value="56">CZ (+420)</option>
                                                                <option  value="79">DE (+49)</option>
                                                                <option  value="58">DJ (+253)</option>
                                                                <option  value="57">DK (+45)</option>
                                                                <option  value="59">DM (+1)</option>
                                                                <option  value="60">DO (+1)</option>
                                                                <option  value="3">DZ (+213)</option>
                                                                <option  value="61">EC (+593)</option>
                                                                <option  value="66">EE (+372)</option>
                                                                <option  value="62">EG (+20)</option>
                                                                <option  value="232">EH (+212)</option>
                                                                <option  value="65">ER (+291)</option>
                                                                <option  value="194">ES (+34)</option>
                                                                <option  value="67">ET (+251)</option>
                                                                <option  value="71">FI (+358)</option>
                                                                <option  value="70">FJ (+679)</option>
                                                                <option  value="68">FK (+500)</option>
                                                                <option  value="138">FM (+691)</option>
                                                                <option  value="69">FO (+298)</option>
                                                                <option  value="72">FR (+33)</option>
                                                                <option  value="76">GA (+241)</option>
                                                                <option  value="84">GD (+1)</option>
                                                                <option  value="78">GE (+995)</option>
                                                                <option  value="73">GF (+594)</option>
                                                                <option  value="80">GH (+233)</option>
                                                                <option  value="81">GI (+350)</option>
                                                                <option  value="83">GL (+299)</option>
                                                                <option  value="77">GM (+220)</option>
                                                                <option  value="88">GN (+224)</option>
                                                                <option  value="85">GP (+590)</option>
                                                                <option  value="64">GQ (+240)</option>
                                                                <option  value="82">GR (+30)</option>
                                                                <option  value="193">GS (+500)</option>
                                                                <option  value="87">GT (+502)</option>
                                                                <option  value="86">GU (+1)</option>
                                                                <option  value="89">GW (+245)</option>
                                                                <option  value="90">GY (+592)</option>
                                                                <option  value="95">HK (+852)</option>
                                                                <option  value="92">HM (+672)</option>
                                                                <option  value="94">HN (+504)</option>
                                                                <option  value="53">HR (+385)</option>
                                                                <option  value="91">HT (+509)</option>
                                                                <option  value="96">HU (+36)</option>
                                                                <option  value="99">ID (+62)</option>
                                                                <option  value="102">IE (+353)</option>
                                                                <option  value="103">IL (+972)</option>
                                                                <option  value="1140">IMN (+44)</option>
                                                                <option selected value="98">IN (+91)</option>
                                                                <option  value="30">IO (+1)</option>
                                                                <option  value="101">IQ (+964)</option>
                                                                <option  value="100">IR (+98)</option>
                                                                <option  value="1138">IRN (+98)</option>
                                                                <option  value="97">IS (+354)</option>
                                                                <option  value="104">IT (+39)</option>
                                                                <option  value="105">JM (+1)</option>
                                                                <option  value="107">JO (+962)</option>
                                                                <option  value="1129">JOR (+962)</option>
                                                                <option  value="106">JP (+81)</option>
                                                                <option  value="109">KE (+254)</option>
                                                                <option  value="114">KG (+996)</option>
                                                                <option  value="35">KH (+855)</option>
                                                                <option  value="110">KI (+686)</option>
                                                                <option  value="47">KM (+269)</option>
                                                                <option  value="177">KN (+1)</option>
                                                                <option  value="111">KP (+850)</option>
                                                                <option  value="112">KR (+82)</option>
                                                                <option  value="113">KW (+965)</option>
                                                                <option  value="39">KY (+1)</option>
                                                                <option  value="108">KZ (+7)</option>
                                                                <option  value="115">LA (+856)</option>
                                                                <option  value="117">LB (+961)</option>
                                                                <option  value="178">LC (+1)</option>
                                                                <option  value="121">LI (+423)</option>
                                                                <option  value="195">LK (+94)</option>
                                                                <option  value="119">LR (+231)</option>
                                                                <option  value="118">LS (+266)</option>
                                                                <option  value="122">LT (+370)</option>
                                                                <option  value="123">LU (+352)</option>
                                                                <option  value="116">LV (+371)</option>
                                                                <option  value="120">LY (+218)</option>
                                                                <option  value="143">MA (+212)</option>
                                                                <option  value="140">MC (+377)</option>
                                                                <option  value="139">MD (+373)</option>
                                                                <option  value="126">MG (+261)</option>
                                                                <option  value="132">MH (+692)</option>
                                                                <option  value="125">MK (+389)</option>
                                                                <option  value="130">ML (+223)</option>
                                                                <option  value="145">MM (+95)</option>
                                                                <option  value="1122">MMR (+95)</option>
                                                                <option  value="141">MN (+976)</option>
                                                                <option  value="124">MO (+853)</option>
                                                                <option  value="158">MP (+1)</option>
                                                                <option  value="133">MQ (+596)</option>
                                                                <option  value="134">MR (+222)</option>
                                                                <option  value="142">MS (+1)</option>
                                                                <option  value="131">MT (+356)</option>
                                                                <option  value="135">MU (+230)</option>
                                                                <option  value="129">MV (+960)</option>
                                                                <option  value="127">MW (+265)</option>
                                                                <option  value="137">MX (+52)</option>
                                                                <option  value="128">MY (+60)</option>
                                                                <option  value="144">MZ (+258)</option>
                                                                <option  value="146">NA (+264)</option>
                                                                <option  value="151">NC (+687)</option>
                                                                <option  value="154">NE (+227)</option>
                                                                <option  value="157">NF (+6723)</option>
                                                                <option  value="155">NG (+234)</option>
                                                                <option  value="153">NI (+505)</option>
                                                                <option  value="149">NL (+31)</option>
                                                                <option  value="159">NO (+47)</option>
                                                                <option  value="148">NP (+977)</option>
                                                                <option  value="147">NR (+674)</option>
                                                                <option  value="156">NU (+683)</option>
                                                                <option  value="160">OM (+968)</option>
                                                                <option  value="163">PA (+507)</option>
                                                                <option  value="166">PE (+51)</option>
                                                                <option  value="74">PF (+689)</option>
                                                                <option  value="164">PG (+675)</option>
                                                                <option  value="167">PH (+63)</option>
                                                                <option  value="161">PK (+92)</option>
                                                                <option  value="169">PL (+48)</option>
                                                                <option  value="197">PM (+508)</option>
                                                                <option  value="168">PN (+64)</option>
                                                                <option  value="171">PR (+1)</option>
                                                                <option  value="170">PT (+351)</option>
                                                                <option  value="162">PW (+680)</option>
                                                                <option  value="165">PY (+595)</option>
                                                                <option  value="172">QA (+974)</option>
                                                                <option  value="173">RE (+262)</option>
                                                                <option  value="174">RO (+40)</option>
                                                                <option  value="175">RU (+7)</option>
                                                                <option  value="1128">RUS (+7)</option>
                                                                <option  value="176">RW (+250)</option>
                                                                <option  value="183">SA (+966)</option>
                                                                <option  value="190">SB (+677)</option>
                                                                <option  value="185">SC (+248)</option>
                                                                <option  value="198">SD (+249)</option>
                                                                <option  value="202">SE (+46)</option>
                                                                <option  value="196">SH (+290)</option>
                                                                <option  value="189">SI (+386)</option>
                                                                <option  value="200">SJ (+47)</option>
                                                                <option  value="188">SK (+421)</option>
                                                                <option  value="186">SL (+232)</option>
                                                                <option  value="181">SM (+378)</option>
                                                                <option  value="184">SN (+221)</option>
                                                                <option  value="191">SO (+252)</option>
                                                                <option  value="199">SR (+597)</option>
                                                                <option  value="1134">SRB (+381)</option>
                                                                <option  value="182">ST (+239)</option>
                                                                <option  value="63">SV (+503)</option>
                                                                <option  value="204">SY (+963)</option>
                                                                <option  value="1120">SYR (+963)</option>
                                                                <option  value="201">SZ (+268)</option>
                                                                <option  value="216">TC (+1)</option>
                                                                <option  value="41">TD (+235)</option>
                                                                <option  value="75">TF (+594)</option>
                                                                <option  value="209">TG (+228)</option>
                                                                <option  value="208">TH (+66)</option>
                                                                <option  value="206">TJ (+992)</option>
                                                                <option  value="210">TK (+690)</option>
                                                                <option  value="215">TM (+993)</option>
                                                                <option  value="213">TN (+216)</option>
                                                                <option  value="211">TO (+676)</option>
                                                                <option  value="214">TR (+90)</option>
                                                                <option  value="212">TT (+1)</option>
                                                                <option  value="217">TV (+688)</option>
                                                                <option  value="205">TW (+886)</option>
                                                                <option  value="1123">TWN (+886)</option>
                                                                <option  value="207">TZ (+255)</option>
                                                                <option  value="1137">TZA (+255)</option>
                                                                <option  value="219">UA (+380)</option>
                                                                <option  value="218">UG (+256)</option>
                                                                <option  value="223">UM (+1)</option>
                                                                <option  value="224">UY (+598)</option>
                                                                <option  value="225">UZ (+998)</option>
                                                                <option  value="93">VA (+379)</option>
                                                                <option  value="179">VC (+1)</option>
                                                                <option  value="227">VE (+58)</option>
                                                                <option  value="229">VG (+1)</option>
                                                                <option  value="230">VI (+1)</option>
                                                                <option  value="1139">VIR (+1)</option>
                                                                <option  value="228">VN (+84)</option>
                                                                <option  value="1124">VNM (+84)</option>
                                                                <option  value="226">VU (+678)</option>
                                                                <option  value="231">WF (+681)</option>
                                                                <option  value="180">WS (+685)</option>
                                                                <option  value="233">YE (+967)</option>
                                                                <option  value="136">YT (+262)</option>
                                                                <option  value="192">ZA (+27)</option>
                                                                <option  value="234">ZM (+260)</option>
                                                                <option  value="235">ZW (+263)</option>
                                                              </select>
                            </div>
                    </div>
				               
				                <div class="col-sm-12">
				                    <div class="form-group">
					                     <div class="form-group">               
                        <textarea type="text" class="login-input" placeholder="Description" name="description" ng-model="order.description" required="" style="height: 46px;border: 1px solid #e6e6e6;width: 100%;padding: 10px;"> </textarea>                      
                                 <span class="input-icon">
                                    <i class="fa fa-comments"></i>
                                </span>
                    </div>
										<div class="help-block with-errors"></div>
				                    </div>
				                </div>
				                <div class="col-sm-12">
				                    <div class="form-group">
					                    <input name="form-botcheck" class="form-control" type="hidden" value="">
										<input type="submit" value="Submit" name='submit' class="btn btn-success ulockd-btn-green btn-block">
				                    </div>
				                </div>
			                </div>
             
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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</html>