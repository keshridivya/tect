<?php 
include("../../include/configure.php");
if(isset($_POST['sub'])){
    $description=$_POST['description'];
    $salary=$_POST['salary'];
    $title = $_POST['title'] ;
    $location = $_POST['location'] ;
    $checkbox1 = $_POST['chkl'] ;
    $course = $_POST['course'] ;
    $language = $_POST['language'] ;
    $time = $_POST['time'] ;
    $image=$_FILES['file']['name'];
    foreach($checkbox1 as $chk1){$chk .= $chk1.",";}
    foreach($course as $chkl1){$chkl .= $chkl1.",";}
    foreach($language as $chk3){$chk3 .= $chk3.",";}

    $filedet=$_FILES['file']['tmp_name'];
    $loc="../../images/career_logo/".$image;
    move_uploaded_file($filedet,$loc);
    
    $sql="INSERT INTO `career`(`logo`,`title`,`location`, `description`, `job_type`, `salary`, `education`, `lang`, `time`) VALUES ('$image','$title','$location','$description','$chk','$salary','$chkl','$chk3','$time')";
    $qry=mysqli_query($conn,$sql);
    if($qry){
        header("location:career.php");
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
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">form</h4>
<form class="form-sample" method="post" enctype="multipart/form-data">
<div class="row">
<div class="form-group row">
<label class="col-sm-3 col-form-label">Logo</label>
<div class="col-sm-9">
<input type="file" class="form-control" name="file">
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Location</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="location">
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Job Title</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="title">
</div>
</div>
</div>
<div class="row">
<div class="form-group row">
<label class="col-sm-3 col-form-label">Job Description</label>
<div class="col-sm-9">
<textarea class="form-control" rows="3" name="description"></textarea>
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Job Type</label>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="full time" name="chkl[ ]" unchecked>
Full time
</label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="part time" name="chkl[ ]" unchecked>
Part time
 </label>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Salary</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="salary">
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Education</label>
<div class="col-sm-1">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="ssc" name="course[ ]" unchecked>
SSC
</label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="hsc" name="course[ ]" unchecked>
HSC
</label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="gradute" name="course[ ]" unchecked>
Graduate
</label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="under graduate" name="course[ ]" unchecked>
Under Graduate
</label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="bsc.it/cs" name="course[ ]" unchecked>
BSC.IT/CS
</label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="bca" name="course[ ]" unchecked>
BCA
</label>
</div>
</div>
<div class="col-sm-3"></div>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="b.com/bms/bbf" name="course[ ]" unchecked>
B.COM/BMS/BBF
</label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="msc.it/cs" name="course[ ]" unchecked>
MSC.IT/CS
</label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="m.com" name="course[ ]" unchecked>
M.COM
</label>
</div>
</div>
</div>
<div class="form-group row">
 <label class="col-sm-3 col-form-label">Programming Language</label>
<div class="col-sm-1">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="html" name="language[ ]" unchecked>
HTML
</label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="c" name="language[ ]" unchecked>
C
</label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="c++" name="language[ ]" unchecked>
C++
</label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="phython" name="language[ ]" unchecked>
PYTHON
</label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="java" name="language[ ]" unchecked>
JAVA
</label>
</div>
</div>
<div class="col-sm-2">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="adv.java" name="language[ ]" unchecked>
Adv.JAVA
</label>
</div>
</div>
<div class="col-sm-1">
<div class="form-check form-check-primary">
<label class="form-check-label">
<input type="checkbox" class="form-check-input" value="sql" name="language[ ]" unchecked>
Sql
</label>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Timing</label>
<div class="col-sm-9">
<input type="time" name="time" class="form-control">
</div>
</div>
</div>
<button type="submit" name="sub" class="btn btn-primary btn-icon-text">
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
<th>From date&time</th>
<th>To date&time</th>
<th>Photo</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr class="table">
<td>1</td>
<td>Photoshop</td>
<td>$ 77.99</td>
<td>May 15, 2015</td>
<td>Photoshop</td>
<td>
<button type="button" class="btn btn-primary btn-rounded btn-icon">
<i class="mdi mdi-delete"></i></button>
<button type="button" class="btn btn-primary btn-rounded btn-icon">
<i class="mdi mdi-border-color"></i>
</button>
</td>
</tr>
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

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f7ff0693b522e2f","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
