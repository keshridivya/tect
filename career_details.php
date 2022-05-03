<?php
include("include/configure.php");
session_start();
if(isset($_POST['s_ubmit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $post=$_POST['post'];
    $file=$_FILES['file'];
    $file_size =$_FILES['file']['name'];
    $filedet=$_FILES['file']['tmp_name'];
    $loc="image/resume/".$file;
    move_uploaded_file($filedet,$loc);

    $sql=mysqli_query($conn,"INSERT INTO `job_enquiry`(`career_id`, `name`, `email`, `phone`, `job_post`, `attachment`) VALUES ('$id','$name','$email','$phone','$post',' $file_size')");
    if($sql==1){
        echo "<script>alert('successfully Apply');window.location='careers.php';</script>";
    }
}

?>
<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Career Details</title>
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
						<h2>Career Details</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>Career Details</li>
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
	$sql=mysqli_query($conn,"select * from career where id='$id'");
	while($arr=mysqli_fetch_array($sql)){
	?>
					<div class="blog-details mb-30">
						<div class="thumbnail">
							<img src="New Tectignis/template/images/career_logo/<?php echo $arr['logo']; ?>" alt="img">
						</div>
						
						<div class="content">
                            <div class="meta">
                                <div class=row>
                                <div class="col-12 col-lg-6">
                                   <p style="font-size:20px;color:#344767;letter-spacing:2px"> <i class="fab fa-accusoft" style="color:red;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $arr['title']; ?></p>
                                    <p style="font-size:20px;color:#344767;letter-spacing:2px"><i class="fas fa-money-bill"  style="color:red;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $arr['salary']; ?></p>
                                    <p style="font-size:20px;color:#344767;letter-spacing:2px"><i class="bi bi-geo-alt-fill" style="color:red;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $arr['salary']; ?></p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="fjb-f-btn">
                                    <a class="login-trigger jb-btn1 " id="btnOpenForm" style="margin-top:20%;border-radius:30px" data-target="#login" data-toggle="modal">Apply Now</a>
                                   <!--popup-->
                                   <div class="form-popup-bg">
  <div class="form-container">
    <button id="btnCloseForm" class="close-button">X</button>
    <h1>Apply Now</h1>
    <p>For more information. Please complete this form.</p>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Name</label>
        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>"/>
        <input type="text" class="form-control"  name="name"/>
      </div>
      <div class="form-group">
        <label for="">Job Post</label>
        <input class="form-control"  name="post" type="text" />
      </div>
      <div class="form-group">
        <label for="">E-Mail Address</label>
        <input class="form-control"  name="email" type="email" />
      </div>
      <div class="form-group">
        <label for="">Phone Number</label>
        <input class="form-control"  name="phone" type="tel" max="10" />
      </div>
      <div class="form-group">
        <label for="">Resume</label>
        <input class="form-control"  name="file" type="file" />
      </div>
      <button type="submit" name="s_ubmit">Submit</button>
    </form>
  </div>
</div>
                                <!--popup-->

                                    </div>
                                </div>
                                <hr style="color:#D8D3D2">
                                <div class="meta">
								<span><i class="far fa-calendar-alt"></i> <?php $input=$arr['update_date']; 
										$date=strtotime($input);
										echo date('d  M  Y',$date);?></span>
								<span><i class="fas fa-tags"></i> 
                                <a href=""><?php echo $arr['job_type']; ?></a></span>
							    </div>
                            </div>
                            <hr style="color:#C4BDBB">
                            </div>
							
							<h2>Job description</h2>
							<p><?php echo $arr['description']; ?></p>

                            <h2>Education</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
							
							<div class="row">
								<div class="col-lg-12 mb-30">
									<div class="tagcloud">
										<span><b>Education: </b></span>
										<?php $links = array();
                                            $parts = explode(',', $arr['education']);
                                            foreach ($parts as $tag)
                                            {
                                                $links[] = "<span class='tagcloud' style='border-radius:10px'><a href='#'>".$tag."</a></span>";
                                            }
                                            echo implode(" ", $links);
                                            ;?>
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
                    <div class="widets-single mb-30">
                        <h2 class="title">Jobs you might be interested in</h2>
                        <div class="side-widgets-l-blog">
                            <div class="item mb-20">
                                <div class="content">
                                <?php  
                                    $sql=mysqli_query($conn,"select * from career");
                                    while($arr=mysqli_fetch_array($sql)){
                                    ?>
                                    <div style=" margin-bottom:30px">
                                    <h4><a href="career.php" ?><?php echo $arr['title']; ?></a></h4>
                                    <h4><?php echo $arr['location']; ?></h4>
                                    <span><?php $input=$arr['update_date']; 
										$date=strtotime($input);
										echo date('d  M  Y',$date);?></span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
	<!-- End Blog Area -->
	<!-- Start Subscribe Area -->
	<?php include("include/getmail.php") ?>
	<!-- End Subscribe Area -->
	<!-- Start Footer Area -->
	<?php  include("include/footer.php"); ?>


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
    <script>function closeForm() {
  $('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  
  
  });
</script>
</body>
</html>