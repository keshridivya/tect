<?php
include("../../include/configure.php");
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Star Admin2 </title>

<link rel="stylesheet" href="../../vendors/feather/feather.css">
<link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="../../vendors/typicons/typicons.css">
<link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
<link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">

<link rel="stylesheet" href="../../vendors/select2/select2.min.css">
<link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">

<link rel="stylesheet" href="../../css/vertical-layout-light/style.css">

<link rel="shortcut icon" href="../../images/favicon.png" />

</head>
<body>

<!--main-->
<div class="container-scroller">

<?php include("topbar.ioc.php") ?>
<?php include("sidebar.ioc.php") ?>
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                 
                  
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Job Enquiry</p>
                            <h3 class="rate-percentage">32.53%</h3>
                          </div>
                          <div>
                            <p class="statistics-title">Blog</p>
                            <h3 class="rate-percentage">7,682</h3>
                          </div>
                          <div>
                            <p class="statistics-title">User Email</p>
                            <h3 class="rate-percentage">68.8</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Testimonial</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Festival Offer</p>
                            <h3 class="rate-percentage">68.8</h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Lead Enquiry</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <!--<p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>-->
                          </div>
                        </div>
                      </div>
                    </div> 
                   
                   
                       
                       
                      </div>
                     
                    </div>
                  </div>
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
