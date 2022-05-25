<?php
session_start();    
include("../../include/configure.php");
$id=$_GET['id'];
if(isset($_POST['but_upload'])){
    $maxsize = 5242880; // 5MB
    $title=$_POST['title'];
    $name = $_FILES['file']['name'];
    if(empty(($_FILES['file']['tmp_name'])) && ($_POST['image_name']) && ($_GET['id'])){
        $id=$_GET['id'];
        $ba_image = $_POST['image_name'];
        
        $sql=mysqli_query($conn,"update `video` SET `title`='$title',`location`='$ba_image' WHERE id='$id'");
            if($sql=1){
                header("location:videos.php");
            }else{
                mysqli_error($conn);
            }
        
        }
        
    else{
        if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
            $target_dir = "../../videos/";
            $target_file = $target_dir . $_FILES["file"]["name"];
            $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

            if( in_array($extension,$extensions_arr) ){
            if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                $_SESSION['message'] = "File too large. File must be less than 5MB.";
            }else{
                
                if(!empty($_FILES['file']['tmp_name']) && ($_POST['image_name']) || !empty($_FILES['file']['tmp_name']) && (empty($_POST['image_name']) && ($_GET['id']))){
                  $id=$_GET['id'];
                
                  $sql=mysqli_query($conn,"update `video` SET `title`='$title',`location`='$name' WHERE id='$id'");                
                }
                else if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                    $query = "INSERT INTO video(title,location) VALUES('$title','$name')";
                    mysqli_query($conn,$query);
                }
            }
            }else{
            $_SESSION['message'] = "Invalid file extension.";
            }
        }else{
            $_SESSION['message'] = "Please select a file.";
        }
        header('location:videos.php');
        exit;
    }
 } 


 if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from video where id='$id'");
    if($sql=1){
      header("location:videos.php");
    }
  }
  $name1='';
$location='';
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = mysqli_query($conn,"select * from video WHERE id ='$id'");
    $arr = mysqli_fetch_assoc($sql);
    $name1=$arr['title'];
    $location=$arr['location'];
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
<h4 class="card-title">video</h4>
<?php 
    if(isset($_SESSION['message'])){
       echo $_SESSION['message'];
       unset($_SESSION['message']);
    }
    ?>
<form class="form-sample" method="post" enctype='multipart/form-data'>
<div class="row">
<div class="col-md-12">
<div class="form-group row">
<label class="col-sm-3 col-form-label"><b>Title</b></label>
<div class="col-sm-9">
<input type="text" class="form-control" value="<?php echo $name1; ?>" name="title">
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-group row">
<label class="col-sm-3 col-form-label"><b>Photo</b></label>
<div class="col-sm-9">
<input type="file" class="form-control" name="file"><br>
<?php if(isset($_GET['id'])){

?><video src="../../videos/ <?=$arr["location"];?>" controls width='150px' height='100px' ></video> 
<input type="hidden" name="image_name" value="<?=$arr["location"];?>" />
<?php } ?>
</div>
</div>
</div>
</div>
<button type="submit" name="but_upload" class="btn btn-primary btn-icon-text">
<i class="ti-file btn-icon-prepend"></i>
Submit
</button>
</form>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 stretch-card">
<div class="card">
<div class="card-body">
<div class="table-responsive pt-3">
<table class="table table-bordered">
<thead>
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>Photo</th>
<th>From Date&time</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php $sql=mysqli_query($conn,"select * from video");
    $count=1;
    while($arr=mysqli_fetch_array($sql)){ ?>
<tr class="table">
<td><?php echo $count; ?></td>
<td><?php echo $arr['title']; ?></td>
<td>  <video src="../../videos/ <?php echo $arr['title']; ?>" controls width='100px' height='100px' ></video>    </td>
<td><?php echo $arr['create_date']; ?></td>
<td>
<a class="btn btn-danger btn-rounded btn-icon" href="videos.php?delid=<?php echo $arr['id']; ?>" onclick="return checkDelete()" class="btn btn-primary btn-rounded btn-icon">
                          <i class="mdi mdi-delete"></i>
                          </a>
<a class="btn btn-primary btn-rounded btn-icon" href="videos.php?id=<?php echo $arr['id']; ?>" title="Edit Blog"><i class="mdi mdi-border-color"></i></a>
</td>

</tr>
<?php
$count++;
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

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f79d72d1f7084e6","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
