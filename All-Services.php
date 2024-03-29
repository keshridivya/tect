<?php
include("include/configure.php");
session_start();

?>
<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Tectignis IT Solutions Website Development Company in India, Tectignis IT Solutions, website development near me, website desiging in india, website desiging in mumbai, website desiging in thane, website desiging in India, website desiging in sindhudurg, Website Development in mumbai, Website Development in navi mumbai, Website Development in india, best website desiging company in navi mumbai, Website Development in Thane, IT Service Provider in Kamothe,IT Service Provider in navi mumbai, IT Service Provider in mumbai, IT Service Provider in thane, website designing services in India, Web design company, web development company, Social Media Marketing Companies Mumbai ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Services - Tectignis IT Solutions Website Development Company in India</title>
	<link rel="icon" href="assets/img/favicon.webp" type="image/gif" sizes="16x16">
	<link rel="icon" href="assets/img/favicon.webp" type="image/gif" sizes="18x18">
	<link rel="icon" href="assets/img/favicon.webp" type="image/gif" sizes="20x20">

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
	<section class="breadcrumb-area" style="background-image: url('assets/img/backgrounds/services2.webp');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>Our Services</h2>
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
						<!-- <p>The powerful and flexible theme for all kinds of businesses</p> -->
					</div>
				</div>
			</div>
			<!-- Single -->
			<div class='row'>
			<?php $sql=mysqli_query($conn,"select * from service");
			
			while($arr=mysqli_fetch_assoc($sql)){ 
			$count=mysqli_num_rows($sql);
			$id=$arr['id'];
echo "<div class='col-lg-4 col-sm-6 mb-30'>";
							if($id%2 != 0) {
								echo "
								
								<a href=". $arr['desrciption']."><div class='info-box-s1'>
								<div class='icon'>
							<img src='admin/images/employee/". $arr['image']."' alt='code'>
						</div>
						<div class='content'>
							<h4 class='text-gradient'>".$arr['name']."</h4>
						</div>
					</div></a>
				";
											}
											else {
												echo "
							<a href=". $arr['desrciption']."><div class='info-box-s1 active'>
								<div class='icon'>
							<img src='admin/images/employee/". $arr['image']."' alt='code'>
						</div>
						<div class='content'>
							<h4 class='text-gradient'>".$arr['name']."</h4>
						</div>
					</div></a>
					
				";
											} 
											echo "</div>";
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
	<?php include("include/footer.php") ?>

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