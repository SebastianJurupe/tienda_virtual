<?php
class homeModel extends Mysql
{
  public function __construct()
  {
    parent::__construct();
  }

  public function setUser(string $nombre, int $edad)
  {
    $query_insert = "INSERT INTO usuario(nombre,edad) VALUES (?,?)";
    $arrData = array($nombre, $edad);
    $request_insert = $this->insert($query_insert, $arrData);
    return $request_insert;
  }

  public function getUser(string $id)
  {
    $query = "SELECT * FROM usuario WHERE id=$id";
    $request = $this->select($query);
    return $request;
  }

  public function updateUser(int $id, string $nombre, int $edad)
  {
    $query_update = "UPDATE usuario SET nombre = ?, edad = ? WHERE id = $id";
    $arrData = array($nombre, $edad);
    $request = $this->update($query_update, $arrData);
    return $request;
  }

  public function getUsers(){
    $query_all = "SELECT * FROM usuario";
    $request = $this->select_all($query_all);
    return $request;
  }

  public function deleteUser($id){
    $query_delete = "DELETE FROM usuario WHERE id = $id";
    $request = $this->delete($query_delete);
    return $request;
  }
}
