<?php
  include_once("partials/header.html");

  //Aquí se define la variable $db
  require("pdo.php");

  $tipo = $_GET["tipo"];
  $buscar = $_GET["buscar"];

  $query = $db->prepare("SELECT * FROM $tipo WHERE title LIKE :buscar");
  $query->bindValue(":buscar", "%$buscar%");

  $query->execute();

  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  ?>
    <h1>Resultados:</h1>
    <?php if(empty($result)) { ?>
      <p>No hubo coincidencias con su busqueda</p>
    <?php } else { ?>
      <ul>
        <?php forEach($result as $pelicula) { ?>
          <li><?= $pelicula["title"] ?></li>
        <?php } ?>
      </ul>
    <?php } ?>

    <a href="/PDO-01/buscador.php">Buscar otra vez</a>
  <?php

  include_once("partials/footer.html");
?>
