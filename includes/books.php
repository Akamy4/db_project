<?php
$query="SELECT * FROM books";
$result = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);
while ($books = mysqli_fetch_assoc($result)) {
  $books2 []=[
    'id_book' => $books['id_book'],
    'name' => $books['book_name'],
    'cost' => $books['cost']
  ];
}
?>
