<!-- Start Footer Area -->
<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top pt-70 pb-20">
			<div class="container">
				<div class="row" style="justify-content: center;">
					<!-- Single -->
					<?php $sql=mysqli_query($conn,"select * from company");
				while($arr=mysqli_fetch_array($sql)){
				?>
					<div class="col-lg-3 col-sm-6 mb-30">
						<div class="f-widgets-item">
							<div class="f-logo">
								<a href="#">
									<img src="assets/img/logo1.png" alt="logo">
								</a>
							</div>
							<p><?php echo $arr['shortdesc'] ?></p>
							<ul>
								<li><a href="http://maps.google.com/?q=<?php echo $arr['address_link'] ?>"><i class="bi bi-geo-alt-fill"></i> <?php echo $arr['address'] ?></a></li>
								<li><a href="tel:<?php echo $arr['mobile_no'] ?>"><i class="bi bi-telephone-inbound"></i>+91 <?php echo $arr['mobile_no'] ?></a></li>
							</ul>
						</div>
					</div>
					<?php } ?>
					<!-- Single -->
					<div class="col-lg-3 col-sm-6 mb-30">
						<div class="f-widgets-item">
							<h3>Services</h3>
							<ul>
                                    <?php $sql=mysqli_query($conn,"select * from servicelist");
                                    while($arr=mysqli_fetch_array($sql)){ ?>
                                    <li><a href="website-designing.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['service_list'] ?></a></li>
                                    <?php } ?>
                                    <!--<li><a href="ecommerce-website-design-development.php">Ecommerce Website</a></li>
                                    <li><a href="software-development.php">Software Development</a></li>
                                    <li><a href="mobile-app-development.php">Mobile App Development</a></li>
                                    <li><a href="digital-marketing.php">Digital Marketing</a></li>
                                    <li><a href="graphics-designing.php">Graphics Designing</a></li>
                                    <li><a href="hardware-networking.php">Hardware Networking</a></li>
                                    <li><a href="cctv-camera.php">CCTV Camera</a></li>
                                    <li><a href="it-consulting.html">IT Consulting</a></li>-->
                                </ul>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-3 col-sm-6 mb-30">
						<div class="f-widgets-item">
							<h3>Company</h3>
							<ul>
								<li><a href="about.php">About Us</a></li>
								<li><a href="careers.php">Careers <span>We're hiring</span></a></li>
								<li><a href="portfolio.php">Portfolio </a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="blog.php">Blog</a></li>
							</ul>
						</div>
					</div>
					<!-- Single -->
					<div class="col-lg-3 col-sm-6 mb-30">
						<div class="f-widgets-item">
							<h3>Use Full Links</h3>
							<ul>
								<li><a href="ceo-govind-bavkar.html">CEO</a></li>
								<li><a href="team.php">Team </a></li>
								<li><a href="#">Terms and Condition </a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>	
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
							<p>©2022 <a href="#">Tectignis IT Solutions Private Limited</a>. All Rights Reserved</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer_social">
							<ul>
							<?php
							$sql=mysqli_query($conn,"select * from social");
							$arr=mysqli_fetch_array($sql);
							?>
								<li><a href="<?php echo $arr['facebook'] ?>"><i class="fab fa-facebook-f"></i></a></li>
								
								<li><a href="<?php echo $arr['instagram'] ?>"><i class="fab fa-instagram" style="background: #f9004d;"></i></a></li>
								
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


	<script>function check_empty() {
	if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
	alert("Fill All Fields !");
	} else {
	document.getElementById('form').submit();
	alert("Form Submitted Successfully...");
	}
	}
	//Function To Display Popup
	function div_show() {
	document.getElementById('abc').style.display = "block";
	document.getElementsByTagName('body').style.opacity = "0.3";
	}
	//Function to Hide Popup
	function div_hide(){
	document.getElementById('abc').style.display = "none";
	}</script>   

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
    $(".Click-here").on('click', function() {
      $(".custom-model-main").addClass('model-open');
    }); 
    $(".close-btn, .bg-overlay").click(function(){
      $(".custom-model-main").removeClass('model-open');
    });
    </script>
<script>
document.getElementById('image').onchange=function(){
  document.getElementById('form').submit();
}
</script>
