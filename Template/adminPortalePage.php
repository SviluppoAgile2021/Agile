<?php session_start(); ?>
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
<?php
if($_SESSION['id'] == 1){
    include ("adminPage.php");
}else{
    include ("areaNegata.php");
}

?>


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

<!-- custom jquery include -->
<script src="assets/js/custom.js"></script>


</body>
</html>