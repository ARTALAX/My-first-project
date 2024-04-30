<?php
require "blocs/heater.php";
include "Includes.php";
if (!isset($_SESSION['username'])) {
?>
  <form action="Login_check.php" method="post"><br>
    <input type="text" name="username" class="form-control" placeholder="Enter your username" required><br>
    <input type="password" name="password" class="form-control" placeholder="Enter your password" required><br>
    <input type="submit" value="Submit" name="login" class="btn btn success">
  </form>
<?php
} else {
  header("Location:something.php");
}
require "blocs/footer.php";
?>