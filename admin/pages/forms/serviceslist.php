<?php session_start();
include("../../include/configure.php");
$id=$_GET['id'];
if(isset($_POST['empadd'])){
  $file=$_FILES['files']['name'];    
  $empname=$_POST['empname'];
  $empdesignation=$_POST['empdesignation'];

if(empty(($_FILES['files']['tmp_name'])) && ($_POST['image_name']) && ($_GET['id'])){
    $id=$_GET['id'];
    $ba_image = $_POST['image_name'];
    
    $sql=mysqli_query($conn,"update `service` SET `name`='$empname',`desrciption`='$empdesignation',`image`='$ba_image' WHERE id='$id'");
        if($sql=1){
            header("location:serviceslist.php");
        }else{
            mysqli_error($conn);
        }
    
    }
    
else if(!empty($_FILES['files']['tmp_name']) && ($_POST['image_name']) || !empty($_FILES['files']['tmp_name']) && (empty($_POST['image_name']) && ($_GET['id']))){
    $file_size =$_FILES['files']['size'];
  $filedet=$_FILES['files']['tmp_name'];
  $loc="../../images/employee/".$file;
  move_uploaded_file($filedet,$loc);
  $id=$_GET['id'];

  $sql=mysqli_query($conn,"update `service` SET `name`='$empname',`desrciption`='$empdesignation',`image`='$file' WHERE id='$id'");
  
  if($sql==1){
     header("location:serviceslist.php");
  }else{
      mysqli_error($conn);
  }

}
else {
    $errors= array();
    $file_size =$_FILES['files']['size'];
    $filedet=$_FILES['files']['tmp_name'];
    $loc="../../images/employee/".$file;
    move_uploaded_file($filedet,$loc);

  $sql=mysqli_query($conn,"insert into service (name,desrciption,image) values('$empname','$empdesignation','$file')");
  if($sql==1){
     header("location:serviceslist.php");
  }else{
      mysqli_error($conn);
  }

}
}

if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from service where id='$id'");
  if($sql=1){
    header("location:serviceslist.php");
  }
}

$name1='';
$description='';
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sqls = mysqli_query($conn,"SELECT * FROM service WHERE id ='$id'");
    $arr = mysqli_fetch_assoc($sqls);
    $name1=$arr['name'];
    $description=$arr['desrciption'];
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
<div class="container-scroller">

<?php include("topbar.ioc.php") ?>

<?php include("sidebar.ioc.php") ?>

<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Services List</h4>
<form class="form-sample" method="post" enctype="multipart/form-data">
<div class="row">

<div class="col-md-12">
<div class="form-group row">
<label class="col-sm-3 col-form-label"><b>Service Name</b></label>
<div class="col-sm-9">
<input type="text" class="form-control" value="<?php echo $name1 ?>" name="empname" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label"><b>Desrciption</b></label>
<div class="col-sm-9">
<input type="text" class="form-control" name="empdesignation" value="<?php echo $description ?>" required>
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label"><b>Upload Icon</b></label>
<div class="col-sm-9">
<input type="file" class="form-control" name="files" ><br>
<?php if(isset($_GET['id'])){

?>
<img width="200" src="../../images/employee/<?=$arr["image"];?>" />
<input type="hidden" name="image_name" value="<?=$arr["image"];?>" />
<?php } ?>



</div>
</div>
</div>
</div>
<button type="submit" name="empadd" class="btn btn-primary btn-icon-text">
<i class="ti-file btn-icon-prepend"></i>
Submit
</button>
</form>
</div>
</div>
</div>
</div>

<?php
$selectquery="select * from service";
$res = mysqli_query($conn,$selectquery);
if (mysqli_num_rows($res)>0){

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
<th>Service Name</th>
<th>Desrciption</th>
<th>Icon</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
$i=0;
while($row = mysqli_fetch_array($res)) {
?>
<tr class="table">
<td><?php echo $i; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["desrciption"]; ?></td>
<td><img src="../../images/employee/<?php echo $row["image"]; ?>"></td>
<td>
<a class="btn btn-primary btn-rounded btn-icon" href="serviceslist.php?id=<?php echo $row['id']; ?>" title="Edit Blog"><i class="mdi mdi-border-color"></i></a>
<a class="btn btn-danger btn-rounded btn-icon" href="serviceslist.php?delid=<?php echo $row['id']; ?>" onclick="return checkDelete()" class="btn btn-primary btn-rounded btn-icon">
                          <i class="mdi mdi-delete"></i>
                          </a>
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

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f77d4c14ac56ef2","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
