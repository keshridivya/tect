<?php include("../../include/configure.php");

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

<footer class="footer">
<div class="d-sm-flex justify-content-center justify-content-sm-between">
<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
</div>
</footer>

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
