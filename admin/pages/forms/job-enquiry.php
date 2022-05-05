<?php 
session_start();
include("../../include/configure.php");

if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from job_enquiry where id='$id'");
  if($sql=1){
    header("location:job-enquiry.php");
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
      <?php include("sidebar.ioc.php") ?>  <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
                       
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Job Enquiry from Website</h4>
                  <p class="card-description">
                  </p>
									
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Phone
                          </th>
                          <th>
                          Job Post&nbsp; </th>
                          <th>
                            Attachment
                          </th>
                          <th>
                            Action
                          </th>							
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                          $sql=mysqli_query($conn,"select * from job_enquiry");
                          $count=1;
                          while($arr=mysqli_fetch_array($sql)){
                          ?>
                        <tr class="table">
                          <td>
                            <?php echo $count; ?>
                          </td>
                          <td>
                          <?php echo $arr['name']; ?>
                          </td>
                          <td>
                          <?php echo $arr['email']; ?>
                          </td>
                          <td>
                          <?php echo $arr['phone']; ?>
                          </td>
                          <td>
                          <?php echo $arr['job_post']; ?>
                          </td>
                          <td>
                          <?php echo $arr['attachment']; ?>
                          </td>
                          <td>
                          <a href="job-enquiry.php?delid=<?php echo $arr['id']; ?>" onclick="return checkDelete()" class="btn btn-primary btn-rounded btn-icon">
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
  <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure you want to delete this userid?');}
</script>
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
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
