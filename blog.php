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
	<title> Blog - Tectignis IT Solutions Website Development Company in India</title>
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

<!--head and body in include file-->
<?php include("include/header.php"); ?>

	
	<!-- Start Breadcrumb Area -->
	<section class="breadcrumb-area" style="background-image: url('assets/img/OUR BLOG.png');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>Our Blog</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Blog</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<!-- Start Blog Area -->
	
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<!-- Blog -->
				<div class="col-lg-8">
					<div class="row">
					<?php  
	$sql=mysqli_query($conn,"select * from blog");
	while($arr=mysqli_fetch_array($sql)){
	?>
						<!-- Single -->
						<div class="col-md-6 mb-30">
							<div class="blog-item">
								<!-- Thumbanil -->
								<div class="thumbnail">
									<a href="single.html">
										<img src="admin/images/blog/<?php echo $arr['image']; ?>" alt="img">
									</a>
									<div class="date">
										<span style="color:white"><?php $input=$arr['update_date']; 
										$date=strtotime($input);
										echo date('d  M, Y',$date);?></span>
									</div>
								</div>
								<!-- Content -->
								<div class="content">
									<h3><a href="single.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['name'] ?></a></h3>
									<div class="auth">
										<ul>
											<li>
												<span>In </span>
												<a href="#"><?php echo $arr['categories'] ?></a>
											</li>
										</ul>
									</div>
									<p><?php echo $arr['description'] ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					
					<!-- Pagintaion -->
					
				</div>
				<!-- Widgets -->
				<div class="col-lg-4">
                    <!-- single -->
                   
                    <!-- single -->
                    
                    <!-- single -->
                    <div class="widets-single mb-30">
                        <h2 class="title">Recent Posts</h2>
                        <div class="side-widgets-l-blog">
						<?php  
                                    $sql=mysqli_query($conn,"select * from blog limit 10");
                                    while($arr=mysqli_fetch_array($sql)){
                                    ?>
                            <div class="item mb-20">
							
                                <div class="thubnail">
                                    <a href="single.html">
                                        <img src="admin/images/blog/<?php echo $arr['image']; ?>" alt="blog">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="single.html"><?php echo $arr['name']; ?></a></h4>
                                    <span><?php echo $arr['location']; ?></h4>
                                    <span><?php $input=$arr['update_date']; 
										$date=strtotime($input);
										echo date('d  M  Y',$date);?></span>
                                </div>
								
                            </div>
							<?php } ?>
                        </div>
                    </div>
                    <!-- single -->
                   
                </div>
			</div>
		</div>
	</section>
	<!-- End Blog Area -->
	<!-- Start Subscribe Area -->
	<?php include("include/getmail.php") ?>
	<!-- End Subscribe Area -->
	<!-- Start Footer Area -->
	<?php include("include/footer.php"); ?>
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