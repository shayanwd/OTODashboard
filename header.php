<!DOCTYPE html>
<html lang="en">

<head>
	<title>Stresser.su</title>
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


					<li class="pc-item pc-hasmenu">
						<a href="dashboard.php" class="pc-link"><span class="pc-micon"><i class="fas fa-home"></i></span><span class="pc-mtext">Home</span></a>
					</li>

					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link"><span class="pc-micon"><i class="fas fa-store"></i></span><span class="pc-mtext">Store</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="add-funds.php"><span class="pc-micon"><i class="fas fa-wallet"></i></span>Add Funds</a></li>
							<li class="pc-item"><a class="pc-link" href="purchase.php"><span class="pc-micon"><i class="fas fa-shopping-cart"></i></span>Purchase</a></li>
							<li class="pc-item"><a class="pc-link" href="addons.php"><span class="pc-micon"><i class="fas fa-shopping-bag"></i></span>Addons</a></li>
							<li class="pc-item"><a class="pc-link" href="payment.php"><span class="pc-micon"><i class="fas fa-receipt"></i></span>Payment</a></li>
						</ul>
					</li>

					<li class="pc-item pc-hasmenu">
						<a href="attack.php" class="pc-link"><span class="pc-micon"><i class="fas fa-bolt"></i></span><span class="pc-mtext">Attack</span></a>
					</li>

					<li class="pc-item pc-hasmenu">
						<a href="tos.php" class="pc-link"><span class="pc-micon"><i class="fas fa-gavel"></i></span><span class="pc-mtext">TOS</span></a>
					</li>

					<li class="pc-item pc-hasmenu">
						<a href="faq.php" class="pc-link"><span class="pc-micon"><i class="fas fa-question"></i></span><span class="pc-mtext">FAQ</span></a>
					</li>

					<li class="pc-item pc-hasmenu">
						<a href="inbox.php" class="pc-link"><span class="pc-micon"><i class="fas fa-question-circle"></i></span><span class="pc-mtext">Support</span></a>
					</li>

					<li class="pc-item pc-hasmenu">
						<a href="profile.php" class="pc-link"><span class="pc-micon"><i class="fas fa-gift"></i></span><span class="pc-mtext">Giftcard</span></a>
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
						<a class="pc-head-link mr-0 border-right " href="#">
							<span class="notification-number">2</span>
							<span class="badge badge-danger pc-h-badge dots"><span class="sr-only"></span></span>
						</a>
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
								<h6 class="text-overflow m-0">Welcome !</h6>
							</div>
							<a href="inbox.php" class="dropdown-item">
								<i class="fas fa-envelope"></i>
								<span>Inbox</span>
							</a>
							<a href="profile.php" class="dropdown-item">
								<i data-feather="settings"></i>
								<span>Account</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="power"></i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</header>
	<!-- Modal -->
	<div class="modal notification-modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<ul class="nav nav-pill tabs-light mb-3" id="pc-noti-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pc-noti-home-tab" data-toggle="pill" href="#pc-noti-home" role="tab" aria-controls="pc-noti-home" aria-selected="true">Notification</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pc-noti-news-tab" data-toggle="pill" href="#pc-noti-news" role="tab" aria-controls="pc-noti-news" aria-selected="false">News<span class="badge badge-danger ml-2 d-none d-sm-inline-block">4</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pc-noti-settings-tab" data-toggle="pill" href="#pc-noti-settings" role="tab" aria-controls="pc-noti-settings" aria-selected="false">Setting<span class="badge badge-success ml-2 d-none d-sm-inline-block">Update</span></a>
						</li>
					</ul>
					<div class="tab-content pt-4" id="pc-noti-tabContent">
						<div class="tab-pane fade show active" id="pc-noti-home" role="tabpanel" aria-labelledby="pc-noti-home-tab">
							<div class="media">
								<img src="assets/images/user/avatar-1.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ml-3 align-self-center">
									<div class="float-right">
										<div class="btn-group card-option">
											<button type="button" class="btn shadow-none">
												<i data-feather="heart" class="text-danger"></i>
											</button>
											<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i data-feather="more-horizontal"></i>
											</button>
											<div class="dropdown dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
												<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
											</div>
										</div>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block f-12 text-muted"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Cras sit amet nibh libero in gravida nulla Nulla vel metus scelerisque ante sollicitudin.</p>
									<div class="p-3 border rounded">
										<div class="media align-items-center">
											<div class="media-body">
												<h6 class="mb-1 f-14">Death Star original maps and blueprint.pdf</h6>
												<p class="mb-0 text-muted">by<a href="#!"> Ashoka T </a>.</p>
											</div>
											<div class="btn-group d-none d-sm-inline-flex">
												<button type="button" class="btn shadow-none">
													<i data-feather="download-cloud"></i>
												</button>
												<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i data-feather="more-horizontal"></i>
												</button>
												<div class="dropdown dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
													<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr class="mb-4">
							<div class="media">
								<img src="assets/images/user/avatar-2.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ml-3 align-self-center">
									<div class="float-right">
										<div class="btn-group card-option">
											<button type="button" class="btn shadow-none px-0 dropdown-toggle arrow-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i data-feather="more-horizontal"></i>
											</button>
											<div class="dropdown dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#!"><i data-feather="refresh-cw"></i> reload</a>
												<a class="dropdown-item" href="#!"><i data-feather="trash"></i> remove</a>
											</div>
										</div>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block  f-12 text-muted"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Cras sit amet nibh libero in gravida nulla Nulla vel metus scelerisque ante sollicitudin.</p>
									<img src="assets/images/slider/img-slide-3.jpg" alt="images" class="img-fluid wid-90 rounded m-r-10 m-b-10">
									<img src="assets/images/slider/img-slide-7.jpg" alt="images" class="img-fluid wid-90 rounded m-r-10 m-b-10">
								</div>
							</div>
							<hr class="mb-4">
							<div class="media mb-3">
								<img src="assets/images/user/avatar-3.jpg" alt="images" class="img-fluid avtar avtar-l">
								<div class="media-body ml-3 align-self-center">
									<div class="float-right">
										3 <i data-feather="heart" class="text-danger fill-danger"></i>
									</div>
									<h6 class="mb-0 d-inline-block">Ashoka T.</h6>
									<p class="mb-0 d-inline-block  f-12 <text-muted></text-muted>"> • 06/20/2019 at 6:43 PM </p>
									<p class="my-3">Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pc-noti-news" role="tabpanel" aria-labelledby="pc-noti-news-tab">
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="assets/images/news/img-news-2.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ml-3">
									<p class="float-right mb-0 text-success"><small>now</small></p>
									<a href="#!">
										<h6>This is a news image</h6>
									</a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
								</div>
							</div>
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="assets/images/news/img-news-1.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ml-3">
									<p class="float-right mb-0 text-muted"><small>3 mins ago</small></p>
									<a href="#!">
										<h6>Industry's standard dummy</h6>
									</a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
									<a href="#" class="badge badge-light">Html</a>
									<a href="#" class="badge badge-light">UI/UX designed</a>
								</div>
							</div>
							<div class="pb-3 border-bottom mb-3 media">
								<a href="#!"><img src="assets/images/news/img-news-2.jpg" class="wid-90 rounded" alt="..."></a>
								<div class="media-body ml-3">
									<p class="float-right mb-0 text-muted"><small>5 mins ago</small></p>
									<a href="#!">
										<h6>Ipsum has been the industry's</h6>
									</a>
									<p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
									<a href="#" class="badge badge-light">JavaScript</a>
									<a href="#" class="badge badge-light">Scss</a>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pc-noti-settings" role="tabpanel" aria-labelledby="pc-noti-settings-tab">
							<h6 class="mt-2"><i data-feather="monitor" class="mr-2"></i>Desktop settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting1" checked>
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting1">Allow desktop notification</label>
							</div>
							<p class="text-muted ml-5">you get lettest content at a time when data will updated</p>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting2">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting2">Store Cookie</label>
							</div>
							<h6 class="mb-0 mt-5"><i data-feather="save" class="mr-2"></i>Application settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting3">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting3">Backup Storage</label>
							</div>
							<p class="text-muted mb-4 ml-5">Automaticaly take backup as par schedule</p>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting4">
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting4">Allow guest to print file</label>
							</div>
							<h6 class="mb-0 mt-5"><i data-feather="cpu" class="mr-2"></i>System settings</h6>
							<hr>
							<div class="custom-control custom-switch">
								<input type="checkbox" class="custom-control-input" id="pcsetting5" checked>
								<label class="custom-control-label f-w-600 pl-1" for="pcsetting5">View other user chat</label>
							</div>
							<p class="text-muted ml-5">Allow to show public user message</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-danger btn-sm" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-light-primary btn-sm">Save changes</button>
				</div>
			</div>
		</div>
	</div>
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