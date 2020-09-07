<!DOCTYPE html>
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



						<!-- One "tab" for each step in the form: -->
						<div class="tab">

							<div class="row">
								<div class="col-md-12">
									<div class="upload-image mt-4">
										<img src="assets/images/e-logo.png">
										<div class="image-upload-field">
											<label for="file-upload" class="custom-file-upload">
												<i class="fas fa-pen"></i>
											</label>
											<input id="file-upload" type="file" required>
										</div>
									</div>
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-md-6">
									<label class="step-label">Name</label>
									<div class="input-fields">
										<p><input class="form-control" placeholder="" oninput="this.className = ''" required></p>
									</div>
								</div>
								<div class="col-md-6">
									<label class="step-label">Phone Number</label>
									<div class="input-fields">
										<p><input class="form-control" placeholder="" oninput="this.className = ''" required></p>
									</div>
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-md-6">
									<label class="step-label">Alies</label>
									<div class="input-fields">
										<p><input class="form-control" placeholder="" oninput="this.className = ''" required></p>
									</div>
								</div>
								<div class="col-md-6">
									<label class="step-label">Country</label>
									<div class="input-fields">
										<p><select id="country" name="country" class="form-control" required>
												<option value="">Select</option>
												<option value="Afghanistan">Afghanistan</option>
												<option value="Åland Islands">Åland Islands</option>
												<option value="Albania">Albania</option>
												<option value="Algeria">Algeria</option>
												<option value="American Samoa">American Samoa</option>
												<option value="Andorra">Andorra</option>
												<option value="Angola">Angola</option>
												<option value="Anguilla">Anguilla</option>
												<option value="Antarctica">Antarctica</option>
												<option value="Antigua and Barbuda">Antigua and Barbuda</option>
												<option value="Argentina">Argentina</option>
												<option value="Armenia">Armenia</option>
												<option value="Aruba">Aruba</option>
												<option value="Australia">Australia</option>
												<option value="Austria">Austria</option>
												<option value="Azerbaijan">Azerbaijan</option>
												<option value="Bahamas">Bahamas</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Bangladesh">Bangladesh</option>
												<option value="Barbados">Barbados</option>
												<option value="Belarus">Belarus</option>
												<option value="Belgium">Belgium</option>
												<option value="Belize">Belize</option>
												<option value="Benin">Benin</option>
												<option value="Bermuda">Bermuda</option>
												<option value="Bhutan">Bhutan</option>
												<option value="Bolivia">Bolivia</option>
												<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
												<option value="Botswana">Botswana</option>
												<option value="Bouvet Island">Bouvet Island</option>
												<option value="Brazil">Brazil</option>
												<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
												<option value="Brunei Darussalam">Brunei Darussalam</option>
												<option value="Bulgaria">Bulgaria</option>
												<option value="Burkina Faso">Burkina Faso</option>
												<option value="Burundi">Burundi</option>
												<option value="Cambodia">Cambodia</option>
												<option value="Cameroon">Cameroon</option>
												<option value="Canada">Canada</option>
												<option value="Cape Verde">Cape Verde</option>
												<option value="Cayman Islands">Cayman Islands</option>
												<option value="Central African Republic">Central African Republic</option>
												<option value="Chad">Chad</option>
												<option value="Chile">Chile</option>
												<option value="China">China</option>
												<option value="Christmas Island">Christmas Island</option>
												<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
												<option value="Colombia">Colombia</option>
												<option value="Comoros">Comoros</option>
												<option value="Congo">Congo</option>
												<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
												<option value="Cook Islands">Cook Islands</option>
												<option value="Costa Rica">Costa Rica</option>
												<option value="Cote D'ivoire">Cote D'ivoire</option>
												<option value="Croatia">Croatia</option>
												<option value="Cuba">Cuba</option>
												<option value="Cyprus">Cyprus</option>
												<option value="Czech Republic">Czech Republic</option>
												<option value="Denmark">Denmark</option>
												<option value="Djibouti">Djibouti</option>
												<option value="Dominica">Dominica</option>
												<option value="Dominican Republic">Dominican Republic</option>
												<option value="Ecuador">Ecuador</option>
												<option value="Egypt">Egypt</option>
												<option value="El Salvador">El Salvador</option>
												<option value="Equatorial Guinea">Equatorial Guinea</option>
												<option value="Eritrea">Eritrea</option>
												<option value="Estonia">Estonia</option>
												<option value="Ethiopia">Ethiopia</option>
												<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
												<option value="Faroe Islands">Faroe Islands</option>
												<option value="Fiji">Fiji</option>
												<option value="Finland">Finland</option>
												<option value="France">France</option>
												<option value="French Guiana">French Guiana</option>
												<option value="French Polynesia">French Polynesia</option>
												<option value="French Southern Territories">French Southern Territories</option>
												<option value="Gabon">Gabon</option>
												<option value="Gambia">Gambia</option>
												<option value="Georgia">Georgia</option>
												<option value="Germany">Germany</option>
												<option value="Ghana">Ghana</option>
												<option value="Gibraltar">Gibraltar</option>
												<option value="Greece">Greece</option>
												<option value="Greenland">Greenland</option>
												<option value="Grenada">Grenada</option>
												<option value="Guadeloupe">Guadeloupe</option>
												<option value="Guam">Guam</option>
												<option value="Guatemala">Guatemala</option>
												<option value="Guernsey">Guernsey</option>
												<option value="Guinea">Guinea</option>
												<option value="Guinea-bissau">Guinea-bissau</option>
												<option value="Guyana">Guyana</option>
												<option value="Haiti">Haiti</option>
												<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
												<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
												<option value="Honduras">Honduras</option>
												<option value="Hong Kong">Hong Kong</option>
												<option value="Hungary">Hungary</option>
												<option value="Iceland">Iceland</option>
												<option value="India">India</option>
												<option value="Indonesia">Indonesia</option>
												<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
												<option value="Iraq">Iraq</option>
												<option value="Ireland">Ireland</option>
												<option value="Isle of Man">Isle of Man</option>
												<option value="Israel">Israel</option>
												<option value="Italy">Italy</option>
												<option value="Jamaica">Jamaica</option>
												<option value="Japan">Japan</option>
												<option value="Jersey">Jersey</option>
												<option value="Jordan">Jordan</option>
												<option value="Kazakhstan">Kazakhstan</option>
												<option value="Kenya">Kenya</option>
												<option value="Kiribati">Kiribati</option>
												<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
												<option value="Korea, Republic of">Korea, Republic of</option>
												<option value="Kuwait">Kuwait</option>
												<option value="Kyrgyzstan">Kyrgyzstan</option>
												<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
												<option value="Latvia">Latvia</option>
												<option value="Lebanon">Lebanon</option>
												<option value="Lesotho">Lesotho</option>
												<option value="Liberia">Liberia</option>
												<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
												<option value="Liechtenstein">Liechtenstein</option>
												<option value="Lithuania">Lithuania</option>
												<option value="Luxembourg">Luxembourg</option>
												<option value="Macao">Macao</option>
												<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
												<option value="Madagascar">Madagascar</option>
												<option value="Malawi">Malawi</option>
												<option value="Malaysia">Malaysia</option>
												<option value="Maldives">Maldives</option>
												<option value="Mali">Mali</option>
												<option value="Malta">Malta</option>
												<option value="Marshall Islands">Marshall Islands</option>
												<option value="Martinique">Martinique</option>
												<option value="Mauritania">Mauritania</option>
												<option value="Mauritius">Mauritius</option>
												<option value="Mayotte">Mayotte</option>
												<option value="Mexico">Mexico</option>
												<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
												<option value="Moldova, Republic of">Moldova, Republic of</option>
												<option value="Monaco">Monaco</option>
												<option value="Mongolia">Mongolia</option>
												<option value="Montenegro">Montenegro</option>
												<option value="Montserrat">Montserrat</option>
												<option value="Morocco">Morocco</option>
												<option value="Mozambique">Mozambique</option>
												<option value="Myanmar">Myanmar</option>
												<option value="Namibia">Namibia</option>
												<option value="Nauru">Nauru</option>
												<option value="Nepal">Nepal</option>
												<option value="Netherlands">Netherlands</option>
												<option value="Netherlands Antilles">Netherlands Antilles</option>
												<option value="New Caledonia">New Caledonia</option>
												<option value="New Zealand">New Zealand</option>
												<option value="Nicaragua">Nicaragua</option>
												<option value="Niger">Niger</option>
												<option value="Nigeria">Nigeria</option>
												<option value="Niue">Niue</option>
												<option value="Norfolk Island">Norfolk Island</option>
												<option value="Northern Mariana Islands">Northern Mariana Islands</option>
												<option value="Norway">Norway</option>
												<option value="Oman">Oman</option>
												<option value="Pakistan">Pakistan</option>
												<option value="Palau">Palau</option>
												<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
												<option value="Panama">Panama</option>
												<option value="Papua New Guinea">Papua New Guinea</option>
												<option value="Paraguay">Paraguay</option>
												<option value="Peru">Peru</option>
												<option value="Philippines">Philippines</option>
												<option value="Pitcairn">Pitcairn</option>
												<option value="Poland">Poland</option>
												<option value="Portugal">Portugal</option>
												<option value="Puerto Rico">Puerto Rico</option>
												<option value="Qatar">Qatar</option>
												<option value="Reunion">Reunion</option>
												<option value="Romania">Romania</option>
												<option value="Russian Federation">Russian Federation</option>
												<option value="Rwanda">Rwanda</option>
												<option value="Saint Helena">Saint Helena</option>
												<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
												<option value="Saint Lucia">Saint Lucia</option>
												<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
												<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
												<option value="Samoa">Samoa</option>
												<option value="San Marino">San Marino</option>
												<option value="Sao Tome and Principe">Sao Tome and Principe</option>
												<option value="Saudi Arabia">Saudi Arabia</option>
												<option value="Senegal">Senegal</option>
												<option value="Serbia">Serbia</option>
												<option value="Seychelles">Seychelles</option>
												<option value="Sierra Leone">Sierra Leone</option>
												<option value="Singapore">Singapore</option>
												<option value="Slovakia">Slovakia</option>
												<option value="Slovenia">Slovenia</option>
												<option value="Solomon Islands">Solomon Islands</option>
												<option value="Somalia">Somalia</option>
												<option value="South Africa">South Africa</option>
												<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
												<option value="Spain">Spain</option>
												<option value="Sri Lanka">Sri Lanka</option>
												<option value="Sudan">Sudan</option>
												<option value="Suriname">Suriname</option>
												<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
												<option value="Swaziland">Swaziland</option>
												<option value="Sweden">Sweden</option>
												<option value="Switzerland">Switzerland</option>
												<option value="Syrian Arab Republic">Syrian Arab Republic</option>
												<option value="Taiwan, Province of China">Taiwan, Province of China</option>
												<option value="Tajikistan">Tajikistan</option>
												<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
												<option value="Thailand">Thailand</option>
												<option value="Timor-leste">Timor-leste</option>
												<option value="Togo">Togo</option>
												<option value="Tokelau">Tokelau</option>
												<option value="Tonga">Tonga</option>
												<option value="Trinidad and Tobago">Trinidad and Tobago</option>
												<option value="Tunisia">Tunisia</option>
												<option value="Turkey">Turkey</option>
												<option value="Turkmenistan">Turkmenistan</option>
												<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
												<option value="Tuvalu">Tuvalu</option>
												<option value="Uganda">Uganda</option>
												<option value="Ukraine">Ukraine</option>
												<option value="United Arab Emirates">United Arab Emirates</option>
												<option value="United Kingdom">United Kingdom</option>
												<option value="United States">United States</option>
												<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
												<option value="Uruguay">Uruguay</option>
												<option value="Uzbekistan">Uzbekistan</option>
												<option value="Vanuatu">Vanuatu</option>
												<option value="Venezuela">Venezuela</option>
												<option value="Viet Nam">Viet Nam</option>
												<option value="Virgin Islands, British">Virgin Islands, British</option>
												<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
												<option value="Wallis and Futuna">Wallis and Futuna</option>
												<option value="Western Sahara">Western Sahara</option>
												<option value="Yemen">Yemen</option>
												<option value="Zambia">Zambia</option>
												<option value="Zimbabwe">Zimbabwe</option>
											</select></p>
									</div>
								</div>
							</div>


							<div class="row mt-4">
								<div class="col-md-6">
									<label class="step-label">City</label>
									<div class="input-fields">
										<p><input class="form-control" placeholder="" oninput="this.className = ''" required></p>
									</div>
								</div>
								<div class="col-md-6">
									<label class="step-label">Postal/Zip</label>
									<div class="input-fields">
										<p><input class="form-control" placeholder="" oninput="this.className = ''" required></p>
									</div>
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-md-6">
									<label class="step-label">Default Fleet</label>
									<div class="input-fields">
										<p><select>
												<option value="N/A">N/A</option>
												<option value="Available">Available</option>
											</select></p>
									</div>
								</div>
								<div class="col-md-6">
									<label class="step-label">Type</label>
									<div class="input-fields">
										<p>
											<p><select>
													<option value="Testing 1">Testing 1</option>
													<option value="Testing 2">Testing 2</option>
												</select></p>
										</p>
									</div>
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-md-6">
									<label class="step-label">Domian</label>
									<div class="input-fields">
										<p><input class="form-control placeholder="" oninput=" this.className=''" required></p>
									</div>
								</div>
								<div class=" col-md-6">
											<label class="step-label">Port</label>
											<div class="input-fields">
												<p><input class="form-control placeholder="" oninput=" this.className=''" required></p>
									</div>
								</div>
							</div>

							<div class=" row mt-4">
													<div class="col-md-12">
														<label class="step-label">Addres</label>
														<div class="input-fields">
															<p><textarea class="form-control" placeholder="Test" required></textarea></p>
														</div>
													</div>
											</div>

									</div>

									<div class="tab">
										<div class="row mt-4">
											<div class="col-md-12">
												<label class="step-label">Addres</label>
												<div class="input-fields">
													<ul>
														<li>
															<input type="radio" name="optradio" checked id="myCheckbox1" / required>
															<label for="myCheckbox1"><img src="assets/images/scooter.png" /></label>
															<h6>Scooter</h6>
														</li>
														<li>

															<input type="radio" name="optradio" id="myCheckbox2" / required>
															<label for="myCheckbox2"><img src="assets/images/bike.png" /></label>
															<h6>Bike</h6>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="row mt-4">
											<div class="col-md-6">
												<label class="step-label">Subscription Plan</label>
												<div class="input-fields">
													<p><select>
															<option value="Testing 1">Grow</option>
															<option value="Testing 2">Testing 2</option>
														</select></p>
												</div>
											</div>
											<div class=" col-md-6">
												<label class="step-label">
													Per Vehicle Rate
												</label>
												<div class="input-fields">
													<p><input class="form-control placeholder="" oninput=" this.className=''" required></p>
									</div>
								</div>
							</div>

									</div>

									<div class=" tab">
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