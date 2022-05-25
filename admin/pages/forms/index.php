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
                 
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                     
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Job Enquiry</p>
                            <?php
                            $sql=mysqli_query($conn,"select * from job_enquiry");
                            $count=mysqli_num_rows($sql);
                            ?>
                            <h3 class="rate-percentage text-center"><?php echo $count ?></h3>
                          </div>
                          <div>
                            <p class="statistics-title">Portfolio</p>
                            <?php
                            $sql1=mysqli_query($conn,"select * from portfolio");
                            $count1=mysqli_num_rows($sql1);
                            ?>
                            <h3 class="rate-percentage"><?php echo  $count1 ?></h3>
                          </div>
                          <div>
                            <p class="statistics-title">Blog</p>
                            <?php
                            $sql2=mysqli_query($conn,"select * from blog");
                            $count2=mysqli_num_rows($sql2);
                            ?>
                            <h3 class="rate-percentage"><?php  echo $count2 ?></h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Email Collection</p>
                            <?php
                            $sql3=mysqli_query($conn,"select * from collectuseremail");
                            $count3=mysqli_num_rows($sql3);
                            ?>
                            <h3 class="rate-percentage"><?php echo  $count3 ?></h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Teams</p>
                            <?php
                            $sql4=mysqli_query($conn,"select * from teams");
                            $count4=mysqli_num_rows($sql4);
                            ?>
                            <h3 class="rate-percentage"><?php  echo $count4 ?></h3>
                          </div>
                         
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                         
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Daily Quotes</h4>
                                <div class="row">
                                  <div class="col-sm-12">
                                  <div>
  
  <div class="block text-center">
  <div class = "quote-box block__main block__front">
    <span class = "quote">
      <i class=" mdi mdi-format-quote-open"></i>
      <span class = "text">
      Quote To be Displayed Here
      </span>
    </span>
    <i class=" mdi mdi-format-quote-close"></i>

      
    <div style="text-align:end;margin-top: 30px;margin-bottom: 20px;">
      <i class = "mdi mdi-minus"></i>
      <span class = "author">
      Author to be Displayed Here
</span>
    </div>
  </div>
</div>
</div>


                                    <script>
                                      var data;
let front = true;
const authors = document.querySelectorAll(".author");
const texts = document.querySelectorAll(".text");
const body = document.getElementById("body");
const button = document.querySelectorAll(".new-quote");
const blockFront = document.querySelector(".block__front");
const blockBack = document.querySelector(".block__back");
const authorFront = authors[0];
const authorBack = authors[1];
const textFront = texts[0];
const textBack = texts[1];
const buttonFront = button[0];
const buttonBack = button[1];
  
const displayQuote = () =>{
    let index = Math.floor(Math.random()*data.length);
    let quote = data[index].text;
    let author = data[index].author;
    if(!author){
        author = "Anonymous"
    }
  
    if(front){
        textFront.innerHTML = quote;
        authorFront.innerHTML = author;
    }else{
        textBack.innerHTML = quote;
        authorBack.innerHTML = author;
    }
    front = !front;
}
fetch("https://type.fit/api/quotes")
    .then(function(response) {
        return response.json(); 
    }) // Getting the raw JSON data
    .then(function(data) {
        this.data = data; 
        displayQuote() 
});
function newQuote(){
    blockBack.classList.toggle('rotateB');
    blockFront.classList.toggle('rotateF');
    displayQuote();
}
                                    </script>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
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
