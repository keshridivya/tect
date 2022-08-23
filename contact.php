<?php include("include/configure.php");
session_start();

if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`, `phone`, `subject`, `message`) VALUES ('$name','$email','$phone','$subject','$message')");
    if($sql=1){
        header("location:index.php");
    }else{
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Tectignis IT Solutions Website Development Company in India, Tectignis IT Solutions, website development near me, website desiging in india, website desiging in mumbai, website desiging in thane, website desiging in India, website desiging in sindhudurg, Website Development in mumbai, Website Development in navi mumbai, Website Development in india, best website desiging company in navi mumbai, Website Development in Thane, IT Service Provider in Kamothe,IT Service Provider in navi mumbai, IT Service Provider in mumbai, IT Service Provider in thane, website designing services in India, Web design company, web development company, Social Media Marketing Companies Mumbai ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Contact Us - Tectignis IT Solutions Website Development Company in India</title>
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


	<!-- Header Area -->
   <?php include("include/header.php") ?>
	
	<!-- Start Breadcrumb Area -->
	<section class="breadcrumb-area" style="background-image: url('assets/img/CONTACT US 1.png');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-content">
						<h2>Contact Us</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Breadcrumb Area -->
	<section class="section-padding">
		<div class="container">
			<div class="row mb-20">
				<?php $sql=mysqli_query($conn,"select * from company");
				while($arr=mysqli_fetch_array($sql)){
				?>
				<!-- Single -->
				<div class="col-lg-4 col-sm-6 mb-30">
					<div class="about_item_box text-center">
						<div class="icon text-gradient">
							<i class="bi bi-envelope-open-fill"></i>
						</div>
						<h4>Email</h4>
						<a href="mailto:<?php echo $arr['email_id'] ?>"><?php echo $arr['email_id'] ?></a>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-sm-6 mb-30">
					<div class="about_item_box text-center">
						<div class="icon text-gradient">
							<i class="bi bi-telephone-inbound-fill"></i>
						</div>
						<h4>Phone</h4>
						<a href="tel:<?php echo $arr['mobile_no'] ?>">+91 <?php echo $arr['mobile_no'] ?></a>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-sm-6 mb-30">
					<div class="about_item_box text-center">
						<div class="icon text-gradient">
							<i class="bi bi-geo-alt-fill"></i>
						</div>
						<h4>Location</h4>
						<a href="http://maps.google.com/?q=<?php echo $arr['address_link'] ?>"><?php echo $arr['address'] ?></a>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="row mb-40">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-headding">
						<h2>Get In Touch.</h2>
						<p>The powerful and flexible theme for all kinds of businesses</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-7 offset-lg-2">
					<div class="contact-form">
                        <form id="contact-form" action="mail.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="name" placeholder="Your Name">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input type="email" name="email" placeholder="Your Email">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="phone" placeholder="Your Phone">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="subject" placeholder="Your Subjects">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-input">
                                        <textarea name="message" placeholder="Write Message" spellcheck="false"></textarea>
                                        <i class="fas fa-pen"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="sub" >Send Message</button>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response"></p>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Start Subscribe Area -->
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