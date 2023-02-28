<?php
if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
    echo '
    <button type="button" class="btn btn-primary addEmployee" data-bs-toggle="modal" data-bs-target="#exampleModalAddEmployee">
        Добавить работника
    </button>


<div class="modal fade" id="exampleModalAddEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin: 0 auto;">
    
        <div class="modal-content modal-content-3">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Создание</h5>
        </div>
        <div class="modal-body">

        <form action="php/addEmployee.php" method="post">
        <div class="row mb-3">
            <label for="inputText" class="col-sm-4 col-form-label">Текст</label>
            <div class="col-sm-10">
                <textarea rows=4 class="secondText form-control" id="inputText" name="text"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputName" class="col-sm-4 col-form-label">Полное имя</label>
            <div class="col-sm-10">
                <input rows=4 class="secondText form-control" id="inputName" name="fullName">
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputUrl" class="col-sm-4 col-form-label">Изображение</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputUrl" name="image" value="https://fansitemi.ru/wp-content/uploads/2018/04/kak-postavit-fotografiyu-na-imya-abonenta-v-syaomi-redmi.png">
            </div>
        </div>
            
        <br>
            <button type="submit" class="btn btn-primary" id="submitCreate"> Отправить </button>
        </form>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>

        </div>
        </div>
        </div>
    </div>';
}
?>