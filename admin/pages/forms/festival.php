<?php
include("../../include/configure.php");

if(isset($_POST['festival_add'])){
  $file=$_FILES['festival_image']['name'];    
  $festival_name=$_POST['festival_name'];
  $from_date=$_POST['from_date'];
  $end_date=$_POST['end_date'];
  $filedet=$_FILES['festival_image']['tmp_name'];
  $loc="../../images/festival/".$file;
  move_uploaded_file($filedet,$loc);
  $sql=mysqli_query($conn,"insert into festival_offer (festival_name,from_date,end_date,festival_image) values('$festival_name','$from_date','$end_date','$file')");
  
  if($sql==1){
     header("location:festival.php");
  }else{
      mysqli_error($conn);
  }

}
if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from festival_offer where id='$id'");
  if($sql=1){
    header("location:festival.php");
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
   <?php include("topbar.ioc.php") ?>
    <!-- partial -->
   
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
                  <h4 class="card-title">Festival</h4>
                  <form class="form-sample"method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Name</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"name="festival_name">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>From Date&Time</b></label>
							 <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id=""name="from_date">
                          </div>
                        </div>
                      </div>
						<div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>To Date&Time</b></label>
							 <div class="col-sm-9">
                      <input type="datetime-local" class="form-control" id="" name="end_date">
                          </div>
                        </div>
                      </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Photo</b></label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="festival_image">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <input type="submit" class="btn btn-primary btn-icon-text" value="Submit" name="festival_add">
                    </div>
       
                  </form>
                </div>
              </div>
            </div>  
          </div>

          <?php
$selectquery="select * from festival_offer";
$doctors = mysqli_query($conn,$selectquery);
if (mysqli_num_rows($doctors)>0){

}
?>
			<div class="row">
			<div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">				
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Name</th>
                          <th>From date&time</th>
						  <th>To date&time</th>
                          <th>Photo</th>
                          <th>Action</th>							
                        </tr>
                      </thead>
                      <tbody>
                      <?php
											$i=0;
											while($row = mysqli_fetch_array($doctors)) {
											?>   
                        <tr class="table">
                          <td><?php echo $row["id"]; ?></td>
                          <td><?php echo $row["festival_name"]; ?></td>
                          <td><?php echo $row["from_date"]; ?></td>
                          <td><?php echo $row["end_date"]; ?></td>
                          <td><img src="../../images/festival/<?php echo $row["festival_image"]; ?>"></td>
						  <td>
                            <button type="button" class="btn btn-primary btn-rounded btn-icon">
                        <i class="mdi mdi-delete"></i></button>                     
                     
<a class="btn btn-danger btn-rounded btn-icon" href="festival.php?delid=<?php echo $row['id']; ?>" onclick="return checkDelete()" class="btn btn-primary btn-rounded btn-icon">
                          <i class="mdi mdi-delete"></i>
                          </a>
                          </td>							
                        </tr>
                        <?php
											$i++;
											}
											?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
			</div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
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
