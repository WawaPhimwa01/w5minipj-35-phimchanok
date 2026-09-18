<?php

$crystal_id = $_POST["crystal_id"];
$crystal_name = $_POST["crystal_name"];
$crystal_color = $_POST["crystal_color"];
$crystal_size = $_POST["crystal_size"];
$crystal_img = $_POST["crystal_img"];
$crystal_price = $_POST["crystal_price"];
$type_id = $_POST["type_id"];

include 'connect.php';

$sql = "INSERT INTO `crystal`
(`crystal_id`, `crystal_name`, `crystal_color`, `crystal_size`, `crystal_img`, `crystal_price`, `type_id`) 
VALUES 
('$crystal_id','$crystal_name','$crystal_color','$crystal_size','$crystal_img','$crystal_price','$type_id')";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "ERROR";
}else{
    header("location: ../index.php");
    exit;
}