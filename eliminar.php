<?php
  //Aquí se define la variable $db
  require("pdo.php");

  $id = $_GET['id'];

  $query = $db->prepare("DELETE FROM movies WHERE id = $id");
  $query->execute();

  header("Location: /PDO-01/movies.php");

?>
