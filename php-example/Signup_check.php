<?php
require "blocs/footer.php";
include "Includes.php";
if (isset($_POST['signup'])) {
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = mysqli_real_escape_string($conn, $email);
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  $email = htmlentities($email);
  $username = htmlentities($username);
  $password = htmlentities($password);

  $sql1 = "select * from users where email='$email' or username='$username'";
  $res1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($res1) > 0) {

    header("Location: Loginform.php");
  } else {
    $sql = "insert into users(email,username,password) values('$email','$username','$password')";
    $res = mysqli_query($conn, $sql);
    if ($res) {

      header("Location: Loginform.php");
    } else {
      header("Location: Loginform.php");
    }
  }
}
require "blocs/footer.php";