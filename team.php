<?php
$page_title = "Sia for business development || Our Team";
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
				<h1>Our Team</h1>
				<ul>
					<li><a href="index.php">Sia</a></li>
					<li>Our Team</li>
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

<!-- Start of Team post feed  section
	============================================= -->
	<section id="ori-team-post-feed" class="ori-team-post-feed-section position-relative">
		<div class="container">
			<div class="ori-team-post-feed-content">
				<div class="row">
					<div class="row">
                        <!-- team -->
                         <?php $sel = $conn->prepare("SELECT * FROM team");
                            $sel->execute();
                            foreach ($sel as $sq) {
                            
                                $image="data:".$sq['file_Type'].";base64,".base64_encode($sq['file']);
                                echo '
						<div class="col-lg-4">
							<div class="ori-team-inner-item position-relative">
								<div class="ori-team-img">
									<img src="'.$image.'" alt="">
								</div>
								<div class="ori-team-text text-center position-absolute">
									<h3>'.$sq['name'].'</h3>
									<span>'.$sq['position'].'</span>
								</div>
								<div class="ori-team-social text-center position-absolute">
									<p>'.$sq['description'].'</p>
								</div>
							</div>
						</div>';}?>
                        <!-- team -->
						
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Team post feed   section
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