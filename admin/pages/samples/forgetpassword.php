<?php 
include("../../include/configure.php");
?>

<?php session_start();
	//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
 ?>


<?php
		
		if(isset($_POST['forget'])){
			
			$email=$_POST['mail'];
			$q=mysqli_query($conn,"select * from userlogin where email='$email'");
			if(mysqli_num_rows($q)>0){
				
				
				$to=$email;
				$sub="Recover Password";
				$pass=rand(100000, 999999);
			
			$mail = new PHPMailer(true);

			try {
				//Server settings
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				$mail->isSMTP();                                            //Send using SMTP
				$mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				$mail->Username   = "snehal.ambavale@tectignis.in";                     //SMTP username
				$mail->Password   = 'Admin@123';                               //SMTP password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
				$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				//Recipients
				$mail->setFrom('snehal.ambavale@tectignis.in', 'Tectignis It Solution');
				$mail->addAddress($email, 'Tectignis Employee');     //Add a recipient
				
				//Content
				$mail->isHTML(true);                                  //Set email format to HTML
				$mail->Subject = 'Reset Password';
				$mail->Body    = 'Hi,<br>Here is your new password : '.$pass;
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if($mail->send()){
					$passwordhash=password_hash($pass,PASSWORD_BCRYPT);

					$q1=mysqli_query($conn,"update userlogin set password= '$passwordhash' where email='$email'");
						if($q1){
							$_SESSION['email']=$email;
							
							header("location:login.php");
						}
						else{
							echo"Error";
						}
				}
				
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
			
			}
		}
	?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Star Admin2 </title>
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
<link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="../../vendors/typicons/typicons.css">
<link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="../../css/vertical-layout-light/style.css">

<link rel="shortcut icon" href="../../images/favicon.png" />
  
</head>
<body>
<div class="container-scroller">
<div class="container-fluid page-body-wrapper full-page-wrapper">
<div class="content-wrapper d-flex align-items-center auth px-0">
<div class="row w-100 mx-0">
<div class="col-lg-4 mx-auto">
<div class="auth-form-light text-left py-5 px-4 px-sm-5">
<div class="brand-logo">
<img src="../../images/logo.svg" alt="logo">
</div>
<h4>Enter your Email ?</h4>
<form class="pt-3" method="post">
<div class="form-group">
<input type="email" class="form-control form-control-lg" name="mail" id="exampleInputEmail1" placeholder="Enter Your Email ID">
</div>
<div class="mt-3">
<a class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn" href="login.php">Cancel</a>
<button type="submit" onclick="fun()" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="forget" >Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>

</div>

</div>



    <!--script-->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>

<script>
function fun(){
	alert('New Password is send in your Registered email');}
</script>

		<script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="../../js/off-canvas.js"></script>
		<script src="../../js/hoverable-collapse.js"></script>
		<script src="../../js/template.js"></script>
		<script src="../../js/settings.js"></script>
		<script src="../../js/todolist.js"></script>

		<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f77d4871bec6ef2","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>