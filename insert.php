<?php
require_once("vendor/autoload.php");
$cadena = "mongodb+srv://usuario:d123456@basedatos.tdcsrym.mongodb.net/?retryWrites=true&w=majority";
$cliente = new MongoDB\Client($cadena);
$conexion=$cliente->selectDatabase("basedatos"); 

$tablaColeccion = $conexion->comentario;
$resultado=$tablaColeccion->insertOne(["nombre"=>$_GET["n"], "correo"=>$_GET["c"],"mensaje"=>$_GET["m"],"apellido"=>$_GET["a"]]);
echo "Se insertó elo registro con el id".$resultado->getInsertedId(); 

?>