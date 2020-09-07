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
	<!-- [ Mobile header ] start -->

	<?php
include('./header.php')
?>


	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- support-section start -->
            <div class="col-xl-12 col-md-12">
                <div class="row">
                    <div class="col-md-12">
						<div class="card_my prod-p-card background-pattern">
							<div class="card-body">
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
                                                   <img src="assets/images/sticker_1.png"/>
												   </a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="sticker">
												<a href="#">
                                                <img src="assets/images/sticker_2.png"/>
												</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="sticker_1">
                                                    <a href="#" class="btn_light_1"><p>Profile Status</p><span>Active</span><i class="fas fa-chevron-down"></i></a>
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
							<div class="row">
								<div class="col-md-12">
									<!-- <div class="summery_tabs">
										<ul class="nav nav-tabs" id="myTab" role="tablist">
  											<li class="nav-item" role="presentation">
    											<a class="nav-link active" id="SUMMARY-tab" data-toggle="tab" href="#SUMMARY" role="tab" aria-controls="SUMMARY" aria-selected="true">SUMMARY</a>
  											</li>
  											<li class="nav-item" role="presentation">
    											<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  											</li>
  											<li class="nav-item" role="presentation">
    											<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  											</li>
										</ul>
										<div class="tab-content" id="myTabContent">
  											<div class="tab-pane fade show active" id="SUMMARY" role="tabpanel" aria-labelledby="SUMMARY-tab">...</div>
  											<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  											<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
										</div>
									</div> -->
<!-- ===================================================================================================
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\page-tabs-start\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
=================================================================================================== -->
<!-- Tab links -->
<div class="page-tab">
  <button class="tablinks active" onclick="openCity(event, 'London')">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<!-- Tab content -->
<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>


<!-- ===================================================================================================
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\page-tabs-end\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
=================================================================================================== -->
 



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
			<!-- [ table Content ] start -->	
			<!-- <div class="row">
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
										<td><div class="org_activ">Active</div></td>
										<td><a href="#"><img src="assets/images/edit.png"></a></td>
									</tr>
									<tr class="blod">
									<td>2</td>
										<td>Drop Bike</td>
										<td>26 May, 2019</td>
										<td>United State</td>
										<td ><div class="org_deactiv">Deactive</div></td>
										<td><a href="#"><img src="assets/images/edit.png"></a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Glide</td>
										<td>23 April, 2018</td>
										<td>AUE</td>
										<td><div class="org_activ">Active</div></td>
										<td><a href="#"><img src="assets/images/edit.png"></a></td>
									</tr>
									<tr>
										<td>4</td>
										<td>OtoRide</td>
										<td>21 January, 2018</td>
										<td>Australia</td>
										<td><div class="org_activ">Active</div></td>
										<td><a href="#"><img src="assets/images/edit.png"></a></td>
									</tr>
									<tr>
										<td>1</td>
										<td>Jump Ride</td>
										<td>27 June, 2019</td>
										<td>Bangladesh</td>
										<td><div class="org_activ">Active</div></td>
										<td><a href="#"><img src="assets/images/edit.png"></a></td>
									</tr>
									<tr class="blod">
									<td>2</td>
										<td>Drop Bike</td>
										<td>26 May, 2019</td>
										<td>United State</td>
										<td ><div class="org_activ">Active</div></td>
										<td><a href="#"><img src="assets/images/edit.png"></a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Glide</td>
										<td>23 April, 2018</td>
										<td>AUE</td>
										<td><div class="org_activ">Active</div></td>
										<td><a href="#"><img src="assets/images/edit.png"></a></td>
									</tr>
									<tr>
										<td>4</td>
										<td>OtoRide</td>
										<td>21 January, 2018</td>
										<td>Australia</td>
										<td><div class="org_activ">Active</div></td>
										<td><a href="#"><img src="assets/images/edit.png"></a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>				 -->

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
<script src="assets/js/pages/dashboard.js"></script>
</body>

</html>
