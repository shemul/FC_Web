<?php
	
	session_start();
	if(!$_SESSION['leamon'] =="green") {
 		header('Location: login.php');
	}



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Faculty Cloud - Faculty List</title>


	<!-- BEGIN STYLESHEETS -->
	<!-- CSS CDN  -->
	<?php include 'lib/css.php'; ?>
	<!-- END STYLESHEETS -->

	<!-- End of CSS CDN -->
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

<?php include 'lib/nav.php'; ?>



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
							<label for="regular1">Serial</label>
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
								<option value="0">Sunday</option>
								<option value="1">Monday</option>	
								<option value="2">Tuesday</option>	
								<option value="3">Wednesday</option>	
								<option value="4 ">Thursday</option>			
							</select>
						</div>
						<div class="form-group">
							
							<label for="regular1">Start Time</label>
							<select class="form-control" id="f_sch_s_u">
								<option value="null"></option>
								<option value="08:00">08:00</option>
								<option value="08:30">08:30</option>
								<option value="09:00">09:00</option>
								<option value="09:30">09:30</option>
								<option value="10:00">10:00</option>	
								<option value="11:00">11:00</option>
								<option value="12:00">12:00</option>
								<option value="12:30">12:30</option>
								<option value="13:00">13:00</option>
								<option value="14:00">14:00</option>	
								<option value="15:00">15:00</option>	
								<option value="16:00">16:00</option>	
								<option value="17:00">17:00</option>	
								<option value="18:00">18:00</option>	
								<option value="19:00">19:00</option>	
								<option value="20:00">20:00</option>		
							</select>
						</div>
						<div class="form-group">
							<label for="regular1">End Time</label>
							<select class="form-control" id="f_sch_e_u">
								<option value="null"></option>
								<option value="null"></option>
								<option value="08:00">08:00</option>
								<option value="08:30">08:30</option>
								<option value="09:00">09:00</option>
								<option value="09:30">09:30</option>
								<option value="10:00">10:00</option>	
								<option value="11:00">11:00</option>
								<option value="12:00">12:00</option>
								<option value="12:30">12:30</option>
								<option value="13:00">13:00</option>
								<option value="14:00">14:00</option>	
								<option value="15:00">15:00</option>	
								<option value="16:00">16:00</option>	
								<option value="17:00">17:00</option>	
								<option value="18:00">18:00</option>	
								<option value="19:00">19:00</option>	
								<option value="20:00">20:00</option>	
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
<?php include 'lib/js.php'; ?>

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
	  	$("div#"+_id+" div.hbox-column.v-top > div > div.stick-top-right.small-padding").html('<span style ="background-color : #3dbec9 ; color:white;padding:5px">'+f_status+'</span>'); 
	  }

	  window.location.reload(true); 
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

	function logout() {
		$.get('logout.php', function(data) {
			console.log(data);
			window.location.href = "login.php";
		});
		
	}

</script>

</body>
</html>
