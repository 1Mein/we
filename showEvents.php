<?php
require_once('connection.php');

$events="";
$modals='
<div class="modals">';
$sql = "SELECT * FROM events1 WHERE actual=1 ORDER BY `id` DESC"; // ORDER BY DESC
$result = mysqli_query($conn, $sql);
$i=0;
foreach($result as $row){
    $events=$events.'
    <div class="card col-4" style="width: 18rem;">
        <img src="'.$row["image"].'" class="card-img-top" alt="...">
        <div class="card-body card-body-flex">
            <div><h5 class="card-title">'.$row["title"].'</h5>
            <p class="card-text">'.$row["text1"].'</p>
            <div class="buttons-card"></div>
            
        </div>
        
            
        <div id="buttonsCard"><div class="addNremove">
        <button type="button" class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal'.$i.'">
            Подробнее
        </button>';

    if(isset($_SESSION["logged"]) && $_SESSION["logged"]){
        $events=$events.'
        <form action="php/deleteEvent.php" method="post">
            <button type="submit" class="btn btn-danger" name="deleteEventButton" value="'.$row["id"].'">
                Удалить
            </button>
        </form>
        </div>
        <form action="php/offEvent.php" method="post">
                <div class="btnDanger">
                <button type="submit" class="btn btn-danger" name="offEventButton" value="'.$row["id"].'">
                    Добавить в архив
                </button>
                </div>
            </form>
            </div></div>
    </div>';
    }
    else{
        $events=$events.'</div></div></div></div>';
    }
        
    $modals=$modals.'
    <div class="modal fade" id="exampleModal'.$i.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Подробнее о мероприятии
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-2">
                    <span class="modal-text"><b>'.$row["title"].'</b></span>
                    <img src="'.$row["image"].'" alt="">
                    <span class="aboutEvent">'.$row["text2"].'</span>
                </div>
                <div class="event-info">
                    <div class="event-details">
                        <h5 class="item-title">When?</h5>
                        <p class="item-text" id="date">'.$row["date"].'</p>
                    </div>
                    <div class="event-details">
                        <h5 class="item-title">What time?</h5>
                        <p class="item-text">'.$row["time"].'</p>
                    </div>
                    <div class="event-details">
                        <h5 class="item-title">Where?</h5>
                        <p class="item-text">'.$row["place"].'</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="location.href='.'\''.$row["link"].'\''.'"> Записаться </button>
                </div>
            </div>
        </div>
    </div>';
    $i++;
}

echo $events."</div>".$modals."</div>";