<?php
require 'server.php';
$data=$_POST;
if(isset($data['submit'])){
  if(trim($data['email'])==''){
    $errors[]='Введите email';
  }
  if($data['password']==''){
    $errors[]='Введите password';
  }
  if(empty($errors)){

    
       $user=R::findOne('user','email=?',array($data['email']));


      if($user){
         
          if(password_verify($data['password'], $user->password)){
              if($user->active==1){
                $_SESSION['logged_user']=$user;
                 echo '<div style="color:green;">Вы афотрызовани можете прейти на главною страницу <a href="index.php">home</a></div><hr>';
              }else{
                echo "Подтвердите email";
              }
          }

          else{
            $errors[]='Пользователя не найдено';
          }
      }else {
        $errors[]='Пользователя не найдено';
      }
      if(!empty($errors)){
         echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
      }
  }else{
      echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
  }
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
    <link rel="stylesheet" type="text/css" href="css/login.css">
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
          <a class="nav-link " href="reg.php" id="sen">Регистрация</a>
        </li>
        
      </ul>
    </div>
  </nav>

  <div class="wrapper">

    <div class="reg">
      <div class="textza">
        <p>Вход</p>
      </div>
      
        <form method="POST" action="login.php" id="form">
       <input type="name" name="email" placeholder="email" id="name" value="<?php echo @$data['email'];?>" >
       <input type="password" name="password" placeholder="password" id="fam" value="<?php echo @$data['password'];?>"> 
       
        <button id="butt" type="submit" name="submit">Вход</button>
        </form> 
     

    </div>

  </div>
<script type="text/javascript" src="javasript/main.js"></script>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
 </html>