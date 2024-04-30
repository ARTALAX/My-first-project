<?php
require "blocs/heater.php";
?>
<form method="post" action="reg_check.php" class="container mt-5">
  <input class="form-control" name="name" placeholder="Введите имя" type="text"><br>
  <input class=" form-control" name="email" placeholder="Введите email" type="email"><br>
  <input class="form-control" name="pass" type="password" placeholder="Введите пароль"><br>
  <button type="submit" class="btn btn-success" name="sub">Регистрация</button>
  <a name="quest2" href="login.php">Уже зарегистрировались?</a>
</form>
<?php
require "blocs/footer.php";
?>