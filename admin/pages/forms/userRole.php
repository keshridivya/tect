<?php
session_start();
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
  <form>
   
    <select>
    <?php $que=mysqli_query($conn,"select roles from permission_role");
    while($row=mysqli_fetch_array($que)){ ?>
      <option value="<?php  echo $row['roles'] ?>"><?php  echo $row['roles'] ?></option>
      
      <?php } ?>
    </select>
</form>
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
  <input type="checkbox" name="check_list[]" id="custom7" value="<?php echo $row['id'];?>" <?php if($row['status']=='disable'){?> checked='checked' <?php } ?> ><?php echo $row['name']; ?><br>
  
  
  <?php } ?>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>


<?php
if(isset($_POST['submit'])){
  $status=$_POST['check_list'];
$chk='';
foreach($status as $chk1){
  $chk.=$chk1;
}

  $sql=mysqli_query($conn,"update sidebar set status='disable' where id in ($chk)");

if($sql){
  echo "updated";
}else{
  echo "not updated";
}
}

$sql=mysqli_query($conn,"select * from sidebar");
$res=mysqli_fetch_array($sql);
$res['status'];
$res['list'];
if($res['status']=="enable"){?>
 <script>$(".company").css("display","block");</script> 
 <?php
}else{
  ?>
 <script>$(".company").css("display","none");</script> 
 <?php
}

?>
            </div>
            
           
           
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php include("footer.ioc.php") ?>
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

<script>
  $('#custom7').on('change', function(){
   this.value = this.checked ? 'disable' : 'enable';
   alert(this.value);
}).change();
</script>


<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f77d4c14ac56ef2","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
