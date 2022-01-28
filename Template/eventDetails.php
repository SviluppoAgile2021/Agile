<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Harmoni - Event Details</title>
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

    <?php session_start(); ?>


		<!-- backtotop - start -->
		<div id="thetop" class="thetop"></div>
		<div class='backtotop'>
			<a href="#thetop" class='scroll'>
				<i class="fas fa-angle-double-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->

		<!-- preloader - end -->

		<!-- header-section - start
		================================================== -->
		<?php include "header.php";?>
		<!-- header-section - end
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
									<h2 class="big-title">Evento in dettaglio<h2>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb-section - end
		================================================== -->
		<!-- event-details-section - start
		================================================== -->
		<section id="event-details-section" class="event-details-section sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- col - event-details - start -->
					<div class="col-lg-8 col-md-12 col-sm-12">

						<!-- event-details - start -->
						<div class="event-details mb-80">

							<div class="event-title mb-30">
								<h2 class="event-title"><?php $a=1; $id = $_GET['idEvento']; include("../Php/eventoSingolo.php"); ?></strong></h2>
							</div>

							<div class="event-info-list ul-li clearfix mb-50">
								<ul>
									<li>
										<span class="icon">
											<i class="far fa-calendar"></i>
										</span>
										<div class="event-content">
											<small class="event-title">Data :</small>
											<h3 class="event-date"><?php $a=2; include("../Php/eventoSingolo.php"); ?></h3>
										</div>
									</li>
									<li>
										<span class="icon">
											<i class="far fa-clock"></i>
										</span>
										<div class="event-content">
											<small class="event-title">Orario </small>
											<h3 class="event-date"><?php $a=9; include("../Php/eventoSingolo.php"); ?></h3>
										</div>
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-map-marker-alt"></i>
										</span>
										<div class="event-content">
											<small class="event-title">Locazione</small>
											<h3 class="event-date"><?php $a=3; include("../Php/eventoSingolo.php"); ?></h3>
										</div>
									</li>
								</ul>
							</div>
                            <p class="black-color mb-30">
                                Luogo dell'evento : <?php $a=8; include("../Php/eventoSingolo.php"); ?>
                            </p>

							<p class="black-color mb-30">
								Genere di evento : <?php $a=4; include("../Php/eventoSingolo.php"); ?>
							</p>
                            <p class="black-color mb-30">
                                Capienza massima del luogo : <?php $a=5; include("../Php/eventoSingolo.php"); ?> posti
                            </p>
                            <p class="black-color mb-30">
                                Evento formale : <?php $a=6; include("../Php/eventoSingolo.php"); ?>
                            </p>
                            <p class="black-color mb-30">
                                Tra gli eventi attualmente in offerta : <?php $a=7; include("../Php/eventoSingolo.php"); ?>
                            </p>

                            <?php $a=0; include("../Php/eventoSingolo.php");
                                if($formale=="Si"){
                                    echo "Contattaci a organizzatore@mail.it";
                                }else{
                                    echo "<button type='submit' class='custom-btn'>Acquista ticket</button>";
                                }
                                ?>

						</div>
						<!-- event-details - end -->
                        <!-- reviewer-comment-wrapper - start -->
                        <div class="reviewer-comment-wrapper mb-30 clearfix">

                            <div class="section-title text-left mb-50">
                                <h2 class="big-title"> <strong>Commenti</strong> Evento</h2>
                            </div>

                            <div class="comment-bar clearfix">

                            <?php
                            include("../Php/stampaCommenti.php");
                            ?>

                            </div>

                        </div>
                        <!-- reviewer-comment-wrapper - end -->

                            <div class="comment-bar clearfix">

                            <?php
                            include("../Php/stampaCommenti.php");
                            ?>

                            </div>

                        </div>
                        <!-- reviewer-comment-wrapper - end -->

						<!-- comment-form - start -->
						<div class="comment-form clearfix">

							<div class="section-title text-left mb-50">
								<h2 class="big-title">Scrivi un <strong>commento</strong></h2>

							</div>

							<div class="form-wrapper">
								<form action="../Php/contactController.php" method="post">
									<div class="row">

										<!-- form-item - start -->
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-item mb-30">

												 <?php  echo "Stai commentando come ".$_SESSION['username']; ?>

											</div>
										</div>
										<!-- form-item - end -->

										<!-- form-item - start
										<div class="col-lg-4 col-md-12 col-sm-12">
											<div class="form-item mb-30">
												<input type="number" name="idUtente"  value=""placeholder="Your Phone" required hidden>
											</div>
										</div>
										 form-item - end -->

                                        <!-- form-item - start -->
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            <div class="form-item mb-30">
                                                <?php $a=11; include("../Php/eventoSingolo.php"); ?>
                                            </div>
                                        </div>
                                        <!-- form-item - end -->

										<!-- form-item - start -->
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="mb-30">
												<textarea name="comment" placeholder="Your Comment" required></textarea>
											</div>
											<button type="submit" class="custom-btn">SUBMIT NOW</button>
										</div>
										<!-- form-item - end -->

									</div>
								</form>
							</div>

						</div>
						<!-- comment-form - end -->

					</div>
					<!-- col - event-details - end -->

					<!-- sidebar-section - start -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="sidebar-section">

							<!-- Add to Calendar - start -->
							<div title="Add to Calendar" class="addeventatc">
								Aggiungi l'evento al calendario
                                <?php $a=10; include("../Php/eventoSingolo.php"); ?>
								<!-- <span class="start">06/18/2015 09:00 AM</span>
								<span class="end">06/18/2015 11:00 AM</span>
								<span class="timezone">Europe/Rome</span>
								<span class="title">Summary of the event</span>
								<span class="description">Description of the event</span>
								<span class="location">Location of the event</span>
								<span class="organizer">Organizer</span>
								<span class="organizer_email">Organizer e-mail</span>
								<span class="all_day_event">false</span>
								<span class="date_format">MM/DD/YYYY</span> -->
							</div>
							<!-- Add to Calendar - end -->

							
						</div>
					</div>
					<!-- sidebar-section - end -->
					
				</div>
			</div>
		</section>
		<!-- event-details-section - end
		================================================== -->

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