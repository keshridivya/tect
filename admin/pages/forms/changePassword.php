<?php
session_start();
include("../../include/configure.php");

$msg='';
if(isset($_POST['login']) && !empty($_POST['login'])){
	$oldPassword = $_POST['oldPassword'];
	$password = mysql_real_escape_string($conn,$_POST['password']);
  $passwordhash=password_hash($password,PASSWORD_BCRYPT);
  $id=$_SESSION['id'];
  $query=mysqli_query($conn,"select * from userlogin where id='$id' ");
  
  $num=mysqli_fetch_array($query);
    $hasspassword=$num['password'];
    if(password_verify($oldPassword ,$hasspassword)){
      $sql=mysqli_query($conn,"update userlogin set password='$passwordhash' where id='$id' ");
    }
    else{
      $msg="Password wrong";
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
              <div class="card mt-5">
              <div class="col-lg-12 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <!-- <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div> -->
              <h4>Change Password</h4>
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="oldPassword" id="exampleInputEmail1" placeholder="Old Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="New Password">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" onblur="Validate()" id="confirm_password" name="confPassword" placeholder="Confirm Password">
                </div>
                <span id='message'></span>
                      <?php if($msg){ ?>
                  <div class="alert alert-danger">
                    <?php echo $msg; ?>
                </div>
                <?php } ?>
                
                </div>
                <div class="mt-3 mb-3 text-center">
                  <input type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"value="Change">
                </div>
                
              </form>
            </div>
          </div>
        </div>
                      </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->


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

  <script type="text/javascript">
$('#confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
  <!-- End custom js for this page-->
</body>

</html>
