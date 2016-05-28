<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Faculty Cloud - Add Faculty </title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<?php include_once 'lib/cdn.php'; ?>


	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<?php include_once 'lib/header.php'; ?>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					
					<div class="section-body contain-lg">
						<div class="row">

							<!-- BEGIN ADD CONTACTS FORM -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-head style-primary">
										<header>Add a new faculty</header>
									</div>
									<form class="form" role="form">

										<!-- BEGIN DEFAULT FORM ITEMS -->
										<div class="card-body style-primary form-inverse">
											<div class="row">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group floating-label">
																<input type="text" class="form-control input-lg" id="firstname" name="firstname">
																<label for="firstname">First name</label>
															</div>
														</div><!--end .col -->
														<div class="col-md-6">
															<div class="form-group floating-label">
																<input type="text" class="form-control input-lg" id="lastname" name="lastname">
																<label for="lastname">Last name</label>
															</div>
														</div><!--end .col -->
													</div><!--end .row -->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group floating-label">
																<input type="text" class="form-control" id="autocomplete1" name="company" data-source="data/countries.json">
																<label for="company">Department</label>
															</div>
														</div><!--end .col -->
														<div class="col-md-6">
															<div class="form-group floating-label">
																<input type="text" class="form-control" id="email" name="functiontitle">
																<label for="functiontitle">Email</label>
															</div>
														</div><!--end .col -->
													</div><!--end .row -->
												</div><!--end .col -->
											</div><!--end .row -->
										</div><!--end .card-body -->
										<!-- END DEFAULT FORM ITEMS -->

										<!-- BEGIN FORM TABS -->
										<div class="card-head style-primary">
											<ul class="nav nav-tabs tabs-text-contrast tabs-accent" data-toggle="tabs">
												<li class="active"><a href="#contact">CONTACT INFO</a></li>
												<li><a href="#experience">DEVICES</a></li>
												<li><a href="#skills">TSF</a></li>
												<li><a href="#general">GENERAL</a></li>
											</ul>
										</div><!--end .card-head -->
										<!-- END FORM TABS -->

										<!-- BEGIN FORM TAB PANES -->
										<div class="card-body tab-content">
											<div class="tab-pane active" id="contact">
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" class="form-control" id="f_id" name="mobile" data-inputmask="'mask':'9999-9999-9'">
																	<label for="mobile">Faculty Id</label>
																</div>
															</div><!--end .col -->
															<div class="col-md-6">
																<div class="form-group">
																	<input type="text" class="form-control" id="phone_no" name="phone" data-inputmask="'mask':'9999-9999-999'">
																	<label for="phone">Phone no</label>
																</div>
															</div><!--end .col -->
														</div><!--end .row -->
														<div class="form-group">
															<select class="form-control select2-list" id="f_type" multiple>
																	<option value="assistant_professor">Assistant Professor</option>
																	<option value="professor">Professor</option>
																	<option value="special_professor">Special Faculty</option>	
															</select>
															<label>Faculty type</label>
														</div><!--end .form-group -->
														<div class="row">
															<div class="col-md-8">
																<div class="form-group">
																	<select class="form-control select2-list" id="f_campus" multiple="multiple">
																		<option value="Campus 1">Campus 1</option>
																		<option value="Campus 2">Campus 2</option>
																		<option value="Campus 3">Campus 3</option>	
																		<option value="Campus 4">Campus 4</option>	
																	</select>
																	<label for="street">Campus</label>
																</div>
															</div><!--end .col -->
															<div class="col-md-4">
																<div class="form-group">
																	<select class="form-control" id="f_floor">
																		<option value=""></option>
																		<option value="Floor 1">Floor 1</option>
																		<option value="Floor 2">Floor 2</option>
																		<option value="Floor 3">Floor 3</option>	
																		<option value="Floor 4">Floor 4</option>	
																	</select>

																	<label for="streetnumber">Floor</label>
																</div>
															</div><!--end .col -->
														</div><!--end .row -->
														<div class="row">
															<div class="col-md-8">
																<div class="form-group">
																	<input type="text" class="form-control" id="f_room" name="city">
																	<label for="city">Room no</label>
																</div>
															</div><!--end .col -->
															<div class="col-md-4">
																<div class="form-group">
																	<input type="text" class="form-control" id="f_others" name="zip">
																	<label for="zip">Others</label>
																</div>
															</div><!--end .col -->
														</div><!--end .row -->
													</div><!--end .col -->
													
												</div><!--end .row -->
											</div><!--end .tab-pane -->
											<div class="tab-pane" id="experience">
												<ul class="list-unstyled" id="experienceList"></ul>
												<div class="form-group">
													<a class="btn btn-raised btn-default-bright" data-duplicate="experienceTmpl" data-target="#experienceList">ADD NEW DEVICE</a>
												</div><!--end .form-group -->
											</div><!--end .tab-pane -->
											<div class="tab-pane " id="skills">
												<ul class="list-unstyled" id="skillsList"></ul>
												<div class="form-group">
													<a class="btn btn-raised btn-default-bright" data-duplicate="skillTmpl" data-target="#skillsList">ADD NEW SCHEDULE</a>
												</div><!--end .form-group -->
											</div><!--end .tab-pane -->
											<div class="tab-pane" id="general">
												<div class="form-group">
													<textarea id="summernote" name="message" class="form-control control-4-rows" placeholder="Enter note ..." spellcheck="false"></textarea>
												</div><!--end .form-group -->
											</div><!--end .tab-pane -->
										</div><!--end .card-body.tab-content -->
										<!-- END FORM TAB PANES -->

										<!-- BEGIN FORM FOOTER -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<a class="btn btn-flat" id="demo" href="#">CANCEL</a>
												<button type="button" id="addThisPerson" class="btn btn-flat btn-accent">ADD THIS PERSON</button>
												<a class="btn btn-flat" id="test" href="#">test</a>

											</div><!--end .card-actionbar-row -->
										</div><!--end .card-actionbar -->
										<!-- END FORM FOOTER -->

									</form>
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ADD CONTACTS FORM -->
							<!-- modal -->
							<div id="content2" style="display:none">
								Form has been canceled !
							</div>
							<div id="successModal" style="display:none">
								Person has beed added !
							</div>
							<div id="errorModel" style="display:none">
								Oh ! You've to fill some field at least !
							</div>
<!-- end of modal -->
						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<?php include_once 'lib/navigation.php'; ?>
			<!-- END MENUBAR -->

			<!-- BEGIN OFFCANVAS RIGHT -->
		
			<!-- END OFFCANVAS RIGHT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->

		<!-- BEGIN EXPERIENCE TEMPLATES -->
		<script type="text/html" id="experienceTmpl">
			<li class="clearfix">
				<div class="page-header no-border holder">
					<a class="btn btn-icon-toggle btn-accent btn-delete stick-top-right"><span class="md md-delete"></span></a>
					<h4 class="text-accent">Device <%=index%></h4>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<input type="text" class="form-control" id="f_dev_base_mac-<%=index%>" name="experience-company-<%=index%>">
							<label for="experience-company-<%=index%>">Base Router MAC Address</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="text" class="form-control" id="f_dev_mac-<%=index%>" name="experience-functiontitle-<%=index%>">
							<label for="experience-functiontitle-<%=index%>">Own MAC Address</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input type="text" class="form-control" id="f_dev_imei-<%=index%>" name="experience-functiontitle-<%=index%>">
							<label for="experience-functiontitle-<%=index%>">Associated IMEI</label>
						</div>
					</div>
				</div>
				
			</li>
		</script>
		<!-- END EXPERIENCE TEMPLATES -->

		<!-- BEGIN SKILLS TEMPLATES -->
		<script type="text/html" id="skillTmpl">
			<li class="clearfix">
				<div class="row">
					<div class="col-xs-5">
						<div class="form-group">
							<input type="text" class="form-control" id="f_schedule-<%=index%>" name="skill-<%=index%>">
							<label for="skill-<%=index%>">Schedule <%=index%></label>
						</div>
					</div>

					<div class="col-xs-3">
						<div class="form-group">
							<select class="form-control select2-list" id="f_sch_days-<%=index%>" name="skill-<%=index%>" >
								<option value="Campus 1"></option>
								<option value="Saturday">Saturday</option>
								<option value="Sunday">Sunday</option>
								<option value="Monday">Monday</option>	
								<option value="Tuesday">Tuesday</option>	
								<option value="Wednesday">Wednesday</option>	
								<option value="Thursday ">Thursday</option>
							</select>
							<label for="skill-<%=index%>">Day <%=index%></label>
						</div>
					</div>


					<div class="col-xs-2">
						<div class="form-group">
							<select class="form-control select2-list" id="f_sch_start-<%=index%>" name="skill-<%=index%>" >
								<option value=""></option>
								<option value="08:00">08:00 AM</option>
								<option value="09:00">09:00 AM</option>
								<option value="10:00">10:00 AM</option>	
								<option value="11:00">11:00 AM</option>
								<option value="12:00">12:00 PM</option>
								<option value="01:00">01:00 PM</option>
								<option value="02:00">02:00 PM</option>	
								<option value="03:00">03:00 PM</option>	
							</select>

							<label for="skill-<%=index%>">Start <%=index%></label>
						</div>
					</div>
					<div class="col-xs-2">
						<div class="form-group">
							<select class="form-control select2-list" id="f_sch_end-<%=index%>" name="skill-<%=index%>" >
								<option value=""></option>
								<option value="08:00">08:00 AM</option>
								<option value="09:00">09:00 AM</option>
								<option value="10:00">10:00 AM</option>	
								<option value="11:00">11:00 AM</option>
								<option value="12:00">12:00 PM</option>
								<option value="01:00">01:00 PM</option>
								<option value="02:00">02:00 PM</option>	
								<option value="03:00">03:00 PM</option>		
							</select>
							<label for="skill-<%=index%>">End <%=index%></label>
						</div>
					</div>
				</div>
			</li>
		</script>
		<!-- END SKILLS TEMPLATES -->
		<?php include_once 'lib/js_all.php'; ?>

		<script type="text/javascript">

				var schedules = [];

				$("#test").click(function(event) {
					//console.log()
				

					var listItems = $("#skillsList").children();

					var count = listItems.length;
					for (var i = 1; i <= count; i++) {
						var schedules_name = $("#f_schedule-" + i).val();
						var schedules_day = $("#f_sch_days-" + i).val();
						var schedules_start = $("#f_sch_start-" + i).val();
						var schedules_end = $("#f_sch_end-" + i).val();


						var sch_object = { 
							
							"schedules_name" : schedules_name, 
							"schedules_day"  : schedules_day,
							"schedules_start" :schedules_start ,
							"schedules_end"  : schedules_end
						
						};

						schedules.push(sch_object);

						
					}
					console.log(schedules);
					/* Act on the event */
				});

			
				$('#demo').click(function  (e) {
					// body...
					$('#content2').notifyModal({ duration : 2500, placement : 'center', onTop : true, });
				})

				$('#addThisPerson').click(function(e) {
					//contact
					var firstname = $('#firstname').val();
					var lastname = 	$('#lastname').val();	
					var f_dept = 	$('#autocomplete1').val();
					var f_email = 	$('#email').val();
					var f_id = 		$('#f_id').val();

					f_id = f_id.replace(/[_]/g, "");

					var f_phone = 	$('#phone_no').val();
					var f_type = 	$('#f_type').val();
					var f_campus = 	$('#f_campus').val();
					var f_floor = 	$('#f_floor').val();
					var f_room = 	$('#f_room').val();
					var f_others = 	$('#f_others').val();

					//device
					var f_dev_base_mac = 	$('#f_dev_base_mac-1').val();
					var f_dev_mac = 		$('#f_dev_mac-1').val();					
					var f_dev_imei = 		$('#f_dev_imei-1').val();
					
					//TSF

					var f_schedule = 	$('#f_schedule-1').val();
					var f_sch_days = 	$('#f_sch_days-1').val();					
					var f_sch_start = 	$('#f_sch_start-1').val();
					var f_sch_end = 	$('#f_sch_end-1').val();

					var f_name = firstname + " " + lastname ;
					
					if(firstname && lastname && f_id && f_type && f_campus  ) {

						socket.emit('addFaculty', { 
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
							"full_sch"  : schedules
						});

						$('#successModal').notifyModal({ duration : 2500, placement : 'center', onTop : true, });
					} else {
						$('#errorModel').notifyModal({ duration : 2500, placement : 'center', onTop : true, });
					}
					
					

				});

		</script>


		<!-- END JAVASCRIPT -->

	</body>
</html>