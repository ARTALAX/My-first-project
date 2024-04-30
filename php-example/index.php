<?php
session_start();
require "blocs/heater.php";
echo date("n l H:i:s", strtotime(""))  . '<br>';

$list = [1, 2, 3, 4, 5, 0];
unset($list[0]);

$list = array_values($list);
sort($list);
// shuffle($list);
if (in_array(11, $list) == "")
  echo "не найдено <br>";
else
  echo "найдено";
print_r($list);
?>

<h1>Главная страница</h1>
<?php
require "blocs/footer.php";
?>
<?php

//$file = fopen("test.php", "a");
//fwrite($file, "тест\n ");
//fclose($file);

//$filename = "test.txt";
//$file = fopen($filename, "r");
//$content = fread($file, filesize($filename));
//echo file_exists($filename) . "<br>";
//echo file_get_contents($filename) . "<br>";
//echo fileperms(__FILE__);
//fclose($file);
//rename("test.txt", "text.txt");

//echo $content;
//phpinfo();
//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';
//if ($_GET['source'] != "") {
//$link = explode("?source=", $_SERVER['REQUEST_URI']);
// $redirect = "http://" . $_SERVER['HTTP_HOST'] . link [0];
// header('location:' . $redirect);
//exit();
//};
//$message = "Сообщение";
//$to = "Urazmakin135135@gmail.com";
//$from = "Urazmakin135135@gmail.com";
//$subject = "Тема сообщения";

//$subject = "=&?utf-8?B?" . base64_encode($subject) . "?=";
//$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset =utf-8\r\n";

//mail($to, $subject, $message, $headers);
//$user_name = "Jury";
//session_destroy();
//unset($_SESSION['user_name']);
//setcookie('user_name', $user_name, time() + 180);
//print_r($_COOKIE);
//echo $_COOKIE["user_name"];
//setcookie('user_name', $user_name, time() - 180);
//if ($_SESSION['user_name'] == 'Jury')
// echo ('сессия установленна');


?>