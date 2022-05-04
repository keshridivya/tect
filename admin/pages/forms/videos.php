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
  $name='';
$location='';
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = mysqli_query($conn,"select * from video WHERE id ='$id'");
    $arr = mysqli_fetch_assoc($sql);
    $name=$arr['title'];
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

<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
<div class="me-3">
<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
<span class="icon-menu"></span>
</button>
</div>
<div>
<a class="navbar-brand brand-logo" href="../../index.html">
<img src="TM LOGO.jpg" alt="logo" />
</a>
<a class="navbar-brand brand-logo-mini" href="../../index.html">
<img src="TMLOGO.png" alt="logo" />
</a>
</div>
</div>
<div class="navbar-menu-wrapper d-flex align-items-top">
<ul class="navbar-nav">
<li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
<h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">John Doe</span></h1>
<h3 class="welcome-sub-text">Your performance summary this week </h3>
</li>
</ul>
<ul class="navbar-nav ms-auto">
<li class="nav-item dropdown d-none d-lg-block">
<a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
<a class="dropdown-item py-3">
<p class="mb-0 font-weight-medium float-left">Select category</p>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item preview-item">
<div class="preview-item-content flex-grow py-2">
<p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
<p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
</div>
</a>
<a class="dropdown-item preview-item">
<div class="preview-item-content flex-grow py-2">
<p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
<p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
</div>
</a>
<a class="dropdown-item preview-item">
<div class="preview-item-content flex-grow py-2">
<p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
<p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
</div>
</a>
<a class="dropdown-item preview-item">
<div class="preview-item-content flex-grow py-2">
<p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
<p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
</div>
</a>
</div>
</li>
<li class="nav-item d-none d-lg-block">
<div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
<span class="input-group-addon input-group-prepend border-right">
<span class="icon-calendar input-group-text calendar-icon"></span>
</span>
<input type="text" class="form-control">
</div>
</li>
<li class="nav-item">
<form class="search-form" action="#">
<i class="icon-search"></i>
<input type="search" class="form-control" placeholder="Search Here" title="Search here">
</form>
</li>
<li class="nav-item dropdown">
<a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
<i class="icon-mail icon-lg"></i>
</a>
<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
<a class="dropdown-item py-3 border-bottom">
<p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
<span class="badge badge-pill badge-primary float-right">View all</span>
</a>
<a class="dropdown-item preview-item py-3">
<div class="preview-thumbnail">
<i class="mdi mdi-alert m-auto text-primary"></i>
</div>
<div class="preview-item-content">
<h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
<p class="fw-light small-text mb-0"> Just now </p>
</div>
</a>
<a class="dropdown-item preview-item py-3">
<div class="preview-thumbnail">
<i class="mdi mdi-settings m-auto text-primary"></i>
</div>
<div class="preview-item-content">
<h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
<p class="fw-light small-text mb-0"> Private message </p>
</div>
</a>
<a class="dropdown-item preview-item py-3">
<div class="preview-thumbnail">
<i class="mdi mdi-airballoon m-auto text-primary"></i>
</div>
<div class="preview-item-content">
<h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
<p class="fw-light small-text mb-0"> 2 days ago </p>
</div>
</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
<i class="icon-bell"></i>
<span class="count"></span>
</a>
<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
<a class="dropdown-item py-3">
<p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
<span class="badge badge-pill badge-primary float-right">View all</span>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item preview-item">
<div class="preview-thumbnail">
<img src="../../images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
</div>
<div class="preview-item-content flex-grow py-2">
<p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
<p class="fw-light small-text mb-0"> The meeting is cancelled </p>
</div>
</a>
<a class="dropdown-item preview-item">
<div class="preview-thumbnail">
<img src="../../images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
</div>
<div class="preview-item-content flex-grow py-2">
<p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
<p class="fw-light small-text mb-0"> The meeting is cancelled </p>
</div>
</a>
<a class="dropdown-item preview-item">
<div class="preview-thumbnail">
<img src="../../images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
</div>
<div class="preview-item-content flex-grow py-2">
<p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
<p class="fw-light small-text mb-0"> The meeting is cancelled </p>
</div>
</a>
</div>
</li>
<li class="nav-item dropdown d-none d-lg-block user-dropdown">
<a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
<img class="img-xs rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image"> </a>
<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
<div class="dropdown-header text-center">
<img class="img-md rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image">
<p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
<p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
</div>
<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
</div>
</li>
</ul>
<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
<span class="mdi mdi-menu"></span>
</button>
</div>
</nav>

<div class="container-fluid page-body-wrapper">

<div class="theme-setting-wrapper">
<div id="settings-trigger"><i class="ti-settings"></i></div>
<div id="theme-settings" class="settings-panel">
<i class="settings-close ti-close"></i>
<p class="settings-heading">SIDEBAR SKINS</p>
<div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
<div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
<p class="settings-heading mt-2">HEADER SKINS</p>
<div class="color-tiles mx-0 px-4">
<div class="tiles success"></div>
<div class="tiles warning"></div>
<div class="tiles danger"></div>
<div class="tiles info"></div>
<div class="tiles dark"></div>
<div class="tiles default"></div>
</div>
</div>
</div>
<div id="right-sidebar" class="settings-panel">
<i class="settings-close ti-close"></i>
<ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
</li>
<li class="nav-item">
<a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
</li>
</ul>
<div class="tab-content" id="setting-content">
<div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
<div class="add-items d-flex px-3 mb-0">
<form class="form w-100">
<div class="form-group d-flex">
<input type="text" class="form-control todo-list-input" placeholder="Add To-do">
<button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
</div>
</form>
</div>
<div class="list-wrapper px-3">
<ul class="d-flex flex-column-reverse todo-list">
<li>
<div class="form-check">
<label class="form-check-label">
<input class="checkbox" type="checkbox">
Team review meeting at 3.00 PM
</label>
</div>
<i class="remove ti-close"></i>
</li>
<li>
<div class="form-check">
<label class="form-check-label">
<input class="checkbox" type="checkbox">
Prepare for presentation
</label>
</div>
<i class="remove ti-close"></i>
</li>
<li>
<div class="form-check">
<label class="form-check-label">
<input class="checkbox" type="checkbox">
Resolve all the low priority tickets due today
</label>
</div>
<i class="remove ti-close"></i>
</li>
<li class="completed">
<div class="form-check">
<label class="form-check-label">
<input class="checkbox" type="checkbox" checked>
Schedule meeting for next week
</label>
</div>
<i class="remove ti-close"></i>
</li>
<li class="completed">
<div class="form-check">
<label class="form-check-label">
<input class="checkbox" type="checkbox" checked>
Project review
</label>
</div>
<i class="remove ti-close"></i>
</li>
</ul>
</div>
<h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
<div class="events pt-4 px-3">
<div class="wrapper d-flex mb-2">
<i class="ti-control-record text-primary me-2"></i>
<span>Feb 11 2018</span>
</div>
<p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
<p class="text-gray mb-0">The total number of sessions</p>
</div>
<div class="events pt-4 px-3">
<div class="wrapper d-flex mb-2">
<i class="ti-control-record text-primary me-2"></i>
<span>Feb 7 2018</span>
</div>
<p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
<p class="text-gray mb-0 ">Call Sarah Graves</p>
</div>
</div>

<div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
<div class="d-flex align-items-center justify-content-between border-bottom">
<p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
<small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
</div>
<ul class="chat-list">
<li class="list active">
<div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
<div class="info">
<p>Thomas Douglas</p>
<p>Available</p>
</div>
<small class="text-muted my-auto">19 min</small>
</li>
<li class="list">
<div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
<div class="info">
<div class="wrapper d-flex">
<p>Catherine</p>
</div>
<p>Away</p>
</div>
<div class="badge badge-success badge-pill my-auto mx-2">4</div>
<small class="text-muted my-auto">23 min</small>
</li>
<li class="list">
<div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
<div class="info">
<p>Daniel Russell</p>
<p>Available</p>
</div>
<small class="text-muted my-auto">14 min</small>
</li>
<li class="list">
<div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
<div class="info">
<p>James Richardson</p>
<p>Away</p>
</div>
<small class="text-muted my-auto">2 min</small>
</li>
<li class="list">
<div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
<div class="info">
<p>Madeline Kennedy</p>
<p>Available</p>
</div>
<small class="text-muted my-auto">5 min</small>
</li>
<li class="list">
<div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
<div class="info">
<p>Sarah Graves</p>
<p>Available</p>
</div>
<small class="text-muted my-auto">47 min</small>
</li>
</ul>
</div>

</div>
</div>


<nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
<li class="nav-item">
<a class="nav-link" href="index.html">
<i class="mdi mdi-grid-large menu-icon"></i>
<span class="menu-title">Dashboard</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
<i class="menu-icon mdi mdi-floor-plan"></i>
<span class="menu-title">Pages</span>
</a>
<div class="collapse" id="ui-basic">
<ul class="nav flex-column sub-menu">
<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Homepage</a></li>
<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Portfolio</a></li>
<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Services</a></li>
<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Career</a></li>
<li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Teams</a></li>
<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Pricing</a></li>
<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Testimonials</a></li>
</ul>
</div>
</li>
<li class="nav-item nav-category">Enquiry</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
<i class="menu-icon mdi mdi-account-circle-outline"></i>
<span class="menu-title">Contact Us</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
<i class="menu-icon mdi mdi-account-circle-outline"></i>
<span class="menu-title">Lead</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
<i class="menu-icon mdi mdi-account-circle-outline"></i>
<span class="menu-title">Job Enquiry</span>
</a>
</li>
<li class="nav-item nav-category">Setting</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
<i class="menu-icon mdi mdi-card-text-outline"></i>
<span class="menu-title">General</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
<i class="menu-icon mdi mdi-chart-line"></i>
<span class="menu-title">Users</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
<i class="menu-icon mdi mdi-table"></i>
<span class="menu-title">Roles & Permissions</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
<i class="menu-icon mdi mdi-layers-outline"></i>
<span class="menu-title">Activities Log</span>
</a>
</li>
</ul>
</nav>

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
<input type="text" class="form-control" value="<?php echo $name; ?>" name="title">
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

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f79d72d1f7084e6","token":"16b338187db945179976004384e89bdf","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
