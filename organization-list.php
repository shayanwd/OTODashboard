<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stresser.su|Dashboard</title>
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
											<a class="btn_dark" href="#"><i class="fas fa-plus"></i> Add</a>
										</div>											
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
			</div>

			
			<div class="row">
			<div class="col-xl-12 col-md-12">
				<div class="card user-profile-list">
					<div class="card-body_my">
						<div class="dt-responsive table-responsive">
							<table id="user-list-table" class="table nowrap">
								<thead>
									<tr>
										<th class="text-md-center">SERVER NAME</th>
										<th class="text-md-center">NETWORK</th>
										<th class="text-md-center">LOAD</th>
										<th class="text-md-center">SERVER STATUS</th>
									
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-md-center">Support Lead</td>
										<td class="text-md-center">Edinburgh</td>
										<td class="text-md-center">61</td>
										<td class="text-md-center">61</td>
									</tr>
									<tr>
										<td class="text-md-center">Support Lead</td>
										<td class="text-md-center">Edinburgh</td>
										<td class="text-md-center">61</td>
										<td class="text-md-center">61</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
</div>

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
