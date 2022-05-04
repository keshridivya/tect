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
	<section class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>Blog Details</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Blog Details</li>
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
				<div class="col-lg-8 mb-30">
					<!-- Details Content -->
					<?php  if(isset($_GET['id'])){
							$id=$_GET['id'];
	$sql=mysqli_query($conn,"select * from blog where id='$id'");
	while($arr=mysqli_fetch_array($sql)){
	?>
					<div class="blog-details mb-30">
						<div class="thumbnail">
							<img src="admin/images/blog/<?php echo $arr['image']; ?>" alt="img">
						</div>
						
						<div class="content">
							<div class="meta">
								<span><i class="far fa-calendar-alt"></i><?php $input=$arr['update_date']; 
										$date=strtotime($input);
										echo date('d  M  Y',$date);?></span>
								<span><i class="fas fa-tags"></i> <a href="#"><?php echo $arr['categories']; ?></a></span>
							</div>
							<!--<h2>What’s the Holding Back the It Solution Industry?</h2>-->
							<p><?php echo $arr['description']; ?></p>
							
							<div class="row">
								<div class="col-lg-12 mb-30">
									<div class="tagcloud">
										<span><b>Tags: </b></span>
										<?php
										$link=array();
										$tag=explode(",",$arr['tag']);
										foreach($tag as $t){
											$link[]="<span class='tagcloud' style='border: radius 30px !important;'><a href='#'>".$t."</a></span>";
										   echo implode(" ", $link);
										}

										?>
										
										
									</div>
								</div>
								<div class="col-lg-12">
									<div class="prject-share">
									<?php $sql=mysqli_query($conn,"select * from social");
							         $arr=mysqli_fetch_array($sql);
                                        ?>
										<span><b>Share : </b></span>
										<span><a href="<?php echo $arr['facebook'] ?>"><i class="fab fa-facebook-f"></i></a></span>
										<span><a href="<?php echo $arr['twitter'] ?>"><i class="fab fa-twitter"></i></a></span>
										<span><a href="<?php echo $arr['instagram'] ?>"><i class="fab fa-instagram"></i></a></span>
										<span><a href="<?php echo $arr['linkedin'] ?>"><i class="fab fa-linkedin"></i></a></span>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<?php } }?>
					<!-- Comment List -->
					
						
					<!-- Comment Form -->
					
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