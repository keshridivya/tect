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


<?php include("sidebar.ioc.php") ?>
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
     
<form action="" method="post">
<?php
$sql=mysqli_query($conn,"select * from sidebar");
while($row=mysqli_fetch_array($sql)){
  
?>
  <input type="checkbox" name="check_list[]" value="<?php echo $row['id']; ?>" <?php if($row['status']==1){ echo "checked"; } ?> >

  <?php } ?>
</form>






         
            
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
