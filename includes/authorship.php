<?php
$connection = mysqli_connect('localhost', 'root', '', 'project');

$query="SELECT * FROM authorship";
$result = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);
while ($authorship = mysqli_fetch_assoc($result)) {
  $authorships []=[
    'id' => $authorship['id'],
    'id_author' => $authorship['id_author'],
    'id_book' => $authorship['id_book']
  ];
}
 ?>
