<?php
  include_once("partials/header.html");

  //Aquí se define la variable $db
  require("pdo.php");

  //El valor de estas variables pueden variar dependiendo de la configuracion que se tenga
  $username = "root";
  $password = "admin";

  //Tomo el valor enviado por la URL
  $id = $_GET["id"];

  $query = $db->prepare(
           "SELECT series.title as Titulo, COUNT(episodes.id) as 'Cantidad de episodios', genres.name as Genero
            FROM series
            INNER JOIN seasons ON seasons.serie_id = series.id
            INNER JOIN episodes ON episodes.season_id = seasons.id
            INNER JOIN genres ON series.genre_id = genres.id
            GROUP BY series.title, series.id
            HAVING series.id = $id;
           ");

  $query->execute();

  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  ?>
    <h1><?= $result[0]["Titulo"] ?></h1>
    <p>Episodios: <?= $result[0]["Cantidad de episodios"] ?></p>
    <p>Genero: <?= $result[0]["Genero"] ?></p>
    <a href="/PDO-01/series.php">Volver</a>
  <?php

  include_once("partials/footer.html");
?>
