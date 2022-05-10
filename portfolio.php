<?php
include("include/configure.php");
$selectquery="select * from portfolio";
$doctors = mysqli_query($conn,$selectquery);
if (mysqli_num_rows($doctors)>0){
	
}
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

<?php include("include/header.php"); ?>

	<!-- Start Breadcrumb Area -->
	<section class="breadcrumb-area" style="background-image: url('assets/img/OUR PORTFOLIO 1.png');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>Our Portfolio</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Portfolio</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Services Area -->
	<div class="section-padding-2">
		<div class="container">
			<div class="row">
				<div class="portfolio-category mb-40 text-center">
					<ul>
						<li data-filter="all">All</li>
						<li data-filter=".marketing">Marketing</li>
						<li data-filter=".digital">Digital</li>
						<li data-filter=".design">Design</li>
					</ul>
				</div>
				<div class="row portfolio-full portF">
					<!-- Single -->
					<?php
											$i=0;
											while($row = mysqli_fetch_array($doctors)) {
											?>  
					<div class="col-lg-4 col-md-6 mb-30 mix marketing">
					<a href="<?php echo $row["link"]; ?>" >
						<div class="portfolio-item">
							<div class="thumbnail">
								<img src="admin/images/portfolio/<?php echo $row["image"]; ?>" alt="Portfolio">
							</div>
						</div>
						</a>
					</div>
					<?php
						$i++;
						}
					?> 	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 mb-20 text-center">
					<a class="button-1" href="#">Load More <i class="fas fa-spinner fa-spin"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services Area -->
	<!-- Start Subscribe Area -->
	<?php include("include/getmail.php") ?>
	<!-- End Subscribe Area -->
	<!-- Start Footer Area -->
	<?php  include("include/footer.php") ?>


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