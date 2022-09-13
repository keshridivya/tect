<?php include("include/configure.php"); ?>
<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Tectignis IT Solutions Website Development Company in India, Tectignis IT Solutions, website development near me, website desiging in india, website desiging in mumbai, website desiging in thane, website desiging in India, website desiging in sindhudurg, Website Development in mumbai, Website Development in navi mumbai, Website Development in india, best website desiging company in navi mumbai, Website Development in Thane, IT Service Provider in Kamothe,IT Service Provider in navi mumbai, IT Service Provider in mumbai, IT Service Provider in thane, website designing services in India, Web design company, web development company, Social Media Marketing Companies Mumbai ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Careers - Tectignis IT Solutions Website Development Company in India</title>
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
<style>
	.header{
		background-image:linear-gradient(#7928ca,#ff0080)
	}
	#select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    padding-left: 40px;
    font-size: 16px;
    font-family: raleway;
	border:none;
}
.form-select {
    display: block;
    width: 100%;
    padding: 0.375rem 1.75rem 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    vertical-align: middle;
    background-color: #fff;
    /* background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e); */
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 16px 12px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}	
</style>
	<!--head and body in include file-->
<?php include("include/header.php");?>
	
	<!-- Start Hero Section -->
	<section class="hero-area-4 pt-120">
		<div class="container">
			<div class="row">
				<!-- Caption -->
				<div class="col-lg-7 align-self-center">
					<div class="hero-caption-4">
						<h2>Find the Most Exciting <br> Startup Jobs</h2>
						<div class="jobs_search_form">
						
							
							<form method="post">
							<div class="row">
								<!-- <div class="col-sm-5">
									<div class="single-input">
										<input type="text" name="location" placeholder="City, state, or zip">
										<i class="bi bi-geo-alt"></i>
									</div>
								</div> -->
								<div class="col-sm-10">
									<div class="single-input border-right">
										<!-- <input type="text" name="name" placeholder="Type Job title, keywords"> -->
										<i class="bi bi-search"></i>
										<select class="form-select" id="select" name="course" aria-label="Default select example">
											<option selected>Type Job title, keywords</option>
											<?php
                                                  $selectquery="select * from career";
                                                  $portfolio = mysqli_query($conn,$selectquery);
												while($arr=mysqli_fetch_array($portfolio)){
                                               ?>
											<option><?php echo $arr["title"]; ?></option>
												<?php } ?>
										</select>
									</div>
								</div>
 
								<div class="col-sm-2">
									<div class="single-input">
										<button type="submit" name="search">Search</button>
									</div>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hero Section -->
	<!-- Start Post Jobs Area -->
	
	<section class="section-padding pt-150">
		<div class="container">
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Explore by All Jobs</h2>
						<p>The powerful and flexible theme for all kinds of businesses</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Single -->
				<?php if (isset($_POST['search'])){
					$course=$_POST['course']; 
					$sql=mysqli_query($conn,"select * from career where title='$course'");
	while($arr=mysqli_fetch_array($sql)){?>
					<div class="col-lg-4 col-sm-6 mb-30">
					<div class="job-board-item">
						<div class="top">
							<div class="con">
								<a href="#"><?php echo $arr['location']; ?></a>
							</div>
						</div>
						<div class="middle">
							<h4><a href="career_details.php?id=<?php echo $arr['id']; ?>"><?php echo $arr['title']; ?></a></h4>
							<p><?php echo $arr['salary']; ?></p>
							<div class="fjb-f-btn">
							<a class="jb-btn1"  style="margin-left:55%;" href="career_details.php?id=<?php echo $arr['id']; ?>">View</a>
							</div>
						</div>
						<div class="btm">
							<ul>
								<li><?php echo $arr['job_type']; ?></li>
								<li>No Vacancy</li>
							</ul>
						</div>
					</div>
				</div>
				<?php } } else { $sql=mysqli_query($conn,"select * from career");
	while($arr=mysqli_fetch_array($sql)){
	?>
				<div class="col-lg-4 col-sm-6 mb-30">
					<div class="job-board-item">
						<div class="top">
							<div class="con">
								<a href="#"><?php echo $arr['location']; ?></a>
							</div>
						</div>
						<div class="middle">
							<h4><a href="career_details.php?id=<?php echo $arr['id']; ?>"><?php echo $arr['title']; ?></a></h4>
							<p><?php echo $arr['salary']; ?></p>
							<div class="fjb-f-btn">
							<a class="jb-btn1"  style="margin-left:55%;" href="career_details.php?id=<?php echo $arr['id']; ?>">View</a>
							</div>
						</div>
						<div class="btm">
							<ul>
								<li><?php echo $arr['job_type']; ?></li>
								<li>No Vacancy</li>
							</ul>
						</div>
					</div>
				</div>
				<?php } } ?>
			<div class="row mt-30">
				<div class="col-lg-12 text-center">
					<a class="button-1" href="#">View All Jobs</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Post Jobs Area -->
	<!-- Start Help Desk Area -->
	<section class="pb-120 pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="help-desk-img">
						<img class="thumbnail" src="assets\img\Tectignis-12-sep-1-1.webp" alt="img">
						<div class="hdi-box-text">
							<i class="fas fa-check"></i>
							<h2>Found <span class="text-gradient">299+ Jobs</span></h2>
							<div class="hdi-list">
								<div class="left">
									<ul>
										<li><img src="assets/img/icon/index.webp" alt="img"></li>
										<li><img src="assets/img/icon/index1.webp" alt="img"></li>
										<li><img src="assets/img/icon/index2.webp" alt="img"></li>
										<li><img src="assets/img/icon/index3.webp" alt="img"></li>
										<li><img src="assets/img/icon/index4.webp" alt="img"></li>
									</ul>
								</div>
								<div class="right">
									<p>+18 Giants</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 align-self-center">
					<div class="help-desk-content">
						<h2>Help you to get the best job that fits you</h2>
						<p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approach.  You get everything you need to turn your ideas into incredible products.</p>
						<ul>
							<li><i class="fas fa-check"></i> Bring to the table win-win survival</li>
							<li><i class="fas fa-check"></i> Capitalize on low hanging fruit to identify</li>
							<li><i class="fas fa-check"></i> But I must explain to you how all this</li>
							<li><i class="fas fa-check"></i> Bring to the table win-win survival</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Help Desk Area -->
	
	<!-- Start analytics Area -->
	<section class="section-padding-2">
		<div class="container">
			<div class="row">
				<!-- Content -->
				<div class="col-lg-6 align-self-center">
					<div class="analytics-toll-content">
						<h2 class="text-gradient">The only analytics tool you'll ever need</h2>
						<p class="contetn">Aenean vel ante a eros pulvinar posuere sollicitudin vitae arcu. Phasellus eget felis velit. Cras placerat libero purus, ultricies aliquam ligula consequat non.</p>
						<div class="row">
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/1.webp" alt="icon">
									</div>
									<div class="content">
										<h4>Fully Responsive</h4>
										<p>Up the duff bonnet daft amongst bog Oxford lost.</p>
									</div>
								</div>
							</div>
							<!-- Single -->
							<div class="col-sm-6 mb-30">
								<div class="info-box-s2">
									<div class="icon">
										<img src="assets/img/icon/2.webp" alt="icon">
									</div>
									<div class="content">
										<h4>24/7 Support</h4>
										<p>Up the duff bonnet daft amongst bog Oxford lost.</p>
									</div>
								</div>
							</div>
						</div>
						<a class="button-1" href="#">Discover More</a>
					</div>
				</div>
				<!-- Image -->
				<div class="col-lg-6">
					<div class="analytics-toll-img">
						<img src="assets\img\Tectignis-12-sep-2-1.webp" alt="img" style="border-radius:10px">
						<!-- <?php $sql=mysqli_query($conn,"select * from video where id='8'");
						while($row=mysqli_fetch_array($sql)){ ?>
						
						<?php } ?> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End analytics Area -->
	
	<!-- Start Subscribe Area -->
	<?php include("include/getmail.php"); ?>
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