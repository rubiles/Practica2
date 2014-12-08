<?php

require './require/comun.php';
$bd = new BaseDatos();

if (!$bd->isConectado()) {
    header("Location: index.php?operacion=-1");
    exit();
}

$id = Leer::post("id");
$nombre_vivienda = Leer::post("nombre_vivienda");
$provincia = Leer::post("provincia");
$direccion = Leer::post("direccion");
$telefono = Leer::post("telefono");
$mail = Leer::post("mail");
$tipo = Leer::post("tipo");
$precio = Leer::post("precio");
$m2 = Leer::post("m2");
$n_hab = Leer::post("n_hab");
$descripcion = Leer::post("descripcion");
//$img=  Leer::post("img");
$imagenes = new Subir("imagenes");
$imagenes->addExtension("jpg");
$imagenes->addExtension("jpeg");
$imagenes->addExtension("png");
$imagenes->addExtension("gif");
$imagenes->addTipo("images/*");
$imagenes->setMaximo(10 * 1024 * 1024);
$inmobiliaria = new Inmobiliaria($id, null, $nombre_vivienda, $provincia, $direccion, $telefono, $mail, $tipo, $precio, $m2, $n_hab, $descripcion);
$modelo = new ModeloInmobiliaria($bd);
$r = $modelo->edit($inmobiliaria);

$ruta = Configuracion::IMAGE_FOLDER . $id;
$imagenes->setDestino($ruta);
$bd->closeConexion();
if ($r != -1) {

    if (file_exists($ruta)) {
        $imagenes->subirMultiple();
        echo $imagenes->getMensajeMultiple();
        header("Location: index_backend.php?operacion=Insertar&id=$r&mensaje='" . $imagenes->getMensajeMultiple() . "'");
    }
    else
        header("Location: index_backend.php?operacion=Insertar&id=$r&mensaje='Casa añadida con exito<br/>Aunque hubo un fallo al subir imagenes'");
    //
}
//else
  //   header("Location: index_backend.php?operacion=Insertar&id=$r&mensaje='Error al actualizar'");


 
