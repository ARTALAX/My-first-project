<?php
//print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];
$error = '';
if (trim($email == ''))
  $error = 'Введите email';
elseif (trim($message == ''))
  $error = 'Введите сообщение';
elseif (trim(strlen($message <= 7)))
  $error = 'Вы ввели слишком короткое сообщение';

if ($error != '') {
  echo $error;
  exit;
}
$subject = "=?utf-8?B?" . base64_encode("Тест") . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail('urazmakin135135@gmail.com', $subject, $message, $headers);
header('location: about.php');
