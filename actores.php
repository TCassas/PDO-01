<?php
  include_once("partials/header.html");

  //Aquí se define la variable $db
  require("pdo.php");

  //El valor de estas variables pueden variar dependiendo de la configuracion que se tenga
  $username = "root";
  $password = "admin";

  $query = $db->prepare("SELECT * FROM actors");

  $query->execute();

  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  ?>
    <h1>Actores:</h1>
    <ul>
      <?php forEach($result as $actor) { ?>
        <li><?= $actor["first_name"] ?> <?= $actor["last_name"] ?></li>
      <?php } ?>
    </ul>
  <?php

  include_once("partials/footer.html");
?>
