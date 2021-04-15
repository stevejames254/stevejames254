<?php
include('login/db.php')
 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EstateAgency Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/nucleo/css/nucleo.css" type="text/css">


    <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<style>
   
</style>

<body class="body">





    <!--/ Form Search End /-->
    <!--sidebar-->
    <div class="box-collapse">
        <div class="title-box-d" style="background-color:#f3f3f3;">
            <div class="container" style="padding: 50px 40px 0 40px;">
                <div class="settings">
                <div class="profile">
											<img class="avatar-xl" src="img/agent-1.jpg" alt="avatar" style="width:60px; height:60px; border-radius:100% ">
											<h1><a>Steve james</a></h1>
											<span>stevenjihia3@gmail.com</span>
											<div class="stats">
												<div class="item">
													<h2>0</h2>
													<h3>Ticket Sold</h3>
												</div>
												<div class="item">
													<h2>0</h2>
													<h3>No of Events</h3>
												</div>
												<div class="item">
													<h2>0</h2>
													<h3>Followers</h3>
												</div>
											</div>
										</div>
                </div>
            </div>
        </div>


        <!--sidebar-->



        <span class="close-box-collapse right-boxed ion-ios-close" style="color:black;"></span>
        <div class="container" style="margin-top:30px;">
            <p style="color: gray; font-size:12px; font-weight: bolder;">ACCESS</p>
            <div class="container">
                <div class="tab-pane" id="settings">
                    <div class="settings">

                        <div class="categories" id="accordionSettings">

                            <!-- Start of My Account -->
                            <div class="category">
                                <a href="#" class="title collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                    <div class="data">
                                        <h5>ACCOUNT</h5>
                                        <p>Update your profile details</p>
                                    </div>
                                    <i class="icon fa fa-angle-right"></i>
                                </a>
                                <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionSettings">
                                    <div class="content">
                                        <div class="upload">
                                            <form>
                                                <div class="data">
                                                    <img class="avatar-xl" src="img/about-1.jpg" alt="image" style="width: 60px; height: 60px; border-radius: 50%;">
                                                    <label style="margin-top:15px;">
                                                        <input type="file">
                                                        <span class="big-btn post-cata">+ ADD</span>
                                                    </label>

                                                </div>

                                                <hr>

                                                <div class="parent" style="margin-top:20px;">
                                                    <div class="field">
                                                        <label for="firstName">First name <span>*</span></label>
                                                        <input type="text" class="form-control" id="firstName" placeholder="First name" value="Michael" required>
                                                    </div>
                                                    <div class="field">
                                                        <label for="lastName">Last name <span>*</span></label>
                                                        <input type="text" class="form-control" id="lastName" placeholder="Last name" value="Knudsen" required>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label for="email">Email <span>*</span></label>
                                                    <input type="email" class="form-control" id="email" placeholder="Enter your email address" value="michael@gmail.com" required>
                                                </div>
                                                <div class="field">
                                                    <label for="email"><span style="color:green; font-weight:bolder;">MPESA</span> No <span>*</span></label>
                                                    <input type="phone" class="form-control" id="email" placeholder="Enter your phone No" value="+254726525309" required>
                                                </div>
                                                <div class="field">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" placeholder="Enter a new password" value="password" required>
                                                </div>
                                                <div class="con text-center">
                                                    <button class="post-cata">Delete</button>
                                                    <button type="submit" class="post-cata">Update</button>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End of My Account -->

                            <!-- Start of Connections -->
                            <div class="category">
                                <a href="#" class="title collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">


                                    <div class="data">
                                        <h5>GIFTS STORE<sup> <span class="badge badge-danger badge-counter" style="">1+</span></sup></h5>
                                        <p>View your Gifts Store</p>

                                    </div>
                                    <i class="icon fa fa-angle-right"></i>
                                </a>
                                <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionSettings">
                                    <div class="content">
                                        <div class="app">
                                            <div class="tican" style="background-color:#f3f3f3; padding:20px 20px 20px 20px; border-radius:100%; margin-right:20px">
                                                <i class="fa fa-ticket" style="font-size:40px;"></i>
                                            </div>
                                            <div class="permissions">
                                                <h5>Xtial Della</h5>
                                                <p style="color:grey; line-height:10px;">Member invite code : <span style="color:brown; font-weight:bolder;">2463</span></p>
                                                <p style="color:grey; line-height:5px; font-size:12px;">Exp: 2hrs from now </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- End of Settings -->
            </div>
        </div>
        <hr>


        <div class="container">
            <p style="color: gray; font-size:12px; font-weight: bolder;">SETTINGS</p>
            <div class="container">
                <div class="tab-pane" id="settings">
                    <div class="settings">
                        <div class="categories" id="accordionSettings">
                            <div class="category">
                                <a href="sign-in.html" class="title collapsed">
                                    <div class="data">
                                        <h5>DARK MODE</h5>
                                    </div>
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </a>
                            </div>
                            <div class="category">
                                <a href="sign-in.php" class="title collapsed">

                                    <div class="data">
                                        <h5>LOG OUT</h5>

                                    </div>

                                </a>
                            </div>
                            <!-- End of Logout -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Settings -->
        </div>



        <div class="container text-center" style="margin-top:40px;">

            <div class="copyright-footer">
                <p class="copyright color-text-a">
                    &copy; Copyright
                    <span class="color-a">Vesco</span> 2021.
                </p>
            </div>


        </div>

    </div>


    <!--end sidebar-->




    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <a class="navbar-brand " href="index.html" style="color:#000; padding-left: 20px; font-size:20px; font-weight:bolder;">Live <span style="background-color:brown; padding:5px 10px 5px 10px; border-radius:3px; color:#fff">Biz <sup style="font-size:8px;">KE</sup></span><span class="color-b"></span></a>

        <!--search btn-->
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <style>
                            .form-control::placeholder {

                                padding-left: 40px;
                            }
                        </style>
                        <form class="form-search">
                            <div class="input-group " style="width: 750px;">
                                <input type="text" class="form-control" placeholder="Search your event..." style="background-color:#f3f3f3; border:none;">
                                <button class="btn emoticons" style="font-size:15px;"><i class="fa fa-search"></i></button>
                                <button type="submit" class="btn send1"><i class="fa fa-microphone" style="font-size:20px; color: #525f7f;"></i></button>

                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false" style="color: gray; ">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>


        <!--th live option-->

        <div class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-th" style="font-size:20px;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                <div class="container">
                    <a class="dropdown-item" href="event.php" style="text-align:center;border:2px solid #f3f3f3"><i class="fa fa-video-camera" style="font-size:20px;"></i> &nbsp;GO Live</a>
                </div>
                <hr>
                <p style="color:darkgrey; margin-left:10px; font-weight:bold; font-size:12px;">LIVESTREAM WALLET</p>
                <div class="container">

                    <a class="dropdown-item" href="blog-single.html"><i class="fa fa-briefcase" style="font-size:20px;"></i> &nbsp; withdraw</a>
                    <a class="dropdown-item" href="blog-single.html"><i class="fa fa-bookmark" style="font-size:20px;"></i> &nbsp; Reports</a>
                    <hr>
                    <div class="container">

                        <a class="dropdown-item" href="property-single.html" style="text-align:center;border:2px solid #f3f3f3; font-size:20px;">0<span style="font-size:15px">.0</span></a>
                    </div>

                </div>

            </div>
        </div>

        <!--notification-->

        <div class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55" style="font-size:18px;"><sup><span class="badge badge-danger badge-counter" style=""> +1 </span></sup></i>

            </a>
            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden" style="width:600px;">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                    <h6 class="text-sm text-muted m-0">Notification</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                    <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row">

                            <div class="container">

                                <p style="color:gray;"><i class="fa fa-info"></i> &nbsp;&nbsp;2000 KES updated to your wallet</p>

                                <p style="color:gray;"><i class="fa fa-info"></i> &nbsp;&nbsp; your wallet is updated</p>



                            </div>

                        </div>
                    </a>


                </div>
                <!-- View all -->
                <div class="container"> <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3" style="border:2px solid #f3f3f3; margin:20px 0 20px 0;">Clear all</a></div>

            </div>
        </div>


        <!--user profile-->

        <a type="button" class="btn btn-link collapse navbar-toggle-box-collapse  d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="true">

            <img class="img-profile rounded-circle" src="img/about-2.jpg" style="width: 30px; height: 30px;">
        </a>

    </nav>

    <!--end Nav star-->




    <!--bottom nav-->

    <nav class="navbar1 navbar-default  fixed-bottom " style="">
        <ul>
            <li style="background-color:#f3f3f3">
                <a href="live.php"><i class="fa fa-television" style="font-size: 20px; color: gray;"></i><br>LIVE</a>
            </li>
            <li>
                <a type="button" class="btn btn-link  navbar-toggle-box-collapse  d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="true" style="">

                    <img class="img-profile rounded-circle" src="img/about-2.jpg" style="width: 40px; height: 40px; border:2px solid brown;">
                </a>
            </li>
            <li>
                <a href="event.php"><i class="fa fa-ticket" style="font-size: 20px; color:gray;"></i><br>EVENTS</a>
            </li>
        </ul>
    </nav>

    <!--end bottom nav-->




    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->

    <!-- All js -->
    <script src="js/poca.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>
    <script src="js/nav.js"></script>



</body>

</html>