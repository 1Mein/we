<?php
session_start();
require_once('connection.php');

$image=$_POST["image"];
$text=$_POST["text"];
$fullName=$_POST["fullName"];
$text=mysqli_real_escape_string($conn, $text);

$sql = "INSERT INTO `employees`(`image`, `text`,`full_name`,`account_id`) 
    VALUES('".$image."','".$text."','".$fullName."',".$_SESSION['id'].")";

if(!mysqli_query($conn, $sql)){
    die("error");
}

mysqli_close($conn);
header("Location: ../index.php");
exit;