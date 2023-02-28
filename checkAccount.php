<?php
session_start();
require_once('connection.php');

$login=$_POST["login"];
$password=$_POST["password"];

$sql = "SELECT * FROM accounts WHERE `login` = '$login' AND `password` = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Login success
    $result=mysqli_fetch_assoc($result);
    $_SESSION['login'] = $login;
    $_SESSION['id'] = $result["id"];
    $_SESSION['logged'] = true;
} else {
    // Login failed
    $_SESSION['logged'] = false;
}

mysqli_close($conn);

header('Location: ../index.php');
exit;