<?php
  session_start();
  if(!$_SESSION['visitor']){
    header('Location: index.php');
  }
 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Личный кабинет</title>
  <style>
  .dialog {
   width: 80%; /* Ширина блока */
   background: #D4E3A5; /* Цвет фона */
   border: 5px solid #7D9B3D; /* Параметры рамки */
   padding: 1rem; /* Поля */
   margin: auto; /* Выравниваем по центру */
  }
  </style>
</head>
<body>
<div class="dialog">
  <h2> Здравствуйте <?= $_SESSION['visitor']['surname'] ?> <?= $_SESSION['visitor']['name'] ?></h2>
  <a href="includes/logout.php" class="logout">Выход</a>
  <a href="search.php" class="logout">Купить книгу</a>
</div>
<div class="dialog">
  <img src="https://shutniki.club/wp-content/uploads/2020/01/Anime_devushka_mashet_rukoy_12_14152252.jpg" width="1500px">

</div>

</body>
</html>
