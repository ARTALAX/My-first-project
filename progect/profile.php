<?php
require "blocs/heater.php";
require "connection.php";
?>
<form action='profileCheck.php' method="post" class='container mt-5'>
	<input class="form-control" name="Change_name" type="text" placeholder="Введите новое имя"><br>
	<input class="form-control" name="Change_email" type="email" placeholder="Введите новую почту"><br>
	<input class="form-control" name="Change_pass" type="password" placeholder="Введите новый пароль"><br>
	<button type="submit" class="btn btn-success" name="con_changes">Изменить</button>
</form>
<?php
require "blocs/footer.php"
	?>