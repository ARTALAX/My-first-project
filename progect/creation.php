<?php
require "connection.php";
require "blocs/heater.php";
?>
<center>
	<h1>Добавьте свой рецепт</h1>
</center>
<form class="container mt-5 " method='post' action='creationCheck.php' enctype="multipart/form-data">
	<input class="form-control " name='name' type='text' placeholder="Введите заголовок"><br>
	<input class="form-control" name='tags' type=' text' placeholder='Введите теги'><br>
	<input class="form-control" type='file' name='img'><br>
	<input class="btn btn-success" type='submit' name="upload_img"></input>
</form>
<?php
require "blocs/footer.php";
?>