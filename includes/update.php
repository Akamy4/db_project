<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Изменить Данные</title>

    <style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
    </style>

  </head>
  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>Surname</th>
        <th>Name</th>
        <th>Login</th>
        <th>Password</th>
        <th>Role</th>
      </tr>

        <?php
        require_once 'connection.php';
        $visitors = mysqli_query($connection, "SELECT * FROM visitor");
        $visitors = mysqli_fetch_all($visitors);
        foreach ($visitors as $key) {
        ?>

        <tr>
            <td><?=$key[0]?></td>
            <td><?=$key[1]?></td>
            <td><?=$key[2]?></td>
            <td><?=$key[3]?></td>
            <td><?=$key[4]?></td>
            <td><?=$key[5]?></td>
            <td> <a href="update_script.php?id_visitor=<?=$key[0]?>"> Изменить </a> </td>
        </tr>';
        <!-- echo   '
        <tr>
            <td>'.$key[0].'</td>
            <td>'.$key[1].'</td>
            <td>'.$key[2].'</td>
            <td>'.$key[3].'</td>
            <td>'.$key[4].'</td>
            <td>'.$key[5].'</td>
            <td> <a href="update_script.php?id_visitor='.$key[0].'"> Изменить </a> </td>
        </tr>'; -->
        <?php
        }
         ?>




    </table>
  </body>
</html>
