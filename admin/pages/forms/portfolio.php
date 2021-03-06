<?php session_start();
include("../../include/configure.php");

if(isset($_POST['portfolio_add'])){
  $file=$_FILES['portfolio_image']['name'];    
  $company_name=$_POST['company_name'];
  $website_link=$_POST['website_link'];
  $filedet=$_FILES['portfolio_image']['tmp_name'];
  $id=$_GET['eid'];

  if(empty(($_FILES['portfolio_image']['tmp_name'])) && ($_POST['portImage']) && ($_GET['eid'])){
    $id=$_GET['eid'];
    $dnk = $_POST['portImage'];
    
    $sql=mysqli_query($conn,"update `portfolio` SET `company_name`='$company_name',`link`='$website_link',`image`='$dnk ' WHERE id='$id'");    
    }
   
  else if(!empty($_FILES['portfolio_image']['tmp_name']) && ($_POST['portImage']) || !empty($_FILES['portfolio_image']['tmp_name']) && (empty($_POST['portImage']) && ($_GET['eid']))){
    $id=$_GET['eid'];
    $loc="../../images/portfolio/".$file;
    move_uploaded_file($filedet,$loc);
    $sql=mysqli_query($conn,"update `portfolio` SET `company_name`='$company_name',`link`='$website_link',`image`='$file' WHERE id='$id'");
  }else{

  $loc="../../images/portfolio/".$file;
  move_uploaded_file($filedet,$loc);
  $sql=mysqli_query($conn,"insert into portfolio (company_name,link,image) values('$company_name','$website_link','$file')");}
  
  if($sql==1){
     header("location:portfolio.php");
  }else{
      mysqli_error($conn);
  }

}

if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from portfolio where id='$id'");
  if($sql=1){
    header("location:portfolio.php");
  }
}

$company_name="";
$website_link="";
$image="";
if(isset($_GET['eid'])){
  $sql=mysqli_query($conn,"select * from portfolio where id='$_GET[eid]'");
  $row=mysqli_fetch_array($sql);
  $company_name=$row['company_name'];
  $website_link=$row['link'];
  $image=$row['image'];
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

  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <style>
    .hoverTitles{
      color: black;
      cursor: pointer;
      font-weight: 500;
      /* font-size: small; */

    }
    .active1{
      cursor: pointer;
      font-weight: 500;
    }
      .hoverTitles:hover{
      color: #007bff !important;
    }
    a{
      text-decoration:none;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include("topbar.ioc.php") ?> <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php include("sidebar.ioc.php") ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
           <!-- Info boxes -->
           <div class="row">

            <div class="col-4 ">
            <div class="card-body grid-margin ">
              <a href="Portfolio.php">
              <div class="d-flex flex-row align-items-start active1">
                  <i class=" pt-1 mt-1 pr-2 mr-2 fa-lg	fas fa-digital-tachograph"></i>
                  <div class="ms-3">
                      <h5 class="pb-0 mb-0" style="line-height:1;">Digital Marketing</h5>
                        <small class="text-muted small pt-0 mt-0">Add/Edit Digital Marketing Portfolio</small>
                  </div>
              </div>
            </a>
            </div>

           </div>
           <div class="col-4">
             <div class="card-body">
                  <a href="Portfolio_web.php">
               <div class="d-flex flex-row align-items-start hoverTitles">
                  <i class="pt-1 mt-1 pr-2 mr-2 fa-lg 	fas fa-laptop-code"></i>
                  <div class="ms-3">
                      <h5 class="pb-0 mb-0" style="line-height:1;">Web Development</h5>
                        <small class="text-muted small pt-0 mt-0">Add/Edit Web Development Portfolio</small>
                  </div>
              </div>
              </a>
            </div>
           </div>
           <div class="col-4">
              <div class="card-body">
                <a href="Portfolio_app.php">
                <div class="d-flex flex-row align-items-start hoverTitles">
                  <i class="pt-1 mt-1 pr-2 mr-2 fa-lg 	fas fa-mobile-alt"></i>
                  <div class="ms-3">
                      <h5 class="pb-0 mb-0" style="line-height:1;">App Development</h5>
                        <small class="text-muted small pt-0 mt-0">Add/Edit App Development Portfolio</small>
                  </div>
               </div>
               </a>
             </div>
           </div>
         </div>
   
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Portfolio</h4>
                 <form class="form-sample" method="post" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Company Name</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $company_name; ?>" name="company_name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Website link</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $website_link; ?>" name="website_link">
                          </div>
                        </div>                 
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Upload Image</b></label>
                          <div class="col-sm-9">
                            <?php
                            if(isset($_GET['eid'])){
                              ?>
                              <img src="../../images/portfolio/<?php echo $image; ?>" width="100" height="100">
                              <input type="hidden" value="<?php echo $image; ?>" name="portImage">
                            <?php }  ?>
                            <input type="file" class="form-control"  name="portfolio_image">
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-icon-text" value="Submit" name="portfolio_add">

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

			<div class="row">
			<div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">				
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Company Name</th>
                          <th>Website Link</th>
                          <th>Image</th>
                          <th>Action</th>							
                        </tr>
                      </thead>
                      <tbody>
                      <?php
											$i=0;
											while($row = mysqli_fetch_array($portfolio)) {
											?>  
                        <tr class="table">
                          <td><?php echo $row["id"]; ?></td>
                          <td><?php echo $row["company_name"]; ?></td>
                          <td><?php echo $row["link"]; ?></td>
                          <td><img src="../../images/portfolio/<?php echo $row["image"]; ?>"></td>
						  <td>                   
              <a class="btn btn-primary btn-rounded btn-icon" href="portfolio.php?eid=<?php echo $row['id']; ?>" title="Edit Blog"><i class="mdi mdi-border-color"></i></a>
                            
<a class="btn btn-danger btn-rounded btn-icon" href="portfolio.php?delid=<?php echo $row['id']; ?>" onclick="return checkDelete()" class="btn btn-primary btn-rounded btn-icon">
                          <i class="mdi mdi-delete"></i>								
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
