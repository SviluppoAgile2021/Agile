<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Harmoni - Event List</title>
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
<!--		<div id="preloader"></div>-->
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
									<h2 class="big-title"> <strong>eventi</strong></h2>
								</div>
								<!-- breadcrumb-title - end -->

								<!-- breadcrumb-list - start -->
								
								<!-- breadcrumb-list - end -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb-section - end
		================================================== -->

		<!-- event-section - start
		================================================== -->
		<section id="event-section" class="event-section bg-gray-light sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- sidebar-section - start -->
     
					<!-- sidebar-section - end -->

					<!-- - start -->
					<div class="col-lg-9 col-md-12 col-sm-12">

						<div class="tab-content">
							<div id="list-style" class="tab-pane fade in active show">

								
          
										<?php
											include("../Php/ConnectionDB.php");
											
											$query = "SELECT Eventi.* FROM Eventi WHERE data_evento > CURDATE()";
											
											$res = mysqli_query($conn, $query);
											if($res === FALSE){
												die(mysqli_error($conn));
											}
											
											
											if(!empty($res)){
												$res = @mysqli_query($conn, $query);
												while ($entry = mysqli_fetch_array($res))
												{
                                                    echo "<!-- event-item - start -->
								                            <div class='event-list-item clearfix'>
                                                            <!-- event-image - start -->
                                                            <div class='event-image'>
                                                                <div class='post-date'>
                                                                    <span class='date'>26</span>
                                                                    <small class='month'>june</small>
                                                                </div>
                                                                <img src='assets/images/event/". $entry['id_genere'] .".jpg' alt='Image_not_found'>
                                                            </div>
                                                            <!-- event-image - end -->
                                                            
									                        <!-- event-content - start -->
									                        <div class='event-content'>";
													//titolo dell'evento
													echo "<div class='event-title mb-15''>
                                                            <h3 class='title'>". $entry['nome'] ."</h3>
                                                            </div>";
													//prezzo
													echo "<span class='ticket-price yellow-color'>". $entry['prezzo'] ." EUR </span>";
													//data
													echo "<p class='discription-text mb-30'>". $entry['data_evento'] ."</p>";
													//dettagli
													echo "<div class='event-info-list ul-li clearfix'>
                                                            <ul>
                                                                <li>
                                                                    <span class='icon'>
                                                                        <i class='fas fa-ticket-alt'></i>
                                                                    </span>
                                                                    <div class='info-content'>
                                                                        <small>Capienza massima</small>
                                                                            <h3>". $entry['capienza'] ."</h3>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href='./eventDetails.php?idEvento=". $entry['id'] ."' class='tickets-details-btn'> tickets & details</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        </div>
                                                    <!-- event-content - end -->
                
                                                </div>
                                                <!-- event-item - end -->
                                                    ";
												}
											}
											else {
												echo("Nessun evento risulta disponibile al momento.");
											}
                                        ?>

							</div>

							<div id="grid-style" class="tab-pane fade">
								<div class="row justify-content-center">
        
								</div>
							</div>
						</div>

					</div>
					<!-- - end -->
					
				</div>
			</div>
		</section>
		<!-- event-section - end
		================================================== -->

		<!-- default-footer-section - start
		================================================== -->
		<?php include "footer.php"; ?>
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