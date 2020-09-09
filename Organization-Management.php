<!DOCTYPE html>
<html lang="en">

<head>
	<title>OTO| Organization-Management</title>
</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<?php
	include('./header.php')
	?>



	<!-- [ Main Content ] start -->
	<div class="pc-container">
		
		<div class="pcoded-content ">

			<div class="row">
				<div class="col-xl-12 col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card_my prod-p-card background-pattern">
								<div class="card-body remove-pb">
									<div class="card-head">
										<div class="row">
											<div class="col-md-6 ">
												<div class="heading_Id">
													<p>Organization Management /<span>Details (#234234)</span></p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-4">
														<div class="sticker">
															<a href="#">
																<img src="assets/images/sticker_1.png" />
															</a>
														</div>
													</div>
													<div class="col-md-4">
														<div class="sticker">
															<a href="#">
																<img src="assets/images/sticker_2.png" />
															</a>
														</div>
													</div>
													<div class="col-md-4">
														<div class="sticker_1 dropdown">
															<a href="#" class="btn_light_1" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
																<p>Profile Status</p><span>Active</span><i class="fas fa-chevron-down"></i>
															</a>
															<div class="dropdown-menu export-dropdown margin-minus">
																<a class="dropdown-item" href="#">Active</a>
																<a class="dropdown-item" href="#">Un Active</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row dec">
											<div class="col-md-2">
												<div class="e-logo">
													<img src="assets/images/e-logo.png">
												</div>
											</div>
											<div class="col-md-10">
												<div class="logo-decription">
													<div class="logo_dec">
														<h5>E:Skoot<span>United Kindom</span></h5>
													</div>
													<div class="contact-info">
														<ul>
															<li><img src="assets/images/mess.png">Eskoot@yahoo.com</li>
															<li><img src="assets/images/phone.png">997278889</li>
															<li><img src="assets/images/globe.png">www.eskoot.com</li>
														</ul>
													</div>
												</div>
											</div>
										</div>


										<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\page-tabs-start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

										<div class="dt-responsive table-responsive">
											<table class="my_table">
												<thead>
													<tr class="page-tab">
														<th class="no-padding"><button class="tablinks active" onclick="openCity(event, 'page-tab-content1')">SUMMARY</button></th>
														<th class="no-padding"><button class="tablinks" onclick="openCity(event, 'page-tab-content2')">BASIC PROFILE</button></th>
														<th class="no-padding"><button class="tablinks" onclick="openCity(event, 'page-tab-content3')">ASSIGNED FLEETS</button></th>
														<th class="no-padding"><button class="tablinks" onclick="openCity(event, 'page-tab-content4')">VEHICLES LISTS</button></th>
														<th class="no-padding">Country</th>
														<th class="no-padding">Active Status</th>
														<th class="no-padding">Action</th>
													</tr>
												</thead>
											</table>
										</div>





										<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\page-tabs-end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Tab content-start -->
		<div id="page-tab-content1" class="tabcontent active">
			<div class="row">
				<div class="col-md-12 col-xl-12 mt-1">
					<div class="card_my prod-p-card background-pattern">
						<div class="card-body">
							<div class="card-head">

								<div class="row ">
									<div class="col-md-12">
										<div class="sreach_row col-md-12">
											<div class="row">
												<div class="col-md-6">
													<div class="row">
														<div class="sreach_box1 col-md-3 no-padding-l">
															<div class="sumary-heading">
																<h1> Summary</h1>
															</div>
														</div>
														<div class="filter col-md-6 dropdown">
															<a href="#" data-toggle="dropdown">All Fleets <i class="fas fa-chevron-down"></i></a>

															<div class="dropdown-menu export-dropdown">
																<div class="fleet-dropdown-checkbox">
																	<h6>Fleets</h6>
																	<ul class="mt-3">
																		<li><input type="checkbox"></li>
																		<li>
																			<h5>All Fleets</h5>
																		</li>
																	</ul>

																	<ul class="mt-3">
																		<li><input type="checkbox" checked></li>
																		<li>
																			<h5>Gulshan 1</h5>
																		</li>
																	</ul>

																	<ul class="mt-3">
																		<li><input type="checkbox" checked></li>
																		<li>
																			<h5>Gulshan 2</h5>
																		</li>
																	</ul>

																	<ul class="mt-3">
																		<li><input type="checkbox"></li>
																		<li>
																			<h5>Baridhara</h5>
																		</li>
																	</ul>

																	<ul class="mt-3">
																		<li><input type="checkbox" checked></li>
																		<li>
																			<h5>Badda</h5>
																		</li>
																	</ul>

																	<ul class="mt-3">
																		<li><input type="checkbox"></li>
																		<li>
																			<h5>Rampura</h5>
																		</li>
																	</ul>
																	
																	<ul class="mt-3">
																		<li><input type="checkbox" checked></li>
																		<li>
																			<h5>Mouchak</h5>
																		</li>
																	</ul>
																	
																	<ul class="mt-3">
																		<li><input type="checkbox"></li>
																		<li>
																			<h5>Merul</h5>
																		</li>
																	</ul>

																	<ul class="mt-3">
																		<li><input type="checkbox" checked></li>
																		<li>
																			<h5>Link Road</h5>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<!-- Empty -->
														</div>
													</div>
												</div>
												<div class="col-md-6 no-padding-r">
													<div id="reportrange2" class="clender">
														<i class="fas fa-calendar-alt mr-2"></i></i>&nbsp;
														<span></span> <i class="fa fa-caret-down"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div id="LineChart"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<canvas id="meterChart"></canvas>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Tab content-end -->


		<!-- Tab content-start -->
		<div id="page-tab-content2" class="tabcontent">
			<div class="row">
				<div class="col-md-12 col-xl-12">
					<div class="row">
						<div class="col-md-6 no-padding-r mt-1 ">
							<div class="card_my prod-p-card background-pattern">
								<div class="card-body">
									<div class="card-head">
										<div class="card-heading-and-edit-button">
											<div class="card-edit-heading ">
												<h2>Basic Profile</h2>
											</div>
											<div class="card-edit-btn">
												<a href="#"><i class="fas fa-pen"></i>Edit</a>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="row">
											<div class="col-md-4">
												<div class="e-logo">
													<img src="assets/images/e-logo.png">
												</div>
											</div>
										</div>

										<div class="clearfix"></div>

										<div class="row">
											<div class="col-md-6 pb-3 mt-1">
												<div class="basic-profile-info-box">
													<h2>Name</h2>
													<h3>E:Skoot</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>Alies</h2>
													<h3>Test</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>City</h2>
													<h3>Boston</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>Default Fleet</h2>
													<h3>Gulshan Office</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>Address</h2>
													<h3>234 Rd No 234, Boston, United State</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>Domain</h2>
													<h3>Test Domain</h3>
												</div>
											</div>

											<div class="col-md-6">
												<div class="basic-profile-info-box">
													<h2>Phone</h2>
													<h3>997278889</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>Country</h2>
													<h3>United Kindom</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>Type</h2>
													<h3>Testing</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>Postal/Zip</h2>
													<h3>1234</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>Organization ID</h2>
													<h3>FR1235</h3>
												</div>
												<div class="basic-profile-info-box">
													<h2>Port</h2>
													<h3>1234</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 no-padding-l mt-1">
							<div class="row">
								<div class="col-md-12">
									<div class="card_my prod-p-card background-pattern">
										<div class="card-body">
											<div class="card-head">
												<div class="card-heading-and-edit-button">
													<div class="card-edit-heading ">
														<h2>Subscription Plan</h2>
													</div>
													<div class="card-edit-btn">
														<a href="#"><i class="fas fa-pen"></i>Edit</a>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="row">
													<div class="col-md-12">
														<div class="subscription-plan-vehical mt-4">
															<img src="assets/images/vehical-scooter.png">
														</div>
														<div class="subscription-plan-vehical-info">
															<h1>$8/ Vehicle</h1>
															<h2>Standard Plan</h2>
															<h3>Default Currency: <span>USD</span></h3>
														</div>
													</div>
												</div>

												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12 mt-1">
									<div class="card_my prod-p-card background-pattern">
										<div class="card-body">
											<div class="card-head">
												<div class="card-heading-and-edit-button">
													<div class="card-edit-heading ">
														<h2>Web Links</h2>
													</div>
													<div class="card-edit-btn">
														<a href="#"><i class="fas fa-pen"></i>Edit</a>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="row">
													<div class="col-md-12">
														<div class="web-links-edit mb-4">
															<ul>
																<li class="mr-3">
																	<div class="web-links-social-icons">
																		<img src="assets/images/play-store-icon.png">
																	</div>
																</li>
																<li>
																	<h2>Google Store</h2>
																	<h3><a href="https://play.google.com/store/apps">https://play.google.com/store/apps</a></h3>
																</li>
															</ul>
														</div>

														<div class="clearfix"></div>

														<div class="web-links-edit mb-4">
															<ul>
																<li class="mr-3">
																	<div class="web-links-social-icons">
																		<img src="assets/images/apple-icon.png">
																	</div>
																</li>
																<li>
																	<h2>Apple Store</h2>
																	<h3><a href="https://www.apple.com/ios/app-store/">https://www.apple.com/ios/app-store/</a></h3>
																</li>
															</ul>
														</div>

														<div class="clearfix"></div>

														<div class="web-links-edit mb-4">
															<ul>
																<li class="mr-3">
																	<div class="web-links-social-icons">
																		<img src="assets/images/website-icon.png">
																	</div>
																</li>
																<li>
																	<h2>WebSite</h2>
																	<h3><a href="http://www.eskoot.com/">http://www.eskoot.com/</a></h3>
																</li>
															</ul>
														</div>

														<div class="clearfix"></div>

														<div class="web-links-edit">
															<ul>
																<li class="mr-3">
																	<div class="web-links-social-icons">
																		<img src="assets/images/email-icon.png">
																	</div>
																</li>
																<li>
																	<h2>Email</h2>
																	<h3><a href="Eskoot@yahoo.com">Eskoot@yahoo.com</a></h3>
																</li>
															</ul>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-xl-12 mt-1">
					<div class="card_my prod-p-card background-pattern">
						<div class="card-body">
							<div class="card-head">
								<div class="card-heading-and-edit-button">
									<div class="card-edit-heading ">
										<h2>Settings</h2>
									</div>
									<div class="clearfix"></div>
									<div class="row">
										<div class="col-md-8">
											<div class="row">
												<div class="col-md-6">
													<div class="basic-profile-setting-content">
														<h1>Default Payment Gatway</h1>
														<h2>Stripe</h2>
													</div>
												</div>
												<div class="col-md-6">
													<div class="basic-profile-setting-content">
														<h1>Gateway Name</h1>
														<h2>Default Stripe</h2>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6">
													<div class="basic-profile-setting-content">
														<h1>Default Payment Gatway</h1>
														<h2>Stripe</h2>
													</div>
												</div>
												<div class="col-md-6">
													<div class="basic-profile-setting-content">
														<h1>Gateway Name</h1>
														<h2>*********************************</h2>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-4">
											<div class="row">
												<div class="col-md-12">
													<div class="basic-profile-setting-content">
														<h1>Stripe Secrate Key</h1>
														<h2>*********************************</h2>
													</div>
												</div>

												<div class="col-md-12">
													<div class="basic-profile-setting-content">
														<h1>Default Currancy</h1>
														<h2>USD</h2>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Tab content-end -->




		<!-- Tab content-start -->
		<div id="page-tab-content3" class="tabcontent">
			<div class="row">
				<div class="col-xl-12 col-md-12">
					<div class="row mt-1">
						<div class="col-md-12">
							<div class="card_my prod-p-card background-pattern">
								<div class="card-body">
									<div class="sreach_row col-md-12">
										<div class="row">
											<div class="col-md-6">
												<!-- <div class="fleet-search-box">
													<div class="fleet-search-icon">
														<i class="fas fa-search"></i>
													</div>
													<div class="fleet-seacrh-field">
														<input type="text" placeholder="search">
													</div>
												</div> -->
												<div class="row">
													<div class="sreach_box1 col-md-6 no-padding-l">
														<input class="pl-4 pt-1 pb-1 pr-1" type="text" placeholder="Search">
														<i class="fas fa-search"></i>
													</div>
													<div class="filter col-md-6 dropdown">
														<a href="#!" data-toggle="dropdown">Filter <i class="fas fa-chevron-down"></i></a>
														<div class="dropdown-menu export-dropdown">
															<a class="dropdown-item" href="#">Export as CSV</a>
															<a class="dropdown-item" href="#">Export as PDF</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="buttons dropdown">
													<a class="btn_light" href="#!" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-download"></i> Export As <i class="fas fa-chevron-down"></i></a>
													<div class="dropdown-menu export-dropdown">
														<a class="dropdown-item" href="#">Export as CSV</a>
														<a class="dropdown-item" href="#">Export as PDF</a>
													</div>
													<a class="btn_dark" href="#"><i class="fas fa-plus"></i> Add Fleet</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card remove-mb">
						<div class="card-body_my">
							<div class="dt-responsive table-responsive">
								<table class="my_table">
									<thead>
										<tr>
											<th>Fleet ID</th>
											<th>Fleet Name</th>
											<th>Location Name</th>
											<th>Pricing</th>
											<th>Visibility</th>
											<th>Support Email</th>
											<th>Date Created</th>
											<th>Active</th>
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
												<div class="org_activ">Public</div>
											</td>
											<td><a href="mymail@yahoo.com">mymail@yahoo.com</a></td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</td>
											<td><a href="#"><img src="assets/images/edit.png"></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Drop Bike</td>
											<td>26 May, 2019</td>
											<td>United State</td>
											<td>
												<div class="org_deactiv">Private</div>
											</td>
											<td><a href="mymail@yahoo.com">mymail@yahoo.com</a></td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox" checked>
													<span class="slider round"></span>
												</label>
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
											<td><a href="mymail@yahoo.com">mymail@yahoo.com</a></td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
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
											<td><a href="mymail@yahoo.com">mymail@yahoo.com</a></td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
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
											<td><a href="mymail@yahoo.com">mymail@yahoo.com</a></td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</td>
											<td><a href="#"><img src="assets/images/edit.png"></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Drop Bike</td>
											<td>26 May, 2019</td>
											<td>United State</td>
											<td>
												<div class="org_activ">Active</div>
											</td>
											<td><a href="mymail@yahoo.com">mymail@yahoo.com</a></td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
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
											<td><a href="mymail@yahoo.com">mymail@yahoo.com</a></td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
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
											<td><a href="mymail@yahoo.com">mymail@yahoo.com</a></td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
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
			<div class="row mt-1">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body_my pt-3 pb-2">

							<div class="show-entries float-left">
								<h2>Showing <span>11 Entries</span></h2>
							</div>

							<div class="entries-pagination float-right">
								<ul>
									<li><i class="fas fa-long-arrow-alt-left"></i></li>
									<li>
										<div class="pagination-number">
											<p>1</p>
										</div>
									</li>
									<li><i class="fas fa-long-arrow-alt-right"></i></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Tab content-end -->


		<!-- Tab content-start -->
		<div id="page-tab-content4" class="tabcontent">
			<div class="row">
				<div class="col-md-12 col-xl-12 mt-1">
					<div class="card_my prod-p-card background-pattern">
						<div class="card-body">
							<div class="card-head">
								<div class="row">
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-4">
												<div class="vehical-card yellow-b">
													<h2>TOTAL VEHICLES</h2>
													<h3>500</h3>
												</div>
											</div>
											<div class="col-md-4">
												<div class="vehical-card blue-b">
													<h2 class="white-t">TOTAL VEHICLES</h2>
													<h3 class="white-t">500</h3>
												</div>
											</div>
											<div class="col-md-4">
												<div class="vehical-card orange-b ">
													<h2 class="white-t">TOTAL VEHICLES</h2>
													<h3 class="white-t">500</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div id="reportrange" class="clender">
											<i class="fas fa-calendar-alt mr-2"></i></i>&nbsp;
											<span></span> <i class="fa fa-caret-down"></i>
										</div>
									</div>
								</div>

								<div class="sreach_row col-md-12 mt-4">
									<div class="row">
										<div class="col-md-6">
											<!-- <div class="fleet-search-box">
													<div class="fleet-search-icon">
														<i class="fas fa-search"></i>
													</div>
													<div class="fleet-seacrh-field">
														<input type="text" placeholder="search">
													</div>
												</div> -->
											<div class="row">
												<div class="sreach_box1 col-md-6 no-padding-l">
													<input class="pl-4 pt-1 pb-1 pr-1" type="text" placeholder="Search">
													<i class="fas fa-search"></i>
												</div>
												<div class="filter col-md-6">
													<a href="#">Filter <i class="fas fa-chevron-down"></i></a>
												</div>
											</div>
										</div>
										<div class="col-md-6 no-padding-r">
											<div class="buttons dropdown">
												<a class="btn_light" href="#!" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-download"></i> Export As <i class="fas fa-chevron-down"></i></a>
												<div class="dropdown-menu export-dropdown">
													<a class="dropdown-item" href="#">Export as CSV</a>
													<a class="dropdown-item" href="#">Export as PDF</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-1">
				<div class="col-md-12">
					<div class="card remove-mb">
						<div class="card-body_my">
							<div class="dt-responsive table-responsive">
								<table class="my_table">
									<thead>
										<tr>
											<th>Vehicle ID</th>
											<th>QR COde</th>
											<th>Model</th>
											<th>Battery Charge</th>
											<th>Last Location Update</th>
											<th>Is Active</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>123124</td>
											<td>3243</td>
											<td>Gulshan</td>
											<td>
												<div class="table-battery">
													<div class="battery-fill-orange">

													</div>
												</div>
												<div class="table-percenteage">
													<p>85%</p>
												</div>
											</td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox" checked>
													<span class="slider round"></span>
												</label>
											</td>
											<td>
												<div class="table-edit-icons">
													<ul>
														<li><a href="#"><img class="edit-pencil" src="assets/images/edit.png"></li>
														<li><a href="#"><img class="delet-bin" src="assets/images/delet.png"></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>123124</td>
											<td>3243</td>
											<td>Gulshan</td>
											<td>
												<div class="table-battery">
													<div class="battery-fill-green">

													</div>
												</div>
												<div class="table-percenteage">
													<p>85%</p>
												</div>
											</td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</td>
											<td>
												<div class="table-edit-icons">
													<ul>
														<li><a href="#"><img class="edit-pencil" src="assets/images/edit.png"></li>
														<li><a href="#"><img class="delet-bin" src="assets/images/delet.png"></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>123124</td>
											<td>3243</td>
											<td>Gulshan</td>
											<td>
												<div class="table-battery">
													<div class="battery-fill-orange">

													</div>
												</div>
												<div class="table-percenteage">
													<p>85%</p>
												</div>
											</td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</td>
											<td>
												<div class="table-edit-icons">
													<ul>
														<li><a href="#"><img class="edit-pencil" src="assets/images/edit.png"></li>
														<li><a href="#"><img class="delet-bin" src="assets/images/delet.png"></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>123124</td>
											<td>3243</td>
											<td>Gulshan</td>
											<td>
												<div class="table-battery">
													<div class="battery-fill-green">

													</div>
												</div>
												<div class="table-percenteage">
													<p>85%</p>
												</div>
											</td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</td>
											<td>
												<div class="table-edit-icons">
													<ul>
														<li><a href="#"><img class="edit-pencil" src="assets/images/edit.png"></li>
														<li><a href="#"><img class="delet-bin" src="assets/images/delet.png"></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>123124</td>
											<td>3243</td>
											<td>Gulshan</td>
											<td>
												<div class="table-battery">
													<div class="battery-fill-orange">

													</div>
												</div>
												<div class="table-percenteage">
													<p>85%</p>
												</div>
											</td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</td>
											<td>
												<div class="table-edit-icons">
													<ul>
														<li><a href="#"><img class="edit-pencil" src="assets/images/edit.png"></li>
														<li><a href="#"><img class="delet-bin" src="assets/images/delet.png"></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>123124</td>
											<td>3243</td>
											<td>Gulshan</td>
											<td>
												<div class="table-battery">
													<div class="battery-fill-green">

													</div>
												</div>
												<div class="table-percenteage">
													<p>85%</p>
												</div>
											</td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</td>
											<td>
												<div class="table-edit-icons">
													<ul>
														<li><a href="#"><img class="edit-pencil" src="assets/images/edit.png"></li>
														<li><a href="#"><img class="delet-bin" src="assets/images/delet.png"></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>123124</td>
											<td>3243</td>
											<td>Gulshan</td>
											<td>
												<div class="table-battery">
													<div class="battery-fill-orange">

													</div>
												</div>
												<div class="table-percenteage">
													<p>85%</p>
												</div>
											</td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</td>
											<td>
												<div class="table-edit-icons">
													<ul>
														<li><a href="#"><img class="edit-pencil" src="assets/images/edit.png"></li>
														<li><a href="#"><img class="delet-bin" src="assets/images/delet.png"></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>123124</td>
											<td>3243</td>
											<td>Gulshan</td>
											<td>
												<div class="table-battery">
													<div class="battery-fill-green">

													</div>
												</div>
												<div class="table-percenteage">
													<p>85%</p>
												</div>
											</td>
											<td>22 January, 2020, 11:20 PM</td>
											<td>
												<!-- Rounded switch -->
												<label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</td>
											<td>
												<div class="table-edit-icons">
													<ul>
														<li><a href="#"><img class="edit-pencil" src="assets/images/edit.png"></li>
														<li><a href="#"><img class="delet-bin" src="assets/images/delet.png"></li>
													</ul>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-1">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body_my pt-3 pb-2">

							<div class="show-entries float-left">
								<h2>Showing <span>11 Entries</span></h2>
							</div>

							<div class="entries-pagination float-right">
								<ul>
									<li><i class="fas fa-long-arrow-alt-left"></i></li>
									<li>
										<div class="pagination-number">
											<p>1</p>
										</div>
									</li>
									<li><i class="fas fa-long-arrow-alt-right"></i></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>


		</div>
		<!-- Tab content-emd -->

	</div>

</body>

</html>


<?php include('footer.php') ?>