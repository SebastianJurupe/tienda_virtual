<?php

require_once("autoload.php");
class Mysql
{
  private $connection;
  private $strquery;
  private $arrValues;
  public function __construct()
  {
    $this->connection = Conexion::getInstance()->get_database_instance();
  }

  //Insertar un registro
  public function insert(string $query, array $arrValues)
  {
    $this->strquery = $query;
    $this->arrValues = $arrValues;

    $insert = $this->connection->prepare($this->strquery);
    $resInsert = $insert->execute($this->arrValues);
    if ($resInsert) {
      $lastInsert = $this->connection->lastInsertId();
    } else {
      $lastInsert = 0;
    }
    return $lastInsert;
  }

  //Buscar un registro
  public function select(string $query)
  {
    $this->strquery = $query;
    $result = $this->connection->prepare($this->strquery);
    $result->execute();
    $data = $result->fetch(PDO::FETCH_ASSOC);
    return $data;
  }

  //Devuelve todos los registros
  public function select_all(string $query){
    $this->strquery = $query;
    $result = $this->connection->prepare($this->strquery);
    $result->execute();
    $data = $result->fetchall(PDO::FETCH_ASSOC);
    return $data;
  }

  //Actualiza los registros
  public function update(string $query, array $arrValues){
    $this->strquery = $query;
    $this->arrValues = $arrValues;
    $update = $this->connection->prepare($this->strquery);
    $resExecute = $update->execute($this->arrValues);
    return $resExecute;
  }

  //Eliminar un registro
  public function delete(string $query){
    $this->strquery = $query;
    $result = $this->connection->prepare($this->strquery);
    $result->execute();
    return $result;
  }
  
}
