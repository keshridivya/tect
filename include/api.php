<?php 
include("configure.php");
$msg='';
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $service=$_POST['service'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn,"INSERT INTO `lead_enquiry`(`name`, `email`, `phone`, `service`, `message`) VALUES ('$name','$email','$phone','$service','$message')");
    if($sql=1){
        echo "<script>alert('Thank u')</script>";
        header("location:../index.php");
    }else{
        echo mysqli_error($conn);
    }
}

if(isset($_POST['sub1'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql=mysqli_query($conn,"INSERT INTO `lead_enquiry`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");
    if($sql=1){
        header("location:../index.php");
    }else{
        echo mysqli_error($conn);
    }
}



?>