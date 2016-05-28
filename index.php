<!DOCTYPE html>
<html lang="en">
<head>
	<title>Faculty Cloud - Faculty List</title>

	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your,keywords">
	<meta name="description" content="Short explanation about this website">
	<!-- END META -->

	<!-- BEGIN STYLESHEETS -->
	<?php include_once 'lib/cdn.php'; ?>
	<!-- END STYLESHEETS -->
	<style type="text/css">
		.imgView {
		    width: 100%;
		    height: 100%;
			}

			.imageItem {
			   
			    margin: 0px;
			    padding: 0px;
			   
			    width: 80px;
			    height: 93px;
			}


	</style>
</head>
<body class="menubar-hoverable header-fixed ">

	<!-- BEGIN HEADER-->
	<?php include_once 'lib/header.php' ; ?>
	<!-- END HEADER-->

	<!-- BEGIN BASE-->
	<div id="base">



		<!-- BEGIN CONTENT-->
		<div id="content">
			<section>
				<div class="section-header">
					<ol class="breadcrumb">
						<li class="active">Faculty List</li>
<!-- 							<a href="#" data-toggle="modal" id="formMod" faculty-id="3311" data-target="#formModal">Test</a>
-->						</ol>
</div>
<div class="section-body">
	<div class="card">

		<!-- BEGIN SEARCH HEADER -->
		<div class="card-head style-primary">
			<div class="tools pull-left">
				<form class="navbar-search" role="search">
					<div class="form-group">
						<input type="text" class="form-control" name="contactSearch" placeholder="Enter your keyword">
					</div>
					<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<div class="tools">
				<a class="btn btn-floating-action btn-default-light" href="add.php"><i class="fa fa-plus"></i></a>
			</div>
			<div class="tools">
			</div>

		</div><!--end .card-head -->
		<!-- END SEARCH HEADER -->


		<!-- BEGIN SEARCH RESULTS -->
		<div class="card-body">
			<div class="row">

				<!-- BEGIN SEARCH NAV -->
				<div class="col-sm-4 col-md-3 col-lg-2">
					<div class="card">
						<div class="card-body no-padding">
							<ul class="nav nav-pills nav-stacked list">

								<li><small>CATEGORIES</small></li>

								<li class="active">
									<a class="tile-content ink-reaction" href="#">All Faculty <small class="pull-right text-bold opacity-75">153</small></a>
								</li>

								<li><a href="#">ARCH <small class="pull-right text-bold opacity-75">16</small></a></li>
								<li><a href="#">BBA <small class="pull-right text-bold opacity-75">76</small></a></li>
								<li><a href="#">CSE<small class="pull-right text-bold opacity-75">76</small></a></li>
								<li><a href="#">EEE<small class="pull-right text-bold opacity-75">76</small></a></li>

								<li class="hidden-xs"><small>LAST VIEWED</small></li>


							</ul>
						</div>
					</div>
				</div><!--end .col -->
				<!-- END SEARCH NAV -->

				<div class="col-sm-8 col-md-9 col-lg-10">

					<!-- BEGIN SEARCH RESULTS LIST -->
					<div class="margin-bottom-xxl">
						<span class="text-light text-lg">Filtered results <strong>34</strong></span>
						<div class="btn-group btn-group-sm pull-right">
							<button type="button" class="btn btn-default-light dropdown-toggle" data-toggle="dropdown">
								<span class="glyphicon glyphicon-arrow-down"></span> Sort
							</button>
							<ul class="dropdown-menu dropdown-menu-right animation-dock" role="menu">
								<li><a href="#">First name</a></li>
								<li><a href="#">Last name</a></li>
								<li><a href="#">Email address</a></li>
							</ul>
						</div>
					</div><!--end .margin-bottom-xxl -->
					<div class="list-results" id="list-results">




					</div><!--end .list-results -->

					<!-- BEGIN SEARCH RESULTS LIST -->

					<!-- BEGIN SEARCH RESULTS PAGING -->
					<div class="text-center">
						<ul class="pagination">
							<li class="disabled"><a href="#">«</a></li>
							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">»</a></li>
						</ul>
					</div><!--end .text-center -->

					<!-- BEGIN SEARCH RESULTS PAGING -->
				</div><!--end .col -->
			</div><!--end .row -->
		</div><!--end .card-body -->
		<!-- END SEARCH RESULTS -->

	</div><!--end .card -->
</div><!--end .section-body -->
</section>
</div><!--end #content-->
<!-- END CONTENT -->

<!-- BEGIN MENUBAR-->
<?php include_once 'lib/navigation.php' ; ?>
<!-- END MENUBAR -->

<!-- BEGIN FORM MODAL MARKUP -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="formModalLabel">UPDATE FACULTY INFORMATION</h4>
			</div>			
			
			<ul class="nav nav-tabs" data-toggle="tabs">
				<li class="active"><a href="#first1">BASIC INFO</a></li>
				<li><a href="#second1">EXTRA INFO</a></li>
				<li><a href="#third1">DEVICE</a></li>
				<li><a href="#fourth1">TSF</a></li>
				<li><a href="#sixth1">STATUS</a></li>
				<li><a href="#seventh">TSF FULL</a></li>
			</ul>
			
			<div class="card-body tab-content">
				<div class="tab-pane active" id="first1">
					<form class="form">

						
						<input type="hidden" class="form-control" id="db_id_u">
						

						<div class="form-group">
							<input type="text" class="form-control" id="f_id_u">
							<label for="regular1">Faculty Id</label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="f_name_u">
							<label for="regular1">Full Name</label>
						</div>
						<div class="form-group">
							<label for="regular1">Department</label>
							<select class="form-control" id="f_dept_u">
								<option value=""></option>
								<option value="Faculty of Science & Information Technology">Faculty of Science & Information Technology</option>
								<option value="Faculty of Engineering">Faculty of Engineering</option>
								<option value="Faculty of Business Administration">Faculty of Business Administration</option>
								<option value="Faculty of Art & Social Sciences">Faculty of Art & Social Sciences</option>	
							</select>

						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="f_email_u">
							<label for="regular1">Email</label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="f_phone_u">
							<label for="regular1">Phone</label>
						</div>
					</form>

				</div>
				<div class="tab-pane" id="second1">
					<form class="form">
						<div class="form-group">
							<label for="regular1">Faculty Type</label>
							<select class="form-control" id="f_type_u">
								<option value="assistant_professor">Assistant Professor</option>
								<option value="professor">Professor</option>
								<option value="special_professor">Special Faculty</option>
							</select>

						</div>
						<div class="form-group">
							<label for="regular1">Campus</label>
							<select class="form-control" id="f_campus_u">
								<option value="Campus 1">Campus 1</option>
								<option value="Campus 2">Campus 2</option>
								<option value="Campus 3">Campus 3</option>
								<option value="Campus 4">Campus 4</option>
								<option value="Campus 5">Campus 5</option>	
							</select>
							
						</div>
						<div class="form-group">
							<label for="regular1">Floor</label>
							<select class="form-control" id="f_floor_u">
								<option value="Floor 1">Floor 1</option>
								<option value="Floor 2">Floor 2</option>
								<option value="Floor 3">Floor 3</option>
								<option value="Floor 4">Floor 4</option>
								<option value="Floor 5">Floor 5</option>	
							</select>

						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="f_room_u">
							<label for="regular1">Room no.</label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="f_other_u">
							<label for="regular1">Others</label>
						</div>
					</form>
					

				</div>
				<div class="tab-pane" id="third1">
					<form class="form">
						<div class="form-group">
							<input type="text" class="form-control" id="f_base_u" data-inputmask="'mask':'99-99-99-99-99'">
							<label for="regular1">Base Router MAC</label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="f_o_m_u" data-inputmask="'mask':'99-99-99-99-99'">
							<label for="regular1">Faculty Device MAC</label>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="f_o_i_u">
							<label for="regular1">Faculty Device IMEI</label>
						</div>
					</form>
					
				</div>
				<div class="tab-pane" id="fourth1">
					<form class="form">
						<div class="form-group">
							<input type="text" class="form-control" id="f_sch_n_u">
							<label for="regular1">Schedule Name</label>
						</div>
						<div class="form-group">

							<label for="regular1">Schedule Days</label>
							<select class="form-control" id="f_sch_d_u">
								<option value="null"></option>
								<option value="Saturday">Saturday</option>
								<option value="Sunday">Sunday</option>
								<option value="Monday">Monday</option>	
								<option value="Tuesday">Tuesday</option>	
								<option value="Wednesday">Wednesday</option>	
								<option value="Thursday ">Thursday</option>			
							</select>
						</div>
						<div class="form-group">
							
							<label for="regular1">Start Time</label>
							<select class="form-control" id="f_sch_s_u">
								<option value="null"></option>
								<option value="08:00">08:00 AM</option>
								<option value="09:00">09:00 AM</option>
								<option value="10:00">10:00 AM</option>	
								<option value="11:00">11:00 AM</option>
								<option value="12:00">12:00 PM</option>
								<option value="01:00">01:00 PM</option>
								<option value="02:00">02:00 PM</option>	
								<option value="03:00">03:00 PM</option>	
								<option value="04:00">04:00 PM</option>	
								<option value="05:00">05:00 PM</option>	
								<option value="06:00">06:00 PM</option>	
								<option value="07:00">07:00 PM</option>	
								<option value="08:00">08:00 PM</option>		
							</select>
						</div>
						<div class="form-group">
							<label for="regular1">End Time</label>
							<select class="form-control" id="f_sch_e_u">
								<option value="null"></option>
								<option value="08:00">08:00 AM</option>
								<option value="09:00">09:00 AM</option>
								<option value="10:00">10:00 AM</option>	
								<option value="11:00">11:00 AM</option>
								<option value="12:00">12:00 PM</option>
								<option value="01:00">01:00 PM</option>
								<option value="02:00">02:00 PM</option>	
								<option value="03:00">03:00 PM</option>	
								<option value="04:00">04:00 PM</option>	
								<option value="05:00">05:00 PM</option>	
								<option value="06:00">06:00 PM</option>	
								<option value="07:00">07:00 PM</option>	
								<option value="08:00">08:00 PM</option>		
							</select>

						</div>
					</form>
				</div>
				<div class="tab-pane" id="sixth1">
					<form class="form">
						<div class="form-group">
							
							<label for="regular1">Current Status (Override)</label>

							<select class="form-control" id="f_status_u">
								<option value="null"></option>
								<option value="Available">Available</option>
								<option value="Busy">Busy</option>
								<option value="Gone">Gone</option>		
							</select>




						</div>
						
					</form>
				</div>
				<div class="tab-pane" id="seventh">
					<form class="form">
						<div class="form-group">
							
							<label for="regular1">RAW FULL TSF</label>

							<pre class="" id="full_tsf">
									
							</pre>




						</div>
						
					</form>
				</div>				
				<button type="button" id="updateThisPerson" data-position="toast-bottom-right" data-dismiss="modal"  class="btn ink-reaction btn-primary position-toast">UPDATE THIS PERSON</button>
				<button type="button" id="removeThisPerson" data-position="toast-bottom-right" data-dismiss="modal" class="btn ink-reaction btn-danger position-toast-delete">DELETE</button>
			</div><!--end .card-body -->
			

			
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div><!--end #base-->
<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->
<?php include_once 'lib/js_all.php' ; ?>
<!-- END JAVASCRIPT -->
<script type="text/javascript">
	
	$( "#updateThisPerson" ).click(function() {

		var _id = $('#db_id_u').val();

		var f_name = 	$('#f_name_u').val();	
		var f_dept = 	$('#f_dept_u').val();
		var f_email = 	$('#f_email_u').val();
		var f_id = 		$('#f_id_u').val();

		f_id = f_id.replace(/[_]/g, "");

		var f_phone = 	$('#f_phone_u').val();
		var f_type = 	$('#f_type_u').val();
		var f_campus = 	$('#f_campus_u').val();
		var f_floor = 	$('#f_floor_u').val();
		var f_room = 	$('#f_room_u').val();
		var f_others = 	$('#f_other_u').val();
		// Device
		var f_dev_base_mac = 	$('#f_base_u').val();
		var f_dev_mac = 		$('#f_o_m_u').val();					
		var f_dev_imei = 		$('#f_o_i_u').val();
		//TSF
		var f_schedule = 	$('#f_sch_n_u').val();
		var f_sch_days = 	$('#f_sch_d_u').val();					
		var f_sch_start = 	$('#f_sch_s_u').val();
		var f_sch_end = 	$('#f_sch_e_u').val();
		var f_status = 		$('#f_status_u').val();

		socket.emit('updateFaculty', { 

			"_id" 	: 			_id,
			"f_name" : 			f_name ,
			"f_dept" : 			f_dept,
			"f_email" : 		f_email,
			"f_id" : 			f_id,
			"f_phone" : 		f_phone ,
			"f_type"  : 		f_type ,
			"f_campus" : 		f_campus,
			"f_floor" : 		f_floor ,
			"f_room" : 			f_room ,
			"f_others" : 		f_others ,
			"f_dev_base_mac" : 	f_dev_base_mac ,
			"f_dev_mac" : 		f_dev_mac ,
			"f_dev_imei" : 		f_dev_imei,
			"f_sch_name" : 		f_schedule ,
			"f_sch_day" : 		f_sch_days,
			"f_sch_start" : 	f_sch_start,
			"f_sch_end" : 		f_sch_end,
			"f_status" : 		f_status
		});

		
	  $("div#"+_id+" div.hbox-column.v-top > div > div.col-lg-12.margin-bottom-lg > a").text(f_name);
	  $("div#"+_id+" div.hbox-column.v-top > div > div.clearfix.opacity-75 > div.col-md-5 > a").text(f_id);
	  $("div#"+_id+" div.hbox-column.v-top > div > div.clearfix.opacity-75 > div.col-md-7 > a").text(f_email);  
	  $("div#"+_id+" div.hbox-column.v-top > div > div.clearfix.opacity-75 > div.col-lg-12 > span > a").text(f_dept + " , " + f_status );  
	  $("div#"+_id+" div.hbox-column.width-2 > img").attr("src" , "http://fsit.aiub.edu/Files/Uploads/"+ f_id +".jpg");  


	  


	  if(f_status == "Available") {
	    $("div#"+_id+" div.hbox-column.v-top > div > div.stick-top-right.small-padding").html('<span style ="background-color : #4ea851 ; color:white;padding:5px">AVAILABLE</span>'); 
	  } else if(f_status=="Busy") {
	    $("div#"+_id+" div.hbox-column.v-top > div > div.stick-top-right.small-padding").html('<span style ="background-color : #f44336 ; color:white;padding:5px">BUSY</span>'); 
	  } else if(f_status=="Gone") {
	    $("div#"+_id+" div.hbox-column.v-top > div > div.stick-top-right.small-padding").html('<span style ="background-color : #ff9800 ; color:white;padding:5px">GONE</span>'); 
	  } else {
	  	$("div#"+_id+" div.hbox-column.v-top > div > div.stick-top-right.small-padding").html('<span style ="background-color : #3dbec9 ; color:white;padding:5px">'+f_status.toUpperCase()+'</span>'); 
	  }


	});

	
	$( "#removeThisPerson" ).click(function() {

		var _id = $('#db_id_u').val();
		socket.emit('removeFaculty', { 
			"_id" 	: _id
		});

		$("div#"+_id).remove();

	});

	function doSomething (val) {
		$("#profilePic");
		val.src="assets/img/avatar9.jpg"
	}

	

</script>

</body>
</html>
