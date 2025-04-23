<?php 
    include 'conn/auth.php';


$team_id = $_GET['team-id'];
$delete_team= mysqli_query($database , "DELETE from `team` where `id` = $team_id");
header("location:index.php");
