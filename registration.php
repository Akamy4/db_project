<?php
  session_start();
  if($_SESSION){
    header('Location: profile.php');
  }
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Регистрация</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <form action="includes/signup.php" method="post">
    <label>Surname</label>
    <input type="text" name="surname">
    <label>Name</label>
    <input type="text" name="name">
    <label>Login</label>
    <input type="text" name="login">
    <label>Password</label>
    <input type="password" name="password">
    <button type="submit">Зарегистрироваться</button>
    <p>
      У вас уже есть <a href="index.php">аккаунт</a>
    </p>
  </form>


  </form>
</body>
</html>
