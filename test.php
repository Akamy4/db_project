<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title></title>
<style>
.dialog {
width: 80%;
background: #D4E3A5;
border: 5px solid #7D9B3D;
padding: 1rem;
margin: auto;
}
</style>
</head>
<body>
<h2 class="dialog">Результат поиска:</h2>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'project');
if(isset($_POST['search'])){
$search = $_POST['search'];
$query = "SELECT * FROM books, publishing_house, authorship, author
WHERE books.id_publishing_house=publishing_house.id_publishing_house
AND authorship.id_author=author.id_author AND authorship.id_book=books.id_book
AND book_name like '%$search%'";
$query_book = mysqli_query($connection, $query);
$query = "SELECT * FROM books, genres_of_book, genres
WHERE genres_of_book.id_genre = genres.id_genre AND genres_of_book.id_book = books.id_book AND
book_name like '%$search%'";
$query_genre = mysqli_query($connection, $query);
// if($query){
// $query_author = mysqli_query($connection, "SELECT * FROM authorship, author
// WHERE authorship.id_author=author.id_author AND authorship.id_book= '$query_book'");
// }
} else {
$query = mysqli_query($connection, "SELECT * FROM books, genres, genres_of_book, authorship, author, publishing_house");
}
// require_once 'includes/authorship.php';
require_once 'includes/books.php';
// require_once 'includes/publish.php';
while ($books = mysqli_fetch_assoc($query_book)) {
$books2 []=[
'id_book' => $books['id_book'],
'name' => $books['book_name'],
'id_author' => $books['id_author'],
'author_name' => $books['name'],
'id_publishing_house' => $books['id_publishing_house'],
'publishing_name' => $books['publishing_name'],
];
}
while ($genre = mysqli_fetch_assoc($query_genre)) {
$genres []=[
'id_genre' => $genre['id_genre'],
'genre_name' => $genre['genre_name']
];
}

        foreach ($books2 as $key => $b) {
            if($b['id_book']!=$books2[0]['id_book']){
        } else {
            echo '<div class="dialog">'.$b['name'].'<br>';
            echo $books2[0]['publishing_name'].'<br>
            Авторы:';
        foreach ($books2 as $y => $a) {
            // for($i=0; $i < count ($books2); $i++){
            echo $a['author_name'].'| ';
        }
            echo '<br>';
        foreach ($genres as $key => $value) {
            echo $value['genre_name'].'| ';
        }

        echo '</div>';
        }
      }

?>

</body>
</html>
