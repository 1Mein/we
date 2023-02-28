<?php
session_start();
require_once('connection.php');

$title=$_POST["title"];
$text1=$_POST["text1"];
$image=$_POST["image"];
$link=$_POST["link"];
$text2=$_POST["text2"];
$date=$_POST["date"];
$time=$_POST["time"];
$place=$_POST["place"];
$text2=mysqli_real_escape_string($conn, $text2);
$text1=mysqli_real_escape_string($conn, $text1);
$title=mysqli_real_escape_string($conn, $title);
$place=mysqli_real_escape_string($conn, $place);


$sql = "INSERT INTO `events1`(`title`, `text1`, `image`, `link`, `text2`, `date`, `time`, `place`, `account_id`) 
        VALUES('".$title."','".$text1."','".$image."','".$link."','".$text2."','".$date."','".$time."','".$place."',".$_SESSION['id'].")";
//$result = mysqli_query($conn, $sql);

if(!mysqli_query($conn, $sql)){
    die("error");
}

mysqli_close($conn);
header("Location: ../index.php");
exit;