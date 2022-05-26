<?php
session_start();
require_once 'connection.php';


  $login = $_POST['login'];
  $password = $_POST['password'];

  $user_check = mysqli_query($connection, "SELECT * FROM `visitor`
    WHERE login = '$login'
    AND password = '$password'");


    if (mysqli_num_rows($user_check) > 0){
      $visitor = mysqli_fetch_assoc($user_check);
      $_SESSION['visitor']=[
           "id_visitor" => $visitor['id_visitor'],
           "surname" => $visitor['surname'],
          "name" => $visitor['name'],
          "lvl" => $visitor['role']
         ];
         if ($visitor['role'] == 1) {
            header ("Location:../admin_profile.php");
        } else if ($visitor['role'] == 2)  {
            header ("Location:../manager.php");
        } else {
          header ("Location:../profile.php");
        }
    } else {
      $_SESSION['message']='Не верный логин и/или пароль';
      header('LOCATION: ../index.php');
    }

 ?>
