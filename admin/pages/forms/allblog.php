<?php session_start();
 include("../../include/configure.php");

if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from blog where id='$id'");
    if($sql=1){
      header("location:allblog.php");
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




<link rel="stylesheet" href="../../css/vertical-layout-light/style.css">

<link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<body>
<div class="container-scroller">

<?php include("topbar.ioc.php") ?>

<?php include("sidebar.ioc.php") ?>

<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">List of all the blogs</h4>
<p class="card-description">
</p>
<div class="row">
<div class="col-sm-12">
<div class="home-tab">
<div class="btn-wrapper" align="right">
<a href="addnewblog.php" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Add New Blog</a>
</div>
</div>
</div>
</div>
<div class="table-responsive pt-3">
<table class="table table-bordered">
<thead>
<tr>
<th>
Sr. No
</th>
<th>
Name of the Blog
</th>
<th>
Date of Published
</th>
<th>
Action
</th>
</tr>
</thead>
<?php
$sql=mysqli_query($conn,"select * from blog");
$count=1;
while($arr=mysqli_fetch_array($sql)){
?>
<tbody>
<tr class="table">
<td>
<?php echo $count; ?>
</td>
<td>
<?php echo $arr['name']; ?>
</td>
<td>
<?php echo $arr['create_date']; ?>
</td>
<td>
<a class="btn btn-primary btn-rounded btn-icon" href="addnewblog.php?id=<?php echo $arr['id']; ?>" title="Edit Blog"><i class="mdi mdi-border-color"></i></a>
<a class="btn btn-danger btn-rounded btn-icon" href="allblog.php?delid=<?php echo $arr['id']; ?>" onclick="return checkDelete()" class="btn btn-primary btn-rounded btn-icon">
                          <i class="mdi mdi-delete"></i>
                          </a>
</td>
</tr>
</tbody>
<?php $count++; } ?>
</table>
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


<script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>


<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/template.js"></script>
<script src="../../js/settings.js"></script>
<script src="../../js/todolist.js"></script>

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure you want to delete this userid?');}
</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f7a4cdeee6c31e7","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
