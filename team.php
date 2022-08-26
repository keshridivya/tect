<?php
include("include/configure.php");
$selectquery="select * from teams";
$doctors = mysqli_query($conn,$selectquery);
if (mysqli_num_rows($doctors)>0){

}
?>
<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Tectignis IT Solutions Website Development Company in India, Tectignis IT Solutions, website development near me, website desiging in india, website desiging in mumbai, website desiging in thane, website desiging in India, website desiging in sindhudurg, Website Development in mumbai, Website Development in navi mumbai, Website Development in india, best website desiging company in navi mumbai, Website Development in Thane, IT Service Provider in Kamothe,IT Service Provider in navi mumbai, IT Service Provider in mumbai, IT Service Provider in thane, website designing services in India, Web design company, web development company, Social Media Marketing Companies Mumbai ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Teams - Tectignis IT Solutions Website Development Company in India</title>
	<link rel="icon" href="assets/img/favicon.png" type="image/gif" sizes="16x16">
	<link rel="icon" href="assets/img/favicon.png" type="image/gif" sizes="18x18">
	<link rel="icon" href="assets/img/favicon.png" type="image/gif" sizes="20x20">

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

<?php include("include/header.php") ?>
	<!-- Start Breadcrumb Area -->
	<section class="breadcrumb-area" style="background-image: url('assets/img/backgrounds/teams.webp');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>Our Team Members</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Team Member Area -->
	<section class="section-padding-2">
		<div class="container">
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Our Team Members</h2>
						<p>The powerful and flexible theme for all kinds of businesses</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single -->
				<?php
											$i=0;
											while($row = mysqli_fetch_array($doctors)) {
											?>  
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="team-item">
						<div class="thumb">
							<img src="admin/images/employee/<?php echo $row["images"]; ?>" alt="team">
						</div>
						<div class="content">
							<div class="left" style="text-align:center;">
								<h4><?php echo $row["name"]; ?></h4>
								<p><?php echo $row["designation"]; ?></p>
							</div>
							
						</div>
					</div>
					
				</div>
				<?php
											$i++;
											}
											?> 
				<!-- Single -->
				
				<!-- Single -->
				
			</div>
		</div>
	</section>
	<!-- End Team Member Area -->
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