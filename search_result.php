
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
       $query = "SELECT * FROM books
       WHERE book_name like '%$search%'";
      $query_book = mysqli_query($connection,$query);
       $query = "SELECT * FROM books, authorship, author
     WHERE authorship.id_author=author.id_author AND authorship.id_book=books.id_book
      AND book_name like '%$search%'";
       $query_author = mysqli_query($connection, $query);
       $query = "SELECT * FROM books, genres_of_book, genres
        WHERE genres_of_book.id_genre = genres.id_genre AND genres_of_book.id_book = books.id_book AND
        book_name like '%$search%'";
        $query_genre = mysqli_query($connection, $query);
        $query = "SELECT * FROM books, publishing_house
         WHERE books.id_publishing_house = publishing_house.id_publishing_house  AND book_name like '%$search%'";
         $query_publish = mysqli_query($connection, $query);
     } else {
       $query =  "SELECT * FROM books, genres, genres_of_book, authorship, author, publishing_house";
     }
       // require_once 'includes/books.php';
       while ($books = mysqli_fetch_assoc($query_book)) {
         $books1 []=[
           'id_book' => $books['id_book'],
           'name' => $books['book_name'],
           'cost' => $books['cost']
         ];
       }
       while ($publish = mysqli_fetch_assoc($query_publish)) {
         $publish1 []=[
           'id_book' => $publish['id_book'],
           'id_publishing_house' => $publish['id_publishing_house'],
           'publishing_name' => $publish['publishing_name']
         ];
       }
       while ($author = mysqli_fetch_assoc($query_author)) {
        $authors []=[
          'id_book' => $author['id_book'],
           'id_author' => $author['id_author'],
           'author_name' => $author['name']
        ];
      }

       while ($genre = mysqli_fetch_assoc($query_genre)) {
        $genres []=[
          'id_book' => $genre['id_book'],
          'id_genre' => $genre['id_genre'],
          'genre_name' => $genre['genre_name']
        ];
      }
      // foreach($books1 as $key => $b) {
        foreach($books1 as $key => $b1) {
          // if($b['id_book']==$b1['id_book']){
              echo '<div class="dialog">'.$b1['name'].'<br>';
              echo $b1['cost'].' Тг<br>';
            foreach($publish1 as $key => $value) {
              if($value['id_book']==$b1['id_book']){
                  echo $value['publishing_name'].'| ';
              }
            }
            echo ' <br> Авторы: ';
            foreach($authors as $y => $a) {
              if($a['id_book']==$b1['id_book']){
                  echo $a['author_name'].'| ';
              }
            }
            echo '<br>';
            echo 'Жанр: ';
            foreach ($genres as $key => $value) {
              if($value['id_book']==$b1['id_book']){
                 echo $value['genre_name'].'| ';
             }
            }
          // }
          echo '</div>';
        }
      // }
      ?>
  </body>
</html>
