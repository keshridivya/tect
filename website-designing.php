<?php
include("include/configure.php");
session_start();

?>
<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PreeLand - Multipurpose Landing Page Template</title>
	<link rel="icon" href="assets/img/icon.png" type="image/gif" sizes="16x16">
	<link rel="icon" href="assets/img/icon.png" type="image/gif" sizes="18x18">
	<link rel="icon" href="assets/img/icon.png" type="image/gif" sizes="20x20">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/fontawesome.all.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/typed.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

<!--head and body in include file-->


<?php include("include/header.php"); ?>
	

	<!-- Start Breadcrumb Area -->
	<?php 
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	$sql=mysqli_query($conn,"select * from servicelist where id='$id'");
while($arr=mysqli_fetch_assoc($sql)){  ?>
	<section class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2><?php echo $arr['service_list']; ?></h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><?php echo $arr['service_list']; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Services Area -->
	
	<section class="section-padding-2">
		<div class="container services-details">
			<div class="row">
				<div class="col-lg-6 align-self-center mb-30">
					<h4 class="sc_subtitle"><span> - <?php echo $arr['core_feature']; ?> </span></h4>
					<h2 class="sc_title text-gradient"><?php echo $arr['title']; ?></h2>
					<p><?php echo $arr['short_description']; ?></p>
					<ul>
						<li><?php echo $arr['up_list_1']; ?></li>
						<li><?php echo $arr['up_list_2']; ?></li>
						<li><?php echo $arr['up_list_3']; ?></li>
						<li><?php echo $arr['up_list_4']; ?></li>
					</ul>
					<p><?php echo $arr['long_desc']; ?></p>
				</div>
				<div class="col-lg-6 mb-30">
					<img src="admin/images/service/<?php echo $arr['image1'];?>" alt="serices">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 mb-30 order-lg-first order-last">
					<img src="admin/images/service/<?php echo $arr['image2'];?>" alt="img">
				</div>
				<div class="col-lg-6 mb-30 align-self-center">
					<h3><?php echo $arr['meta_title']; ?></h3>
					<p><?php echo $arr['meta_short']; ?></p>
					<ul>
						<li><?php echo $arr['point']; ?></li>
						<li><?php echo $arr['point2']; ?></li>
						<li><?php echo $arr['point3']; ?></li>
						<li><?php echo $arr['point4']; ?></li>
					</ul>
					<p><?php echo $arr['meta_lis']; ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p><?php echo $arr['meta_long']; ?></p>
					<p><?php echo $arr['meta_long2']; ?></p>
				</div>
			</div>
		</div>
	</section>
	<?php } }?>
	<!-- End Services Area -->
	<!-- Start Subscribe Area -->
	<section class="subscribe-area" style="background-image: url('assets/img/sub.png');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="subscribe-content">
						<h2>Start your <br>30 day free trial.</h2>
						<p>Naff the little rotter have gutted mate James cuppa baking legged. </p>
						<form action="#">
							<input type="email" name="email" placeholder="Email Address">
							<button type="submit">Sign up free</button>
						</form>
						<ul>
							<li><i class="fas fa-check"></i>  30-day free tria</li>
							<li><i class="fas fa-check"></i> No credit card required</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Subscribe Area -->
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top pt-70 pb-20">
			<div class="container">
				<div class="row">
					<!-- Single -->
					<div class="col-lg-3 col-sm-6 mb-30">
						<div class="f-widgets-item">
							<div class="f-logo">
								<a href="#">
									<img src="assets/img/logo.png" alt="logo">
								</a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis..</p>
							<ul>
								<li><a href="#"><i class="bi bi-geo-alt-fill"></i>  153 Williamson Plaza, Maggieberg</a></li>
								<li><a href="#"><i class="bi bi-telephone-inbound"></i> +1 (123) 456-7891</a></li>
							</ul>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-3 col-sm-6 mb-30">
						<div class="f-widgets-item">
							<h3>Product</h3>
							<ul>
								<li><a href="#">Product Tour</a></li>
								<li><a href="#">Analytics</a></li>
								<li><a href="#">Product Overview</a></li>
								<li><a href="#">What’s New</a></li>
								<li><a href="#">Templates</a></li>
							</ul>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-3 col-sm-6 mb-30">
						<div class="f-widgets-item">
							<h3>Company</h3>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Careers <span>We're hiring</span></a></li>
								<li><a href="#">PCustomers </a></li>
								<li><a href="#">What’s New</a></li>
								<li><a href="#">Blog & News</a></li>
							</ul>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-3 col-sm-6 mb-30">
						<div class="f-widgets-item">
							<h3>Documentation</h3>
							<ul>
								<li><a href="#">Tech Requirements</a></li>
								<li><a href="#">API Reference</a></li>
								<li><a href="#">Solutions </a></li>
								<li><a href="#">Brand Assets</a></li>
								<li><a href="#">Blog & News</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom pt-30 pb-30">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 align-self-center">
						<div class="copy-f-text">
							<p>Copyright ©2021 <a href="#">CodexUnicTheme</a>. All Rights Reserved</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Area -->
	<div class="scroll-area">
       <i class="bi bi-arrow-up"></i>
    </div>


    <!-- Js File -->
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.nav.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/mobile-menu.js"></script>
    <script src="assets/js/ajax-form.js"></script>
</body>
</html>