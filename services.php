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
	<section class="breadcrumb-area" style="background-image: url('assets/img/OUR SERVICE 1.png');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>Our Services</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Services</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Services Area -->
	<section class="section-padding-2">
		<div class="container">
			<!-- Section Headding -->
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Our Awesome Services</h2>
						<p>The powerful and flexible theme for all kinds of businesses</p>
					</div>
				</div>
			</div>
			<!-- Single -->
			<div class='row'>
			<?php $sql=mysqli_query($conn,"select * from service");
			
				$count=mysqli_num_rows($sql);
				$count1=$count/3;
				echo "<script>alert('$count1');</script>";
				for($col = 0; $col < $count1; $col++) {
			while($arr=mysqli_fetch_assoc($sql)){ 
				$email_array[] = $arr['name'];
				
				for($row = 0; $row < 1; $row++) {
echo "<div class='col-lg-4 col-sm-6 mb-30'>";
							if($row%2 == 0) {
								echo "
								
								<div class='info-box-s1'>
								<div class='icon'>
							<img src='admin/images/employee/". $arr['image']."' alt='code'>
						</div>
						<div class='content'>
							<h4 class='text-gradient'><a href=''>".$arr['name']."</a></h4>
							<p>". $arr['desrciption']." </p>
						</div>
					</div>
				";
				$col++;
											}
											else {
												echo "
								
								<div class='info-box-s1 active'>
								<div class='icon'>
							<img src='admin/images/employee/". $arr['image']."' alt='code'>
						</div>
						<div class='content'>
							<h4 class='text-gradient'><a href=''>".$arr['name']."</a></h4>
							<p>". $arr['desrciption']." </p>
						</div>
					</div>
				";
				$col++;
											} 
											echo"</div>";
										}
										echo "<hr><hr><hr>";
									}
								}
				?>
			


			</div>
		</div>
	</section>
	<!-- End Services Area -->
	<!-- Start Subscribe Area -->
	<?php include("include/getmail.php") ?>
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