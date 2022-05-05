<?php 
session_start();
include("../../include/configure.php"); 
include("list.php");
if(isset($_POST['empadd'])){
    $file=$_FILES['files']['name'];    
    $feature=$_POST['feature'];
    $title=$_POST['title'];
    $short_des=$_POST['short_des'];
    $list1=$_POST['list1'];
    $list2=$_POST['list2'];
    $list3=$_POST['list3'];
    $list4=$_POST['list4'];
    $long_des=$_POST['long_des'];
    $header=$_POST['header'];
    $meta_short=$_POST['meta_short'];
    $point1=$_POST['point1'];
    $point2=$_POST['point2'];
    $point3=$_POST['point3'];
    $point4=$_POST['point4'];
    $file2=$_FILES['files2']['name']; 
    $meta_lis=$_POST['meta_lis'];
    $meta_long=$_POST['meta_long'];
    $id=$_POST['id'];

  
  if(empty(($_FILES['files']['tmp_name'])) && empty(($_FILES['files2']['tmp_name'])) && ($_POST['image_name']) && ($_POST['image_name2']) && ($_POST['id'])){
      $image1 = $_POST['image_name'];
      $image2 = $_POST['image_name2'];
      $id=$_POST['id'];
      $sql=mysqli_query($conn,"UPDATE `servicelist` SET `core_feature`='$feature',`title`='$title',`short_description`='$short_des',`up_list_1`='$list1',`up_list_2`='$list2',`up_list_3`='$list3',`up_list_4`='$list4',`long_desc`='$long_des',`image1`='$image1 ',`image2`='$image2',`meta_title`='$header',`meta_short`='$meta_short',`point`='$point1',`point2`='$point2',`point3`='$point3',`point4`='$point4',`meta_lis`='$meta_lis',`meta_long`='$meta_long',`meta_long2`=' $meta_long' WHERE id='$id'");
          if($sql=1){
              header("location:service.php");
          }else{
              mysqli_error($conn);
          }
      
      }
     
      
  else if(!empty($_FILES['files']['tmp_name']) && ($_POST['image_name']) || !empty($_FILES['files']['tmp_name']) && (empty($_POST['image_name']) && ($_POST['id']))){
      $image2 = $_POST['image_name2'];
      $file_size =$_FILES['files']['size'];
    $filedet=$_FILES['files']['tmp_name'];
    $loc="../../images/service/".$file;
    move_uploaded_file($filedet,$loc);
    $id=$_POST['id'];
  
    $sql=mysqli_query($conn,"UPDATE `servicelist` SET `core_feature`='$feature',`title`='$title',`short_description`='$short_des',`up_list_1`='$list1',`up_list_2`='$list2',`up_list_3`='$list3',`up_list_4`='$list4',`long_desc`='$long_des',`image1`='$file',`image2`='$image2',`meta_title`='$header',`meta_short`='$meta_short',`point`='$point1',`point2`='$point2',`point3`='$point3',`point4`='$point4',`meta_lis`='$meta_lis',`meta_long`='$meta_long',`meta_long2`=' $meta_long' WHERE id='$id'");
    
    if($sql==1){
       header("location:service.php");
    }else{
        mysqli_error($conn);
    }
  }
  else if(!empty($_FILES['files2']['tmp_name']) && ($_POST['image_name']) || !empty($_FILES['files2']['tmp_name']) && (empty($_POST['image_name']) && ($_POST['id']))){
       $image1 = $_POST['image_name'];
      $file_size =$_FILES['files2']['size'];
    $filedet=$_FILES['files2']['tmp_name'];
    $loc="../../images/service/".$file2;
    move_uploaded_file($filedet,$loc);
   $id=$_POST['id'];
  
    $sql=mysqli_query($conn,"UPDATE `servicelist` SET `core_feature`='$feature',`title`='$title',`short_description`='$short_des',`up_list_1`='$list1',`up_list_2`='$list2',`up_list_3`='$list3',`up_list_4`='$list4',`long_desc`='$long_des',`image1`='$image1',`image2`='$file2',`meta_title`='$header',`meta_short`='$meta_short',`point`='$point1',`point2`='$point2',`point3`='$point3',`point4`='$point4',`meta_lis`='$meta_lis',`meta_long`='$meta_long',`meta_long2`=' $meta_long' WHERE id='$id'");
    
    if($sql==1){
       header("location:service.php");
    }else{
        mysqli_error($conn);
    }
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
<div class="container-scroller">

<?php include("topbar.ioc.php") ?>

<?php include("sidebar.ioc.php") ?>
<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 stretch-card">
<div class="card">
<div class="card-body">
<div class="row">


<form class="form-sample" method="post" enctype="multipart/form-data">
<div class="form-group row">
<label class="col-sm-3 col-form-label"><b>Service page List</b></label>
<div class="col-sm-9">
<select class="form-control form-control-sm" id="exampleFormControlSelect3" name="selectlist">
<option>Website Designing</option>
<option>Ecommerce website</option>
<option>Software Development</option>
<option>Mobile App Development</option>
<option>Digital Marketing</option>
<option>Graphic Designing</option>
<option>Hardware Networking</option>
<option>CCTV camera</option>
<option>IT Consulting</option>
</select>
</div>
</div>
<button type="submit" name="submit"class="btn btn-primary btn-icon-text">
<i class="ti-file btn-icon-prepend"></i>
Submit
</button>
</form>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="row">
<div class="col-lg-12 stretch-card">
<div class="card">
<div class="card-body">
<div class="row">
<div class="label" align="center"><b><?php echo $service_list ?></b></div>
<form class="forms-sample" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="examplecore">Core Features</label>
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="text" name="feature" value="<?php echo $core_feature ?>" class="form-control">
</div>
<div class="form-group">
<label for="example1">Title</label>
<textarea class="form-control" name="title" value=""  rows="3"><?php echo $title ?></textarea>
</div>
<div class="form-group">
<label for="example1">Description</label>
<textarea class="form-control" name="short_des"  rows="3"><?php echo $short_description ?></textarea>
</div>
<div class="form-group">
<label for="examplepoints">Point 1</label>
<textarea class="form-control" name="list1" value=""  rows="3"><?php echo $up_list_1 ?></textarea>
</div>
<div class="form-group">
<label for="examplepoints">Point 2</label>
<textarea class="form-control"  name="list2" value="" rows="3"><?php echo $up_list_2 ?></textarea>
</div>
<div class="form-group">
<label for="examplepoints">Point 3</label>
<textarea class="form-control"  name="list3" value="" rows="3"><?php echo $up_list_3 ?></textarea>
</div>
<div class="form-group">
<label for="examplepoints">Point 4</label>
<textarea class="form-control" value=""  name="list4" rows="3"><?php echo $up_list_4 ?></textarea>
</div>
<div class="form-group">
<label for="example1">Description</label>
<textarea class="form-control" value=""  name="long_des" rows="3"><?php echo $long_desc ?></textarea>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Image 1</label>
<div class="col-sm-9">
<?php if(isset($_POST['submit'])){

?>
<img width="200" src="../../images/service/<?php echo $image1;?>" />
<input type="hidden" name="image_name" value="<?php echo $image1;?>" />
<?php } ?>
<input type="file" name="files" class="form-control">
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Image 2</label>
<div class="col-sm-9">
<?php if(isset($_POST['submit'])){
?>
<img width="200" src="../../images/service/<?php echo $image2;?>" />
<input type="hidden" name="image_name2" value="<?php echo $image2;?>" />
<?php } ?>
<input type="file" name="files2" value=""  class="form-control">
</div>
</div>
<div class="form-group">
<label for="exampleheader">Header</label>
<input type="text"  name="header" value="<?php echo $meta_title ?>" class="form-control">
</div>
<div class="form-group">
<label for="example12">Description</label>
<textarea class="form-control" name="meta_short" rows="3"><?php echo $meta_short ?></textarea>
</div>
<div class="form-group">
    <label for="examplepoints">Point 1</label>
    <textarea class="form-control" name="point1" rows="3"><?php echo $point ?></textarea>
    </div>
    <div class="form-group">
    <label for="examplepoints">Point 2</label>
    <textarea class="form-control" name="point2" rows="3"><?php echo $point2 ?></textarea>
    </div>
    <div class="form-group">
    <label for="examplepoints">Point 3</label>
    <textarea class="form-control" name="point3" rows="3"><?php echo $point3 ?></textarea>
    </div>
    <div class="form-group">
    <label for="examplepoints">Point 4</label>
    <textarea class="form-control" name="point4" rows="3"><?php echo $point4 ?></textarea>
    </div>
<div class="form-group">
<label for="example13">Description</label>
<textarea class="form-control" name="meta_lis" rows="3"><?php echo $meta_lis ?></textarea>
</div>
<div class="form-group">
<label for="content">Content</label>
<textarea class="form-control" name="meta_long" rows="3"><?php echo $meta_long ?></textarea>
</div>
<button type="submit" name="empadd" class="btn btn-primary me-2">UPDATE</button>
</form>
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

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f7ff07a7a332e2f","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
