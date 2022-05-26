<?php
$connection = mysqli_connect('localhost', 'root', '', 'project');

$query="SELECT * FROM publishing_house";
$result = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);
while ($publishing_house = mysqli_fetch_assoc($result)) {
  $publishing_houses []=[
    'id_publishing_house' => $publishing_house['id_publishing_house'],
    'publishing_name' => $publishing_house['publishing_name']
  ];
}
 ?>
