<?php
  include_once("partials/header.html");

  //Aquí se define la variable $db
  require("pdo.php");

  $title = $_POST['title'];
  $rating = $_POST['rating'];
  $awards = $_POST['awards'];
  $lenght = $_POST['length'];
  $year = $_POST['year'];
  $month = $_POST['month'];
  $day = $_POST['day'];
  $genre = $_POST['genre'];

  $query = $db->prepare("INSERT INTO movies VALUES(default, NULL, NULL, :title, :rating, :awards, :fecha_de_creacion, :lenght, :genre)");
  $query->bindValue(":title", $title);
  $query->bindValue(":rating", $rating);
  $query->bindValue(":awards", $awards);
  $query->bindValue(":lenght", $lenght);
  $query->bindValue(":fecha_de_creacion", $year . '-' . $month . '-' . $day);
  $query->bindValue(":genre", $genre);

  $query->execute();

  Header('Location: movies.php');

  include_once("partials/footer.html");
?>
