<?php include 'includes/function.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- meta tag -->
	<meta charset="utf-8">
	<title><?php echo $title_name; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
	<!-- Bootstrap v4.4.1 css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<!-- Uicons Regular Rounded css -->
	<link rel="stylesheet" type="text/css" href="assets/css/uicons-regular-rounded.css">
	<!-- flaticon css -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<!-- owl.carousel css -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css"> -->
	<!-- off canvas css -->
	<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
	<!-- magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Main Menu css -->
	<link rel="stylesheet" href="assets/css/rsmenu-main.css">
	<!-- nivo slider CSS -->
	<link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/preview.css">
	<!-- spacing css -->
	<link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- This stylesheet dynamically changed from style.less -->
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

	<link rel="stylesheet" href="assets/css/glightbox.min.css">

	<link rel='stylesheet' href='assets/css/aos.css'>

	<link rel="stylesheet" href="assets/css/normalize.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@splidejs/splide@1.2.0/dist/css/splide.min.css'>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

	<script src="assets/js/aos.js"></script>
</head>

<body class="defult-home">

	<div class="offwrap"></div>

	<!--Preloader start here-->
	<div id="pre-load">
		<div id="loader" class="loader">
			<div class="loader-container">
				<div class="loader-icon"><img src="assets/images/fav.png" alt="Douglas D Brown"></div>
			</div>
		</div>
	</div>
	<!--Preloader area end here-->

	<!-- Main content Start -->
	<div class="main-content">

		<!--Full width header Start-->
		<div class="full-width-header">
			<!--Header Start-->
			<header id="rs-header" class="rs-header">
				<!-- Toolbar Area Start -->
				<!-- Toolbar Area End -->

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container-fluid">
						<div class="row-table">
							<div class="col-cell header-logo">
								<div class="logo-area">
									<a href="<?php echo $baseUrl; ?>">
										<img class="normal-logo" src="assets/images/logo-dark.png" alt="logo">
										<img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo">
									</a>
								</div>
							</div>
							<div class="col-cell">
								<div class="rs-menu-area">
									<div class="main-menu">
										<nav class="rs-menu hidden-md">
											<ul class="nav-menu">
												<li><a href="<?php echo $baseUrl; ?>">Home</a></li>
												<!-- <li><a href="practice-areas">Practice Areas</a></li> -->
												<li class="menu-item-has-children">
													<a href="<?php echo $baseUrl; ?>practice-areas"
														target="_blank">Practice Areas</a>
													<ul class="sub-menu">
														<!-- <li><a href="<?php echo $baseUrl; ?>practice-areas#CriminalJustice"
																target="_blank">Criminal
																Justice</a></li> -->
														<li><a href="#PersonalInjury">Personal Injury</a></li>
														<li><a href="#CriminalDefense">Criminal Defense</a></li>
														<li><a href="<?php echo $baseUrl; ?>practice-areas#FamilyLaw"
																target="_blank">Family
																Law</a></li>
														<li><a href="<?php echo $baseUrl; ?>practice-areas#JuvenileLaw"
																target="_blank">Juvenile
																Law</a></li>
														<li><a href="<?php echo $baseUrl; ?>practice-areas#Homicide"
																target="_blank">Homicide</a>
														</li>
														<li><a href="<?php echo $baseUrl; ?>practice-areas#DrugTrafficking"
																target="_blank">Drug
																Trafficking</a></li>
														<li><a href="<?php echo $baseUrl; ?>practice-areas#FalselyAccused"
																target="_blank">Falsely Accused</a></li>
														<!-- <li><a href="<?php echo $baseUrl; ?>practice-areas#Kidnapping"
																target="_blank">Kidnapping</a>
														</li> -->
														<!-- <li><a href="<?php echo $baseUrl; ?>practice-areas#Burglary"
																target="_blank">Burglary</a>
														</li> -->
														<li><a href="<?php echo $baseUrl; ?>practice-areas#DWI"
																target="_blank">DWI</a>
														</li>
														<li><a href="<?php echo $baseUrl; ?>practice-areas#AdulteryDivorce"
																target="_blank">Adultery Divorce</a>
														</li>
														<li><a href="<?php echo $baseUrl; ?>practice-areas#FedexUPSAmazon"
																target="_blank">Fedex UPS Amazon</a>
														</li>
														<li><a href="<?php echo $baseUrl; ?>practice-areas#CriminalizationOfPregnancy"
																target="_blank">Criminalization of Pregnancy</a>
														</li>
													</ul>
												</li>
												<li><a href="<?php echo $baseUrl; ?>blogs" target="_blank">Blogs</a>
												</li>
												<li><a href="<?php echo $baseUrl; ?>about" target="_blank">About</a>
												</li>
												<li><a href="<?php echo $baseUrl; ?>contact" target="_blank">Contact</a>
												</li>
											</ul> <!-- //.nav-menu -->
										</nav>
									</div> <!-- //.main-menu -->
								</div>
							</div>
							<div class="col-cell">
								<div class="expand-btn-inner">
									<ul class="menunewright">
										<li class="lefts">
											<div class="icn"><img src="assets/images/douglas/phone-icon.png" alt="">
											</div>
											<div class="nmbr">
												<h4>Call us Now</h4>
												<p><a href="tel:(985) 310-6900">(985) 310-6900</a></p>
											</div>
										</li>
										<li class="rights">
											<a href="https://dougbrownlaw.cliogrow.com/book/41b6c1bc1ab4fefb787332cd86fbd421"
												target="_blank">
												<p>Book now<br>free Consultation</p>
											</a>
										</li>
										<!-- <li class="sidebarmenu-search">
											<a class="hidden-xs rs-search" data-bs-toggle="modal"
												data-bs-target="#searchModal" href="#">
												<i class="fi fi-rr-search"></i>
											</a>
										</li> -->
										<!-- <li class="btn-quote"><a class="quote-button" href="#">Get A Quote</a></li> -->
										<li class="humburger">
											<a id="nav-expander" class="nav-expander bar" href="#">
												<div class="bar">
													<span class="dot1"></span>
													<span class="dot2"></span>
													<span class="dot3"></span>
													<span class="dot4"></span>
													<span class="dot5"></span>
													<span class="dot6"></span>
													<span class="dot7"></span>
													<span class="dot8"></span>
													<span class="dot9"></span>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->

				<!-- Canvas Menu start -->
				<nav class="right_menu_togle menu-wrap-off  hidden-md">
					<div class="close-btn">
						<a id="nav-close" class="nav-close">
							<div class="line">
								<span class="line1"></span>
								<span class="line2"></span>
							</div>
						</a>
					</div>
					<div class="rs-offcanvas-inner">
						<div class="canvas-logo">
							<a href="index"><img src="assets/images/logo-dark.png" alt="logo"></a>
						</div>
						<div class="offcanvas-text">
							<p>Teknolab quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus,
								in porttitor theo lacus egestas etiusto odio data center.</p>
						</div>
						<div class="canvas-contact">
							<div class="address-area">
								<div class="address-list">
									<div class="info-icon">
										<i class="flaticon-location"></i>
									</div>
									<div class="info-content">
										<h4 class="title">Address</h4>
										<em>05 kandi BR. New York</em>
									</div>
								</div>
								<div class="address-list">
									<div class="info-icon">
										<i class="flaticon-email"></i>
									</div>
									<div class="info-content">
										<h4 class="title">Email</h4>
										<em><a href="mailto:Devsdesign">Devsdesign</a></em>
									</div>
								</div>
								<div class="address-list">
									<div class="info-icon">
										<i class="flaticon-call"></i>
									</div>
									<div class="info-content">
										<h4 class="title">Phone</h4>
										<em>+019988772</em>
									</div>
								</div>
							</div>
							<ul class="social">
								<li><a href="https://facebook.com/AttorneyDougBrown"><i class="fa fa-facebook"
											target="_blank"></i></a></li>
								<!-- <li><a href="#0"><i class="fa fa-twitter"></i></a></li> -->
								<!-- <li><a href="#0"><i class="fa fa-pinterest-p"></i></a></li> -->
								<li><a href="https://instagram.com/divorcelawyerdoug/"><i class="fa fa-instagram"
											target="_blank"></i></a></li>
								<li><a href="https://youtube.com/channel/UCkXPS8hmAHYDyFnXgRevrUg"><i
											class="fa fa-youtube" target="_blank"></i></a></li>
								<li><a href="https://linkedin.com/in/douglas-brown-2a565136/"><i class="fa fa-linkedin"
											target="_blank"></i></a></li>
							</ul>
						</div>
					</div>
				</nav>
				<!-- Canvas Menu end -->

				<!-- Canvas Mobile Menu start -->
				<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
					<div class="close-btn">
						<a id="nav-close2" class="nav-close">
							<div class="line">
								<span class="line1"></span>
								<span class="line2"></span>
							</div>
						</a>
					</div>
					<ul class="nav-menu">
						<li><a href="<?php echo $baseUrl; ?>">Home</a></li>
						<li><a href="<?php echo $baseUrl; ?>practice-areas">Practice Areas</a></li>
						<li><a href="<?php echo $baseUrl; ?>blogs">Blogs</a></li>
						<li><a href="<?php echo $baseUrl; ?>about">About Us</a></li>
						<li><a href="https://dougbrownlaw.cliogrow.com/book/41b6c1bc1ab4fefb787332cd86fbd421">Contact
								Us</a></li>
					</ul> <!-- //.nav-menu -->
					<!-- //.nav-menu -->

					<!-- //.nav-menu -->
					<div class="canvas-contact">
						<div class="address-area">
							<div class="address-list">
								<div class="info-icon">
									<i class="flaticon-location"></i>
								</div>
								<div class="info-content">
									<h4 class="title">Address</h4>
									<em>Hammond, Louisiana</em>
								</div>
							</div>
							<div class="address-list">
								<div class="info-icon">
									<i class="flaticon-email"></i>
								</div>
								<div class="info-content">
									<h4 class="title">Email</h4>
									<em><a href="mailto:info@dougbrownlaw.com">info@dougbrownlaw.com</a></em>
								</div>
							</div>
							<div class="address-list">
								<div class="info-icon">
									<i class="flaticon-call"></i>
								</div>
								<div class="info-content">
									<h4 class="title">Phone</h4>
									<em><a href="tel:(985) 310-6900">(985) 310-6900</a></em>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<!-- Canvas Menu end -->
			</header>
			<!--Header End-->
		</div>