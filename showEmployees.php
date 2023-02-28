<?php
require_once('connection.php');

$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);
$temp=true;
foreach($result as $row){
    echo '<div class="carousel-item carousel-item-2 ';
    
    if($temp){
        echo 'active';
        $temp=false;
    }
    
    echo ' secondCarousel">
    <div class="carText"><p>
        '.$row["text"].'</p>
    </div>
    <img src="'.$row["image"].'" class="d-block" alt="...">
    
    </div>';
}