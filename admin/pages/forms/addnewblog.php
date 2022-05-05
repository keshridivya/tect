<?php 
session_start();
include("../../include/configure.php");

if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $check=$_POST['check'];
    $status = $_POST['status'] ;
    $checkbox1 = $_POST['chkl'] ;
    $image=$_FILES['image']['name'];
    $instructor=$_POST['instructor'];
    foreach($checkbox1 as $chk1){$chk .= $chk1;}
    $instructor_string= implode(',',$_POST['instructor']);

    $filedet=$_FILES['image']['tmp_name'];
    $loc="../../images/blog/".$file;
    move_uploaded_file($filedet,$loc);
    
    $sql="INSERT INTO `blog`(`name`, `description`, `feature`, `status`, `categories`, `image`, `tag`) VALUES ('$name','$description','$check','$status','$chk','$image','$instructor_string')";
    $qry=mysqli_query($conn,$sql);
    if($qry){
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
          <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
          <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<link rel="stylesheet" href="../../vendors/select2/select2.min.css">
<link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">


<link rel="stylesheet" href="../../css/vertical-layout-light/style.css">

<link rel="shortcut icon" href="../../images/favicon.png" />
<style>
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

    </style>
</head>
<body>
<div class="container-scroller">

<?php include("topbar.ioc.php"); ?>

<?php include("sidebar.ioc.php"); ?>

<div class="main-panel">
<div class="content-wrapper">
<h3>Add New Blog</h3>
<div class="row">
<div class="col-md-9 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">Details</h4>
<form class="forms-sample" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="examplenme">Name</label>
<input type="text" class="form-control" name="name" id="examplename1" required>
</div>
<div class="form-group">
<label for="exampledesp">Description</label>
<textarea class="form-control summernote" name="description" id="summernote" required></textarea>
</div>
<div class="form-group">
<div class="custom-control custom-switch">
 <input type="checkbox" class="custom-control-input" value="yes" name="check" id="customSwitch1" required>
<label class="custom-control-label" for="customSwitch1"><b>is featured?</b></label>
</div>
</div>
<!--<div class="form-group">
<label>Content</label>
</div>
<button type="button" class="btn btn-primary me-2">Show/Hide Editor</button>
<button type="button" class="btn btn-primary me-2">Add Media</button>
<button type="button" class="btn btn-primary me-2">shortcode</button>-->
</div>
</div>
</div>
<div class="col-lg-3">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Publish</h4>
<button type="submit" name="sub" class="btn btn-primary btn-icon-text">
<i class="ti-file btn-icon-prepend"></i>
Save
</button>
<a type="button" href="allblog.php" class="btn btn-info btn-icon-text">
Blog List
<i class="mdi mdi-check-circle"></i>
</a>
</div>
</div>
</div>
<br>
<div class="col-md-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Status</h4>

<select class="form-control form-control-sm" id="exampleFormControlSelect3" name="status" required>
<option>Published</option>
<option>Not Published</option>
</select>

</div>
</div>
</div>
<br>
<div class="col-md-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Categories</h4>
<div class="form-check form-check-primary" required>
    <div required>
<label class="form-check-label">
<input type="checkbox" name="chkl[ ]" value="e-commerce" class="form-check-input" >
E-commerce
</label>
</div>
<div class="form-check form-check-success">
<label class="form-check-label">
<input type="checkbox" name="chkl[ ]" value="fashion" class="form-check-input" >
Fashion
</label>
</div>
<div class="form-check form-check-info">
<label class="form-check-label">
<input type="checkbox" name="chkl[ ]" value="electronic" class="form-check-input" >
Electronic
</label>
</div>
<div class="form-check form-check-danger">
<label class="form-check-label">
<input type="checkbox" name="chkl[ ]" value="commercial" class="form-check-input">
Commercial
</label>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="col-md-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Image</h4>
<span>
    <input id="uploadFile" placeholder="File Name here" disabled="disabled" required/>
    <div class="fileUpload btn btn-primary">
    <span>Upload</span>
    <input id="uploadBtn" type="file" name="image" class="upload" />
    </div>
</span>

</div>
</div>
</div>
<br>
<div class="col-md-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Tags</h4>
<select class="js-example-basic-multiple form-control w-100" name="instructor[]" placeholder="write some tags" multiple="multiple">
                      <option style="color:white" value="Website Designing ">Website Designing </option>
                      <option value="Ecommerce Website ">Ecommerce Website </option>
                      <option value="Software Development ">Software Development </option>
                      <option value="Mobile App Development ">Mobile App Development </option>
                      <option value="Digital Marketing ">Digital Marketing </option>
                      <option value="Graphics Designing ">Graphics Designing  </option>
                      <option value="Hardware Networking ">Hardware Networking </option>
                      <option value="CCTV Camera ">CCTV Camera </option>
                      <option value="IT Consulting ">IT Consulting </option>
                    </select>

</div>
</div>
</div>
</div>
</div>
</div>
</form>

<?php include("footer.ioc.php"); ?>
</div>

</div>

</div>
<script>document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};</script>
<script src="../../vendors/js/vendor.bundle.base.js"></script>

<script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="../../vendors/select2/select2.min.js"></script>
<script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script>
   $(document).ready(function() { $('#summernote').summernote({ placeholder: 'Hello stand alone ui', tabsize: 4, height: 200 }); });
          </script>
          <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>
<script src="../../js/off-canvas.js"></script>

<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/template.js"></script>
<script src="../../js/settings.js"></script>
<script src="../../js/todolist.js"></script>

<script src="../../js/file-upload.js"></script>
<script src="../../js/typeahead.js"></script>
<script src="../../js/select2.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f7a4c3b5a8531e7","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
