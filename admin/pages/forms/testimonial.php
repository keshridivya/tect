<?php
include("../../include/configure.php");

if(isset($_POST['tadd'])){
  $file=$_FILES['timage']['name'];    
  $tname=$_POST['tname'];
  $tcompany=$_POST['tcompany'];
  $tdiscription=$_POST['tdisc'];
  if(empty(($_FILES['timage']['tmp_name'])) && ($_POST['image_name']) && ($_GET['id'])){
    $id=$_GET['id'];
    $ba_image = $_POST['image_name'];
    
    $sql=mysqli_query($conn,"UPDATE `testimonial` SET `name`='$tname',`company`='$tcompany',`image`='$ba_image',`discription`='$tdiscription' WHERE id='$id'");
        if($sql=1){
            header("location:testimonial.php");
        }else{
            mysqli_error($conn);
        }
    
    }
    
else if(!empty($_FILES['timage']['tmp_name']) && ($_POST['image_name']) || !empty($_FILES['timage']['tmp_name']) && (empty($_POST['image_name']) && ($_GET['id']))){
    $file_size =$_FILES['timage']['size'];
  $filedet=$_FILES['timage']['tmp_name'];
  $loc="../../images/testimonial/".$file;
  move_uploaded_file($filedet,$loc);
  $id=$_GET['id'];

  $sql=mysqli_query($conn,"UPDATE `testimonial` SET `name`='$tname',`company`='$tcompany',`image`='$file ',`discription`='$tdiscription' WHERE id='$id'");
  
  if($sql==1){
     header("location:testimonial.php");
  }else{
      mysqli_error($conn);
  }

}else{
  $filedet=$_FILES['timage']['tmp_name'];
  $loc="../../images/testimonial/".$file;
  move_uploaded_file($filedet,$loc);
  $sql=mysqli_query($conn,"insert into testimonial (name,company,image,discription) values('$tname','$tcompany','$file','$tdiscription')");
  if($sql==1){
     header("location:testimonial.php");
  }else{
      mysqli_error($conn);
  }
}
}
if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from testimonial where id='$id'");
  if($sql=1){
    header("location:testimonial.php");
  }
}
  
$name='';
$description='';
$company='';
$image='';
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sqls = mysqli_query($conn,"SELECT * FROM testimonial WHERE id ='$id'");
    $arr = mysqli_fetch_assoc($sqls);
    $name=$arr['name'];
    $description=$arr['discription'];
    $company=$arr['company'];
    $image=$arr['image'];
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
    <?php include("topbar.ioc.php") ?>  <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php include("sidebar.ioc.php") ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Testimonials</h4>
                  <form class="form-sample" method="post" enctype="multipart/form-data" >
                    <div class="row">
						<div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Photo</b></label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="timage">
                            <?php if(isset($_GET['id'])){
                            ?>
                            <img width="200" src="../../images/testimonial/<?=$arr["image"];?>" />
                            <input type="hidden" name="image_name" value="<?=$arr["image"];?>" />
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Name</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $name; ?>" name="tname">
                          </div>
                        </div>
                      </div>
						<div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Company Name</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $company; ?>" name="tcompany">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Description</b></label>
							 <div class="col-sm-9">
                      <input type="text" class="form-control" id="" value="<?php echo $description; ?>" name="tdisc">
                          </div>
                        </div>
                      </div>
                    
                    </div>
                    <div class="row">
                      <input type="submit" class="btn btn-primary btn-icon-text" value="Submit" name="tadd">
                    </div>

                  </form>
                </div>
              </div>
            </div>  
          </div>
          <?php
$selectquery="select * from testimonial";
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
						  <th>Company Name</th>
                          <th>Description</th>
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
                          <td><?php echo $row["company"]; ?></td>
                          <td><?php echo $row["discription"]; ?></td>
                          <td><img src="../../images/testimonial/<?php echo $row["image"]; ?>"></td>
						  <td>
              <a class="btn btn-primary btn-rounded btn-icon" href="testimonial.php?id=<?php echo $row['id']; ?>" title="Edit Blog"><i class="mdi mdi-border-color"></i></a>                   
                        <a class="btn btn-danger btn-rounded btn-icon" href="testimonial.php?delid=<?php echo $row['id']; ?>" onclick="return checkDelete()" class="btn btn-primary btn-rounded btn-icon">
                          <i class="mdi mdi-delete"></i></a>
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
