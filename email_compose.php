<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stresser.su|Email-Compose</title>

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

    <link rel="stylesheet" href="assets/css/plugins/trumbowyg.min.css">
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
<section class="pc-container">
    <div class="pcoded-content">
     
        <!-- [ Main Content ] start -->
        <div class="row">
				<div class="col-sm-12">
					<div class="card email-card">
						<div class="card-header">
							<div class="mail-header">
								<div class="row align-items-center">
									<!-- [ email-left section ] start -->
									<div class="col-xl-2 col-md-3">
										<div class="mb-3">
											<a href="inbox.php"
												class="btn waves-effect waves-light btn-rounded btn-outline-primary">Return
												inbox</a>
										</div>
									</div>
									<!-- [ email-left section ] end -->
									<!-- [ email-right section ] start -->

									<!-- [ email-right section ] end -->
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="mail-body">
								<div class="row">
									<!-- [ email-left section ] start -->
									<div class="col-xl-2 col-md-3 mail-left">
										<div class="mail-l-content">
											<ul class="mb-2 nav nav-tab flex-column nav-pills">
												<li class="nav-item mail-section">
													<a class="nav-link text-left active" href="inbox.php">
														<span><i class="feather icon-inbox"></i> Inbox</span>
														<span class="float-right">6</span>
													</a>
												</li>
												<li class="nav-item mail-section">
													<a class="nav-link text-left" href="inbox.php">
														<span><i class="feather icon-star-on"></i> Starred</span>
													</a>
												</li>
												<li class="nav-item mail-section">
													<a class="nav-link text-left" href="inbox.php">
														<span><i class="feather icon-file-text"></i> Drafts</span>
													</a>
												</li>
												<li class="nav-item mail-section">
													<a class="nav-link text-left" href="inbox.php">
														<span><i class="feather icon-navigation"></i> Sent Mail</span>
													</a>
												</li>
												<li class="nav-item mail-section">
													<a class="nav-link text-left" href="inbox.php">
														<span><i class="feather icon-trash-2"></i> Trash</span>
													</a>
												</li>
											</ul>
											<a class="email-more-link" data-toggle="collapse" href="#email-more-cont"
												role="button" aria-expanded="false"
												aria-controls="email-more-cont"><span><i
														class="feather icon-chevron-down mr-2"></i>More</span><span
													style="display: none;"><i
														class="feather icon-chevron-up mr-2"></i>Less</span></a>
											<div class="collapse" id="email-more-cont">
												<ul class="nav nav-tab flex-column nav-pills">
													<li class="nav-item mail-section">
														<a class="nav-link text-left">
															<span><i class="feather icon-zap"></i> Important</span>
															<span class="float-right">6</span>
														</a>
													</li>
													<li class="nav-item mail-section">
														<a class="nav-link text-left">
															<span><i class="feather icon-message-circle"></i>
																Chats</span>
														</a>
													</li>
													<li class="nav-item mail-section">
														<a class="nav-link text-left">
															<span><i class="feather icon-alert-triangle"></i>
																Spam</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- [ email-left section ] end -->
									<!-- [ email-right section ] start -->
									<div class="col-xl-10 col-md-9">
										<div class="tab-content" id="v-pills-tabContent">
											<div class="mail-body-content">
												<form class="form-material">
													<div class="form-group">
														<label for="exampleInputEmail1">To</label>
														<input type="email" class="form-control"
															id="exampleInputEmail1">
													</div>
													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputEmail2">DEPARTMENT</label>
																	<!-- <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"> -->
																	<select class="form-control">
																		<option>Choose Department</option>
																		<option>Billing</option>
																		<option>General</option>
																		<option>Tech</option>
																		<option>Other</option>
																	</select>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputEmail3">PRIORITY</label>
																	<select class="form-control">
																		<option>Choose Priority</option>
																		<option>Low</option>
																		<option>Medium</option>
																		<option>High</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<textarea id="tinymce-editor"
														name="name">Put your things hear...</textarea>
													<div class="float-right mt-3">
														<button type="button"
															class="btn waves-effect waves-light btn-secondary">Save as
															draft</button>
														<button type="button"
															class="btn waves-effect waves-light btn-primary">Send</button>
													</div>
												</form>
											</div>
										</div>
									</div>
									<!-- [ email-right section ] end -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="assets/js/plugins/clipboard.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>

<!-- trumbowyg editor -->
<script src="assets/js/plugins/trumbowyg.min.js"></script>
<script>
    // tinymce editor
    $(window).on('load', function() {
        $('#tinymce-editor').trumbowyg({
            pngPath: 'assets/css/plugins/icons.png',
            btns: [
                ['viewHTML'],
                ['undo', 'redo'],
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ]
        });
    });
</script>
<script>
    $('.email-mob-toggle').on('click',function(){
        $('.mail-left').addClass('mail-menu-active');
        $('.mail-left').append('<div id="overlay-email-mob"></div>');
        $("#overlay-email-mob").on('click', function() {
            $('.mail-left').removeClass('mail-menu-active');
            $('#overlay-email-mob').remove();
        });
    });
</script>



</body>
</html>
