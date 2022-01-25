<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Harmoni - Calender</title>
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

        <link href='assets/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
        <link href='assets/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <script src='assets/fullcalendar/lib/moment.min.js'></script>
        <script src='assets/fullcalendar/lib/jquery.min.js'></script>
        <script src='assets/fullcalendar/fullcalendar.min.js'></script>
        <script>

            $(document).ready(function ($) {

                $('#event-calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,basicWeek,basicDay'
                    },
                    defaultDate: '2021-03-12',
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: [
                        <?php include("../Php/eventiCalendario.php"); ?>
                    ]
                });

            });

        </script>

        <style>         
            #event-calendar {
                max-width: 900px;
                margin: 80px auto;
                color: #000;
                font-size: 14px;
            }
            a.fc-event span {color: #fff;}

            @media screen and (max-width: 420px) { 
                #event-calendar { font-size: 12px;  margin: 50px auto;}
            }
        </style>
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

        <!-- altranative-header - start
                ================================================== -->
        <div class="header-altranative">
            <div class="container">
                <div class="logo-area float-left">
                    <a href="index-1.html">
                        <img src="assets/images/1.site-logo.png" alt="logo_not_found">
                    </a>
                </div>

                <button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- sidebar menu - start -->
            <div class="sidebar-menu-wrapper">
                <div id="sidebar" class="sidebar">
                    <span id="sidebar-dismiss" class="sidebar-dismiss">
                        <i class="fas fa-arrow-left"></i>
                    </span>

                    <div class="sidebar-header">
                        <a href="#!">
                            <img src="assets/images/2.site-logo.png" alt="logo_not_found">
                        </a>
                    </div>

                    <!-- sidebar-form - start -->
                    <div class="sidebar-form">
                        <form action="#">
                            <input id="altmenu-sidebar-search" type="search" placeholder="Search">
                            <label for="altmenu-sidebar-search"><i class="fas fa-search"></i></label>
                        </form>
                    </div>
                    <!-- sidebar-form - end -->

                    <!-- main-pages-links - start -->
                    <div class="menu-link-list main-pages-links">
                        <h2 class="menu-title">all home pages</h2>
                        <ul>
                            <li>
                                <a href="index-1.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    Home V.1
                                </a>
                            </li>
                            <li>
                                <a href="index-2.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    Home V.2
                                </a>
                            </li>
                            <li>
                                <a href="index-3.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    Home v.3
                                </a>
                            </li>
                            <li>
                                <a href="index-4.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    Home v.4
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- main-pages-links - end -->

                    <!-- other-pages-links - start -->
                    <div class="menu-link-list other-pages-links">
                        <h2 class="menu-title">all single pages</h2>
                        <ul>
                            <li>
                                <a href="about.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="service.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    our Services
                                </a>
                            </li>
                            <li>
                                <a href="event-1.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    event list
                                </a>
                            </li>
                            <li>
                                <a href="event-2.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    event grid
                                </a>
                            </li>
                            <li>
                                <a href="event-1-without-sidebar.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    list without sidebar
                                </a>
                            </li>
                            <li>
                                <a href="event-2-without-sidebar.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    grid without sidebar
                                </a>
                            </li>
                            <li class="active">
                                <a href="blog.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    Latest blogs
                                </a>
                            </li>
                            <li>
                                <a href="gallery.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    our gallery
                                </a>
                            </li>
                            <li>
                                <a href="speaker.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    event speakers
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    contact us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- other-pages-links - end -->

                    <!-- inner-pages-links - start -->
                    <div class="menu-link-list inner-pages-links">
                        <h2 class="menu-title">all inner pages</h2>
                        <ul>
                            <li>
                                <a href="booking.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    event booking
                                </a>
                            </li>
                            <li>
                                <a href="event-details.html">
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    event details
                                </a>
                            </li>
                            <li>
                                <a href='blog-details.html'>
                                    <span class="icon"><i class="fas fa-home"></i></span>
                                    blog details
                                </a>
                            </li>
                            <li>
                                <a href="faq.html">
                                    Frequently Ask Qusetion
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- inner-pages-links - end -->

                    <!-- login-btn-group - start -->
                    <div class="login-btn-group">
                        <ul>

                            <li>
                                <a href="#alt-register-modal" class="register-modal-btn">
                                    Register
                                </a>
                                <div id="alt-register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                                    <div class="overlay-black clearfix">

                                        <!-- leftside-content - start -->
                                        <div class="leftside-content">
                                            <div class="site-logo-wrapper mb-80">
                                                <a href="#!" class="logo">
                                                    <img src="assets/images/2.site-logo.png" alt="logo_not_found">
                                                </a>
                                            </div>
                                            <div class="register-login-link mb-80">
                                                <ul>
                                                    <li><a href="#!">Login</a></li>
                                                    <li class="active"><a href="#!">Register</a></li>
                                                </ul>
                                            </div>
                                            <div class="copyright-text">
                                                <p class="m-0">©2018 <a href="#!" class="yellow-color">Harmoni.com</a> all right reserved, made with <i class="fas fa-heart"></i> by jThemes Studio </p>
                                            </div>
                                        </div>
                                        <!-- leftside-content - end -->

                                        <!-- rightside-content - start -->
                                        <div class="rightside-content text-center">

                                            <div class="mb-30">
                                                <h2 class="form-title title-large white-color">Account <strong>Register</strong></h2>
                                                <span class="form-subtitle white-color">Have an account? <strong>LOGIN NOW</strong></span>
                                            </div>

                                            <div class="login-form text-center mb-50">
                                                <form action="#!">
                                                    <div class="form-item">
                                                        <input type="email" placeholder="User Name">
                                                    </div>
                                                    <div class="form-item">
                                                        <input type="password" placeholder="Password">
                                                    </div>
                                                    <div class="form-item">
                                                        <input type="email" placeholder="Repeat Password">
                                                    </div>
                                                    <div class="form-item">
                                                        <input type="password" placeholder="Email Address">
                                                    </div>
                                                    <div class="human-verification text-left">
                                                        <input type="checkbox" id="alt-imnotarobot">
                                                        <label for="alt-imnotarobot">I'm not a robot</label>
                                                        <span class="verification-image">
                                                            <img src="assets/images/iamnotrobot.png" alt="Image_not_found">
                                                        </span>
                                                    </div>
                                                    <button type="submit" class="login-btn">login now</button>
                                                </form>
                                            </div>

                                            <div class="bottom-text white-color">
                                                <p class="m-0">
                                                    * Denotes mandatory field.
                                                </p>
                                                <p class="m-0">** At least one telephone number is required.</p>
                                            </div>

                                        </div>
                                        <!-- rightside-content - end -->

                                        <a class="popup-modal-dismiss" href="#!">
                                            <i class="fas fa-times"></i>
                                        </a>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#alt-login-modal" class="login-modal-btn">
                                    Login
                                </a>
                                <div id="alt-login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
                                    <div class="overlay-black clearfix">

                                        <!-- leftside-content - start -->
                                        <div class="leftside-content">
                                            <div class="site-logo-wrapper mb-80">
                                                <a href="#!" class="logo">
                                                    <img src="assets/images/2.site-logo.png" alt="logo_not_found">
                                                </a>
                                            </div>
                                            <div class="register-login-link mb-80">
                                                <ul>
                                                    <li class="active"><a href="#!">Login</a></li>
                                                    <li><a href="#!">Register</a></li>
                                                </ul>
                                            </div>
                                            <div class="copyright-text">
                                                <p class="m-0">©2018 <a href="#!" class="yellow-color">Harmoni.com</a> all right reserved, made with <i class="fas fa-heart"></i> by jThemes Studio </p>
                                            </div>
                                        </div>
                                        <!-- leftside-content - end -->

                                        <!-- rightside-content - start -->
                                        <div class="rightside-content text-center">

                                            <div class="mb-30">
                                                <h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
                                                <span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
                                            </div>

                                            <div class="fb-login-btn mb-30">
                                                <a href="#!">
                                                    <span class="icon">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </span>
                                                    login with facebook
                                                </a>
                                            </div>

                                            <div class="or-text mb-30">
                                                <span>or sign in</span>
                                            </div>

                                            <div class="login-form text-center mb-50">
                                                <form action="#!">
                                                    <div class="form-item">
                                                        <input type="email" placeholder="example@gmail.com">
                                                    </div>
                                                    <div class="form-item">
                                                        <input type="password" placeholder="Password">
                                                    </div>
                                                    <button type="submit" class="login-btn">login now</button>
                                                </form>
                                            </div>

                                            <div class="bottom-text white-color">
                                                <p class="m-0">
                                                    * Denotes mandatory field.
                                                </p>
                                                <p class="m-0">** At least one telephone number is required.</p>
                                            </div>

                                        </div>
                                        <!-- rightside-content - end -->

                                        <a class="popup-modal-dismiss" href="#!">
                                            <i class="fas fa-times"></i>
                                        </a>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- login-btn-group - end -->

                    <!-- social-links - start -->
                    <div class="social-links">
                        <h2 class="menu-title">get in touch</h2>
                        <div class="mb-15">
                            <h3 class="contact-info">
                                <i class="fas fa-phone"></i>
                                100-2222-9999
                            </h3>
                            <h3 class="contact-info">
                                <i class="fas fa-envelope"></i>
                                info@harmoni.com
                            </h3>
                        </div>
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
                        <a href="contact.html" class="contact-btn">contact us</a>
                    </div>
                    <!-- social-links - end -->

                    <div class="overlay"></div>
                </div>
            </div>
            <!-- sidebar menu - end -->
        </div>
        <!-- altranative-header - end
                ================================================== -->





        <!-- breadcrumb-section - start
                ================================================== -->
        <section id="breadcrumb-section" class="breadcrumb-section clearfix">
            <div class="jarallax" style="background-image: url(assets/images/breadcrumb/foto.jpg);">
                <div class="overlay-black">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-12 col-sm-12">

                                <!-- breadcrumb-title - start -->
                                <div class="breadcrumb-title text-center mb-50">
                                    <span class="sub-title">our blogs</span>
                                    <h2 class="big-title">harmoni <strong>Calender</strong></h2>
                                </div>
                                <!-- breadcrumb-title - end -->

                                <!-- breadcrumb-list - start -->
                                <div class="breadcrumb-list">
                                    <ul>
                                        <li class="breadcrumb-item"><a href="index-1.html" class="breadcrumb-link">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Calender</li>
                                    </ul>
                                </div>
                                <!-- breadcrumb-list - end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-section - end
                ================================================== -->

        <!-- Start of calender content
             ============================================= -->
        <section id="calender-page" class="calender-page">
            <div class="container">
                <div id='event-calendar'></div>
            </div>
        </section>
        <!-- End of calender content
                ============================================= -->



        <!-- default-footer-section - start
                ================================================== -->
        <?php include "footer.php";?>
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