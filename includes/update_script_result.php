<?php
require_once 'connection.php';

$surname = $_POST['surname'];
$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$id_visitor = $_POST['id_visitor'];
mysqli_query($connection, "UPDATE visitor SET
surname='$surname',
name='$name',
login='$login',
password='$password'
 WHERE id_visitor = '$id_visitor'");
 header('Location: update.php');
 ?>
