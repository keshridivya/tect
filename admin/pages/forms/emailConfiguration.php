<?php
include("../../include/configure.php");
session_start();
if(!isset($_SESSION['username'])){
 //header("location:../samples/login.php");
}
if(isset($_POST['emailSettingSubmit'])){
    $protocol=$_POST['protocol'];
    $encryption=$_POST['encryption'];
    $host=mysqli_real_escape_string($conn,$_POST['host']);
    $port=$_POST['port'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    $sql=mysqli_query($conn,"update email_configuration set protocol='$protocol',encryption='$encryption',host='$host',port='$port',email='$email',username='$username',password='$password'");
    if($sql){
        echo "<script>alert('Email Configuration Updated Successfully');</script>";
    }
    else{
        echo "<script>alert('Email Configuration Not Updated');</script>";
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
        
        <!-- partial:../../partials/_footer.html -->



          <div class="content-wrapper">
            <div class="row">
              
                         
              <div class="col-lg-12 stretch-card">
          
                <div class="card">
                  <div class="">
                   
                  <?php

                  $sql=mysqli_query($conn,"select * from email_configuration");
                  while($arr=mysqli_fetch_assoc($sql)){
                  ?>
                  <section class="content">
                        <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" name="emailSetupForm" id="emailSetupForm" method="post" enctype="multipart/form-data">
                            <div class="card card-info">
                                <div class="card-header">
                                <h3 class="card-title mt-4">Email setup</h3>
                                </div>
                                <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                    Protocol                      <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-4">
                                    <input type="text" name="protocol" value="<?php echo $arr['protocol'] ?>" class="form-control form-control-sm field_validation" id="protocol" placeholder="Protocol">
                                    <span id="err_protocol" class="error invalid-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Encryption<span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                    <input type="text" name="encryption" value="<?php echo $arr['encryption'] ?>" class="form-control form-control-sm field_validation" id="encryption" placeholder="Encryption">
                                    <span id="err_encryption" class="error invalid-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Host<span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                    <input type="text" name="host" value="<?php echo $arr['host'] ?>" class="form-control form-control-sm field_validation" id="host" placeholder="Host">
                                    <span id="err_host" class="error invalid-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Port<span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                    <input type="text" name="port" value="<?php echo $arr['port'] ?>" class="form-control form-control-sm field_validation" id="port" placeholder="Port">
                                    <span id="err_port" class="error invalid-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email<span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                    <input type="email" name="email" value="<?php echo $arr['email'] ?>" class="form-control form-control-sm field_validation" id="email" placeholder="Email">
                                    <span id="err_email" class="error invalid-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Username<span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                    <input type="text" name="username" value="<?php echo $arr['username'] ?>" class="form-control form-control-sm field_validation" id="username" placeholder="Username">
                                    <span id="err_username" class="error invalid-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password<span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                    <input type="password" name="password" value="<?php echo $arr['password'] ?>" class="form-control form-control-sm field_validation" id="password" placeholder="Password">
                                    <span id="err_password" class="error invalid-feedback"></span>
                                    </div>
                                </div>
                                
                                </div>
                                <div class="card-footer">
                                <input type="hidden" name="csrf_zivaan_pro" value="0d0916ebc5a1ddc9c6a32ef256602c6d">
                                <button type="submit" id="emailSettingSubmit" name="emailSettingSubmit" class="btn btn-primary" data-tt="tooltip" title="Click here to Save">Save</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        </div>
                    </section>
                    <?php } ?>
                    
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
