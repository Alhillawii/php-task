<?php
$serevername="localhost";
$username = "root";
$password = "";
$database="taskmanagement";

$conn = new mysqli($serevername,$username,$password,$database);

if($conn->connect_error){
    die("connection failed :".$conn->connect_error);
}
?>