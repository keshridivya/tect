<?php
include("../../include/configure.php");
$id=$_GET['id'];
//$conn=mysqli_connect("localhost","root","","category");
?>
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
<div class="container-scroller">

<?php include("topbar.ioc.php") ?>


<nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
<li class="nav-item">
<a class="nav-link" href="index.html">
<i class="mdi mdi-grid-large menu-icon"></i>
<span class="menu-title">Dashboard</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="allblog.php" aria-expanded="false" aria-controls="ui-basic">
<i class="menu-icon mdi mdi-floor-plan"></i>
<span class="menu-title">Blog</span>
</a>
</li>
<li class="nav-item"> <a class="nav-link" href="portfolio.php"><i class="menu-icon mdi mdi-chart-areaspline"></i><span class="menu-title">Portfolio</span></a></li>
<li class="nav-item"> <a class="nav-link" href="service.php"><i class="menu-icon mdi mdi-worker"></i><span class="menu-title">Services</span></a></li>
<li class="nav-item"> <a class="nav-link" href="career.php"><i class="menu-icon mdi mdi-bullseye"></i><span class="menu-title">Career</span></a></li>
<li class="nav-item"> <a class="nav-link" href="teams.php"><i class="menu-icon mdi mdi-account-switch"></i><span class="menu-title">Teams</span></a></li>
<li class="nav-item"> <a class="nav-link" href="pricing.php"><i class="menu-icon mdi mdi-currency-usd"></i><span class="menu-title">Pricing</span></a></li>
<li class="nav-item"> <a class="nav-link" href="testimonial.php"><i class="menu-icon mdi mdi-chart-donut-variant"></i><span class="menu-title">Testimonials</span></a></li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="contact-us-enquiry.php" aria-expanded="false" aria-controls="auth">
<i class="menu-icon mdi mdi-contacts"></i>
<span class="menu-title">Contact Us</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="festival.php" aria-expanded="false" aria-controls="auth">
<i class="menu-icon mdi mdi-weather-sunny"></i>
<span class="menu-title">Festival </span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="serviceslist.php" aria-expanded="false" aria-controls="auth">
<i class="menu-icon mdi mdi-account-card-details"></i>
<span class="menu-title">Service List</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="users.php" aria-expanded="false" aria-controls="form-elements">
<i class="menu-icon mdi mdi-account-plus"></i>
<span class="menu-title">Users </span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="general.php" aria-expanded="false" aria-controls="form-elements">
<i class="menu-icon mdi mdi-card-text-outline"></i>
<span class="menu-title">General</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="videos.php" aria-expanded="false" aria-controls="form-elements">
<i class="menu-icon mdi mdi-message-video"></i>
<span class="menu-title">Videos</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="job-enquiry.php" aria-expanded="false" aria-controls="form-elements">
<i class="menu-icon mdi mdi-card-text-outline"></i>
<span class="menu-title">Job Enquires</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="userRole.php">
<i class="mdi mdi-radioactive menu-icon"></i>
<span class="menu-title">Activities Log</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="logout.php">
<i class="mdi mdi-logout menu-icon"></i>
<span class="menu-title">Log Out</span>
</a>
</li>

<li class="nav-item company">
<?php
$sql=mysqli_query($conn,"select * from category");
while($res=mysqli_fetch_array($sql)){
?>
<a class="nav-link" href="list1.html" aria-expanded="false" aria-controls="icons">
<i class="menu-icon mdi mdi-layers-outline"></i>
<span class="menu-title "  style="color:black"><?php echo $res['list']; ?></span>
<?php } ?>
</a>
</li>

</ul>
</nav>
<style>
  .active{
    background:yellow;
  } 
</style>
<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4" style="font-size:18px;line-height:10rem">
      Company
    </div>
    <div class="col-md-8">
     <div class="card-body lang-switch">
     <?php
if(isset($_POST['sub'])){
  $list=$_POST['list'];
  $name=$_POST['endi'];
  $sql=mysqli_query($conn,"UPDATE `category` SET `status`='$name' WHERE list='$list'");
  if($sql){
    echo "<script>alert('$list');</script>";
  }else{
    echo "<script>alert('Failed');</script>";
  }
}

$sql=mysqli_query($conn,"select * from category");
while($res=mysqli_fetch_array($sql)){
?>
<h5><?php echo $res['list']; ?></h5>
<form method="post">
  <input type="hidden" name="list" value="<?php echo $res['list']; ?>">
  <select name="endi">
    <option value="1"><?php echo $res['status'] ?></option>
    <option value="enable">enable</option>
    <option value="disable">disable</option>
    </select>
    <input type="submit" name="sub" value="submit">
</form>



<?php } ?>

         <h5 class="card-title">Card title</h5>
        <!--<button id="button">enable</button>-->
        <ul class="dd">
        <li id="button1 " class="hello">enable</li>
        <li id="button2 " class="hello active">disable</li>
</ul>
      </div>

      <div style="margin-top: 20px; margin-left: 40px;"><p> Show All Conferences </p>
            
            <form method="POST">
                <div class="tab-content">
                <button style="margin-left: 35px;" type="submit" name="submitBtn" class="btn btn-primary" data-toggle="button"> On </button>
                <button style="margin-left: -8px;" type="submit" name="submitBtn2" class="btn btn-secondary" data-toggle="button"> Off </button>
            </form></div>
            
            </div>
            
           
           
    </div>
  </div>
</div>
</div>
</div>
</div>

<footer class="footer">
<div class="d-sm-flex justify-content-center justify-content-sm-between">
<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
</div>
</footer>

</div>

</div>

</div>


<script src="../../vendors/js/vendor.bundle.base.js"></script>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure you want to delete this userid?');}
</script>
<script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="../../vendors/select2/select2.min.js"></script>
<script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>


<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/template.js"></script>
<script src="../../js/settings.js"></script>
<script src="../../js/todolist.js"></script>


<script src="../../js/file-upload.js"></script>
<script src="../../js/typeahead.js"></script>
<script src="../../js/select2.js"></script>
<?php
$sql=mysqli_query($conn,"select * from category");
$res=mysqli_fetch_array($sql);
$res['status'];
$res['list'];
if($res['status']=="enable"){?>
  //$(".company").
 <script>$(".company").css("display","block");</script> 
 <?php
}else{
  ?>
  //$(".company").
 <script>$(".company").css("display","none");</script> 
 <?php
}

?>
<script>


    $(document).ready(function(){
        $("#button").click(function(){
            $(this).text($(this).text()=='enable'?'disable':'enable');
            $(".company").toggle();
        });
    });

let header = document.getElementById("dd");
let btns = header.getElementsByClassName("hello");
let btn1=document.getElementById("button1");
let btn2=document.getElementById("button2");
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
if(btn1.className=="hello active"){
  $(".company").css("display","none");
}
if(btn2.className=="hello active"){
  $(".company").css("display","block");
}
    
</script>



<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f77d4c14ac56ef2","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
