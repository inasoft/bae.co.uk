<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>About Us - Bestassignmentexperts.com</title>
<meta name="description" content="About US|Assignment help|Project Management help USA">
@include('layout.header')

<style>
*,
*:after,
*:before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.clearfix:before,
.clearfix:after {
	content: " ";
	display: table;
}

.clearfix:after {
	clear: both;
}



/*Fun begins*/
.tab_container {
	width: 90%;
	margin: 0 auto;
	padding-top: 70px;
	position: relative;
}

input, section {
  clear: both;
  padding-top: 10px;
  display: none;
}

label {
     font-weight: 700;
    font-size: 15px;
    display: block;
    float: left;
    width: 15%;
    padding: 0.3em;
    color: #333;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    background: #fff;
    margin-left: 10px;
    border: 1px solid;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5 {
  display: block;
  padding: 20px;
  background: #fff;
  color: #999;
  border-bottom: 2px solid #f0f0f0;
}

.tab_container .tab-content p,
.tab_container .tab-content h3 ,
 divTableRow {
  -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}
.tab_container .tab-content h3  {
  text-align: center;
}

.tab_container [id^="tab"]:checked + label {
  background: #f27c66;
    box-shadow: inset 0 3px #f27c66;
    color: #fff;
}

.tab_container [id^="tab"]:checked + label .fa {
  color: #f27c66;
}

label .fa {
  font-size: 1.3em;
  margin: 0 0.4em 0 0;
}

/*Media query*/
@media only screen and (max-width: 930px) {
  label span {
    font-size: 14px;
  }
  label .fa {
    font-size: 14px;
  }
}

@media only screen and (max-width: 768px) {
  label span {
    display: none;
  }

  label .fa {
    font-size: 16px;
  }

  .tab_container {
    width: 98%;
  }
}

/*Content Animation*/
@keyframes fadeInScale {
  0% {
  	transform: scale(0.9);
  	opacity: 0;
  }
  
  100% {
  	transform: scale(1);
  	opacity: 1;
  }
}
.divTable {
    display: table;
    width: 100%;
	 -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}



.divTableBody {
    display: table-row-group;
	 -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}

.divTableRow {
       display: table-row;
    background-color: #eaeaea;
	 -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}

.divTableCell1, .divTableHead {
   display: table-cell;
    width: 25%;
    background: #969494;
    vertical-align: middle;
    font-size: 30px;
    color: #fff;
    text-align: center;
	 -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}

.divTableCell2, .divTableHead {
    display: table-cell;
        width: 5%;
    background: url(https://s3-ap-southeast-2.amazonaws.com/mah.cfront/new-images/arrow-right.png) no-repeat left;
}

.divTableCell3, .divTableHead {
       display: table-cell;
    padding: 12px 15px;
    width: 50%;
	 -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
	 -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}

.list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
	 -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}

.list-group-item>.badge {
    float: right;
	 -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}

.badge {
    display: inline-block;
    min-width: 10px;
    padding: 5px 7px;
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    line-height: 1;
    vertical-align: middle;
    white-space: nowrap;
    text-align: center;
    background-color: #777;
    border-radius: 9px;
	 -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}

.bdr {
   border-bottom: 1px solid #c1bfbf;
    width: 100%;
    margin: 0 auto;
       padding-top: 5px;
    margin-bottom: 5px;
}

.s_width{width: 264px !important;}

</style>


	<!-- page content -->
	<div class="page-content container clear-fix">

		
		
		<h1>Choose the service you looking for :</h1>
		<div class="tab_container">
			<input id="tab1" type="radio" name="tabs" checked>
			<label for="tab1"><span>All</span></label>

			<input id="tab2" type="radio" name="tabs">
			<label for="tab2"><span>Assignment</span></label>

			<input id="tab3" type="radio" name="tabs">
			<label for="tab3"><span>Essays</span></label>

			<input id="tab4" type="radio" name="tabs">
			<label for="tab4"><span>Home Work</span></label>

			<input id="tab5" type="radio" name="tabs">
			<label for="tab5">Programming</span></label>

			
			
			<section id="content1" class="tab-content">
  <div class="clear-fix">
						<div class="grid-col-row">
							
                                      <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>

<br/>
                                           <div class="divTableRow">
											<div class="divTableCell1">B</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
                                    <div class="divTableRow">
											<div class="divTableCell1">C</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
<div class="divTable">
											<div class="divTableBody">
												<div class="divTableRow">
													<div class="divTableCell1">D</div>
													<div class="divTableCell2">&nbsp;</div>
													<div class="divTableCell3">
														<a class="list-group-item bgn" href="https://myassignmenthelp.com/free-samples/management"> <span class="badge blank-badge">15</span>Management</a>
														
													
												<div class="bdr"></div>
					<a class="list-group-item bgn" href="https://myassignmenthelp.com/free-samples/medical"> <span class="badge blank-badge">15</span>Medical</a>
					
											</div></div></div></div>
										



										</div>


 <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>

<br/>
                                           <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
                                    <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
<div class="divTable">
											<div class="divTableBody">
												<div class="divTableRow">
													<div class="divTableCell1">M</div>
													<div class="divTableCell2">&nbsp;</div>
													<div class="divTableCell3">
														<a class="list-group-item bgn" href="https://myassignmenthelp.com/free-samples/management"> <span class="badge blank-badge">15</span>Management</a>
														
													
												<div class="bdr"></div>
					<a class="list-group-item bgn" href="https://myassignmenthelp.com/free-samples/medical"> <span class="badge blank-badge">15</span>Medical</a>
					
											</div></div></div></div>
										



										</div>

		      	
 <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>

<br/>
                                           <div class="divTableRow">
											<div class="divTableCell1">B</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
                                    <div class="divTableRow">
											<div class="divTableCell1">C</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
                                        <div class="divTable">
											<div class="divTableBody">
												<div class="divTableRow">
													<div class="divTableCell1">D</div>
													<div class="divTableCell2">&nbsp;</div>
													<div class="divTableCell3">
														<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Management</a>
														
													
												<div class="bdr"></div>
					<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Medical</a>
					
											</div></div></div></div>
										



										</div>

							</div>
							</div>

				
		      	
			</section>

			<section id="content2" class="tab-content">
			<div class="clear-fix">
						<div class="grid-col-row">
							
                                      <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>


<br/>
                                 
<br/>
<div class="divTable">
											<div class="divTableBody">
												<div class="divTableRow">
													<div class="divTableCell1">D</div>
													<div class="divTableCell2">&nbsp;</div>
													<div class="divTableCell3">
														<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Management</a>
														
													
												<div class="bdr"></div>
					<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Medical</a>
					
											</div></div></div></div>
										



										</div>


 <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>


                                          
                                    

										



										</div>

		      	
 <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>

<br/>
                                           <div class="divTableRow">
											<div class="divTableCell1">B</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
                                    
<br/>
                                       
										



										</div>

							</div>
							</div>
		      
			</section>

			<section id="content3" class="tab-content">
				<div class="clear-fix">
						<div class="grid-col-row">
							
                                      <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>


<br/>
                                 
<br/>
<div class="divTable">
											<div class="divTableBody">
												<div class="divTableRow">
													<div class="divTableCell1">D</div>
													<div class="divTableCell2">&nbsp;</div>
													<div class="divTableCell3">
														<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Management</a>
														
													
												<div class="bdr"></div>
					<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Medical</a>
					
											</div></div></div></div>
										



										</div>


 <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>


                                          
                                    

										



										</div>

		      	
 <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>

<br/>
                                           <div class="divTableRow">
											<div class="divTableCell1">B</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
                                    
<br/>
                                       
										



										</div>

							</div>
							</div>
		    
			</section>

			<section id="content4" class="tab-content">
				 <div class="clear-fix">
						<div class="grid-col-row">
                                      <div class="grid-col grid-col-4 s_width">
                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
                                    <div class="divTable">
											<div class="divTableBody">
												<div class="divTableRow">
													<div class="divTableCell1">D</div>
													<div class="divTableCell2">&nbsp;</div>
													<div class="divTableCell3">
														<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Management</a>
													<div class="bdr"></div>
					<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Medical</a>
					
											</div></div></div></div>
										</div>


 <div class="grid-col grid-col-4 s_width">
                                       <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
										</div>

		      	
 <div class="grid-col grid-col-4 s_width">
                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
                                           <div class="divTableRow">
											<div class="divTableCell1">B</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>

	</div>

							</div>
							</div>
				
		      	
			</section>

			<section id="content5" class="tab-content">
			                     <div class="clear-fix">
						<div class="grid-col-row">
							
                                      <div class="grid-col grid-col-4 s_width">



                                    <div class="divTableRow">
											<div class="divTableCell1">C</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
<div class="divTable">
											<div class="divTableBody">
												<div class="divTableRow">
													<div class="divTableCell1">D</div>
													<div class="divTableCell2">&nbsp;</div>
													<div class="divTableCell3">
														<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Management</a>
														
													
												<div class="bdr"></div>
					<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Medical</a>
					
											</div></div></div></div>
										



										</div>


 <div class="grid-col grid-col-4 s_width">

                                            <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>

<br/>
                                         
<br/>
                                    <div class="divTableRow">
											<div class="divTableCell1">A</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
<div class="divTable">
											<div class="divTableBody">
												<div class="divTableRow">
													<div class="divTableCell1">M</div>
													<div class="divTableCell2">&nbsp;</div>
													<div class="divTableCell3">
														<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Management</a>
														
													
												<div class="bdr"></div>
					<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">15</span>Medical</a>
					
											</div></div></div></div>
										



										</div>

		      	
 <div class="grid-col grid-col-4 s_width">

  
                                           <div class="divTableRow">
											<div class="divTableCell1">B</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>
<br/>
                                    <div class="divTableRow">
											<div class="divTableCell1">C</div>
											<div class="divTableCell2 td-arrow">&nbsp;</div>
											<div class="divTableCell3">
												<a class="list-group-item bgn" href="https://www.bestassignmentexperts.com/samples"> <span class="badge blank-badge">89</span>Accounting</a>      
										</div></div>

                                        
										



										</div>

							</div>
							</div>
			</section>
			
			
		</div>
		
	</div>
	<!-- / page content -->
	@include('layout.footer')
