<?php
session_start();
$title = 'Контакты';
require 'blocs/heater.php';
?>
<h1 class='mt-5'><?= $title ?></h1>
<form action='check_contact.php' method='post'>
  <input type='text' name='username' value='<?= $_SESSION['user_name'] ?>' class='form-control' placeholder='Введите имя'>
  <div class='text-danger'><?= $_SESSION['error_user_name'] ?></div><br>
  <input type='email' name='email' value='<?= $_SESSION['email'] ?>' class='form-control' placeholder='Ведите email'><br>
  <div class='text-danger'><?= $_SESSION['error_email'] ?></div><br>
  <input type='text' name='subject' class='form-control' value='<?= $_SESSION['subject'] ?>' placeholder='Тема сообщения'><br>
  <div class='text-danger'><?= $_SESSION['error_subject'] ?></div><br>
  <textarea name='message' class='form-control' placeholder='ваше сообщение'><?= $_SESSION['message'] ?> </textarea><br>
  <div class='text-danger'><?= $_SESSION['error_message'] ?></div><br>
  <button type='submit' class='btn btn-success'>Отправить</button>

</form>
<?php
require 'blocs/footer.php';

?>