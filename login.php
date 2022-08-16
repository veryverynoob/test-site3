<?php
if(issets($_GET["email"]) && issets($_POST["psw"]) && issets($_POST["psw-repeat"]) && "psw"=="psw-repeat")
{
  $email = htmlentities($_POST["email"]);
  $psw = htmlentities($_POST["psw"]);
  $psw-repeat = htmlentities($_POST["psw"]);
}
else
{   
    echo "Введенные данные некорректны";
}
?>
