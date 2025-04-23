<?php 
    include 'conn/auth.php';


$product_id = $_GET['project-id'];
$delete_product= mysqli_query($database , "DELETE from `portfolio` where `id` = $product_id");
header("location:index.php");
