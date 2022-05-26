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
  <title>Авторизация</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <form action="includes/signin.php" method="post">
    <label>Login</label>
    <input type="text" name="login">
    <label>Password</label>
    <input type="password" name="password" >
    <button type="submit">Войти</button>
    <p>
      Если у вас нет аккаунта, то создайте <a href="registration.php">аккаунт</a>
    </p>
    <?php
    if (isset ($_SESSION['message'])){
      echo  $_SESSION['message'];
    }
    unset($_SESSION['message']);
     ?>
  </form>

  </form>
</body>
</html>
