<?php

		   session_start();

		   		
	   		if(isset($_SESSION['leamon'])) {
	 			header('Location: index.php');
	 		}
			



	 	   if($_SERVER['REQUEST_METHOD']=='POST')
           {
           		$username = $_POST['username'];
           		$password = $_POST['password'];

           		if($username == "aiub" && $password =="aaaa") {
           				$_SESSION["leamon"] = "green";
           				header('Location: index.php');
           		} 

           } 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Material Admin - Login</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/boootstrap.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
		<style type="text/css">
			
			.welcome {
			    font-size: 56px;
			    color: white;
			    font-family: roboto thin;
			    margin-left: 31%;
			    margin-top: 5%;
			}

		</style>

		
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-color: #0aa89e">
				<div class="welcome">
					Login
				</div>
			</div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<br/>
							<span class="text-lg text-bold text-primary">Faculty Cloud admin</span>
							<br/><br/>
							<form class="form floating-label" action="login.php" accept-charset="utf-8" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="username" name="username">
									<label for="username">Username</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password">
									<label for="password">Password</label>
									<p class="help-block"><a href="#">Forgotten?</a></p>
								</div>
								<br/>
								<div class="row">
									<div class="col-xs-6 text-left">
										<div class="checkbox checkbox-inline checkbox-styled">
											<label>
												<input type="checkbox"> <span>Remember me</span>
											</label>
										</div>
									</div><!--end .col -->
									<div class="col-xs-6 text-right">
										<button class="btn btn-primary btn-raised" type="submit">Login</button>
									</div><!--end .col -->
								</div><!--end .row -->
							</form>
					</div><!--end .card -->
				</section>
				<!-- END LOGIN SECTION -->

				<!-- BEGIN JAVASCRIPT -->
				<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
				<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
				<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
				<script src="assets/js/libs/spin.js/spin.min.js"></script>
				<script src="assets/js/libs/autosize/jquery.autosize.min.js"></script>
				<script src="assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
				<script src="assets/js/core/source/App.js"></script>
				<script src="assets/js/core/source/AppNavigation.js"></script>
				<script src="assets/js/core/source/AppOffcanvas.js"></script>
				<script src="assets/js/core/source/AppCard.js"></script>
				<script src="assets/js/core/source/AppForm.js"></script>
				<script src="assets/js/core/source/AppNavSearch.js"></script>
				<script src="assets/js/core/source/AppVendor.js"></script>
				<script src="assets/js/core/demo/Demo.js"></script>
	

				<!-- END JAVASCRIPT -->

			</body>
		</html>
