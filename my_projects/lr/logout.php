<?php
session_start();
if(isset ($_SESSION['user_name'])){
 unset($_SESSION['user_name']);
header("location:\lr\start.php");
 }else{
 header("location:\lr\start.php");
 }
 
?>