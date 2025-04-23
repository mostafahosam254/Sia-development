<?php
$page_title = "Sia for business development || Our portfolio";
include 'common-pages/page-info.php';
include 'dashboard/conn/int.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $meta;?>
<body class="ori-inner-page" style="background-color: white;>
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
				<h1>Portfolio</h1>
				<ul>
					<li><a href="index.php">Sia</a></li>
					<li>Portfolio</li>
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

<!-- Start of Portfolio  section
	============================================= -->	
	<section id="ori-portfolio-feed" class="ori-portfolio-feed-section position-relative">
		<div class="container">
			<div class="ori-portfolio-feed-item-wrapper filtr-container row">
				<!-- project -->
				 <?php $sel = $conn->prepare("SELECT * FROM portfolio");
					$sel->execute();
					foreach ($sel as $sq) {
					
						$image="data:".$sq['file_Type'].";base64,".base64_encode($sq['file']);
					echo '
				<div class="col-lg-4 col-sm-6 filtr-item" data-category="1, 3, 4" data-sort="Busy streets">
					<div class="ori-portfolio-item position-relative">
						<div class="portfolio-img">
							<img src="'.$image.'" alt="">
						</div>
						<div class="portfolio-text">
							<span class="port-category text-uppercase">'.$sq['category'].'</span>
							<h3>'.$sq['title'].'</h3>
						</div>
					</div>
				</div>';}?>
				<!-- project -->
			</div>
		</div>
	</section>
<!-- End of Portfolio  section
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