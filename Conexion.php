<?php

class Conexion
{
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "db_sistema";
  private $conect;

  public function __construct()
  {
    $connection = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=utf8";
    try {
      $this->conect = new PDO($connection, $this->username, $this->password);

      //Ayuda a detectar los errores en la conexion
      $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      $this->conect = "Error de conexion";
      echo "ERROR: " . $e->getMessage();
    }
  }
}
