<?php
include("../../include/configure.php");

if(isset($_POST['empadd'])){
  $file=$_FILES['empimage']['name'];    
  $empname=$_POST['empname'];
  $empdesignation=$_POST['empdesignation'];
  $filedet=$_FILES['empimage']['tmp_name'];
  $loc="../../images/employee/".$file;
  move_uploaded_file($filedet,$loc);
  $sql=mysqli_query($conn,"insert into teams (name,designation,images) values('$empname','$empdesignation','$file')");
  
  if($sql==1){
     header("location:teams.php");
  }else{
      mysqli_error($conn);
  }

}
if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from teams where id='$id'");
  if($sql=1){
    header("location:teams.php");
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
    <?php include("topbar.ioc.php") ?>   <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php include("sidebar.ioc.php") ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Teams</h4>
                  <form class="form-sample" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Employee Name</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="empname">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Designation</b></label>
							 <div class="col-sm-9">
                      <input type="text" class="form-control" id="d" name="empdesignation">
                          </div>
                        </div>
                      </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Photo</b></label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="empimage">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <input type="submit" class="btn btn-primary btn-icon-text" value="Submit" name="empadd">
                    </div>
       
                  </form>
                </div>
              </div>
            </div>  
          </div>
<?php
$selectquery="select * from teams";
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
                          <th>Employee Name</th>
                          <th>Designation</th>
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
                          <td><?php echo $row["name"]; ?></td>
                          <td><?php echo $row["designation"]; ?></td>
      <td><img src="../../images/employee/<?php echo $row["images"]; ?>"></td>
                          <td>
                            
                            
                        <a class="btn btn-primary btn-rounded btn-icon" href="team_delete.php?id=<?php echo $row["id"]; ?>"><i class="mdi mdi-border-color"></i>
</a>                    

<a class="btn btn-danger btn-rounded btn-icon" href="teams.php?delid=<?php echo $row['id']; ?>" onclick="return checkDelete()" class="btn btn-primary btn-rounded btn-icon">
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
