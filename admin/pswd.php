
<?php

if(!isset($_COOKIE["pass"])){
  sleep(1);
  if(isset($_POST["pass"])){
    setcookie("pass",$_POST["pass"], time()+3600*24*14);
    die("Полностью обновите страницу (Установите курсор в строку адреса и нажмите Enter");
  }
?>
<html><head><title>Управление Сайтом</title>

</head>
<body>
<form method="post">
<input type="password" name="pass" value="">
<input type="submit" name="submit" value="Пароль">
</form></body></html>
<?php
  exit();
} else {



if($_COOKIE["pass"]!=="123"){ 
  sleep(1);
  if(isset($_POST["pass"])){
    setcookie("pass",$_POST["pass"], time()+3600*24*14);
    die("Обновите страницу");
  }
?>
<html><head><title>Управление Сайтом</title>

</head>
<body>
<form method="post">
<input type="password" name="pass" value="">
<input type="submit" name="submit" value="Пароль">
</form></body></html>
<?php
  exit();
}

}
?>