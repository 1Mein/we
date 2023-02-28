<?php
if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
    echo '
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalAddEvent">
        Добавить мероприятие
    </button>


<div class="modal fade" id="exampleModalAddEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Создание</h5>
        </div>
        <div class="modal-body">
        <form action="php/addEvent.php" method="post">
        <div class="row mb-3">
            <label for="inputMainText" class=" col-sm-4 col-form-label">Заголовок</label>
            <div class="col-sm-10">
                <input type="text" class="mainText form-control" id="inputMainText" name="title">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText1" class="col-sm-4 col-form-label">Текст-1</label>
            <div class="col-sm-10">
                <textarea rows=4 class="secondText form-control" id="inputText1" name="text1"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputUrl" class="col-sm-4 col-form-label">Изображение</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputUrl" name="image" value="https://i.postimg.cc/fTkDLCZt/we-logo.jpg">
            </div>
        </div>

        <div class="row mb-3">
            <label for="hrefReg" class="col-sm-4 col-form-label">Ссылка на регистрацию</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="hrefReg" name="link">
            </div>
        </div>

            <div class="row mb-3">
            <label for="inputText2" class="col-sm-4 col-form-label">Текст-2</label>
            <div class="col-sm-10">
                <textarea rows=4 class="secondText form-control" id="inputText2" name="text2"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label for="date" class="col-sm-4 col-form-label">Дата</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="date" name="date">
            </div>
        </div>

        <div class="row mb-3">
            <label for="time" class="col-sm-4 col-form-label">Время</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="time" name="time">
            </div>
        </div>

        <div class="row mb-3">
            <label for="place" class="col-sm-4 col-form-label">Место</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="place" name="place">
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