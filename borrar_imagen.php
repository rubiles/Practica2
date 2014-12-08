<?php

require './require/comun.php';

$id = Leer::get("id");
$archivo = Leer::get("img");

unlink($archivo);
header("Location:ver_backend.php?id=$id");

