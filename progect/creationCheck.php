<?php
require 'blocs/heater.php';
require 'connection.php';
if (!empty($_POST['name'])) {
	$title = $_POST['name'];

}
if (!empty($_POST['tags'])) {
	$tags = $_POST['tags'];
}

if (!empty($_POST['upload_img'])) {
	if (!empty($_FILES['img'])) {
		$file_patch = $_FILES['img']['tmp_name'];
		$img = addslashes(file_get_contents($file_patch));
		$query = $pdo->query("INSERT INTO dishes (image,title,tags ) VALUES ('$img','$title','$tags')");
	} else
		echo 'Не найден файл';
}
// header('Location:creation.php');
?>