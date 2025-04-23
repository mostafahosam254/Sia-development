<?php
$page_title = "Sia for business development || Contact Us";
include 'common-pages/page-info.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $meta;?>
<body class="ori-inner-page">
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
	<div class="cursor"></div>
	<?php echo $nav;?>

<!-- Start of Breadcrumbs  section
	============================================= -->
	<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png" style="background-color:#cba34e">
		<div class="container">
			<div class="ori-breadcrumb-content text-center ul-li">
				<h1>Contact Us</h1>
				<ul>
					<li><a href="index.php">Sia</a></li>
					<li>Contact US</li>
				</ul>
			</div>
		</div>
		<div class="line_animation">
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div> 
		</div>
	</section>	
<!-- End of Breadcrumbs section
	============================================= -->


<!-- Start of Contact form  section
	============================================= -->
    <style>
        .ori-contact-form-wrap form label{
            color: black;
        }
        .ori-contact-form-wrap form input,.ori-contact-form-wrap form textarea{
            background-color: white;
        }
    </style>
	<section id="ori-contact-form" class="ori-contact-form-section position-relative" style="background-color: white;color:black">
		<div class="container">
			<div class="ori-contact-form-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ori-contact-form-text-info pera-content">
							<h3 style="color: black;">Get a free quote now</h3>
                            <p>Get in touch with us today to discuss how we can help elevate your business to the next level</p>
							<div class="ori-contact-form-item-info">
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="info-text pera-content">
										<h4>Phone</h4>
										<p>+20 128 811 1274</p>
									</div>
								</div>
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-envelope"></i>
									</div>
									<div class="info-text pera-content">
										<h4>Email</h4>
										<p>siadevelopment2@gmail.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
					<div class="ori-contact-form-wrap">
						<form id="whatsapp-form">
							<label for="name">Name *</label>
							<input type="text" id="name" required>
							<label for="email">Email *</label>
							<input type="email" id="email" placeholder="sia@example.com" required>
							<label for="phone">Phone Number *</label>
							<input type="text" id="phone" placeholder="+20 000 000 0000" required>
							<label for="subject">Subject *</label>
							<input type="text" id="subject" placeholder="Issue.." required>
							<label for="message">Message *</label>
							<textarea id="message" placeholder="Write you message.." required></textarea>
							<button type="submit">Submit Now</button>
						</form>
					</div>
				</div>
			
				<script>
					document.addEventListener('DOMContentLoaded', function() {
						document.getElementById('whatsapp-form').addEventListener('submit', function(e) {
							e.preventDefault();
							
							// Get the form data
							const name = document.getElementById('name').value;
							const email = document.getElementById('email').value;
							const phone = document.getElementById('phone').value;
							const subject = document.getElementById('subject').value;
							const message = document.getElementById('message').value;

							// Construct the WhatsApp message URL
							const whatsappNumber = "+201288111274";
							const whatsappMessage = `*Name:* ${name} +  %0a +
							*Email:* ${email} +  %0a +
							*Phone:* ${phone} +  %0a +
							*Subject:* ${subject} +  %0a +
							*Message:* ${message}`;
							const whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

							// Redirect to WhatsApp with the message
							window.open(whatsappURL, '_blank');
						});
					});
				</script>

				</div>
			</div>
		</div>
		<div class="line_animation">
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div> 
		</div>
	</section>
<!-- End of Contact Form section
	============================================= -->	
<!-- Start of  google map  section
	============================================= -->
	<div class="ori-google-map" style="background-color: white;">
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6209.242755903148!2d-77.04363602434464!3d38.90977276948481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1394992895496"  height="865"></iframe>
	</div>	
<!-- End of  google map  section
	============================================= -->

<?php echo $footer;?>

	<!-- For Js Library -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/twin.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/knob.js"></script>
	<script src="assets/js/jquery.filterizr.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/rbtools.min.js"></script>
	<script src="assets/js/rs6.min.js"></script>
	<script src="assets/js/jarallax.js"></script>
	<script src="assets/js/jquery.inputarrow.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.marquee.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>	    