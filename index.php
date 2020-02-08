<?php
require 'server.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/logo.css">
    <title>ZET</title>

  </head>
  <body>
    <! -- navbar --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/unitled.png" id="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav  ml-auto" id="textnav">
        <li class="nav-item ">
          <a class="nav-link" href="index.php" id="color"> Главная </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  id="color"> О нас </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  id="color"> Продукты </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#"   id="color"> Контакты </a>
        </li>
        <?php
       
        if(isset($_SESSION['logged_user'])){
          echo "<li class='nav-item' >
          <a class='nav-link ' href='ak.php' id='sen'>Аккаунт</a>
        </li>";
        }else{
          echo "<li class='nav-item' >
          <a class='nav-link ' href='login.php' id='sen'>Вход</a>
        </li>
        <li class='nav-item' >
          <a class='nav-link ' href='reg.php' id='sen'>Регистрация</a>
        </li>";
           
        }


        ?>
        
      </ul>
    </div>
  </nav>
  <div class="wrapper">



    <div class="kotegori">
      <div class="textkotegori">
        <p>Котегории</p>
      </div>
      <div class="textallkotegori">
        <ul>
          <li><a href="">Фонари</a></li>
          <li><a href="">Светодиоды</a></li>
          <li><a href="">Драйвер-плата управления</a></li>
          <li><a href="">Комплектующие к фонарям</a></li>
          <li><a href="">Аккамуляторы</a></li>
          <li><a href="">Зарядные устройства</a></li>

        </ul>
      </div>

    <div class="settings">
      <div class="buy">
        <p>Цена</p>
        
        <input type="range" name="fader" min="0" max="9999" value="0" step="1" id="fader" ><br>
        <div class="cheslo">
          от<input type="numbers" name="numbers" id="volumestart" value="0">до<input type="numbers" name="numbers" id="volume" value="0" >
        </div>
        
            </div>

         </div>

      </div>
      <!-- startinterface-->
      <div class="blockall">
      <div class="search">
        <div class="inputsearch">
      <input type="search" name="search" placeholder="Поиск">
      </div>
      <div class="buttonsearch">        
        <button>Поиск</button>
      </div>
      </div>
      <div class="vidjet">
      <div class="liketovar">
        <p id="korzina">Избронное</p>
        <p id="p">0 товаров</p>
      </div>
      <div class="korzina">
        <div class="textcorizina">
        <p id="korzina">Корзина</p>
        <p id="p">0 товаров-0грн</p>
        </div>
        <div class="img">
          <img src="img/shopping_cart.png">
        </div>
      </div>
      </div>
      <!-- endinterface-->
      <!--startallblock-->
      <div class="textpreimg">
        <div class="text">
        <h3>Фонари</h3>


        </div>

        <!-- block1-->
        <div class="boxbuy">
          <div class="imgcartina">
            <img src="img/lamp/zet 3+1 R30 26/IMG_7076.JPG">
          </div>
          <div class="textmodel1">
            <p>ZET 50+6</p>
          </div>
          <div class="chekboks">
            <label class="container">
      <input type="checkbox" >

     
     <a>Добавить в избронное</a>
      </label>
          </div>
          <div class="textprice">
            <p>100 грн</p>
          </div>
          <div class="buttonallmodel1">
          <div class="buttmodel1">
            <button  >Купить</button>
          </div>
          <div class="buttmodel2">
            <button id="buttonbuy">Подробнее</button>
          </div>
       </div>
     </div>
      <!-- endblock1-->
      <!-- block 2-->
      <div class="boxbuy2">
          <div class="imgcartina">
            <img src="img/lamp/zet R30 26/IMG_3993.JPG">
          </div>
          <div class="textmodel1">
            <p>Zet R30 26</p>
          </div>
          <div class="chekboks">
            <label class="container">
      <input type="checkbox" >
     
     
     <a>Добавить в избронное</a>
      </label>
          </div>
          <div class="textprice">
            <p>100 грн</p>
          </div>
          <div class="buttonallmodel1">
          <div class="buttmodel1">
            <button >Купить</button>
          </div>
          <div class="buttmodel2">
            <button >Подробнее</button>
          </div>
       </div>
      </div>
      <!-- end block2-->
       <!-- start block3-->
       <div class="boxbuy3">
          <div class="imgcartina">
            <img src="img/lamp/R40 4kb/R40/IMG_7185.JPG">
          </div>
          <div class="textmodel1">
            <p>Zet R40 4 акб</p>
          </div>
          <div class="chekboks">
            <label class="container">
      <input type="checkbox" >
     
     
     <a>Добавить в избронное</a>
      </label>
          </div>
          <div class="textprice">
            <p>100 грн</p>
          </div>
          <div class="buttonallmodel1">
          <div class="buttmodel1">
            <button >Купить</button>
          </div>
          <div class="buttmodel2">
            <button >Подробнее</button>
          </div>
       </div>
      </div>
      <!-- end block3-->
      <!-- start block4 -->
<div class="boxbuy4">
          <div class="imgcartina">
            <img src="img/lamp/zetxamon/IMG_7129.JPG">
          </div>
          <div class="textmodel1">
            <p>zet ХАМОН</p>
          </div>
          <div class="chekboks">
            <label class="container">
      <input type="checkbox" >
     
     
     <a>Добавить в избронное</a>
      </label>
          </div>
          <div class="textprice">
            <p>100 грн</p>
          </div>
          <div class="buttonallmodel1">
          <div class="buttmodel1">
            <button >Купить</button>
          </div>
          <div class="buttmodel2">
            <button >Подробнее</button>
          </div>
       </div>
      </div>

      <!-- end block4-->
      <!-- start block5-->
      <div class="boxbuy5">
          <div class="imgcartina">
            <img src="img/lamp/R40 26/IMG_4019.JPG">
          </div>
          <div class="textmodel1">
            <p>Zet R40 26</p>
          </div>
          <div class="chekboks">
            <label class="container">
      <input type="checkbox" >
     
     
     <a>Добавить в избронное</a>
      </label>
          </div>
          <div class="textprice">
            <p>100 грн</p>
          </div>
          <div class="buttonallmodel1">
          <div class="buttmodel1">
            <button >Купить</button>
          </div>
          <div class="buttmodel2">
            <button >Подробнее</button>
          </div>
       </div>
      </div>
      <!-- end block5-->
      <!-- start block6-->
      <div class="boxbuy6">
          <div class="imgcartina">
            <img src="img/lamp/1+6/16 4+8 akb.jpg">
          </div>
          <div class="textmodel1">
            <p>Zet 1+6</p>
          </div>
          <div class="chekboks">
            <label class="container">
      <input type="checkbox" >
     
     
     <a>Добавить в избронное</a>
      </label>
          </div>
          <div class="textprice">
            <p>100 грн</p>
          </div>
          <div class="buttonallmodel1">
          <div class="buttmodel1">
            <button >Купить</button>
          </div>
          <div class="buttmodel2">
            <button >Подробнее</button>
          </div>
       </div>
      </div>
      <!-- end block6-->
      </div>
      <!--start footer-->
      
      <!--end footer-->
    </div>
    
 </div>

      <script type="text/javascript" src="perehod.js"></script>






   <script type="text/javascript" src="javasript/main.js"></script>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>