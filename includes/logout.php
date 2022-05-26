<?php
session_start();
unset($_SESSION['visitor']);
header('Location: ../index.php');
 ?>
