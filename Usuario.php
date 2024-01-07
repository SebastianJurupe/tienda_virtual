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
    $query = "SELECT * FROM usuario";
    $stmt = $this->connection->prepare($query);

    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }

  public function updateUser($data)
  {
    $query = "UPDATE usuario SET nombre=:nombre, telefono=:telefono, email=:email WHERE id=:id";
    $stmt = $this->connection->prepare($query);

    $stmt->bindValue(':nombre', $data['nombre']);
    $stmt->bindValue(':telefono', $data['telefono']);
    $stmt->bindValue(':email', $data['email']);
    //vincular el valor de :id
    $stmt->bindValue(':id', $data['id']); 
    $stmt->execute();
  }

  public function getUnicUser($id){
    $query = "SELECT * FROM usuario WHERE id=:id";
    $stmt = $this->connection->prepare($query);

    $stmt->execute([
      ":id" => $id,
    ]);

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
  }

  public function deldeteUser($id){
    $query = "DELETE FROM usuario WHERE id=:id";
    $stmt = $this->connection->prepare($query);

    $stmt->execute([
      ":id" => $id,
    ]);

    return $stmt;
  }
}
