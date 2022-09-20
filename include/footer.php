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
									<img src="assets/img/logo1.webp" alt="logo">
								</a>
							</div>
							<p><?php echo $arr['shortdesc'] ?></p>
							<ul>
								<li><a href="http://maps.google.com/?q=<?php echo $arr['address_link'] ?>" target="_blank"><i class="bi bi-geo-alt-fill"></i> <?php echo $arr['address'] ?></a></li>
								<li><a href="tel:<?php echo $arr['mobile_no'] ?>"><i class="bi bi-telephone-inbound"></i>+91 <?php echo $arr['mobile_no'] ?></a></li>
								<li><a href="mailto:<?php echo $arr['email_id'] ?>"><i class="bi bi-envelope"></i> <?php echo $arr['email_id'] ?></a></li>
							</ul>
						</div>
					</div>
					<?php } ?>
					<!-- Single -->
					<div class="col-lg-3 col-sm-6 mb-30">
						<div class="f-widgets-item">
							<h3>Services</h3>
							<ul>
                                    <li><a href="Services/Website-Designing.php" id="1">Website Designing</a></li>
                                    <li><a href="Services/Ecommerce-Website.php" id="2">Ecommerce Website</a></li>
                                    <li><a href="Services/Software-Development.php" id="3">Software Development</a></li>
                                    <li><a href="Services/Mobile-App-Development.php" id="4">Mobile App Development</a></li>
                                    <li><a href="Services/Graphic-Designing.php" id="5">Graphic Designing</a></li>
                                    <li><a href="Services/Digital-Marketing.php" id="6">Digital Marketing</a></li>
                                    <li><a href="Services/Hardware-Networking.php" id="7">Hardware Networking</a></li>
                                    <li><a href="Services/CCTV-Camera.php" id="8">CCTV camera</a></li>
                                    <li><a href="Services/IT-Consulting" id="9">IT Consulting</a></li>
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
								<li><a href="ceo-govind-bavkar.php">CEO</a></li>
								<li><a href="team.php">Team </a></li>
								<li><a href="terms&conditions.php">Terms and Condition </a></li>
								<li><a href="privacy_policy.php">Privacy Policy</a></li>
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
								<li><a href="<?php echo $arr['facebook'] ?>" target="_blank">
								<i class="fab fa-facebook-f"></i></a></li>
								
								<li><a href="<?php echo $arr['instagram'] ?>" target="_blank">
								<i class="fab fa-instagram" style="background: #f9004d;"></i></a></li>
								
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
