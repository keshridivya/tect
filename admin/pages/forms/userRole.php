<?php
session_start();
include("../../include/configure.php");
$id=$_GET['id'];
//$conn=mysqli_connect("localhost","root","","category");

if(isset($_POST['upload'])){
  $role=$_POST['role'];
    foreach($_POST['user_permission'] as $key => $value){
        $user_permission=$_POST['user_permission'][$key];
        $id=$_POST['id'][$key];
       
    }
    $sql=mysqli_query($conn,"INSERT INTO `permission_role`(`roles`, `sidebar_id`, `status`) VALUES ('$role','$id','$user_permission')");
    if($sql==1){
      echo "<script>alert('Successfully Inserted');</script>";
    }
  }

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

<!--main-->
<div class="container-scroller">

<?php include("topbar.ioc.php") ?>
<?php include("sidebar.ioc.php") ?>
<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 stretch-card">
<div class="card">
<div class="card-body">

  <form action="" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Select Role</label>
      <select class="form-select" name="role" id="exampleFormControlSelect1" required>
        <option><b>Select role</b></option>
        <?php
        $query=mysqli_query($conn,"select * from userlogin");
        while($row=mysqli_fetch_array($query))
        {
        ?>
        <option value="<?php echo $row['id'] ?>"><?php echo $row['role'] ?></option>
        <?php } ?>
        </select>
  


<div class="table-responsive pt-3">

<table class="table table-bordered">
<thead>
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>Permission</th>
</tr>
</thead>
<tbody>
<?php $sql=mysqli_query($conn,"select * from sidebar ");
    $count=1;
    while($arr=mysqli_fetch_array($sql)){ ?>
  <input type="hidden" name="id[]" value="<?php echo $arr['id'] ?>">
<tr class="table">
<td><?php echo $count; ?></td>
<td><?php echo $arr['name']; ?></td>
<td>
  <select name="user_permission[]" class="form-select">
    <option value="1">True</option>
    <option value="0">False</option>
</td>
</tr>
<?php
$count++;
    }
?>
</tbody>
</table>
<div class="mt-3">
<input type="submit" name="upload" value="Set permission" class="btn btn-primary">
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</div>
<!--main-->

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
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    checkBox.value = "disable";
  } else {
    checkBox.value = "enable";
  }
}
</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f77d4c14ac56ef2","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
