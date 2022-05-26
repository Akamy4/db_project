<?php
session_start();
// require_once '../includes/connection.php';
$connection = mysqli_connect('localhost', 'root', '', 'project');

$book_name = $_POST['book_name'];
$publishing_house = $_POST['publishing_house'];
$year = $_POST['year_of_printing'];
$cost = $_POST['cost'];
$amount = $_POST['amount'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$test=$_POST['publishing_house'];

$query_book = "INSERT INTO books
(book_name, id_publishing_house, year_of_printing, cost, amount)
VALUES('$book_name', '$publishing_house', '$year', '$cost', '$amount')";
if (mysqli_query($connection, $query_book)) {
      $last_id_book = mysqli_insert_id($connection);

    }

  if ($author){
    foreach ((array) $author as $t){
      $query = "INSERT INTO authorship
      (id_author, id_book)
      VALUES('$t', '$last_id_book')";
      $result=mysqli_query($connection, $query) or die("Ошибка " . mysqli_error($connection));
    }
  }

  if ($genre){
    foreach ((array) $genre as $k){
      $query_genre = "INSERT INTO genres_of_book
      (id_genre, id_book)
      VALUES('$k', '$last_id_book')";
      $result=mysqli_query($connection, $query_genre) or die("Ошибка " . mysqli_error($connection));
    }
  }


 ?>
