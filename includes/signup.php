<?php
session_start();

require_once 'connection.php';

$surname = $_POST['surname'];
$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];

mysqli_query($connection, "INSERT INTO `visitor`
  (`id_visitor`, `surname`, `name`, `login`, `password`)
  VALUES (NULL, '$surname', '$name', '$login', '$password')");
  header('Location: ../index.php');
 ?>
