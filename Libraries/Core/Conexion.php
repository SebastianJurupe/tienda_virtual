<?php
class Conexion
{
  private static $instance;
  private $connection;
  private function __construct()
  {
    $this->make_connection();
  }
  public static function getInstance()
  {
    if (!self::$instance instanceof self) {
      self::$instance = new self();
    }
    return self::$instance;
  }
  public function get_database_instance()
  {
    return $this->connection;
  }

  private function make_connection()
  {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_sistema";

    $connection = new \PDO("mysql:host=$host;dbname=$database", $username, $password);
    $setnames = $connection->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    $this->connection = $connection;
  }
}
