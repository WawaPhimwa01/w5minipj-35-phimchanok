<?php 


error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$id = $_GET["id"];

include 'connect.php';

$sql = "DELETE FROM crystal WHERE crystal_id = '$id'";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "ERROR";
}else{
    header("location: ../crystal_delete.php");
    exit;
}