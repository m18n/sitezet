<?php
require 'server.php';
$b=false;
$result = $_SERVER['REQUEST_URI'];

$v=str_replace('/active.php?token=','', $result);

if($v==''){
 $b=false;
}else{

  $user=R::findOne('user','token=?',array($v));
  echo $user->email;
  $b=true;
  $user->active=1;
  $user->token='';
  R::store($user);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <title>ZET</title>
    <link rel="stylesheet" type="text/css" href="css/sa.css">
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
        <li class="nav-item" >
          <a class="nav-link " href="#" id="sen">Вход</a>
        </li>
         <li class="nav-item" >
          <a class="nav-link " href="reg.php" id="sen">Регистрация</a>
        </li>
      </ul>
    </div>
  </nav>

<p id="text"><?php if($b==true){echo "Аккаунт подтвержден";}else{echo"error";}?></p>
</body>
</html>