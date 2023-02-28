<?php
if(isset($_SESSION['logged']) && $_SESSION['logged']){
    echo '
    <form action="php/exitAccount.php">
        <button type="submit" class="btn btn-primary" id="Exit">Выйти</button>
    </form>';
}
else{
    echo '<p>
    <a class="btn loginAccount" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Войти в аккаунт
    </a>
    <div id="exitDiv">

    </div>
    </p>
    <div class="collapse" id="collapseExample">
    <div class="card card-body">

    <form action="php/checkAccount.php" method="post">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Логин</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" name="login">
        </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Пароль</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="password">
        </div>
        </div>

        <button type="submit" class="btn btn-primary" id="Login">Войти</button>
        </form>
    </div>
    </div>';
}

?>