<?php
require 'server.php';
require 'phpmailer/PHPMailerAutoload.php';
$data=$_POST;
if(isset($data['submit'])){
  if(trim($data['name'])==''){
    $errors[]='Введите Имя';
  }
  if(trim($data['fam'])==''){
    $errors[]='Введите Фамилию';
  }
  if(trim($data['email'])==''){
    $errors[]='Введите email';
  }if(trim($data['telephon'])==''){
    $errors[]='Введите номер телефона';
  }
  if($data['password']!=$data['password2']){
    $errors[]='Введите password';
  }
  if(R::count('user',"email=?",array($data['email']))>0){
    $errors[]='Пользователь с такой почтой уже существует';
  }
 if(empty($errors)){
    $user=R::dispense("user");
    $user->name=$data['name'];
    $user->email=$data['email'];
    $user->fam=$data['fam'];
    $user->password=password_hash($data['password'], PASSWORD_DEFAULT);
    $user->active=0;
    $user->token=md5(uniqid($data['email'], true));
    $user->telephon=$data['telephon'];
    R::store($user);

     $mail=new PHPMailer();
     
     $mail->Host='smtp.gmail.com';
     $mail->SMTPAuth=true;
     $mail->SMTPSecure="tls";
     $mail->Port=587;
     $mail->Username='20xim67@gmail.com';
     $mail->Password="0958532122";
      $mail->charset='utf-8';
     $mail->setFrom('20xim67@gmail.com','misha');
  
     $mail->addAddress($data['email']);
     $mail->addReplyTo('20xim67@gmail.com');
     $mail->isHtml(true);
         $mail->Subject="Подтвердите email";
        $mail->Body="http://zetlamp.top/active.php?token=".$user->token;
     if($mail->Send()){
      echo "ok";
     }else{
      echo "error:".$mail->ErrorInfo;
     }
  


     echo '<div style="color:green;">Вы успешно зарегистрированы!<br>Подтвердите email</div><hr>';
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
    <link rel="stylesheet" type="text/css" href="css/reg.css">
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
          <a class="nav-link " href="login.php" id="sen">Вход</a>
        </li>
        
      </ul>
    </div>
  </nav>

  <div class="wrapper">

    <div class="reg">
      <div class="textza">
        <p>Регистрация</p>
      </div>
      
        <form method="POST" action="reg.php" id="form">
       <input type="name" name="name" placeholder="Имя" id="name" value="<?php echo @$data['name'];?>">
       <input type="fam" name="fam" placeholder="Фамилия" id="fam" value="<?php echo @$data['fam'];?>"> 
       <input type="email" name="email" placeholder="Почта" id="email" value="<?php echo @$data['email'];?>">
        <input type="password" name="password" placeholder="Пароль" id="password" value="<?php echo @$data['password'];?>">
        <input type="password" name="password2" placeholder="Пароль" id="password" value="<?php echo @$data['password2'];?>">
         <input type="telephon" name="telephon" placeholder="Номер телефона" id="telephon" value="<?php echo @$data['telephon'];?>">
        <button id="butt" type="submit" name="submit">Зарегистрироваться</button>
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
