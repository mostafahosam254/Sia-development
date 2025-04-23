<?php 
include 'conn/int.php';
session_destroy();
header("location: login.php");