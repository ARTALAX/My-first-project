<?php
require "blocs/heater.php";
include "Includes.php";
if (!isset($_SESSION['username'])) {
?>
  <form action="Signup_check.php" method="post"><br>
    <input type="text" name="email" class="form-control" placeholder="Enter your email" required><br>
    <input type="text" name="username" class="form-control" placeholder="Enter your username" required><br>
    <input type="password" name="password" placeholder="Enter your password" class="form-control" required><br>
    <button type="submit" name="signup" class="btn btn success">Регистрация</button>
  </form>
<?php
} else {
  header("Location:something.php");
}
require "blocs/footer.php";
?>