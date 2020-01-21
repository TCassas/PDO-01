<?php
  class BaseDeDatos {
    private $DNS;
    private $username;
    private $password;

    public function __contrsuct($DNS, $username, $password) {
      try {
        $db = new PDO(
          $DNS,
          $username,
          $password
        );

        return $db;
      } catch (PDOexception $exception) {
        return $exception->getMessage();
      }
    }

    public function consultar($query, $db) {
      $stmt = $db->prepare($query);

      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function prepare($sql) {
      $this->conexion->prepare($sql);
    }
  }
?>
