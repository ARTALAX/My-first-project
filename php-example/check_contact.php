<?php
session_start();
function redirect()
{
  header('location: contact.php');
  exit;
}
$user_name = htmlspecialchars(trim($_POST['username']));
$from = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));
$_SESSION['$user_name'] = $user_name;
$_SESSION['$email'] = $from;
$_SESSION['$subject'] = $subject;
$_SESSION['$message'] = $message;
if (strlen($user_name) < 1) {
  $_SESSION['$error_user_name'] = 'Введите правильное имя';
  redirect();
} else if (strlen($form) < 5 || strpos($from, '@') == false) {

  $_SESSION['$error_email'] = 'Вы введи не правильный email';
  redirect();
} else if (strlen($subject) <= 5) {
  $_SESSION['$error_subject'] = 'тема сообщения не менее 5 символов';
  redirect();
} else if (strlen($message) <= 15) {
  $_SESSION['$error_message'] = ' сообщение не менее 15 символов';
  redirect();
} else {
  $_SESSION['$error_user_name'] = '';
  $_SESSION['$$error_email'] = '';
  $_SESSION['$error_subject'] = '';
  $_SESSION['$error_message'] = '';
}
