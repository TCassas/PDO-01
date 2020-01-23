<?php
  include_once("partials/header.html");

  //Aquí se define la variable $db
  require("pdo.php");

  //El valor de estas variables pueden variar dependiendo de la configuracion que se tenga
  $username = "root";
  $password = "admin";

  $query = $db->prepare("SELECT name, title FROM genres LEFT JOIN movies ON genres.id = genre_id WHERE genres.id = :id");

  ?>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
  <table>
    <tr>
      <th>Genero</th>
      <th>Pelicula</th>
    </tr>
    <?php for($i = 1; $i < 13; $i++) {
      $query->bindValue(":id", $i);
      $query->execute();
      $result = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>
      <tr>
        <td rowspan="<?= count($result) + 1?>"><?= $result[0]['name'] ?></td>
        <?php forEach($result as $pelicula) { ?>
          <tr>
            <td><?php if($pelicula['title'] == NULL) { echo "<em>No hay peliculas asociadas a este genero</em>"; } else { echo $pelicula['title'];}?></td>
          </tr>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>
  <?php

  include_once("partials/footer.html");
?>
