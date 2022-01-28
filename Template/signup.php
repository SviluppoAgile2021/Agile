<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Harmoni - Booking Event</title>
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- icon css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">

    <!-- carousel css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">

    <!-- others css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/calendar.css">

    <!-- color switcher css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/style-switcher.css">
    <link id="color_theme" rel="stylesheet" type="text/css" href="assets/css/colors/default.css">

    <!-- custom css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>


<body class="default-header-p">


<!-- backtotop - start -->
<div id="thetop" class="thetop"></div>
<div class='backtotop'>
    <a href="#thetop" class='scroll'>
        <i class="fas fa-angle-double-up"></i>
    </a>
</div>
<!-- backtotop - end -->

<!-- preloader - start -->
<div id="preloader"></div>
<!-- preloader - end -->

<!-- header-section - start
================================================== -->
<?php include "header.php";?>
<!-- header-section - end
================================================== -->

<!-- booking-section - start
================================================== -->
<section id="booking-section" class="booking-section bg-gray-light sec-ptb-100 clearfix">
    <div class="container">
        <div class="row">

            <!-- booking-content-wrapper - start -->
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="booking-content-wrapper">

                    <!-- billing-info - start -->
                    <div class="billing-info mb-50">

                        <!-- section-title - start -->
                        <div class="section-title mb-30">
                            <h2 class="big-title"> <strong>Signup</strong></h2>
                        </div>
                        <!-- section-title - end -->

                        <!-- billing-form - start -->
                        <div class="billing-form form-wrapper">
                            <form action="../Php/SignupController.php" method="POST">
                                <div class="form-item">
                                    <input type="text" placeholder="Nome" name="name" value="" required>
                                </div>
                                <div class="form-item">
                                    <input type="text" placeholder="Cognome" name="surname" value="" required>
                                </div>
                                <div class="form-item">
                                    <input type="date" placeholder="Data di nascita" name="birthdate" value="" required>
                                </div>

                                <!-- form-item-group - start -->
                                <div class="form-item-group mb-50">
                                    <ul>

                                        <li>
                                            <div class="form-item">
                                                <input type="text" placeholder="Città" name="city" value="" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-item">
                                                <input type="text" placeholder="Username" name="username" value="" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-item">
                                                <input type="password" placeholder="Password" name="password" value="" required>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <!-- form-item-group - end -->

                                <div class="text-center">
                                    <button type="submit" class="custom-btn">
                                        Registrati
                                    </button>
                                </div>

                            </form>
                        </div>
                        <!-- billing-form - end -->

                    </div>
                    <!-- billing-info - end -->

                </div>
            </div>
            <!-- booking-content-wrapper - end -->


        </div>
    </div>
</section>
<!-- booking-section - end
================================================== -->





<!-- default-footer-section - start
================================================== -->
<footer id="footer-section" class="footer-section default-footer-section clearfix">

    <!-- footer-top - start -->
    <div class="footer-top sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">

                <!-- basic-info - start -->
                <div class="col-lg-12 col-md-12 col-md-12">
                    <div class="basic-info mb-50 clearfix">
                        <div class="row">

                            <!-- basic-info-item - start -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="basic-info-item">
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
                                    <div class="info-content">
                                        <p>100 highland ave,</p>
                                        <h3>california, united state</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- basic-info-item - end -->

                            <!-- basic-info-item - start -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="basic-info-item">
											<span class="icon">
												<i class="fas fa-envelope"></i>
											</span>
                                    <div class="info-content">
                                        <p><a href="#!">contact@pantero.com</a></p>
                                        <h3><a href="#!">info@harmoni.com</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- basic-info-item - end -->

                            <!-- basic-info-item - start -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="basic-info-item">
											<span class="icon">
												<i class="fas fa-phone"></i>
											</span>
                                    <div class="info-content">
                                        <p><a href="#!">100 800 1234 5555</a></p>
                                        <h3><a href="#!">100 800 1234 5555</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- basic-info-item - end -->

                        </div>
                    </div>
                </div>
                <!-- basic-info - end -->

                <!-- about-wrapper - start -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="about-wrapper">

                        <!-- site-logo-wrapper - start -->
                        <div class="site-logo-wrapper mb-30">
                            <a href="index-1.html" class="logo">
                                <img src="assets/images/1.site-logo.png" alt="logo_not_found">
                            </a>
                        </div>
                        <!-- site-logo-wrapper - end -->

                        <p class="mb-30">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
                        </p>

                        <!-- social-links - start -->
                        <div class="social-links ul-li">
                            <h3 class="social-title">network</h3>
                            <ul>
                                <li>
                                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-twitch"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- social-links - end -->

                    </div>
                </div>
                <!-- about-wrapper - end -->

                <!-- usefullinks-wrapper - start -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="usefullinks-wrapper ul-li-block">
                        <h3 class="footer-item-title">
                            useful <strong>links</strong>
                        </h3>
                        <ul>
                            <li><a href="#!">Birthday Party</a></li>
                            <li><a href="#!">Business meeting</a></li>
                            <li><a href="#!">Conference</a></li>
                            <li><a href="#!">Food Event</a></li>
                            <li><a href="#!">Musical Event</a></li>
                            <li><a href="#!">Wedding Party</a></li>
                        </ul>

                    </div>
                </div>
                <!-- usefullinks-wrapper - end -->

                <!-- usefullinks-wrapper - start -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="usefullinks-wrapper ul-li-block">
                        <h3 class="footer-item-title">
                            useful <strong>links</strong>
                        </h3>
                        <ul>
                            <li><a href="#!">About Harmoni</a></li>
                            <li><a href="#!">Disclaimer</a></li>
                            <li><a href="#!">Contact us</a></li>
                            <li><a href="#!">Events Schedule</a></li>
                            <li><a href="#!">Sponsors</a></li>
                            <li><a href="#!">Venues</a></li>
                        </ul>

                    </div>
                </div>
                <!-- usefullinks-wrapper - end -->

                <!-- instagram-wrapper - start -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="instagram-wrapper ul-li">
                        <h3 class="footer-item-title">
                            harmoni <strong>instagram</strong>
                        </h3>
                        <ul>
                            <li class="image-wrapper">
                                <img src="assets/images/footer/instagram/img1.png" alt="Image_not_found">
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="image-wrapper">
                                <img src="assets/images/footer/instagram/img2.png" alt="Image_not_found">
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="image-wrapper">
                                <img src="assets/images/footer/instagram/img3.png" alt="Image_not_found">
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="image-wrapper">
                                <img src="assets/images/footer/instagram/img4.png" alt="Image_not_found">
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <h4 class="followus-link">
                            Follow Our Instagram <a href="#!">#Harmoni</a>
                        </h4>
                    </div>
                </div>
                <!-- instagram-wrapper - end -->

            </div>
        </div>
    </div>
    <!-- footer-top - end -->

    <div class="footer-bottom">
        <div class="container">
            <div class="row">

                <!-- copyright-text - start -->
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="copyright-text">
                        <p class="m-0">©2018 <a href="#!" class="site-link">Harmoni.com</a> all right reserved, made with <i class="fas fa-heart"></i> by <a href="#!" class="author-link"><strong>jThemes Studio</strong></a></p>
                    </div>
                </div>
                <!-- copyright-text - end -->

                <!-- footer-menu - start -->
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="#!">Site map</a></li>
                            <li><a href="#!">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-menu - end -->

            </div>
        </div>
    </div>

</footer>
<!-- default-footer-section - end
================================================== -->










<!-- fraimwork - jquery include -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- carousel jquery include -->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

<!-- map jquery include -->
<script src="assets/js/gmap3.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

<!-- calendar jquery include -->
<script src="assets/js/atc.min.js"></script>

<!-- others jquery include -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jarallax.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- gallery img loaded - jqury include -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>

<!-- multy count down - jqury include -->
<script src="assets/js/jquery.countdown.js"></script>

<!-- color panal - jqury include -->
<script src="assets/js/style-switcher.js"></script>

<!-- custom jquery include -->
<script src="assets/js/custom.js"></script>





</body>
</html>