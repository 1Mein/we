<?php
$conn = mysqli_connect("localhost", "jasom", "2156513", "bdWE");
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}