<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Добавить книгу</title>
    <link rel="stylesheet" href="../css/main.css">
    <style>
    .dialog2 {
     width: 30%; /* Ширина блока */
     background: #D4E3A5; /* Цвет фона */
     border: 5px solid #7D9B3D; /* Параметры рамки */
     padding: 1rem; /* Поля */
     margin: 10px; /* Выравниваем по центру */
    }
    .dialog3 {
     width: 30%; /* Ширина блока */
     background: #D4E3A5; /* Цвет фона */
     border: 5px solid #7D9B3D; /* Параметры рамки */
     padding: 1rem; /* Поля */
     margin: 10px; /* Выравниваем по центру */
    }
    .dialog {
     width: 80%; /* Ширина блока */
     background: #D4E3A5; /* Цвет фона */
     border: 5px solid #7D9B3D; /* Параметры рамки */
     padding: 1rem; /* Поля */
     margin: auto; /* Выравниваем по центру */
    }
    .dialog1 {

     border: 0.5px solid;
     padding: 0.5rem;

    }

    </style>

  </head>
  <body>
    <form action="add_book_script.php" method="post" class="dialog">
      <label>Book_name</label>
      <input type="text" name="book_name"> <br>
      <label>Publishing_house</label>
      <select class="dialog1" name="publishing_house">
        <?php
        require_once '../includes/publish.php';
        foreach($publishing_houses as $publishing => $row){
          echo'<option value="'
          .$row['id_publishing_house'].
          '">'
          .$row['publishing_name'].
          '</option>';
        }
         ?>
      </select> <br>
      <label>Year</label>
      <input type="text" name="year_of_printing" ><br>
      <label>Cost</label>
      <input type="number" name="cost" ><br>
      <label>Amount</label>
      <input type="number" name="amount" > <br>
      <label>Author</label>
      <select class="dialog1" multiple name="author[]">
      <?php
      require_once '../includes/author.php';
      foreach($authors as $a => $row){
        echo'<option value="'
        .$row['id_author'].
        '">'
        .$row['name'].
        '</option>';
      }
       ?>
       </select> <br>
      <label>Genre</label>
      <select class="dialog1" multiple name="genre[]">
      <?php
      require_once '../includes/genre.php';
      foreach($genres1 as $g => $row){
        echo'<option value="'
        .$row['id_genre'].
        '">'
        .$row['name'].
        '</option>';
      }
       ?>
       </select> <br>
      <button type="submit">Добавить</button>

    </form>
    <form class="dialog2" action="add_author_script.php" method="post">
      <label>Author</label>
      <input type="text" name="author">
      <label>Email</label>
      <input type="email" name="email">
      <button type="submit">Добавить</button>
    </form>
    <form class="dialog3" action="add_genre_script.php" method="post">
      <label>Genre</label>
      <input type="text" name="genre">
      <button type="submit">Добавить</button>
    </form>
  </body>
</html>
