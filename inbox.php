<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stresser.su|inbox</title>
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
        <!-- [ breadcrumb ] start -->
      
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card email-card">
                    <div class="card-header">
                        <div class="mail-header">
                            <div class="row align-items-center">
                                <!-- [ inbox-left section ] start -->

                                <!-- [ inbox-left section ] end -->
                                <!-- [ inbox-right section ] start -->
                                <div class="col-xl-12 col-md-12">
                                <div class="col-md-12">
                                            <a href="email_compose.php" class="btn waves-effect waves-light btn-rounded btn-outline-primary">NEW TICKET</a>
                                        </div>
                                    <div class="card user-profile-list">
                                        <div class="card-body">
                                            <div class="dt-responsive table-responsive">
                                                <table id="user-list-table" class="table nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-md-center">SUBJECT</th>
                                                            <th class="text-md-center">DEPARTMENT</th>
                                                            <th class="text-md-center">PRIORTY</th>
                                                            <th class="text-md-center">STATUS</th>
                                                            <th class="text-md-center">SYSTEM</th>
                                                            <th class="text-md-center">DATE</th>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-md-center">DUMMY</td>
                                                            <td class="text-md-center">DUMMY</td>
                                                            <td class="text-md-center">DUMMY</td>
                                                            <td class="text-md-center">DUMMY</td>
                                                            <td class="text-md-center">DUMMY</td>
                                                            <td class="text-md-center">DUMMY</td>
                                                        </tr>
                                                      
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ inbox-right section ] end -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mail-body">
                            <div class="row">
                                <!-- [ inbox-left section ] start -->
                                <div class="col-xl-2 col-md-3 mail-left">
                                    <div class="mail-l-content">
                                        <ul class="mb-2 nav nav-tab flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <li class="nav-item mail-section">
                                                <a class="nav-link text-left active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">
                                                    <span><i class="feather icon-inbox"></i> Answered</span>
                                                    <span class="float-right">6</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mail-section">
                                                <a class="nav-link text-left" id="v-pills-starred-tab" data-toggle="pill" href="#v-pills-starred" role="tab">
                                                    <span><i class="far fa-paper-plane"></i> Sent</span>
                                                    <span class="float-right">6</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mail-section">
                                                <a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-mail" role="tab">
                                                    <span><i class="fas fa-trash-alt"></i> All Tickets</span>
                                                    <span class="float-right">6</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- [ inbox-left section ] end -->
                                <!-- [ inbox-right section ] start -->
                                <div class="col-xl-10 col-md-9 inbox-right">
                                    <div class="email-btn">
                                        <button type="button" class="btn btn-sm btn-icon btn-rounded btn-outline-secondary mb-2"><i class="feather icon-alert-circle"></i></button>
                                        <button type="button" class="btn btn-sm btn-icon btn-rounded btn-outline-secondary mb-2"><i class="feather icon-inbox"></i></button>
                                        <button type="button" class="btn btn-sm btn-icon btn-rounded btn-outline-secondary mb-2"><i class="feather icon-trash-2"></i></button>
                                        <div class="btn-group mb-2">
                                            <button class="btn btn-sm drp-icon btn-rounded btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-log-out"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Move to</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-users mr-2"></i>Social</span></a>
                                                <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-tag mr-2"></i>Promotion</span></a>
                                                <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-upload-cloud mr-2"></i>Update</span></a>
                                                <a class="dropdown-item pl-4" href="#"><span><i class="feather icon-message-square mr-2"></i>Forum</span></a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-2 mr-2 ">
                                            <button class="btn btn-sm drp-icon btn-rounded btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                    class="feather icon-more-vertical"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#!">Mark as unread</a>
                                                <a class="dropdown-item" href="#!">Mark as important</a>
                                                <a class="dropdown-item" href="#!">Mark as not important</a>
                                                <a class="dropdown-item" href="#!">Filter messages like these</a>
                                                <a class="dropdown-item" href="#!">Mute</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content p-0" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <ul class="nav nav-pills nav-fill mb-0" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-primary-tab" data-toggle="pill" href="#pills-primary" role="tab" aria-controls="pills-primary" aria-selected="true"><span><i class="feather icon-inbox"></i>
                                                            primary</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-social-tab" data-toggle="pill" href="#pills-social" role="tab" aria-controls="pills-social" aria-selected="false"><span><i class="feather icon-users"></i>
                                                            Social</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-Promotion-tab" data-toggle="pill" href="#pills-Promotion" role="tab" aria-controls="pills-Promotion" aria-selected="false"><span><i class="feather icon-tag"></i>
                                                            Promotions</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-update-tab" data-toggle="pill" href="#pills-update" role="tab" aria-controls="pills-update" aria-selected="false"><span><i class="feather icon-upload-cloud"></i>
                                                            Update</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-forum-tab" data-toggle="pill" href="#pills-forum" role="tab" aria-controls="pills-forum" aria-selected="false"><span><i class="feather icon-message-square"></i>
                                                            Forum</span></a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-primary" role="tabpanel" aria-labelledby="pills-primary-tab">
                                                    <div class="mail-body-content table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-1" id="checkbox-s-infill-1">
                                                                                    <label for="checkbox-s-infill-1" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                                    <td class="email-time">13:02 PM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-2" id="checkbox-s-infill-2">
                                                                                    <label for="checkbox-s-infill-2" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                                    <td>
                                                                        <a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-image mr-2"></i>user.png</a>
                                                                            <a href="#!" class="mail-attach ml-2"><i class="feather icon-file-text mr-2"></i>file.doc</a>
                                                                        </div>
                                                                    </td>

                                                                    <td class="email-time">12:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-3" id="checkbox-s-infill-3">
                                                                                    <label for="checkbox-s-infill-3" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">png new updates comes for you</a></td>
                                                                    <td class="email-time">00:05 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-4" id="checkbox-s-infill-4">
                                                                                    <label for="checkbox-s-infill-4" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                                                    <td class="email-time">10:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-5" id="checkbox-s-infill-5">
                                                                                    <label for="checkbox-s-infill-5" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Harry John</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                                                    <td class="email-time">11:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-6" id="checkbox-s-infill-6">
                                                                                    <label for="checkbox-s-infill-6" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                                    <td class="email-time">12:01 PM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-7" id="checkbox-s-infill-7">
                                                                                    <label for="checkbox-s-infill-7" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Charts waiting for you</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-film mr-2"></i>video</a></div>
                                                                    </td>
                                                                    <td class="email-time">07:15 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-8" id="checkbox-s-infill-8">
                                                                                    <label for="checkbox-s-infill-8" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                                    <td class="email-time">08:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-9" id="checkbox-s-infill-9">
                                                                                    <label for="checkbox-s-infill-9" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                                    <td class="email-time">13:02 PM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-10" id="checkbox-s-infill-10">
                                                                                    <label for="checkbox-s-infill-10" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">SCSS current working for new updates</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-file-text mr-2"></i>file.doc</a></div>
                                                                    </td>
                                                                    <td class="email-time">12:01 PM</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">
                                                    <div class="mail-body-content table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-11" id="checkbox-s-infill-11">
                                                                                    <label for="checkbox-s-infill-11" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                                    <td>
                                                                        <a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-image mr-2"></i>user.png</a>
                                                                            <a href="#!" class="mail-attach ml-2"><i class="feather icon-file-text mr-2"></i>file.doc</a>
                                                                        </div>
                                                                    </td>

                                                                    <td class="email-time">12:01 AM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-12" id="checkbox-s-infill-12">
                                                                                    <label for="checkbox-s-infill-12" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                                    <td class="email-time">13:02 PM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-13" id="checkbox-s-infill-13">
                                                                                    <label for="checkbox-s-infill-13" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">png new updates comes for you</a></td>
                                                                    <td class="email-time">00:05 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-14" id="checkbox-s-infill-14">
                                                                                    <label for="checkbox-s-infill-14" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                                                    <td class="email-time">10:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-15" id="checkbox-s-infill-15">
                                                                                    <label for="checkbox-s-infill-15" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Harry John</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                                                    <td class="email-time">11:01 AM</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-Promotion" role="tabpanel" aria-labelledby="pills-Promotion-tab">
                                                    <div class="mail-body-content table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-16" id="checkbox-s-infill-16">
                                                                                    <label for="checkbox-s-infill-16" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                                    <td>
                                                                        <a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-image mr-2"></i>user.png</a>
                                                                            <a href="#!" class="mail-attach ml-2"><i class="feather icon-file-text mr-2"></i>file.doc</a>
                                                                        </div>
                                                                    </td>

                                                                    <td class="email-time">12:01 AM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-17" id="checkbox-s-infill-17">
                                                                                    <label for="checkbox-s-infill-17" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                                    <td class="email-time">13:02 PM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-18" id="checkbox-s-infill-18">
                                                                                    <label for="checkbox-s-infill-18" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">png new updates comes for you</a></td>
                                                                    <td class="email-time">00:05 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-19" id="checkbox-s-infill-19">
                                                                                    <label for="checkbox-s-infill-19" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                                                    <td class="email-time">10:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-20" id="checkbox-s-infill-20">
                                                                                    <label for="checkbox-s-infill-20" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Harry John</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                                                    <td class="email-time">11:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-21" id="checkbox-s-infill-21">
                                                                                    <label for="checkbox-s-infill-21" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                                    <td class="email-time">12:01 PM</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-update" role="tabpanel" aria-labelledby="pills-update-tab">
                                                    <div class="mail-body-content table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-22" id="checkbox-s-infill-22">
                                                                                    <label for="checkbox-s-infill-22" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                                    <td>
                                                                        <a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-image mr-2"></i>user.png</a>
                                                                            <a href="#!" class="mail-attach ml-2"><i class="feather icon-file-text mr-2"></i>file.doc</a>
                                                                        </div>
                                                                    </td>

                                                                    <td class="email-time">12:01 AM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-23" id="checkbox-s-infill-23">
                                                                                    <label for="checkbox-s-infill-23" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                                    <td class="email-time">13:02 PM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-24" id="checkbox-s-infill-24">
                                                                                    <label for="checkbox-s-infill-24" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">png new updates comes for you</a></td>
                                                                    <td class="email-time">00:05 AM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-25" id="checkbox-s-infill-25">
                                                                                    <label for="checkbox-s-infill-25" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                                                    <td class="email-time">10:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-26" id="checkbox-s-infill-26">
                                                                                    <label for="checkbox-s-infill-26" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Harry John</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                                                    <td class="email-time">11:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-27" id="checkbox-s-infill-27">
                                                                                    <label for="checkbox-s-infill-27" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                                    <td class="email-time">12:01 PM</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-forum" role="tabpanel" aria-labelledby="pills-forum-tab">
                                                    <div class="mail-body-content table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-28" id="checkbox-s-infill-28">
                                                                                    <label for="checkbox-s-infill-28" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                                    <td>
                                                                        <a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-image mr-2"></i>user.png</a>
                                                                            <a href="#!" class="mail-attach ml-2"><i class="feather icon-file-text mr-2"></i>file.doc</a>
                                                                        </div>
                                                                    </td>

                                                                    <td class="email-time">12:01 AM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-29" id="checkbox-s-infill-29">
                                                                                    <label for="checkbox-s-infill-29" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                                    <td class="email-time">13:02 PM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-30" id="checkbox-s-infill-30">
                                                                                    <label for="checkbox-s-infill-30" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">png new updates comes for you</a></td>
                                                                    <td class="email-time">00:05 AM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-31" id="checkbox-s-infill-31">
                                                                                    <label for="checkbox-s-infill-31" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                                                    <td class="email-time">10:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-32" id="checkbox-s-infill-32">
                                                                                    <label for="checkbox-s-infill-32" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Harry John</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                                                    <td class="email-time">11:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-33" id="checkbox-s-infill-33">
                                                                                    <label for="checkbox-s-infill-33" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                                    <td class="email-time">12:01 PM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-34" id="checkbox-s-infill-34">
                                                                                    <label for="checkbox-s-infill-34" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Charts waiting for you</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-film mr-2"></i>video</a></div>
                                                                    </td>
                                                                    <td class="email-time">07:15 AM</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-starred" role="tabpanel">
                                            <p class="mb-0">
                                                <div class="tab-pane fade show active" id="pills-starred" role="tabpanel">
                                                    <div class="mail-body-content table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-35" id="checkbox-s-infill-35">
                                                                                    <label for="checkbox-s-infill-35" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                                    <td class="email-time">13:02 PM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-36" id="checkbox-s-infill-36">
                                                                                    <label for="checkbox-s-infill-36" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                                    <td>
                                                                        <a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-image mr-2"></i>user.png</a>
                                                                            <a href="#!" class="mail-attach ml-2"><i class="feather icon-file-text mr-2"></i>file.doc</a>
                                                                        </div>
                                                                    </td>

                                                                    <td class="email-time">12:01 AM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-37" id="checkbox-s-infill-37">
                                                                                    <label for="checkbox-s-infill-37" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">png new updates comes for you</a></td>
                                                                    <td class="email-time">00:05 AM</td>
                                                                </tr>
                                                                <tr class="unread">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-38" id="checkbox-s-infill-38">
                                                                                    <label for="checkbox-s-infill-38" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                                                    <td class="email-time">10:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-39" id="checkbox-s-infill-39">
                                                                                    <label for="checkbox-s-infill-39" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Harry John</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                                                    <td class="email-time">11:01 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-40" id="checkbox-s-infill-40">
                                                                                    <label for="checkbox-s-infill-40" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                                    <td class="email-time">12:01 PM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-41" id="checkbox-s-infill-41">
                                                                                    <label for="checkbox-s-infill-41" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Charts waiting for you</a>
                                                                        <div><a href="#!" class="mail-attach"><i class="feather icon-film mr-2"></i>video</a></div>
                                                                    </td>
                                                                    <td class="email-time">07:15 AM</td>
                                                                </tr>
                                                                <tr class="read">
                                                                    <td>
                                                                        <div class="check-star">
                                                                            <div class="form-group d-inline">
                                                                                <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                                    <input type="checkbox" name="checkbox-s-in-42" id="checkbox-s-infill-42">
                                                                                    <label for="checkbox-s-infill-42" class="cr"></label>
                                                                                </div>
                                                                            </div>
                                                                            <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                        </div>
                                                                    </td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                                    <td><a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                                    <td class="email-time">08:01 AM</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-draft" role="tabpanel">
                                            <div class="mail-body-content table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-43" id="checkbox-s-infill-43">
                                                                            <label for="checkbox-s-infill-43" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                            <td class="email-time">13:02 PM</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-44" id="checkbox-s-infill-44">
                                                                            <label for="checkbox-s-infill-44" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                            <td>
                                                                <a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                <div><a href="#!" class="mail-attach"><i class="feather icon-image mr-2"></i>user.png</a>
                                                                    <a href="#!" class="mail-attach ml-2"><i class="feather icon-file-text mr-2"></i>file.doc</a>
                                                                </div>
                                                            </td>

                                                            <td class="email-time">12:01 AM</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-45" id="checkbox-s-infill-45">
                                                                            <label for="checkbox-s-infill-45" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">png new updates comes for you</a></td>
                                                            <td class="email-time">00:05 AM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-46" id="checkbox-s-infill-46">
                                                                            <label for="checkbox-s-infill-46" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                            <td class="email-time">12:01 PM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-47" id="checkbox-s-infill-47">
                                                                            <label for="checkbox-s-infill-47" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Charts waiting for you</a>
                                                                <div><a href="#!" class="mail-attach"><i class="feather icon-film mr-2"></i>video</a></div>
                                                            </td>
                                                            <td class="email-time">07:15 AM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-48" id="checkbox-s-infill-48">
                                                                            <label for="checkbox-s-infill-48" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                            <td class="email-time">08:01 AM</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-mail" role="tabpanel">
                                            <div class="mail-body-content table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-49" id="checkbox-s-infill-49">
                                                                            <label for="checkbox-s-infill-49" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">png new updates comes for you</a></td>
                                                            <td class="email-time">00:05 AM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-50" id="checkbox-s-infill-50">
                                                                            <label for="checkbox-s-infill-50" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                            <td class="email-time">12:01 PM</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-51" id="checkbox-s-infill-51">
                                                                            <label for="checkbox-s-infill-51" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                            <td class="email-time">13:02 PM</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-52" id="checkbox-s-infill-52">
                                                                            <label for="checkbox-s-infill-52" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                            <td>
                                                                <a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                <div><a href="#!" class="mail-attach"><i class="feather icon-image mr-2"></i>user.png</a>
                                                                    <a href="#!" class="mail-attach ml-2"><i class="feather icon-file-text mr-2"></i>file.doc</a>
                                                                </div>
                                                            </td>

                                                            <td class="email-time">12:01 AM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-53" id="checkbox-s-infill-53">
                                                                            <label for="checkbox-s-infill-53" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Charts waiting for you</a>
                                                                <div><a href="#!" class="mail-attach"><i class="feather icon-film mr-2"></i>video</a></div>
                                                            </td>
                                                            <td class="email-time">07:15 AM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-54" id="checkbox-s-infill-54">
                                                                            <label for="checkbox-s-infill-54" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                            <td class="email-time">08:01 AM</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-Trash" role="tabpanel">
                                            <div class="mail-body-content table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-55" id="checkbox-s-infill-55">
                                                                            <label for="checkbox-s-infill-55" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Charts waiting for you</a>
                                                                <div><a href="#!" class="mail-attach"><i class="feather icon-film mr-2"></i>video</a></div>
                                                            </td>
                                                            <td class="email-time">07:15 AM</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-56" id="checkbox-s-infill-56">
                                                                            <label for="checkbox-s-infill-56" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                            <td class="email-time">08:01 AM</td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-57" id="checkbox-s-infill-57">
                                                                            <label for="checkbox-s-infill-57" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">png new updates comes for you</a></td>
                                                            <td class="email-time">00:05 AM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-58" id="checkbox-s-infill-58">
                                                                            <label for="checkbox-s-infill-58" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                            <td class="email-time">12:01 PM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-59" id="checkbox-s-infill-59">
                                                                            <label for="checkbox-s-infill-59" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">John Doe</a></td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                            <td class="email-time">13:02 PM</td>
                                                        </tr>
                                                        <tr class="read">
                                                            <td>
                                                                <div class="check-star">
                                                                    <div class="form-group d-inline">
                                                                        <div class="checkbox checkbox-primary checkbox-fill d-inline">
                                                                            <input type="checkbox" name="checkbox-s-in-60" id="checkbox-s-infill-60">
                                                                            <label for="checkbox-s-infill-60" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#"><i class="feather icon-star-on text-warning ml-2"></i></a>
                                                                </div>
                                                            </td>
                                                            <td><a href="email_read.html" class="email-name waves-effect">Google Inc</a></td>
                                                            <td>
                                                                <a href="email_read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer</a>
                                                                <div><a href="#!" class="mail-attach"><i class="feather icon-image mr-2"></i>user.png</a>
                                                                    <a href="#!" class="mail-attach ml-2"><i class="feather icon-file-text mr-2"></i>file.doc</a>
                                                                </div>
                                                            </td>
                                                            <td class="email-time">12:01 AM</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ inbox-right section ] end -->
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

<!-- <script>
    // header option
    $('#pct-toggler').on('click', function() {
        $('.pct-customizer').toggleClass('active');

    });
    // header option
    $('#cust-sidebrand').change(function() {
        if ($(this).is(":checked")) {
            $('.theme-color.brand-color').removeClass('d-none');
            $('.m-header').addClass('bg-dark');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.png');
            $('.theme-color.brand-color').addClass('d-none');
        }
    });
    // Header Color
    $('.brand-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.m-header').removeClassPrefix('bg-');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.png');
            $('.m-header').addClass(temp);
        }
    });
    // Header Color
    $('.header-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.pc-header').removeClassPrefix('bg-');
        } else {
            $('.pc-header').removeClassPrefix('bg-');
            $('.pc-header').addClass(temp);
        }
    });
    // sidebar option
    $('#cust-sidebar').change(function() {
        if ($(this).is(":checked")) {
            $('.pc-sidebar').addClass('light-sidebar');
            $('.pc-horizontal .topbar').addClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.png');
        } else {
            $('.pc-sidebar').removeClass('light-sidebar');
            $('.pc-horizontal .topbar').removeClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.png');
        }
    });
    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, it) {
            var classes = it.className.split(" ").map(function(item) {
                return item.indexOf(prefix) === 0 ? "" : item;
            });
            it.className = classes.join(" ");
        });
        return this;
    };
</script> -->

</body>
</html>
