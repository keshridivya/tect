<?php session_start();
include("../../include/configure.php");

if(isset($_POST['submit'])){
  $company_name=$_POST['company_name'];
  $mobile_no=$_POST['mobile_no'];
  $email_id=$_POST['email_id'];
  $address=$_POST['address'];
  $shortdesc=$_POST['short_desc'];
  $sql=mysqli_query($conn,"UPDATE `company` SET `company_name`='$company_name',`mobile_no`='$mobile_no',`email_id`='$email_id',`address`='$address',`shortdesc`='$shortdesc'");
  if($sql==1){
     header("location:general.php");
  }else{
      mysqli_error($conn);
  }

}

if(isset($_POST['social'])){
  $facebook=$_POST['facebook'];
  $instagram=$_POST['instagram'];
  $twitter=$_POST['twitter'];
  $linkedin=$_POST['linkedin'];
  $sql=mysqli_query($conn,"UPDATE `social` SET `facebook`='$facebook',`instagram`='$instagram',`twitter`='$twitter',`linkedin`='$linkedin'");
  if($sql==1){
     header("location:general.php");
  }else{
      mysqli_error($conn);
  }

}


if(isset($_POST['logo'])){
  $file=$_FILES['logo']['name'];    
  $filedet=$_FILES['logo']['tmp_name'];
  $loc="../../images/company/".$file;
  move_uploaded_file($filedet,$loc);
  $sql=mysqli_query($conn,"UPDATE `company` SET `logo`='$file'");
  if($sql==1){
     header("location:general.php");
  }else{
      mysqli_error($conn);
  }

}

if(isset($_POST['favicon'])){
  $fav=$_FILES['favicon']['name'];    
  $filedet=$_FILES['favicon']['tmp_name'];
  $loc="../../images/company/".$fav;
  move_uploaded_file($filedet,$loc);
  $sql=mysqli_query($conn,"UPDATE `company` SET `favicon`='$fav'");
  if($sql==1){
    header("location:testimonial.php");

  }else{
      mysqli_error($conn);
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
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include("topbar.ioc.php") ?>      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
  		<?php include("sidebar.ioc.php") ?>      <?php
$selectquery="select * from company";
$doctors = mysqli_query($conn,$selectquery);
if (mysqli_num_rows($doctors)>0){

}
?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
		    <div class="col-12 grid-margin">
				<div class="card">
                <div class="card-body">
                  <h4 class="card-title">General</h4>
                  <?php
											while($row = mysqli_fetch_array($doctors)) {
											?>  
                  <form class="form-sample" method="post" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Company Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="company_name"value="<?php echo $row["company_name"]; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"name="mobile_no" value="<?php echo $row["mobile_no"]; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email address</label>
							 <div class="col-sm-9">
                      		 <input type="email" class="form-control" name="email_id" id="s" placeholder="Email"value="<?php echo $row["email_id"]; ?>">
                          </div>
                        </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control"name="address" value="<?php echo $row["address"]; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Short Description</label>
							             <div class="col-sm-9">
                      		 <input type="text" class="form-control" name="short_desc" id="s" placeholder="Description" value="<?php echo $row["shortdesc"]; ?>">
                          </div>
                        </div>
                      </div>
                      </div>
                    <input type="submit" class="btn btn-primary btn-icon-text" value="submit" name="submit">
                      </form>

                      <div class="col-12 grid-margin">
              
                      <form class="form-sample" method="post" enctype="multipart/form-data" >
					   <div class="row">
                      <div class="col-md-6">
                        <img src="../../images/company/<?php echo $row["logo"]; ?>" width="100" height="100">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Logo</label>
							 <div class="col-sm-9">
          <input type="file"  align="absmiddle" required class="form-control" id="" value="<?php echo $row["logo"]; ?>"name="logo">
                          </div>
                        </div>
                      </div>
                      <input type="submit" class="btn btn-primary btn-icon-text" value="logo" name="logo">

                      </form>
                   
                  <form class="form-sample" method="post" enctype="multipart/form-data" >

                    <div class="col-md-6">
                    <img src="../../images/company/<?php echo $row["favicon"]; ?>" width="100" height="100">

                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Favicon logo</label>
                          <div class="col-sm-9">
          <input type="file" class="form-control" required value="<?php echo $row["favicon"]; ?>"name="favicon">
                          </div>
                        </div>
                      </div>
                      <input type="submit" class="btn btn-primary btn-icon-text" value="favicon" name="favicon">
                    </div>
                   

                  </form>
                  <?php
									
											}
											?> 
                </div>
              </div>
            </div> 

            <?php
              $selectquery="select * from social";
              $social = mysqli_query($conn,$selectquery);
              if (mysqli_num_rows($social)>0){

              }
              ?>
			  <div class="col-12 mt-5 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Social Media</h4>
                  <?php
											while($row = mysqli_fetch_array($social)) {
											?>  
                  <form class="form-sample" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-1 col-form-label"><b>Facebook</b></label>
                          <div class="col-sm-11">
                            <input type="text" class="form-control"name="facebook" value="<?php echo $row["facebook"]; ?>">
                          </div>
                        </div>
                      </div>
                     <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-1 col-form-label"><b>Instagram</b></label>
                          <div class="col-sm-11">
                            <input type="text" class="form-control"name="instagram" value="<?php echo $row["instagram"]; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
					 <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-1 col-form-label"><b>Twitter</b></label>
                          <div class="col-sm-11">
                            <input type="text" class="form-control"name="twitter" value="<?php echo $row["twitter"]; ?>">
                          </div>
                        </div>
                      </div>
					  <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-1 col-form-label"><b>LinkedIn</b></label>
                          <div class="col-sm-11">
                            <input type="text" class="form-control"name="linkedin" value="<?php echo $row["linkedin"]; ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-icon-text" value="submit" name="social">
                  </form>
                  <?php
                      }
                  ?>
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
