<?php
  class BaseDeDatos {
    private $DNS;
    private $username;
    private $password;

    public function __contrsuct($DNS, $username, $password) {
      $this->DNS = $DNS;
      $this->username = $username;
      $this->password = $password;
    }

    public function conectar() {
      try {
        $this = new PDO( //El $this de aquí no se si esta bien xD
          $this->$DNS,
          $this->$username,
          $this->$password
        );
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

    public function getDns() {
      return $this->DNS;
    }

    public function getUsername() {
      return $this->username;
    }

    public function getPassword() {
      return $this->password;
    }

    public function setDns($DNS) {
      $this->DNS = $DNS;
    }

    public function setUsername($username) {
      $this->username = $username;
    }

    public function setPassword($password) {
      $this->password = $password;
    }
  }
?>
