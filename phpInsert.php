

<?php

require './require/comun.php';
$bd = new BaseDatos();

if (!$bd->isConectado()) {
    header("Location: index.php?operacion=-1");
    exit();
}


$nombre_vivienda = Leer::post("nombre_vivienda");
$provincia = Leer::post("provincia");
echo "<hr>" . $provincia;
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
$inmobiliaria = new Inmobiliaria(null, "curdate()", $nombre_vivienda, $provincia, $direccion, $telefono, $mail, $tipo, $precio, $m2, $n_hab, $descripcion);
$modelo = new ModeloInmobiliaria($bd);
$r = $modelo->add($inmobiliaria);

$ruta = Configuracion::IMAGE_FOLDER . $r;
$bd->closeConexion();
if ($r != -1) {
    $carpeta = mkdir($ruta, Configuracion::MASCARA_PERMISOS, true);   // -->  Subir::$destino ./images/id_X
    $imagenes->setDestino($ruta);
    if ($carpeta) {
        $imagenes->subirMultiple();
        echo $imagenes->getMensajeMultiple();
        header("Location: index_backend.php?operacion=Insertar&id=$r&mensaje='" . $imagenes->getMensajeMultiple() . "'");
    }
    else
        header("Location: index_backend.php?operacion=Insertar&id=$r&mensaje='Casa añadida con exito. Aunque hubo un fallo al subir imagenes'");
    //
}
else
    header("Location: index_backend.php?operacion=Insertar&id=$r&mensaje='Error al insertar'");


 
