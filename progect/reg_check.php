<?php
require "bd.php";
$email = $_POST['email'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$porn = $_SESSION['email'] = $email;
$error = "";
if (trim($name) == "")
  $error = "Введите имя";
elseif (strlen(trim($name)) <= 2)
  $error = "Введите правильное имя";
elseif (trim($email) == "")
  $error = "Введите email";
elseif (strlen(trim($email)) <= 5)
  $error = "Введите правильный email";
elseif (trim($pass) == "")
  $error = "Вы не ввели пароль";
elseif (strlen(trim($pass)) < 5)
  $error = "Пароль слишком короткий";

if ($error != "") {
  echo $error;
  exit();
}
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
$count = mysqli_query($connection, "INSERT INTO `Users` (`username`, `email`, `password`) VALUES ('$name', '$email', '$pass_hash')");
mysqli_close($connection);
header('Location: index.php');

