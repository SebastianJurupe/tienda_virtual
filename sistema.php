<?php
require_once("autoload.php");
$objUsuario = new Usuario();

// $objUsuario->insertUsuario([
//   "nombre" => "Sebastian",
//   "telefono" => 987654123,
//   "email" => "weoqweqwe@gmail.com",
// ]);

//Extrae todos los registros
$users = $objUsuario->getUsuarios();
print_r("<pre>");
print_r($users);
print_r("<pre>");

//Update User
// $objUsuario->updateUser([
//   "nombre"=>"Roxana",
//   "telefono"=>21312321,
//   "email"=>"qweqw@gmail.com",
//   "id"=>2,
// ]);

// //Extrae unico registro
// $unic = $objUsuario->getUnicUser(3);
// print_r("<pre>");
// print_r($unic);
// print_r("<pre>");

$delete = $objUsuario->deldeteUser(2);