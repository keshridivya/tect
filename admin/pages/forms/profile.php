<?php session_start();
include("../../include/configure.php");
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
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include("topbar.ioc.php");
    if(isset($_POST['subm_it'])){

      $id=$_SESSION['id'];
      $name=$_POST['name'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $description=$_POST['description'];
    
      $query=mysqli_query($conn,"UPDATE `userlogin` SET `username`='$name',`email`='$email',`mobile`='$mobile',`short_desc`='$description' WHERE id='$id'");
      if($query==1){
        echo "<script>alert('Profile Updated Successfully');</script>";
      }
      else{
        echo "<script>alert('Profile Not Updated');</script>";
      }
    }
    ?> <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php include("sidebar.ioc.php") ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Profile</h4>
                  <form class="forms-sample" method="post">
                 
                 <div class="form-group row">
                   <label for="exampleaddress" class="col-sm-2 col-form-label"> Name</label>
                   <div class="col-sm-10">
                     <input type="text" class="form-control" name="name"value="<?php echo $name ?>">
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="exampleaddress" class="col-sm-2 col-form-label"> Email-ID</label>
                   <div class="col-sm-10">
                     <input type="email" class="form-control" name="email"value="<?php echo $email ?>">
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="exampleaadhaar" class="col-sm-2 col-form-label">Mobile No.</label>
                   <div class="col-sm-10">
                     <input type="text" class="form-control" name="mobile"value="">
                   </div>
                 </div>
                 <div class="form-group row">
                   <label for="exampleaadhaar" class="col-sm-2 col-form-label">About Me</label>
                   <div class="col-sm-10">
                     <textarea class="form-control" rows="5" name="description"></textarea>
                   </div>
                 </div>
       <div class="col" align="right">
                 <button type="submit" name="subm_it" class="btn btn-primary  btn-lg" style="color: aliceblue">Submit</button>
       </div>
               </form>
                </div>
              </div>
            </div>  
          </div>
          <?php
$selectquery="select * from portfolio";
$portfolio = mysqli_query($conn,$selectquery);
if (mysqli_num_rows($portfolio)>0){

}
?>

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
