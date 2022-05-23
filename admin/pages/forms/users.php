<?php
include("../../include/configure.php");
session_start();
if(!isset($_SESSION['username'])){
 //header("location:../samples/login.php");
}
// $res=mysqli_query($conn,"SELECT * FROM `email_configuration` ");
// $row=mysqli_fetch_array($res);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if(isset($_POST['sub'])){

  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $email_no=$_POST['email'];
   $role=$_POST['role']; 
   $status=1;
   $pass= rand(100000, 999999);

   $to=$email_no;
   $sub="Password";
 
 $mail = new PHPMailer(true);
 try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
  $mail->isSMTP();                             
  $mail->Host       = "smtp.gmail.com";    
  $mail->SMTPAuth   = true;  
  $mail->SMTPSecure = 'ssl';                         
  $mail->Username   = "naiduvedant@gmail.com";           
  $mail->Password   = '4E&7Zu%#!G984^#6FHZ*';                          
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
  $mail->Port       = 465;                            

  //Recipients
  $mail->setFrom("naiduvedant@gmail.com", 'Tectignis It Solution');
  $mail->addAddress($email_no, $name);    
  
  //Content
  $mail->isHTML(true);                               
  $mail->Subject = 'Password';
  $mail->Body    = 'Login Detail '.$name.' and '.$pass;
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if($mail->send()){
    $passwordhash=password_hash($pass,PASSWORD_BCRYPT);

    /*$sql=mysqli_query($conn,"INSERT INTO `userlogin`(`username`, `email`, `password`, `gender`, `role`,`status`) VALUES ('$name','$email_no','$passwordhash','$gender','$role','$status')");
    if($sql=1){
      header("location:users.php");
    }
    else{
      echo "<script>alert('Something Wrong');</script>";
    }*/
  
  }
  
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


  
}

if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from userlogin where id='$id'");
  if($sql=1){
    header("location:users.php");
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <style>
    .page-body-wrapper {
    padding-top: 47px !important;
    }
    .btn-xs {
    padding: 0.125rem 0.25rem;
    font-size: .75rem !important;
    line-height: 1.5;
    border-radius: 0.15rem;
}
.btn-outline-secondary {
    color: #6c757d;
}
.btn-xs:hover{
  background:#6c757d !important;
}
  </style>
</head>

<body>
<div class="container-scroller">
 <!--topbar-->
 <?php include("topbar.ioc.php"); ?>
 <!--topbar-->


    <!-- partial -->
    <?php include("topbar.ioc.php") ?>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php include("sidebar.ioc.php") ?>
      <!-- partial -->

      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New User</h4>
                  <form class="form-sample" method="post">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Employee Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="gender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email address</label>
							            <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email">
                          </div>
                        </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Roles</label>
                          <div class="col-sm-9" >
                            <select class="form-control" name="role">
                              <option>Executive</option>
                              <option>HR</option>
                              <option>Developer</option>
                              <option>Digital Marketing Executive</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">

                      
                    </div><!--<i class="ti-file btn-icon-prepend"></i>-->
             <input type="submit" class="btn btn-primary btn-icon-text" name="sub" value=" Submit">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->



          <div class="content-wrapper">
            <div class="row">
              
                         
              <div class="col-lg-12 stretch-card">
          
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Leads from Website</h4>
                    <p class="card-description">
                    </p>
            	
                    <div class="table-responsive pt-3">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                              S. no.
                            </th>
                            <th>
                              Name
                            </th>
                            <th>
                              Email
                            </th>
                            <th>
                              Role
                            </th>
                            <th>
                              Gender
                            </th>
                            <th>
                              User Role
                            </th>
                            <th>
                              Action
                            </th>							
                          </tr>
                        </thead>
                        <tbody>
                          <?php  
                          $sql=mysqli_query($conn,"select * from userlogin");
                          $count=1;
                          while($arr=mysqli_fetch_array($sql)){
                          ?>
                          <tr class="table">
                            <td>
                              <?php echo $count; ?>
                            </td>
                            <td>
                            <?php echo $arr['username']; ?>
                            </td>
                            <td>
                            <?php echo $arr['email']; ?>
                            </td>
                            <td>
                            <?php echo $arr['role']; ?>
                            </td>
                            <td>
                            <?php echo $arr['gender']; ?>
                            </td>
                            <td>
                            <a href="setuserpermission.php?perm=<?php echo $arr['id']; ?>" class="btn btn-xs btn-outline-secondary"> <i class="mdi mdi-key-variant"></i> Set Permission</a>
                           
                            </td>
                            <td>
                              <a href="users.php?delid=<?php echo $arr['id']; ?>" onclick="return checkDelete()" class="btn btn-primary btn-rounded btn-icon">
                          <i class="mdi mdi-delete"></i>
                          </a>
                            </td>							
                          </tr>
                        <?php 
                      $count++;
                      } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <?php include("footer.ioc.php") ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
	
	
	
		
    </div>
	  
    <!-- page-body-wrapper ends -->
  </div>
	
	<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure you want to delete this userid?');
}
</script>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
