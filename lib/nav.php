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
									<small>Administrator</small>
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
	<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="index.php" >
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN EMAIL -->
						</li><!--end /menu-li -->
						<!-- END UI -->
						

						<!-- BEGIN PAGES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-computer"></i></div>
								<span class="title">Administrator</span>
							</a>
							<!--start submenu -->
							<ul>
								<li class="gui-folder">
									<a href="index.php">
										<span class="title">List all</span>
									</a>
									<!--start submenu -->
								</li><!--end /menu-li -->

								<li class="gui-folder">
									<a href="add.php">
										<span class="title">Add new Faculty</span>
									</a>
									
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="devices.html">
										<span class="title">Devices</span>
									</a>
									
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">System Status</span>
									</a>
									<!--start submenu -->
									
								</li><!--end /menu-li -->
						
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END FORMS -->

						
						<!-- END LEVELS -->

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2015</span> <strong>NameKiHobe</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
<!-- END MENUBAR -->