<?php
session_start();
require "bd.php";
?>
<?php
$name = (trim($_POST['name']));
$pass = (trim($_POST['pass']));
$error = '';
if (strlen(trim($name)) <= 5 || strlen(trim($name)) > 80)
  $error = "Введите правильное имя";
elseif ($name == "")
  $error = "Введите имя";
elseif (strlen($pass) < 5)
  $error = "Пароль слишком короткий";
elseif (trim($pass) == "")
  $error = "Вы не ввели пароль";
if (!empty($error)) {
  echo $error;
}
$query = "SELECT * FROM `Users` WHERE `username` = '$name'";
$result = mysqli_query($connection, $query);
if ($result && $row = mysqli_fetch_assoc($result)) {
  if (password_verify($pass, $row['password'])) {
    $_SESSION['name'] = $name;
    header("location:index.php");
  } else {
    echo "Неправильный пароль.";
  }
} else {
  echo "Пользователь с таким логином не найден.";
}

mysqli_close($connection);

