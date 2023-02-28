<?php
    $id=$_POST["deleteEventButton"];

    require_once('connection.php');

    $sql = "DELETE FROM `events1` WHERE (`id` = '$id')";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    header('Location: ../index.php');
    exit;
?>