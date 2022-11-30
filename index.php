<?php
require_once("vendor/autoload.php");
$cadena = "mongodb+srv://usuario:d123456@basedatos.tdcsrym.mongodb.net/?retryWrites=true&w=majority";
$cliente = new MongoDB\Client($cadena);
$conexion=$cliente->selectDatabase("basedatos"); 
$tablaColeccion = $conexion->comentario;

$resultado=$tablaColeccion->find();
#$resultado=$tablaColeccion->find(["correo"=$_GET["c"]]); aquí se utiliza para los inicio de sesiones
foreach($resultado as $r){
    $apellido=isset($r->apellido)?$r->apellido:"";
echo $r->_id." - ".$r->nombre ." - ".$r->correo." - ".$r->mensaje." - ".$apellido."<br>"; 
}
?>