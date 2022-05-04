<?php
session_start();
include("../../include/configure.php");

if(session_destroy()){
    header("location:login.php");
}
else{
    header("location:../forms/dashboard.php");
    echo"<script>alert('There were some problems with your input.');</script>";
}
?>