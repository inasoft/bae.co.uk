
@include('dashboard-layout.dashboard-header')

@include('dashboard-layout.dashboard-left-sidebar')


<style>
.input-group.date .input-group-addon i {
    cursor: inherit;
    width: 16px;
    height: 16px;
}

.add_margin{
	margin-left:-3px;
}

.add_width{
	width:450px;
}

.add_upload{
	height: 40px;
    background: #f39c12;
    cursor: pointer;
    border-right: none;
}

@media (max-width: 767px) {
	.add_margin{
	margin-left:0px;
}
.subject_p{
	        padding-left: 0px;
}

.pding_right{
	padding-right: 0px;
}

}





.subject_p{
	        padding-left: 117px;
}

.pding_right{
	padding-right: 75px;
}

.btn-default1 {
    background-color: #dd4b39;
    color: #fff;
    border-color: #ddd;
    width: 10%;
}

</style>
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="modal fade modal-assignment" id="submitAssignment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="thankYou">
                    <i class="fa fa-thumbs-up"></i> <br> Thanks for adding new Assignment
                </h2>
                <p>
                    Click 
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> to add more assignments !
                </p>
                <p>
                    Click <a href="/my-assignment" class="btn btn-primary" >Assignment</a> to see newly added assignment !

                </p>
            </div>

        </div>

    </div>

</div>

<div class="content-wrapper" style="background: url(dashboard_theme/dist/img/2.jpg) no-repeat center center fixed; background-size:cover; min-height:500px;">

   



    <!-- Main content -->

    <section class="content">

        <div class="row">

            <div class="col-md-12">

                <!-- Horizontal Form -->
                @if(Session::has('add-assignment'))
                <div class="fade_show alert alert-warning" id="confirm" style="padding: 10px;"><span>{{Session::get('add-assignment')}}, Please <a href="/my-assignment">Click Here </a> to view your submitted assignment details.</span></div>
                @endif
                @if($errors->has())
                <div class="fade_show alert alert-warning" id="confirm"><span>{{$errors->first()}}</span></div>
                @endif
                <div class="box box-info">

                    <div class="box-header with-border">

                        <h3 class="box-title" style="font-size: 25px;">Assignment Details</h3>

                    </div>

                    <!-- /.box-header -->

                    <!-- form start -->

                    <form action="<?= URL::to('/put/assignment/data') ?>" name="add-assignment" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        <div class="box-body">

                           <div class="row add_margin"> <div class="form-group col-sm-6 subject_p">

                                <label for="inputEmail3"  class="col-sm-2 control-label">Subject</label>



                                <div class="col-sm-10">

                                    <input type="text" name="subject" class="form-control" id="reqSubject" placeholder="Subject">

                                </div>

                            </div>
							
							<div class="form-group col-sm-6">

                                <label for="inputEmail3" class="col-sm-3 control-label">No of Pages</label>



                                <div class="col-sm-9">

                                    <input type="number" name="no_of_pages" class="form-control" id="regNoOfPages" placeholder="Enter No. of Pages">

                                </div>

                            </div>
							</div>

                           

                            <div class="row add_margin">
                            <div class="form-group col-sm-6">

                                <label for="Minimal" class="col-sm-4 control-label">Reference Style</label>

                                <div class="col-sm-8">

                                    <select class="form-control select2" name="ref_style"  id="reqRefStyle" style="width: 100%;">

                                        <option value="No reference">Select</option>

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

                                </div>

                            </div>
							 <div class="form-group col-sm-6">

                                 <label for="Date"  class="col-sm-3 control-label">Due Date</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">

                                        <div class="input-group-addon" style="padding: 0; padding-left: 4px;">

                                            <i class="fa fa-calendar"></i>

                                        </div>

                                        <input type="text" name="due_date" class="form-control pull-right" id="datepicker" style=" border-left:none;">

                                    </div>

                                </div>
                            </div>
							
                            </div>

                            <div class="form-group">

                                <label for="inputEmail3" class="col-sm-2 control-label">Expert</label>

                                <div class="col-sm-10 pding_right">

                                    <input type="text" name="expert" class="form-control" id="reqExpert" placeholder="Name of expert you want to hire(Optional)">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="Description"  class="col-sm-2 control-label">Description</label>

                                <div class="col-sm-10 pding_right">

                                    <textarea class="form-control" name="description" rows="3" id="reqDescription" placeholder="Describe your requirement"></textarea>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="UploadAssignment" class="col-sm-2 control-label">Upload File 1</label>

                                <div class="col-sm-10 pding_right">

                                    <div class="input-group date">



                                        <input type="file" required="" name="uploaded_file1" id="UploadAssignment1" class="form-control add_upload" placeholder="Browse Assignment" >

                                        <div class="input-group-addon">

                                            <i class="fa fa-table"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="form-group">

                                <label for="UploadAssignment" class="col-sm-2 control-label">Upload File 2</label>

                                <div class="col-sm-10 pding_right">

                                    <div class="input-group date">



                                        <input type="file" name="uploaded_file2" id="UploadAssignment2" class="form-control add_upload" placeholder="Browse Assignment">

                                        <div class="input-group-addon">

                                            <i class="fa fa-table"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="form-group">

                                <label for="UploadAssignment" class="col-sm-2 control-label">Upload File 3</label>

                                <div class="col-sm-10 pding_right">

                                    <div class="input-group date">



                                        <input type="file" name="uploaded_file3" id="UploadAssignment3" class="form-control add_upload" placeholder="Browse Assignment">

                                        <div class="input-group-addon">

                                            <i class="fa fa-table"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button class="btn btn-default cancel-request btn-default1" title="Are you sure" alt="Are you sure">Reset</button>
                                <button type="submit" onclick="submitForm(this);" data-toggle="modal"  data-target="#submitAssigment" class="btn btn-info pull-right" style="background-color: #00a65a;
                                        border-color: #00a65a;
                                 }">Submit Assignment</button>

                            </div>

                            <!-- /.box-footer -->



                        </div>

                    </form>

                </div>

                <!--/.col (right) -->

            </div>

            <!-- /.row -->

    </section>

    <!-- /.content -->

</div>

<!-- /.content-wrapper -->





<!-- Control Sidebar -->



<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed

     immediately after the control sidebar -->



<!-- ./wrapper -->

<script>
$('.dropdown-toggle').dropdown();
</script>

<script>

    $(document).ready(function(){
          $("#datepicker").datepicker({      
            dateFormat:"yy-mm-dd",
            autoclose: true,
           startDate: "today"
        });
        
  }); 

  $('.cancel-request').click(function(e)
{
  console.log($('#reqSubject').val());
  $('#reqSubject').val('');
  $('#datepicker').val('');
  $('#regNoOfPages').val('');
  $('#reqRefStyle').val('');
  $('#reqExpert').val('');
  $('#reqDescription').val('');

  $('#UploadAssignment1').val('');
  $('#UploadAssignment2').val('');
  $('#UploadAssignment3').val('');
  e.preventDefault();
  
  
});



</script>
<script>
    function submitForm(btn) {
     if($('#reqSubject').val()&&$('#datepicker').val()&&$('#regNoOfPages').val()&&$('#reqRefStyle').val()&&$('#reqExpert').val()&&$('#reqDescription').val()&&$('#UploadAssignment1').val())
     {
         
         
        // disable the button
        btn.disabled = true;
        // submit the form    
        btn.form.submit();  
         
         
     }
  
  
  
  

  
       
    }
</script>


@include('dashboard-layout.dashboard-footer')
