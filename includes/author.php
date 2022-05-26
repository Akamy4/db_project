<?php
$connection = mysqli_connect('localhost', 'root', '', 'project');

$query="SELECT * FROM author";
$result = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);
while ($author = mysqli_fetch_assoc($result)) {
  $authors []=[
    'id_author' => $author['id_author'],
    'name' => $author['name']
  ];
}
 ?>
