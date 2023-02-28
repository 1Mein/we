<?php
require_once('connection.php');
if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
    $i=1;
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);
    echo '
    <button type="button" class="btn btn-danger addEmployee" data-bs-toggle="modal" data-bs-target="#exampleModalDeleteEmployee">
        Удалить работника
    </button>


<div class="modal fade" id="exampleModalDeleteEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin: 0 auto;">
        
        <div class="modal-content modal-content-3">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Удаление</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"
            style="margin-top:10px"></button>
        </div>
        <div class="modal-body" style="width:100%">
        <hr>
        ';
        
        foreach($result as $row){
            echo '
            <form action="php/deleteEmployee.php" method="post">
                <label for="inputUrl" class="col-sm-4 col-form-label" style="width:70%">'.$i++.'. '.$row["full_name"].'</label>
                <button type="submit" class="btn btn-danger" name="deleteEventButton" value="'.$row["id"].'">
                    Удалить
                </button>
                <hr>
            </form>';
        }
        
        echo '

        </div>
        </div>
        </div>
    </div>';
    
    mysqli_close($conn);
}