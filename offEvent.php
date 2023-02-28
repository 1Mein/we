<?php
    $id=$_POST["offEventButton"];

    require_once('connection.php');

    $sql = "UPDATE `events1` SET `actual`=0 WHERE (`id` = '$id');"; // ORDER BY DESC
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    header('Location: ../index.php');
    exit;
?>