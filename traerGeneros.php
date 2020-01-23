<?php
  //Aquí se define la variable $db
  require("pdo.php");

  //El valor de estas variables pueden variar dependiendo de la configuracion que se tenga
  $username = "root";
  $password = "admin";

  $query = $db->prepare("SELECT name FROM genres");

  $query->execute();

  $result = $query->fetchAll(PDO::FETCH_ASSOC);

  $i = 1;
  forEach($result as $genero) {
    ?> <option value="<?= $i ?>"> <?=$i . '- ' . $genero["name"] ?></option> <?php
    $i++;
  }
?>
