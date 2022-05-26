<?php
$connection = mysqli_connect('localhost', 'root', '', 'project');

$query="SELECT * FROM genres";
$result = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);
while ($genres = mysqli_fetch_assoc($result)) {
  $genres1 []=[
    'id_genre' => $genres['id_genre'],
    'name' => $genres['genre_name']
  ];
}
 ?>
