<?php
session_start();

require_once 'connection.php';

$author = $_POST['author'];
$email = $_POST['email'];


mysqli_query($connection, "INSERT INTO author
  (name, author_mail)
  VALUES ( '$author', '$email')");
  header('/add_book.php');
 ?>
