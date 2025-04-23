<?php 
include 'int.php';
$admin = admin();
$moazfen = moazfen();

if($admin == false and $moazfen == false){
   header("location:login.php");
//    die('Unable to connect to open this page please go to <a href="login.php">login</a>');
}
?>  