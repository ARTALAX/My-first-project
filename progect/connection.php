<?php try {
	$dsn = 'mysql:host=localhost;dbname=test_db';
	$pdo = new PDO($dsn, 'root');
} catch (PDOException $e) {
	echo 'Проблема с сервером:' . $e->getMessage();
}
?>