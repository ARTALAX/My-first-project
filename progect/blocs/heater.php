<?php
require "connection.php";
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookeasy</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg p-3 mb-2 bg-dark text-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Cookeasy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="creation.php">Создание своего рецепта</a>
          </li>

          <li class="nav-item dropdown bg-dark ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Рецепты
            </a>
            <ul class="dropdown-menu bg-dark">
              <li><a class="dropdown-item  " href="first.php">Первое блюдо</a></li>
              <li><a class="dropdown-item " href="second.php">Второе блюдо</a></li>
              <li><a class="dropdown-item " href="dessert.php">Перекус</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Ваши советы</a>
          </li>
        </ul>
        <?php if (empty($_SESSION['name'])): ?>
          <form class="container-fluid d-grid gap-2 d-md-flex justify-content-md-end">
            <button name="reg_button" class="btn btn-outline-info  me-md-2" type="button"><a
                class="nav-link link-body-emphasis px-2 text-white" href="reg.php">Регистрация</a></button>
            <button class="btn btn-sm btn-outline-secondary" type="button"><a
                class="nav-link link-body-emphasis px-2 text-white" href="login.php">Авторизация</a></button>
          </form>
        <?php else: ?>
          <form class="justify-content-end" method="post" action="logout.php">
            <button name="logout" class="btn btn-outline-secondary me-2 text-white" type="submit">Выйти</button>
          </form>
        <?php endif; ?>
      </div>
    </div>
  </nav>
  <script src="https://kit.fontawesome.com/5e3f7aee2b.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>