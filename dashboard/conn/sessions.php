<?php
$admin = admin();
$moz = moazfen();
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['name'];
$user_email = $_SESSION['email'];
$user_password = $_SESSION['password'];
$num = 1;
if($admin == false and $moz == false){
   header("location:login.php");
}
