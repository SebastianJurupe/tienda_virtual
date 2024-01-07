<?php
require_once("autoload.php");
$objUsuario = new Usuario();

$objUsuario->insertUsuario([
  "nombre" => "Sebastian",
  "telefono" => 987654123,
  "email" => "weoqweqwe@gmail.com",
]);
