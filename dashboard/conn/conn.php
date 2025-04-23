<?php
$database = mysqli_connect("localhost",
"root",
"" , 
"terautsq_siadevelopment");

mysqli_set_charset($database , 'utf8');


if($database == true){
    print "";
}
else{
    print "false";
}

$host = "localhost";
$dbname = "terautsq_siadevelopment";
$user = "root";
$password = "";
$conn = new PDO ("mysql:host=$host;dbname=$dbname;charset=utf8;","$user","$password");
if($conn == true){
    echo"";
}else{
    echo "you have an error bro please rered your code";
}