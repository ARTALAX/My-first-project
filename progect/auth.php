<?php
//todo
require "bd.php";
$name = (trim($_POST['name']));
$pass = (trim($_POST['pass']));
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
$result = mysqli_query($connection, "SELECT * FROM `Users` WHERE `username` ='$name' AND `password`='$pass'");

if (mysqli_num_rows($result) == 1)
  $row = mysqli_fetch_assoc($result);
if ($pass_hash == $row['password']) {
  print_r($_POST);
  echo "yes";
} else {
  echo "Такой пользователь не найден";
  exit();
}
#header("location:index.php");
