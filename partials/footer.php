<footer class="footer">
	<div class="container">
		<div class="row align-items-center">
			<!-- Left Column -->
			<div class="col-md-4 ft-left">
				<h5>INFORMATION</h5>
				<ul class="list-unstyled">
					<li><a href="about">About Douglas Brown</a></li>
					<li><a href="practice-areas">Practice Areas</a></li>
					<li><a href="blogs">Blogs</a></li>
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
						<a href="https://facebook.com/AttorneyDougBrown"><i class="fa fa-facebook"
								target="_blank"></i></a>
						<!-- <a href="#0"><i class="fa fa-twitter"></i></a> -->
						<!-- <a href="#0"><i class="fa fa-pinterest-p"></i></a> -->
						<a href="https://instagram.com/divorcelawyerdoug/"><i class="fa fa-instagram"
								target="_blank"></i></a>
						<a href="https://youtube.com/channel/UCkXPS8hmAHYDyFnXgRevrUg"><i class="fa fa-youtube"
								target="_blank"></i></a>
						<a href="https://linkedin.com/in/douglas-brown-2a565136/"><i class="fa fa-linkedin"
								target="_blank"></i></a>
					</div>
				</div>

				<div class="alright">
					<p>© 2024 Dougbrownlaw. All rights reserved.</p>
				</div>

				<div class="footer-address">
					<p><a href="https://maps.app.goo.gl/bLVhrU43mHvuhSuVA" target="_blank">
							The Douglas Brown Law Firm, LLC, 201 NW Railroad Ave Suite 112,
							Hammond, LA 70401, United States
						</a></p>
				</div>
			</div>

		</div>
		<div class="row mt-4">
			<div class="col-md-12 text-center">

				<p class="disclaimer">Important Disclaimer: For specific legal advice for your specific situation,
					you should retain of an Attorney at Law. The above is provided for general
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
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/glightbox.min.js"></script>

<script>
	// Initialize GLightbox
	const lightbox = GLightbox({
		selector: '.glightbox',
		type: 'video',
		source: 'local',
	});
</script>
<script>
	AOS.init({
		duration: 1200,
	})
</script>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		var primarySlider = new Splide('#primary_slider', {
			type: 'loop',
			heightRatio: 0.5,
			pagination: false,
			arrows: true,
			cover: true,
			autoplay: true,
			interval: 2000,
			drag: true,
			rewind: true,
			pauseOnHover: true,
			pauseOnFocus: true,
			perPage: 1, // Ensures one slide per page for mobile
			breakpoints: {
				768: {
					perPage: 1, // Show one column per slide for mobile
					arrows: true,
				}
			}
		}).mount();
	});
</script>

<script>
	document.addEventListener("DOMContentLoaded", function() {
    const adjustHeights = () => {
        const rows = document.querySelectorAll('.services-row');
        rows.forEach(row => {
            const items = row.querySelectorAll('.services-item');
            let maxHeight = 0;
            
            // Reset heights
            items.forEach(item => item.style.height = 'auto');
            
            // Find the max height in the current row
            items.forEach(item => {
                const height = item.offsetHeight;
                if (height > maxHeight) {
                    maxHeight = height;
                }
            });
            
            // Set all items to the max height
            items.forEach(item => item.style.height = `${maxHeight}px`);
        });
    };
    
    // Adjust heights on load
    adjustHeights();
    
    // Adjust heights on window resize
    window.addEventListener('resize', adjustHeights);
});
</script>

<script>
	$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        nav: true, // Enable navigation
        navText: ["<", ">"], // Add custom navigation text if needed
    });
});
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