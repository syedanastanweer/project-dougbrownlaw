<?php include 'partials/header.php'; ?>

<!-- Banner Start -->
<div class="rs-breadcrumbs img4">
	<div class="container">
		<div class="breadcrumbs-inner">
			<h1 class="page-title">Contact</h1>
			<div class="breadcrumbs-title">
				<span><a title="Douglas D Brown" href="#">Home</a></span>
				<span class="post">Contact</span>
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->

<!-- Contact Section Start -->
<div class="rs-contact contact-style3 padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 md-mb-60">
				<div class="contact-box" data-aos="fade-right" data-aos-duration="800">
					<div class="sec-title mb-45 md-mb-30">
						<span class="sub-text sub-text3">Speak with Our Legal Experts</span>
						<h2 class="title">This keeps it short, clear, and directly related to the legal field.</h2>
					</div>
					<div class="address-box mb-25">
						<div class="address-icon">
							<i class="fa fa-home"></i>
						</div>
						<div class="address-text">
							<span class="label">Email:</span>
							<a href="tel:123222-8888">(123) 222-8888</a>
						</div>
					</div>
					<div class="address-box mb-25">
						<div class="address-icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="address-text">
							<span class="label">Phone:</span>
							<a href="#">Douglas D Brown</a>
						</div>
					</div>
					<div class="address-box">
						<div class="address-icon">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="address-text">
							<span class="label">Address:</span>
							<div class="desc">New Jesrsy, 1201, USA</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 pl-70 md-pl-15">
				<div class="contact-wrap" data-aos="fade-left" data-aos-duration="800">
					<div id="form-messages"></div>
					<form id="contact-form" method="post" action="mailer.php">
						<fieldset>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 mb-25">
									<input class="from-control" type="text" id="name" name="name" placeholder="Name"
										required="">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 mb-25">
									<input class="from-control" type="text" id="email" name="email" placeholder="E-Mail"
										required="">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 mb-25">
									<input class="from-control" type="text" id="phone" name="phone"
										placeholder="Phone Number" required="">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 mb-25">
									<input class="from-control" type="text" id="subject" name="subject"
										placeholder="Subject" required="">
								</div>
								<div class="col-lg-12 mb-30">
									<textarea class="from-control" id="message" name="message" placeholder="Message"
										required=""></textarea>
								</div>
							</div>
							<div class="btn-part">
								<div class="form-group mb-0">
									<input class="readon submit" type="submit" value="Submit Now">
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="map-canvas pt-120 md-pt-80">
		<iframe src="https://maps.google.com/maps?q=Devsdesign&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
	</div> -->
</div>
<!-- Contact Section Start -->

<!-- Cta Start -->
<div class="rs-cta pt-85 pb-85 bg8">
	<div class="container">
		<div class="row y-middle">
			<div class="col-lg-7 md-mb-30">
				<div class="sec-title md-text-center" data-aos="fade-right" data-aos-duration="800">
					<h2 class="title title2">
						Are You Ready To Take Action?<br>
						We Are Ready To Help.
					</h2>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="sec-title text-right md-text-center" data-aos="fade-left" data-aos-duration="800">
					<div class="btn-part">
						<a class="readon cta-started" href="contact">Get Started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cta End -->
</div>
<!-- Main content End -->
<?php include 'partials/footer.php'; ?>