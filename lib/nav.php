	<!-- BEGIN HEADER-->
	<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="index.php">
									<span class="text-lg text-bold text-primary">FACULTY CLOUD</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="assets/img/AIUB_logo.png" alt="" />
								<span class="profile-info">
									Office Room
									<small>Administration</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
							
								<li><a href="#">My profile</a></li>
								<li class="divider"></li>
								<li><a href="javascript:logout();"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<ul class="header-nav header-nav-toggle">
						<li>
							<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-ellipsis-v"></i>
							</a>
						</li>
					</ul><!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>

			<!-- END HEADER-->

	<!-- BEGIN BASE-->
	<div id="base">



		<!-- BEGIN CONTENT-->
		<div id="content">
			<section>
				
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

				<?php 
					
					if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "sheilds.php" ) {

					 } else {
					 	echo '<a class="btn btn-floating-action btn-default-light" href="add.php"><i class="fa fa-plus"></i></a>';
					 }

				 ?>
				
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


								<li class="active">
									<a class="tile-content ink-reaction" href="#">DEPARTMENTS <small class="pull-right text-bold opacity-75">04</small></a>
								</li>

								<li><a href="#">FBA <small class="pull-right text-bold opacity-75"><i class="fa fa-circle fa-fw " style="color:#008c44" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i></small></small></a></li>
								<li><a href="#">FE <small class="pull-right text-bold opacity-75"><i class="fa fa-circle fa-fw" style="color:#f7941e" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i></small></small></a></li>
								<li><a href="#">FSIT<small class="pull-right text-bold opacity-75"><i class="fa fa-circle fa-fw " style="color:#0072bc" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i></small></small></a></li>
								<li><a href="#">FASS<small class="pull-right text-bold opacity-75"><i class="fa fa-circle fa-fw " style="color:#c5281c" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i></small></small></a></li>



							</ul>


						</div>


					</div>

					<div class="card">
						<div class="card-body no-padding">
							<ul class="nav nav-pills nav-stacked list">


								<li class="active">
									<a class="tile-content ink-reaction" href="#">ALL SHEILDS <small class="pull-right text-bold opacity-75">153</small></a>
								</li>

								<li><a href="javascript:reload_app();">REBOOT SHELIDS <small class="pull-right text-bold opacity-75"><i class="fa fa-circle fa-fw text-success" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i></small></a></li>
								


							</ul>


						</div>


					</div>

				</div><!--end .col -->

				<!-- END SEARCH NAV -->

				<div class="col-sm-8 col-md-9 col-lg-10">

					<!-- BEGIN SEARCH RESULTS LIST -->
					<div class="margin-bottom-xxl">
						<span id="loading" class="text-light text-lg">Loading..<strong></strong></span>
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

<!-- END MENUBAR -->