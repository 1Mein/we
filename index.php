<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/script.js" defer></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normilize.css">
  <link rel="stylesheet" href="css/reset.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/we-logo.jpg" type="image/png">
  <title>We - Главная</title>
</head>
<body data-bs-spy="scroll" data-bs-target="#navigation">
  <div class="container-fluid">
    <nav class="navbar fixed-top" id="navigation">
      <div class="container-fluid brandMg">
        <a class="navbar-brand" href="#"><img src="img/we-logo.jpg" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
            <button type="button" class="btn-close btn-close-2" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
          </div>
          <div class="offcanvas-body" id="navApp">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" id="Main" aria-current="page" href="#">Главная</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#news">Мероприятия</a></li>

              <li class="nav-item"><a class="nav-link" href="#employees"> Наши работники </a></li>

              <li class="nav-item"><a class="nav-link" href="#aboutUs">О нас</a></li>
                <br>
                <br>
              <li id="LoginExitLi">
                <?php
                  include('php/loginExit.php');
                ?>
                </li>
            </ul>
            
          </div>
        </div>
      </div>

    </nav>

    //carousel

    <div id="carouselExampleDark1" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark1" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="black"></div>
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="img/carouselFirst.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>Рост</h5>
            <p>Мы стремимся создать комьюнити в котором будем вместе расти и помогать друг другу</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/carouselSecond.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption  d-md-block">
            <h5>Атмосфера</h5>
            <p>В нашей команде царит инженерная, дружная атмосфера</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/carouselThird.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block">
            <h5>Активность</h5>
            <p>Мы являемся организаторами многих масштабных мероприятий, проходивших в SDU</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark1"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark1"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
      </button>
    </div>
      

    <div class="container news row" id="news">
      <span> Мероприятия </span>


      <?php
        include('php/showEvents.php');
      ?>

      <!-- <div class="card col-4" style="width: 18rem;">
        <img src="img/IFO.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">IFO(Intro Freshman Math Olympiad)</h5>
          <p class="card-text">Intra Freshman Math Olympiad специально для самых умных парней 1-го курса нашего факультета. </p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal0">
            Подробнее
        </button>
        </div>
      </div>


      <div class="card" style="width: 18rem;">
        <img src="img/WeSpeak.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">We speak</h5>
          <p class="card-text">We speak — Основная задача этого проекта — помочь студентам улучшить свой уровень английского, обсуждая фильмы, книги, и т.д.</p>
          
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Подробнее
            </button>

          
        </div>
      </div>
      
    <div class="card" style="width: 18rem;">
      <img src="img/BookLover.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Book lover</h5>
        <p class="card-text">WE командасы сіздерге 01.02.2023 - 16.02.2023 аралығында болатын “Book lover” жарысына қатысуды ұсынады.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
          Подробнее
      </button>
      </div>
      
    </div>

    <div class="card" style="width: 18rem;">
      <img src="img/BootCamp.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">BootCamp</h5>
        <p class="card-text">Не решили как проведете зимние каникулы? Наша команда вместе с TechnoPark SDU организовывают Bootcamp.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
          Подробнее
      </button>      </div>
    </div>
    


    </div> -->


    <div class="forButton">
      <?php
        include('php/showButtonAddEvent.php');
      ?>
    </div>
  

    <div class="container news employees row" id="employees">
      <span> Наши работники </span>


      <div id="carouselExampleFade" class="carousel carousel-fade carousel2">
        <div class="carousel-inner carousel-inner-2">
          <?php
            include('php/showEmployees.php');
          ?>
          
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon secondBtnCarousel-prev" aria-hidden="true"> < </span>
          <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon secondBtnCarousel-next" aria-hidden="true"> > </span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
    </div>

    <div class="forButton" style="margin-top: 50px;">
      <div style="margin-right:5px">
      <?php
        include('php/showButtonAddEmployee.php');
      ?>
      </div><div style="margin-left:5px">
      <?php
        include('php/deleteButtonEmployee.php');
      ?>
      </div>
    </div>


    
    <div class="container news aboutUs row" id="aboutUs">
      <span> О нас </span>

      <div class="complexInfo">
        <div class="infoAboutUs">

        </div>
        <div><img class="mainInfoImg" src="img/contacts-image.png" alt="" /></div>
    


      </div>

    </div>  

  
  <!-- <div class="modals">
    <div class="modal fade" id="exampleModal0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Подробнее о мероприятии
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span> IFO</span>
            <img src="img/IFO.png" alt="">
            <span class="aboutEvent"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</span>
          </div>
          <div class="event-info">
            <div class="event-details">
              <h5 class="item-title">When?</h5>
              <p class="item-text" id="date">1 December</p>
            </div>
            <div class="event-details">
              <h5 class="item-title">What time?</h5>
              <p class="item-text">7 am</p>
            </div>
            <div class="event-details">
              <h5 class="item-title">Where?</h5>
              <p class="item-text">Red Hall</p>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary"> Записаться </button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">We speak</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">BookLover</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">BootCamp</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

  </div> -->

</body>
</html>