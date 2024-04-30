<?php
require "blocs/heater.php";
?>
<form method="post" action="login_check.php" class="container mt-5">
  <input class="form-control" name="name" placeholder="Введите имя" type="text"><br>
  <input class="form-control" name="pass" type="password" placeholder="Введите пароль"><br>
  <button type="submit" class="btn btn-success" name="sub">Войти</button>
  <a name="quest" href="reg.php">Еще не зарегистрировались?</a>
</form>
<?php
require "blocs/footer.php";
?>