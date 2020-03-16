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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/zet3+1.css">
    
    <title>zet 3+1 R30 26</title>
  </head>
  <body>
    <div class="buydiv" id="os">
      <div class="backdiv">
        <div id="inp">
          <img src="img/25364.png" id="xr">
          <input type="email" name="email" placeholder="email" id="email">
          <input type="telephon" name="telephon" placeholder="номер телефона" id="telephon">
           <input type="name" name="name" placeholder="Имя" id="name">
           <input type="lastname" name="lastname" placeholder="Фамилия" id="last">
           <div class="str">
            <div class="butt">
             <button name="buys" id="by">Купить</button>
             </div>
           <p id="den">
             200
           </p>

         </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/unitled.png" id="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav  ml-auto" id="textnav">
        <li class="nav-item ">
          <a class="nav-link" href="index.php" id="lav"> Главная </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="lav"> О нас </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="lav"> Продукты </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" id="lav"> Контакты </a>
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
    <!-- start center-->
    <div class="center">
      <div class="photo">
        <img src="img/lamp/zet 3+1 R30 26/IMG_7058.JPG">
      </div>
      <!-- kalulator-->
      <div class="kalulator">
        <div class="back">
          <div class="textpre">
            <p >ZET R40 26650</p>
          </div>
          <div class="katigrao">
            <div class="option1">
              <div class="texetoption1">
           <a id="led">LED Центр</a>
           </div>
             <div class="optiontext">
             <select id="selectBox" class="selectBox" onchange="changeFunc();">
              <option value="0">XHP-50.2 (3000K)</option>
              <option  value="0">XHP-50.2 (4000K)</option>
              <option  value="0">XHP-50.2 (5000K)</option>
              <option  value="10">XHP-70.2 (3000K)</option>
              <option  value="10">XHP-70.2 (4000K)</option>
              <option  value="10">XHP-70.2 (5000K)</option>
             </select>
             </div>
             </div>
             <div class="option1">
                <div class="texetoption1">
             <a>Кнопка управления</a>
            </div>
             <div class="optiontext">
             <select id="selectBox1" class="selectBox1" onchange="changeFunc();">
              <option  value="0">Нажимная</option>
              <option  value="10">Поворотная</option>
              
             </select>
             </div>
            </div>
            
            <div class="option1">
                <div class="texetoption1">
             <a >Корпус</a>
            </div>
             <div class="optiontext">
              <select id="selectBox3" class="selectBox3" onchange="changeFunc();">
              <option  value="0">под 2 АКБ</option>
              <option  value="15">под 3 АКБ</option>
              
             </select>
            </div>
          </div>
            <div class="option1">
                <div class="texetoption1">
             <a>АКБ 26650</a>
            </div>
             <div class="optiontext">
              <select id="selectBox4" class="selectBox4" onchange="changeFunc();">
              <option  value="0">Без АКБ</option>
              <option  value="15">2 АКБ</option>
              <option  value="30">3 АКБ</option>
             </select>
             </div>
            </div>
            <div class="option1">
                <div class="texetoption1">
             <a>Зарядное Устройство</a>
            </div>
            <div class="optiontext">
              <select id="selectBox5" class="selectBox5" onchange="changeFunc();">
              <option  value="0">без ЗУ</option>
              <option  value="15">c ЗУ</option>
              
             </select>
            </div>
          </div>
            

          <div class="restext">
            <div class="butt">
             <button id="kup">Купить</button>
             </div>
             <div class="prive">
             <a id="res">200$</a>
             </div>

          </div>

            </div>
          </div>
                </div>

      <!-- end kalulator-->
      <div class="podphoto">
        <div class="photoslide1">
          <img src="img/lamp/zet 3+1 R30 26/IMG_7043.JPG">
        </div>
        <div class="photoslide1">
          <img src="img/lamp/zet 3+1 R30 26/IMG_7050.JPG">
        </div>
        <div class="photoslide1">
          <img src="img/lamp/zet 3+1 R30 26/IMG_7058.JPG">
        </div>
        <div class="photoslide1">
          <img src="img/lamp/zet 3+1 R30 26/IMG_7064.JPG">
        </div>
        <div class="photoslide1">
          <img src="img/lamp/zet 3+1 R30 26/IMG_7076.JPG">
        </div>
        <div class="photoslide1">
          <img src="img/lamp/zet 3+1 R30 26/IMG_7094.JPG">
        </div>
        <div class="photoslide1">
          <img src="img/lamp/zet 3+1 R30 26/IMG_7095.JPG">
        </div>
       
      </div>
    </div>
    <!-- end center-->
  </div>
  <div class="text">
    Фонарь ZET R40
Подводный фонарь ZET-R40 - это современный, мощный фонарь с рефлектором оптимального
диаметра в паре с 20W диодом выдает четко выраженное центральное световое пятно с резким
переходом в ореол большого диаметра. Характеризуется как мощный поисковый фонарь для мутной
воды. Очень удобен для обнаружения объектов на дальнем плане как днем так и ночью.
При заказе фонаря есть возможность выбора температуры и типа светодиода.
Доступна установка диодов
*XHP-50.2 * XHP-70.2 * MT-G2
и 4 варианта цветовой температуры - 3000К, 4000К, 5000 и 6000К.
Доступные для установки светодиоды выдают суммарную мощность светового потока в диапазоне
1900 до 2400 lm света, а отражатель большого диаметра формирует из этого потока хорошее
пробивное световое пятно с ярким центром и большим ореолом.
Благодаря компактному размещению 4 АКБ типоразмера 18650 в кассете фонаря, время
непрерывного свечения на мах режиме достигает 2.5 ч. При этом сохранены небольшие габариты
фонаря что, позволяют размещать его на ресивере ружья.
Технические данные:
Материал Д16Т
Твердый анод
Формирование луча – Рефлектор D=42мм
Источник света 20 ватный диод на выбор
Световая отдача максимальная-2400 Лм
Температура цвета-3000К, (4000К),(5000К)
АКБ 18650 Li-Ion- 3400 mAh.
Магнитная нажимная кнопка.
Вес - * 330 гр без акб и 530 гр. с акб.
Габариты- Диаметр 50 мм * H - 170 mm
Возможности фонаря :
*Размеры светового пятна с расстояния 2м – яркая центральная часть – D=0.9м и ореол D=3.5м.
*Режимы - 4 Сценария с различными уровнями яркости
5 - 15%, 30%, 40% 70% и 100%
3 - 20% 60% и 100%
2 - 50% и 100%
1 - 100%
Время работы от 4х акб емкостью 3400 mAh
* 100% - 2400Лм – 2ч30м
* 70% - 1600Лм - 3м
* 45% - 1000Лм – 5ч
*Блокировка фонаря (блокировка управления от случайного включения) чз кнопку массы.
* Сигнализация (моргание) при разряде АКБ при понижении напряжения до 3в на банку.
* Отключение - при разряде 10,8V (2,7 – на банку)
* Защита от переполюсовки.
* Термозащита – сигнализация с частым морганием.- необходимо перейти на пониженный режим..
Управление фонарем:
Вставить акб в кассету - при этом желательно не путать полярность (плоская часть батареи "минус"
вставлять к пружине)
Затем нажать кнопку массы в тыльной части кассеты - фонарь включится.
Закрутить тубус с тыльником до упора.
* Короткое нажатие торцевой Магнитной Кнопки - ВКЛючение - ВЫКЛючение фонаря
* Нажатие МК с удержанием - перебор режимов
* На нужном режиме яркости отпускаем кнопку - фонарь сразу запомнит этот режим.
Выбор сценария с режимами.
Для переключения группы режимов перейдите в минимальный режим чз кнопку массы в тыльной
части кассеты - быстрым кликом или полу-нажатием кнопки.
через 5 секунд фонарь мигнет и сразу после этого выкл фонарь.
При следующем включении будет выбрана следующий сценарий.
Комплект поставки:
 фонарь ZET
 темляк на руку
 запасные уплотнительные резиновые кольца
 инструкция с таблицей режимов
Основные достоинства:
 мощный свет
 малые габариты
 хорошее качество изготовления и высокое качество комплектующих
 большая мощность и длительное время свечения
 простота и надежность
 возможность замены аккумуляторов
 возможность зарядки акб не вынимая их из кассеты разными ЗУ
  </div>
  <script type="text/javascript" src="javasript/kal.js"></script>
  <script type="text/javascript" src="javasript/zet.js"></script>
<script   src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>