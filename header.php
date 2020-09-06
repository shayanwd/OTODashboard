<!DOCTYPE html>
<html lang="en">

<head>
	<title>OTO</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />

	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

	<!-- font css -->
	<link rel="stylesheet" href="assets/fonts/font-awsome-pro/css/pro.min.css">
	<link rel="stylesheet" href="assets/fonts/feather.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/customizer.css">
	<link rel="stylesheet" href="assets/css/custom.css">

</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="assets/images/logo.png" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<!-- <i data-feather="menu"></i> -->
			</a>
			<!-- <a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a> -->
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar ">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="dashboard.php" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<img src="assets/images/logo.png" alt="" class="logo logo-lg">
					<img src="assets/images/logo-sm.png" alt="" class="logo logo-sm">
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">


					<!-- <li class="pc-item pc-hasmenu">
						<a href="dashboard.php" class="pc-link"><span class="pc-micon"><i class="fas fa-home"></i></span><span class="pc-mtext">Home</span></a>
					</li> -->

					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">DASHBOARD</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="add-funds.php"><span class="pc-micon"></span>Super Admin</a></li>
							<li class="pc-item"><a class="pc-link" href="purchase.php"><span class="pc-micon"></span>Organization</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">ORGANIZATION MANAGEMENT</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="organization-list.php"><span class="pc-micon"></span>Organization List </a></li>
							<li class="pc-item"><a class="pc-link" href="purchase.php"><span class="pc-micon"></span>Admin User List</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">PERMISSION MANAGEMENT </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Admin User Roles</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">VEHICLE MANAGEMENT </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>IOT </a></li>
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Bikes </a></li>
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Scooter</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">MAP VIEW </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Map</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">GEOFENCE MANAGEMENT</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Parkings</a></li>
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Restricted Areas</a></li>
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Service Areas</a></li>
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Geofence</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">TRIP MANAGEMENT </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Trips</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">OPERATION MANAGEMENT </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Trips</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">REPORT MANAGEMENT </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Trips</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">USER MANAGEMENT </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Trips</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">PAYMENT MANAGEMENT </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Trips</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">OFFER MANAGEMENT </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Trips</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">POIN MANAGEMENT </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Trips</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu mt-2">
						<a href="#!" class="pc-link"><span class="pc-micon"></span><span class="pc-mtext">Setting</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href=""><span class="pc-micon"></span>Trips</a></li>
						</ul>
					</li>





				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">

			<div class="ml-auto">
				<ul class="list-unstyled">


					<li class="pc-h-item" id="flash">
						<a class="pc-head-link mr-0 border-left border-right" href="#">
							<i class="fas fa-bolt"></i>
						</a>
					</li>

					<li class="pc-h-item">
						<a class="pc-head-link mr-0 border-right" dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<span class="notification-number">2</span>
							<span class="badge badge-danger pc-h-badge dots"><span class="sr-only"></span></span>
						</a>
						<div class="dropdown-menu dropdown-menu2 dropdown-menu-right pc-h-dropdown">
							<div class=" dropdown-header">
								<div class="whats-new">
									<h2>Whats New?</h2>
								</div>

							</div>
							<div class="notification-boxes aliceblue">
								<div class="row">
									<div class="col-md-9">
										<h1>Tab Update</h1>
										<h2>Sample description or summary description or
											summary i in max row</h2>
										<h3>23 July 2020</h3>
									</div>

									<div class="col-md-3">
										<div class="new-badge">
											<p>NEW</p>
										</div>
									</div>
								</div>
							</div>

							<div class="notification-boxes mt-1">
								<div class="row">
									<div class="col-md-9">
										<h1>Tab Update</h1>
										<h2>Sample description or summary description or
											summary i in max row</h2>
											<p class="mb-1">1. Sample description</p>
											<p class="mb-1">2. Sample description</p>
											<p class="mb-2">3. Sample description</p>

										<h3 class="mt-1">23 July 2020</h3>
									</div>

								</div>
							</div>
						</div>
					</li>

					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

							<i class="fas fa-chevron-down mr-2  profile-icon"></i>

							<span>
								<span class="user-name">John Wick</span>
								<span class="user-desc">Super Admin</span>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
							<div class=" dropdown-header">
								<div class="header-profile-img">
									<img src="assets/images/header-profile-1.png">
								</div>
								<div class="header-profile-content">
									<h2>John Wick</h2>
									<h3>Admin</h3>
									<h4><a href="johnwick.1234@yhaoo.com">johnwick.1234@yhaoo.com</a></h4>
								</div>
							</div>
							<a href="inbox.php" class="dropdown-item">
								<i class="fas fa-edit"></i>
								<span>Edit-profile</span>
							</a>
							<a href="profile.php" class="dropdown-item">
								<i class="fas fa-key"></i>
								<span>Change Password</span>
							</a>
							<a href="#!" class="dropdown-item ">
								<i class="fas fa-sign-out-alt red-t"></i>
								<span class="red-t">Logout</span>
							</a>
						</div>
					</li>

				</ul>
			</div>

		</div>
	</header>
	<!-- Modal -->

	<!-- [ Header ] end -->

	<!-- <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="assets/js/plugins/clipboard.min.js"></script>
	<script src="assets/js/uikit.min.js"></script> -->
	<script src="assets/js/custom.js"></script>



</body>

</html>