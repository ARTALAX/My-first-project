<?php
session_start();
require "connection.php";
// $id = $_SESSION['id'];
$name = $_POST['Change_name'];
$email = $_POST['Change_email'];
$pass = $_POST['Change_pass'];
if (trim(empty($name)))
	echo "Введите имя";
elseif (strlen(trim($name)) < 2)
	echo "Вы ввели короткое имя";
elseif (trim(empty($email)))
	echo "Введите email";
elseif (trim(empty($pass)))
	echo "Введите пароль";
elseif (strlen(trim($email)) < 5 && (strpos($email, "@") == false))
	echo "Вы ввели неправильную почту";
elseif (strlen(trim($pass)) < 5)
	echo "Вы ввели слишком короткий пароль";

if (isset($_POST['con_changes'])) {
	// $id = $_SESSION['id'];
	$stmt = $pdo->query("UPDATE Users SET username = '$name' WHERE id= $id ");
	// $stmt->bindParam(":new_username", $name);
	// $stmt->bindParam(":id", $id);
	// $stmt->execute();
	// if (isset($_POST['con_changes'])) {
	// 	$stmt1 = $pdo->query("UPDATE Users SET email ='$email' WHERE email= $");
	// }

}


?>