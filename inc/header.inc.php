<?php

ob_start();

session_start();

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Royal Apps</title>

    <!-- Favicon icon --


    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">

    <!-- Pignose Calender -->

    <link href="plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">

    <!-- Chartist -->

    <link rel="stylesheet" href="plugins/chartist/css/chartist.min.css">

    <link rel="stylesheet" href="plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">

    <!-- Custom Stylesheet -->

    <link href="css/style.css" rel="stylesheet">



    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

	<style>
		td,th
		{
			padding:10px !important;
		}
		.card-title
		{
			color:#324cdd !important;
		}
	</style>

</head>



<body>



    <!--*******************

        Preloader start

    ********************-->

    <div id="preloader">

        <div class="loader">

            <svg class="circular" viewBox="25 25 50 50">

                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />

            </svg>

        </div>

    </div>

    <!--*******************

        Preloader end

    ********************-->





    <!--**********************************

        Main wrapper start

    ***********************************-->

    <div id="main-wrapper">



        <!--**********************************

            Nav header start

        ***********************************-->

        <div class="nav-header">

            <div class="brand-logo">

                <a href="index.php?module=dashboard">

                    <b class="logo-abbr"><img src="images/ams_logo.png" alt=""> </b>

                    <span class="logo-compact"><img src="images/ams_logo.png" alt="" height="50" width="50"></span>

                    <span class="brand-title">

                        Royal Apps

                    </span>

                </a>

            </div>

        </div>

        <!--**********************************

            Nav header end

        ***********************************-->



        <!--**********************************

            Header start

        ***********************************-->

        <div class="header">

            <div class="header-content clearfix">



                <div class="nav-control">

                    <div class="hamburger">

                        <span class="toggle-icon"><i class="fa fa-bars"></i></span>

                    </div>

                </div>

               


                <div class="header-right">

                    <ul class="clearfix">

                        

                        <li class="icons dropdown"><!--d-none d-md-flex-->

                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">

                                <!--<span class="activity active"></span>-->

                            



                                <strong> <span><b><?php echo ucfirst($_SESSION['name']); ?>   </b> </span> <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i></strong>



                            </div>

                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">

                                <div class="dropdown-content-body">

                                    <ul>

                                      



                                        <li><a href="logout.php"><i class="fa fa-lock"></i> <span>Logout</span></a></li>

                                    </ul>

                                </div>

                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

        <!--**********************************

            Header end ti-comment-alt

        ***********************************-->