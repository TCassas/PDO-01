<?php
  try {
    $db = new PDO(
      "mysql:host=127.0.0.1;dbname=movies_db;port3306",
      "root",
      "admin"
    );

    return $db;
  } catch (PDOexception $exception) {
    return $exception->getMessage();
  }
?>
