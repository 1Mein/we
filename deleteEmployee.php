<?php
require_once('connection.php');

$id=$_POST["deleteEventButton"];

$sql = "DELETE FROM `employees` WHERE (`id` = '$id')";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
header('Location: ../index.php');
exit;