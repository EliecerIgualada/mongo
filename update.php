<?php
require_once("vendor/autoload.php");
$cadena = "mongodb+srv://usuario:d123456@basedatos.tdcsrym.mongodb.net/?retryWrites=true&w=majority";
$cliente = new MongoDB\Client($cadena);
$conexion=$cliente->selectDatabase("basedatos"); 
$tablaColeccion = $conexion->comentario;
/*$id=$_GET["id"];
$resultado =$tablaColeccion->updateOne(["_id"=>new MongoDB\BSON\ObjectId($id)],
                                      ['$set'=>[
                                        "correo"=>$_GET["correo"],
                                        "mensaje"=>$_GET["mensaje"]]]);
echo "Cantidad de registro actualizados ".$resultado->getModifiedCount();
*/
$resultado =$tablaColeccion->updateOne(["correo"=>$_GET["correo"]],
                                      ['$set'=>[
                                        "correo"=>$_GET["correo"],
                                        "mensaje"=>$_GET["mensaje"]]]);
                                        echo "Cantidad de registros actualizados ".$resultado->getModifiedCount();
?>