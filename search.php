<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Поиск</title>
  <style media="screen">
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
  <h3 class="dialog">Найдем вашу будущую любимую книгу</h3>
  <form action="search_result.php" method="post" class="dialog">
    <label>Поиск</label> <br>
    <input type="search" name="search" class="search">
    <button name="search_btn" type="submit">Найти</button>
  </form>

</body>
</html>
