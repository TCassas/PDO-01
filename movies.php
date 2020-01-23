<?php
  include_once("partials/header.html");

  //Aquí se define la variable $db
  require("pdo.php");

  $query = $db->prepare("SELECT * FROM movies");

  $query->execute();

  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  ?>
    <ul>
      <?php forEach($result as $pelicula) { ?>
        <li><?= $pelicula["title"] ?></li>
      <?php } ?>
    </ul>

    <a href="agregarPelicula.php">Agregar una pelicula nueva</a><br>
    <a href="buscador.php">Buscar una pelicula</a><br>
    <a href="generos.php">Listar generos y sus peliculas</a>
  <?php

  include_once("partials/footer.html");
?>
