<!DOCTYPE html>
<html lang="ru">
<?php
require 'connectdb.php';
?>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>to-do</title>
</head>

<body>
	<div class="container">
		<form action="add.php" method="post">
			<input type="text" name='task' id='task' placeholder="Введи задачу" class="form-control">
			<button type='submit' name='sendTask' class='btn btn-success'>Добавить задачу </button>
		</form>
		<?php $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
		while ($row = $query->fetch(PDO::FETCH_OBJ)) {
			echo '<ul><div><li>' . $row->task . ' <a href="delete.php?id=' . $row->id . '" id="card-link-click">Удалить</a></li>' . ' </div></ul>';
		}
		?>
	</div>
</body>

</html>