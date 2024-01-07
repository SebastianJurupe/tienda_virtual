<?php

require_once("autoload.php");
class Usuario
{
  private $connection;
  public function __construct()
  {
    $this->connection = Conexion::getInstance()->get_database_instance();
  }

  public function insertUsuario($data)
  {

    $query = "INSERT INTO usuario(nombre, telefono, email) VALUES (:nombre, :telefono, :email)";
    $stmt = $this->connection->prepare($query);


    $stmt->bindValue(':nombre', $data['nombre']);
    $stmt->bindValue(':telefono', $data['telefono']);
    $stmt->bindValue(':email', $data['email']);

    $stmt->execute();
  }

  public function getUsuarios()
  {
  }
}
