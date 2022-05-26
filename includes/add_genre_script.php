<?php
session_start();

require_once 'connection.php';

$genre = $_POST['genre'];


mysqli_query($connection, "INSERT INTO genres
  (genre_name)
  VALUES ( '$genre')");
  header('/add_book.php');
 ?>
