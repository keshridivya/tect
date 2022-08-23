<?php
include("../include/configure.php");
session_start();

?>
<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Tectignis IT Solutions Website Development Company in India, Tectignis IT Solutions, website development near me, website desiging in india, website desiging in mumbai, website desiging in thane, website desiging in India, website desiging in sindhudurg, Website Development in mumbai, Website Development in navi mumbai, Website Development in india, best website desiging company in navi mumbai, Website Development in Thane, IT Service Provider in Kamothe,IT Service Provider in navi mumbai, IT Service Provider in mumbai, IT Service Provider in thane, website designing services in India, Web design company, web development company, Social Media Marketing Companies Mumbai ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Mobile App Development - Tectignis IT Solutions Mobile App Development Company in India</title>
	<link rel="icon" href="../assets/img/favicon.png" type="image/gif" sizes="16x16">
	<link rel="icon" href="../assets/img/favicon.png" type="image/gif" sizes="18x18">
	<link rel="icon" href="../assets/img/favicon.png" type="image/gif" sizes="20x20">

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
	<link rel="stylesheet" href="../assets/css/lightcase.css">
	<link rel="stylesheet" href="../assets/css/fontawesome.all.min.css">
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../assets/css/animate.css">
	<link rel="stylesheet" href="../assets/css/typed.css">
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<link rel="stylesheet" href="../assets/css/normalize.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../assets/css/responsive.css">
	<link rel="stylesheet" href="../assets/css/stylesheet.css">

<!--head and body in include file-->


<?php include("include/header1.php"); ?>
	

	<!-- Start Breadcrumb Area -->
	<?php 
	$sql=mysqli_query($conn,"select * from servicelist where name='Mobile_App_Development'");
($arr=mysqli_fetch_array($sql))  ?>
	<section class="breadcrumb-area" style="background-image: url('../assets/img/backgrounds/app-developement.webp');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2><?php echo $arr['service_list']; ?></h2>
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
					<img src="../admin/images/service/<?php echo $arr['image1'];?>" alt="serices">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 mb-30 order-lg-first order-last">
					<img src="../admin/images/service/<?php echo $arr['image2'];?>" alt="img">
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
					<!-- <p><?php echo $arr['meta_long2']; ?></p> -->
				</div>
			</div>
		</div>
	</section>
	<?php  ?>
	<!-- End Services Area -->
	<!-- Start Subscribe Area -->
	<!-- End Subscribe Area -->
	<!-- Start Footer Area -->
	<?php include("include/footer.php"); ?>

    <!-- Js File -->
    <script src="../assets/js/modernizr.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.nav.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/mixitup.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/lightcase.js"></script>
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/typed.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/mobile-menu.js"></script>
    <script src="../assets/js/ajax-form.js"></script>
</body>
</html>