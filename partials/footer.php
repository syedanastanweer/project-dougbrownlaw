<footer class="footer">
	<div class="container">
		<div class="row align-items-center">
			<!-- Left Column -->
			<div class="col-md-4 ft-left">
				<h5>INFORMATION</h5>
				<ul class="list-unstyled">
					<li><a href="#">About Douglas Brown</a></li>
					<li><a href="#">Legal Services</a></li>
					<li><a href="#">Blogs</a></li>
				</ul>
				<p class="mt-3">Designed and maintained by:</p>
				<p><img src="assets/images/logo-footer.webp" alt=""></p>
			</div>
			<!-- Middle Column -->
			<div class="col-md-4 ft-center">
				<p class="logo"><img src="assets/images/douglas/logo-white.png" alt=""></p>
			</div>
			<!-- Right Column -->
			<div class="col-md-4 ft-right">
				<div class="socials-p">
					<h5>CONNECT WITH US</h5>
					<div class="social-icons">
						<a href="#"><i class="fa fa-youtube"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>

				<div class="alright">

					<p>© 2024 Dougbrownlaw. All rights reserved.</p>

				</div>
			</div>

		</div>
		<div class="row mt-4">
			<div class="col-md-12 text-center">

				<p class="disclaimer">Important Disclaimer: For specific legal advice for your specific situation,
					you should retain the services of an Attorney at Law. The above is provided for general
					information only. The use of the Internet for communication with this firm or any employee of
					the firm does not establish an attorney-client relationship. Confidential or time-sensitive
					information should not be sent through email.</p>
			</div>
		</div>
	</div>
</footer>
<!-- start scrollUp  -->
<div id="scrollUp">
	<i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->


<!-- Search Modal Start -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1">
	<button type="button" class="close" data-bs-dismiss="modal">
		<i class="fi fi-rr-cross-small"></i>
	</button>
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="search-block clearfix">
				<form>
					<div class="form-group">
						<input class="form-control" placeholder="Searching..." type="text">
						<button type="submit" value="Search"><i class="fi fi-rr-search"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Search Modal End -->
<script src='https://cdn.jsdelivr.net/npm/@splidejs/splide@1.2.0/dist/js/splide.min.js'></script>

<script>
	AOS.init({
		duration: 1200,
	})
</script>
<script>
	// Primary slider.
	var primarySlider = new Splide('#primary_slider', {
		type: 'fade',
		heightRatio: 0.5,
		pagination: false,
		arrows: false,
		cover: true,
	});

	var thumbnailSlider = new Splide('#thumbnail_slider', {
		rewind: true,
		focus: 'center',
		pagination: false,
		arrows: true, // Enable arrows
		fixedWidth: 'calc(100% / 4)', // Dynamically set the width of each thumbnail to fit 4 at a time
		gap: '10px', // Spacing between thumbnails
		isNavigation: true,
		cover: true,
		breakpoints: {
			600: {
				fixedWidth: 'calc(100% / 3)', // Show 3 thumbnails on smaller screens
			},
		},
	}).mount();


	// sync the thumbnails slider as a target of primary slider.
	primarySlider.sync(thumbnailSlider).mount();
</script>

<script src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script>
<!-- modernizr js -->
<script src="assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- op nav js -->
<script src="assets/js/jquery.nav.js"></script>
<!-- owl.carousel js -->
<!-- <script src="assets/js/owl.carousel.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- Skill bar js -->
<script src="assets/js/skill.bars.jquery.js"></script>
<!-- imagesloaded js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- waypoints.min js -->
<script src="assets/js/waypoints.min.js"></script>
<!-- counterup.min js -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Nivo slider js -->
<script src="assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
<!-- tilt js -->
<script src="assets/js/tilt.jquery.min.js"></script>
<!-- magnific popup js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- contact form js -->
<script src="assets/js/contact.form.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
</body>

</html>