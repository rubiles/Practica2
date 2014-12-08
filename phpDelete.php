<?php

require './require/comun.php';

$id = Leer::request("id");

$bd = new BaseDatos();
$modelo = new ModeloInmobiliaria($bd);
$r = $modelo->deletePorId($id);

//if($r!=-1)
//{
//   unlink(Configuracion::IMAGE_FOLDER.$id);
$carpeta = Configuracion::IMAGE_FOLDER . $id;
echo $carpeta;
Archivos::eliminarDir($carpeta);


//}    

$bd->closeConexion();

//header("Location: index.php?operacion=Borrar&result=$result&id=$id&num_filas=$cuenta");       
header("Location: editBD_backend.php?operacion=Borrar&result=$r");

