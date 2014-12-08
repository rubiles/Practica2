
<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet"  type="text/css"  href="css/reset.css" >


        <link rel="stylesheet" href="lightbox/css/screen.css">
        <link rel="stylesheet" href="lightbox/css/lightbox.css">
        <link rel="stylesheet"  type="text/css"  href="css/style.css" >

        <script src="js/portafolio.js"></script>
        <script src="lightbox/js/jquery-1.11.0.min.js"></script>
        <script src="lightbox/js/lightbox.js"></script>

    </head>

    <body>
        <div id="caja_header">

            <header>
                <img id="logo" src="./images/logo.png" alt="Logo" />

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Room Finder</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>

                <a href="index_backend.php"><img id="login" src="./images/login.png" alt="Log In"/></a>
            </header>
        </div>
    <center>
        <div id="caja_contenido">
            <br><br><br>
            <div class="container">
                <div class="image-row">
                    <div class="image-set" class="fotos">


                        <?php
                        require './require/comun.php';
                        $id = Leer::get("id");

                        if ($id) {
                            $ruta = Configuracion::IMAGE_FOLDER . $id;
                            if (file_exists($ruta)) {
                                $directorio = opendir($ruta);
                                while ($archivo = readdir($directorio)) {
                                    if ($archivo != "." && $archivo != "..") {
                                        ?> 
                                        <a class="example-image-link" href='<?php echo $ruta . "/" . $archivo; ?>' data-lightbox="example-set1" data-title=""><img class="example-image" src="<?php echo $ruta . '/' . $archivo; ?>" alt=""/></a>

                                        <?php
                                    }
                                }
                                closedir($directorio);
                            }
                            else
                                echo "<h2>El directorio al que intentas acceder no existe.</h2>";
                        }
                        else
                            echo "<h2>No llegó el id. prueba con ?id= un numero</h2>";
                        ?>
                    </div>
                </div>
            </div>
            <?php
            $bd = new BaseDatos();
            $modelo = new ModeloInmobiliaria($bd);
// $filas=$modelo->getList("1=1", array(), "fecha_alta DESC");     //ordenados por fecha
            $array = array();
            $array["id"] = $id;
            $filas = $modelo->getList("id= :id", $array);     //ordenados por fecha
            ?>
            <form action="phpUpdate.php"  method="post"  enctype="multipart/form-data">
                <table class="tg">
                    <?php
                    foreach ($filas as $indice => $objeto) {
                        ?>
                        <tr>
                            <th> ID: </th>
                            <td><?php echo $objeto->getId(); ?></td> 
                        </tr>
                        <tr>
                            <th> Nombre: </th>
                            <td><?php echo $objeto->getNombre_vivienda(); ?></td> 
                        </tr>

                        <tr>
                            <th>Provincia:</th>
                            <td><?php echo $objeto->getProvincia(); ?></td> 
                        </tr>

                        <tr>
                            <th>Direccion: </th>
                            <td> <?php echo $objeto->getDireccion(); ?></td> 
                        </tr>

                        <tr>
                            <th>Telefono:</th>
                            <td> <?php echo $objeto->getTelefono(); ?></td> 
                        </tr>

                        <tr>
                            <th> Email: </th>
                            <td> <?php echo $objeto->getMail(); ?></td> 
                        </tr>

                        <tr>
                            <th> Tipo: </th>
                            <td> <?php echo $objeto->getTipo(); ?>  </td> 
                        </tr>

                        <tr>
                            <th> Precio:</th>
                            <td> <?php echo $objeto->getPrecio(); ?></td> 
                        </tr>

                        <tr>
                            <th>m2: </th>
                            <td><?php echo $objeto->getM2(); ?></td> 
                        </tr>

                        <tr>
                            <th>Número de Habitaciones: </th>
                            <td> <?php echo $objeto->getN_hab(); ?></td> 
                        </tr>
                        <tr>
                            <th>Descripcion: </th>
                            <td><?php echo $objeto->getDescripcion(); ?></td>
                        </tr>

                        <tr colspan=""2>
                            <th colspan="2"><a  href="index.php">VOLVER</a></th>
                        </tr>
                        <?php
                    }
                    ?>
                </table>

            </form>

            <br/><br/><br/><br/><br/>
        </div> 
    </center>
</body>
</html>
