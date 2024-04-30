<?php
require 'connectdb.php';
$task = $_POST['task'];
if (empty($task)) {
	echo 'Введите сообщение';
	exit();
}
if (strlen($task) < 2) {
	echo "Короткая запись";
	exit();
}
$sql = 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);
header('Location:index.php')
	?>