<?php
  include_once("partials/header.html");

  //Aquí se define la variable $db
  require("pdo.php");

  //El valor de estas variables pueden variar dependiendo de la configuracion que se tenga
  $username = "root";
  $password = "admin";

  $query = $db->prepare("SELECT * FROM series");

  $query->execute();

  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  ?>
    <ul>
      <?php forEach($result as $serie) { ?>
        <li><?= $serie["title"] ?>. <a href="serie.php/?id=<?= $serie["id"] ?>">Ir</a></li>
      <?php } ?>
    </ul>
  <?php

  include_once("partials/footer.html");
?>
