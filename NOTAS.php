<?php

/*
 * GUARDAR LAS IMAGENES EN UNA CARPETA CON EL NOMBRE Q SE GUARDARA EN LA BD
 * AL CREAR USUARIO SE CREARÁ LA CARPETA
  LISTAAR UN DIRECTORIO
  <?php
  $directorio=opendir($dir);
  echo "<b>Directorio actual:</b><br>$dir<br>";
  echo "<b>Archivos:</b><br>";
  while ($archivo = readdir($directorio))
  echo "$archivo<br>";
  closedir($directorio);
  ?>
 * 
 * 
 * 
  BORRAR UN ARCHIVO -> bool unlink ( string $filename [, resource $context ] )
 * unlink('test.html');
 * 
 *
  TABLa:  id, fecha_alta, nombre_vivienda, provincia, direccion, telefono, tipo, precio, m2,
  numero_habitaciones, numero_baños, descripcion, FOTOS,


  create table inmobiliaria(
  id int not null auto_increment primary key,
  fecha_alta date not null,
  nombre_vivienda varchar(60) not null,
  provincia varchar(30) not null,
  direccion varchar(60) not null,
  telefono varchar(20) not null,
  mail varchar(20) not null,
  tipo enum('alquiler', 'venta') not null default 'alquiler',
  precio int not null,
  m2 int,
  n_hab tinyint(1),
  descripcion varchar(200),
  img varchar(80)
  ) engine=innodb charset=utf8 collate=utf8_unicode_ci



  Imagenes posibilidades:
  tabla imagenes:  id, idinmueble, ruta
  carpeta img -> id-> nombre
  img "->id_xxx.jpg"   <----------------------------------

  FRONTEND:
  room finder:  filtrar por:

  WHERE X=Y
  tipo  -> where tipo=
  direccion
  num_habitac

  order by  (ASC y DESC)
  fecha_alta
  m2
  precio
  num_hab


  filtros en tablas -> ver y te enseñe todos los detalles del piso en concreto


  BACKEND:
  insertar / editar -  piso  /borrar

  requisito: imagen multiple.
  -->/ */
?>
