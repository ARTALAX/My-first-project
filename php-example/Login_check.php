<?php

include "Includes.php";
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  $username = htmlentities($username);
  $password = htmlentities($password);
  $sql = "select password from users where username='$username'";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($res);
  $pass = $row['password'];
  if ($password === $pass) {
    $_SESSION['username'] = $username;

    header("Location: something.php");
  } else {
    header("Location: Loginform.php");
  }
}
