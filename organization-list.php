d<!DOCTYPE html>
<html lang="en">

<head>
	<title>OTO| Organization-list</title>
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

	<?php
	include('./header.php')
	?>


	<!-- [ Header ] end -->

	<!-- [ Main Content ] start -->
	<div class="pc-container relative">

		<!-- [ step-form ] start -->
		<div class="step-form-overlay">
			<div class="main-step-form-holder relative">
				<div class="main-step-form-container">
					<div class="add-organization-heading">
						<h2>Add Organization</h2>
					</div>

					<!-- \\\\\\\\\\\\\\\\\\\\\\Step-form-start\\\\\\\\\\\\\\\\\\ -->

					<form id="regForm" action="">

						<!-- Circles which indicates the steps of the form: -->
						<div class="step-container">
							<span class="step">
								<p><span class="mr-1">1</span>Basic Info</p>
							</span>
							<span class="step">
								<p><span class="mr-1">2</span>Subscription</p>
							</span>
							<span class="step">
								<p><span class="mr-1">3</span>Settings</p>
							</span>
							<span class="step">
								<p><span class="mr-1">4</span>Add Owner</p>
							</span>
						</div>

						<div class="clearfix"></div>

						<div class="row">
							<div class="col-md-12">
								<div class="upload-image">
									<img src="assets/images/header-profile1.png">
								</div>
							</div>
						</div>

						<!-- One "tab" for each step in the form: -->
						<div class="tab">Name:
							<p><input placeholder="First name..." oninput="this.className = ''"></p>
							<p><input placeholder="Last name..." oninput="this.className = ''"></p>
						</div>

						<div class="tab">Contact Info:
							<p><input placeholder="E-mail..." oninput="this.className = ''"></p>
							<p><input placeholder="Phone..." oninput="this.className = ''"></p>
						</div>

						<div class="tab">Birthday:
							<p><input placeholder="dd" oninput="this.className = ''"></p>
							<p><input placeholder="mm" oninput="this.className = ''"></p>
							<p><input placeholder="yyyy" oninput="this.className = ''"></p>
						</div>

						<div class="tab">Login Info:
							<p><input placeholder="Username..." oninput="this.className = ''"></p>
							<p><input placeholder="Password..." oninput="this.className = ''"></p>
						</div>

						<div style="overflow:auto;">
							<div style="float:right;">
								<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
								<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
							</div>
						</div>


					</form>

					<!-- \\\\\\\\\\\\\\\\\\\\\\Step-form-start\\\\\\\\\\\\\\\\\\ -->


				</div>
			</div>
		</div>


		<!-- [ step-form ] end -->

		<div class="pcoded-content">
			<div class="row">
				<!-- support-section start -->
				<div class="col-xl-12 col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card_my prod-p-card background-pattern">
								<div class="card-body">
									<div class="heading">
										<h1>Organization List</h1>
									</div>
									<div class="sreach_row col-md-12">
										<div class="row">
											<div class="sreach_box col-md-6">
												<input class="pl-4 pt-1 pb-1 pr-1" type="text" placeholder="Search">
												<i class="fas fa-search"></i>
											</div>
											<div class="col-md-6">
												<div class="buttons">
													<a class="btn_light" href="#"><i class="fas fa-download"></i> Export As <i class="fas fa-chevron-down"></i></a>
													<a class="btn_dark" id="add-organization" href="#"><i class="fas fa-plus"></i> Add</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- [ table Content ] start -->
					<div class="row">
						<div class="col-xl-12 col-md-12">
							<div class="card">
								<div class="card-body_my">
									<div class="dt-responsive table-responsive">
										<table class="my_table">
											<thead>
												<tr class="shadow">
													<th>Organizatione ID</th>
													<th>Name</th>
													<th>Created Date</th>
													<th>Country</th>
													<th>Active Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Jump Ride</td>
													<td>27 June, 2019</td>
													<td>Bangladesh</td>
													<td>
														<div class="org_activ">Active</div>
													</td>
													<td><a href="#"><img src="assets/images/edit.png"></a></td>
												</tr>
												<tr class="blod">
													<td>2</td>
													<td>Drop Bike</td>
													<td>26 May, 2019</td>
													<td>United State</td>
													<td>
														<div class="org_deactiv">Deactive</div>
													</td>
													<td><a href="#"><img src="assets/images/edit.png"></a></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Glide</td>
													<td>23 April, 2018</td>
													<td>AUE</td>
													<td>
														<div class="org_activ">Active</div>
													</td>
													<td><a href="#"><img src="assets/images/edit.png"></a></td>
												</tr>
												<tr>
													<td>4</td>
													<td>OtoRide</td>
													<td>21 January, 2018</td>
													<td>Australia</td>
													<td>
														<div class="org_activ">Active</div>
													</td>
													<td><a href="#"><img src="assets/images/edit.png"></a></td>
												</tr>
												<tr>
													<td>1</td>
													<td>Jump Ride</td>
													<td>27 June, 2019</td>
													<td>Bangladesh</td>
													<td>
														<div class="org_activ">Active</div>
													</td>
													<td><a href="#"><img src="assets/images/edit.png"></a></td>
												</tr>
												<tr class="blod">
													<td>2</td>
													<td>Drop Bike</td>
													<td>26 May, 2019</td>
													<td>United State</td>
													<td>
														<div class="org_activ">Active</div>
													</td>
													<td><a href="#"><img src="assets/images/edit.png"></a></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Glide</td>
													<td>23 April, 2018</td>
													<td>AUE</td>
													<td>
														<div class="org_activ">Active</div>
													</td>
													<td><a href="#"><img src="assets/images/edit.png"></a></td>
												</tr>
												<tr>
													<td>4</td>
													<td>OtoRide</td>
													<td>21 January, 2018</td>
													<td>Australia</td>
													<td>
														<div class="org_activ">Active</div>
													</td>
													<td><a href="#"><img src="assets/images/edit.png"></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- [ table Content ] end -->
				<script src="assets/js/vendor-all.min.js"></script>
				<script src="assets/js/plugins/bootstrap.min.js"></script>
				<script src="assets/js/plugins/feather.min.js"></script>
				<script src="assets/js/pcoded.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
				<script src="assets/js/plugins/clipboard.min.js"></script>
				<script src="assets/js/uikit.min.js"></script>

				<!-- Apex Chart -->
				<script src="assets/js/plugins/apexcharts.min.js"></script>
				<!-- custom-chart js -->
				<script src="assets/js/custom.js"></script>
</body>

</html>