<?php
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
    $editime=$_POST['editime'];
    foreach($checkbox1 as $chk1){$chk .= $chk1.",";}
    foreach($course as $chkl1){$chkl .= $chkl1.",";}
    foreach($language as $chk3){$chk3 .= $chk3.",";}
    $filedet=$_FILES['file']['tmp_name'];

    
    if(empty(($filedet)) && ($_POST['logo']) && ($_GET['eid'])){
        $image2=$_POST['logo'];
        $qry=mysqli_query($conn,"update `career` SET `title`='$title',`location`='$location',`description`='$description', `job_type`='$chk',`salary`='$salary',`education`='$chkl',`lang`='$chk3',`time`='$editime',`logo`='$image2' WHERE id='$_GET[eid]'");
    }
    else if(!empty($filedet) && ($_POST['logo']) || !empty($filedet) && (empty($_POST['logo']) && ($_GET['eid']))){
      $loc="../../images/career_logo/".$image;
      move_uploaded_file($filedet,$loc);
      $qry=mysqli_query($conn,"update `career` SET `title`='$title',`location`='$location',`description`='$description', `job_type`='$chk',`salary`='$salary',`education`='$chkl',`lang`='$chk3',`time`='$editime',`logo`='$image' WHERE id='$_GET[eid]'");
    }else{
      $loc="../../images/career_logo/".$image;
      move_uploaded_file($filedet,$loc);
    $sql="INSERT INTO `career`(`logo`,`title`,`location`, `description`, `job_type`, `salary`, `education`, `lang`, `time`) VALUES ('$image','$title','$location','$description','$chk','$salary','$chkl','$chk3','$time')";
    $qry=mysqli_query($conn,$sql);}

    if($qry){
        header("location:career.php");
    }
    }



if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from career where id='$id'");
    if($sql=1){
      header("location:career.php");
    }
  }

  
  $logo="";
  $title="";
  $location="";
  $description="";
  $job_type="";
  $salary="";
  $education="";
  $lang="";
  $time="";
  
  if(isset($_GET['eid'])){
    $sql=mysqli_query($conn,"select * from career where id='$_GET[eid]'");
    $row=mysqli_fetch_array($sql);
    $logo=$row['logo'];
    $title=$row['title'];
    $location=$row['location'];
    $description=$row['description'];
    $job_type=explode(",",$row['job_type']);
    $salary=$row['salary'];
    $education=explode(",",$row['education']);
    $lang=explode(",",$row['lang']);
    $time=$row['time'];
    
  }

?>