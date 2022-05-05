<?php 
session_start();
include("../../include/configure.php");
$msg='';
if(isset($_POST['login']) && !empty($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
  $query=mysqli_query($conn,"select * from userlogin where email='$username' ");
  
  $num=mysqli_fetch_array($query);

  if($num>0){
    $uname=$num['username'];
    $username=$num['email'];
    $hasspassword=$num['password'];
    if(password_verify($password ,$hasspassword)){
      header("location:../forms/users.php");
      $_SESSION['name']=$uname;
      $_SESSION['email']=$username;
    }
    else{
      $msg="username and password is not correct";
    }
  }
  else{
    $msg="username doesn't match";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
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
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Email id">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                      <?php if($msg){ ?>
                  <div class="alert alert-danger">
                    <?php echo $msg; ?>
                </div>
                <?php } ?>
                <div class="my-2 justify-content-between align-items-center text-center">
                  <div class="form-check ">
                  <a href="forgetpassword.php" class="auth-link text-black">Forgot password?</a>

                  </div>
                </div>
                <div class="mt-3 text-center">
                  <input type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"value="SIGN IN">
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
