<?php
require_once 'connection.php';

$id_visitor = $_GET ['id_visitor'];
$visitor = mysqli_query($connection, "SELECT * FROM visitor WHERE id_visitor='$id_visitor'");
$visitor = mysqli_fetch_assoc($visitor);
 ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Изменить Данные</title>

    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>

      <form action="update_script_result.php" method="post">
        <h1>Изменение данных</h1>
        <label>Surname</label>
        <input type="text" name="surname" value="<?= $visitor['surname']?>">
        <label>Name</label>
        <input type="text" name="name" value="<?= $visitor['name']?>">
        <label>Login</label>
        <input type="text" name="login" value="<?= $visitor['login']?>">
        <label>Password</label>
        <input type="text" name="password" value="<?= $visitor['password']?>">
        <input type="hidden" name="id_visitor" value="<?= $visitor['id_visitor']?>">
        <button type="submit">Изменить</button>
      </form>





  </body>
</html>
