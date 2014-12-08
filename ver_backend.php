
<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet"  type="text/css"  href="css/reset.css" >


        <link rel="stylesheet" href="lightbox/css/screen.css">
        <link rel="stylesheet" href="lightbox/css/lightbox.css">
        <link rel="stylesheet"  type="text/css"  href="css/style.css" >

        <script src="js/portafolio.js"></script>
        <script src="lightbox/js/jquery-1.11.0.min.js"></script>
        <script src="lightbox/js/lightbox.js"></script>

        <style>
            input{width:100%; background-color: rgba(255,255,255,0.8)}
            textarea{width:100%; background-color: rgba(255,255,255,0.8)}
            select{width:100%; background-color: rgba(255,255,255,0.8)}
            option::first-letter{text-transform: uppercase; }
        </style>
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

        <div id="caja_contenido">
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
                                echo "<b>Directorio actual:</b><br>$ruta<br>";
                                echo "<b>Archivos:</b><br>";
                                while ($archivo = readdir($directorio)) {
                                    if ($archivo != "." && $archivo != "..") {
                                        ?>                      
                                        <button>
                                            <a href="borrar_imagen.php?img=<?php echo $ruta . "/" . $archivo; ?>&id=<?php echo $id; ?>">
                                                <img src="./images/erase.png" alt="delete image" style="position:relative; top:0px;"/>
                                            </a>
                                          <!--  <input type="checkbox" name="img_borrar[]" value="<?php echo $archivo; ?>" />                   -->
                                        </button> 
                                        <a class="example-image-link" href='<?php echo $ruta . "/" . $archivo; ?>' data-lightbox="example-set1" data-title=""><img class="example-image" src="<?php echo $ruta . '/' . $archivo; ?>" alt=""/></a>

                                        <!--  <figure>
                                              <img src="<?php echo $ruta . "/" . $archivo; ?>" width="100px" />
                                              <figcaption><?php echo $ruta . "/" . $archivo; ?></figcaption>
                                          </figure>
                                        -->
                                        <?php
                                    }
                                }
                                closedir($directorio);
                            }
                            else
                                echo "el directorio al que intentas acceder no existe.";
                        }
                        else
                            echo "no llegó el id. prueba con ?id=11";
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
                <table>
                    <?php
                    foreach ($filas as $indice => $objeto) {
                        ?>
                        <tr>
                            <td> <label for="id">ID:</label> </td>
                            <td>  <input type="text" id="id" name="id" value="<?php echo $objeto->getId(); ?>" readonly/></td> 
                        </tr>
                        <tr>
                            <td> <label for="nombre_vivienda">Nombre:</label> </td>
                            <td>  <input type="text" id="nombre_vivienda" name="nombre_vivienda" value="<?php echo $objeto->getNombre_vivienda(); ?>" required/></td> 
                        </tr>

                        <tr>
                            <td> <label for="provincia">provincia:</label> </td>
                            <td>
                                <select id="provincia" name="provincia">
                                    <option value='<?php echo $objeto->getProvincia(); ?>'><?php echo $objeto->getProvincia(); ?></option>
                                    <option value='alava'>Alava</option>
                                    <option value='albacete'>Albacete</option>
                                    <option value='alicante'>Alicante</option>
                                    <option value='almeria'>Almeria</option>
                                    <option value='asturias'>Asturias</option>
                                    <option value='avila'>Avila</option>
                                    <option value='badajoz'>Badajoz</option>
                                    <option value='barcelona'>Barcelona</option>
                                    <option value='burgos'>Burgos</option>
                                    <option value='caceres'>Caceres</option>
                                    <option value='cadiz'>Cadiz</option>
                                    <option value='cantabria'>Cantabria</option>
                                    <option value='castellon'>Castellon</option>
                                    <option value='ceuta'>Ceuta</option>
                                    <option value='ciudad real'>Ciudad Real</option>
                                    <option value='cordoba'>Cordoba</option>
                                    <option value='cuenca'>Cuenca</option>
                                    <option value='girona'>Girona</option>
                                    <option value='las palmas'>Las Palmas</option>
                                    <option value='granada'>Granada</option>
                                    <option value='guadalajara'>Guadalajara</option>
                                    <option value='guipuzcoa'>Guipuzcoa</option>
                                    <option value='huelva'>Huelva</option>
                                    <option value='huesca'>Huesca</option>
                                    <option value='illes balears'>Illes Balears</option>
                                    <option value='jaen'>Jaen</option>
                                    <option value='a coruña'>A Coruña</option>
                                    <option value='la rioja'>La Rioja</option>
                                    <option value='leon'>Leon</option>
                                    <option value='lleida'>Lleida</option>
                                    <option value='lugo'>Lugo</option>
                                    <option value='madrid'>Madrid</option>
                                    <option value='malaga'>Malaga</option>
                                    <option value='melilla'>Melilla</option>
                                    <option value='murcia'>Murcia</option>
                                    <option value='navarra'>Navarra</option>
                                    <option value='ourense'>Ourense</option>
                                    <option value='palencia'>Palencia</option>
                                    <option value='pontevedra'>Pontevedra</option>
                                    <option value='salamanca'>Salamanca</option>
                                    <option value='segovia'>Segovia</option>
                                    <option value='sevilla'>Sevilla</option>
                                    <option value='soria'>Soria</option>
                                    <option value='tarragona'>Tarragona</option>
                                    <option value='tenerife'>Tenerife</option>
                                    <option value='teruel'>Teruel</option>
                                    <option value='toledo'>Toledo</option>
                                    <option value='valencia'>Valencia</option>
                                    <option value='valladolid'>Valladolid</option>
                                    <option value='vizcaya'>Vizcaya</option>
                                    <option value='zamora'>Zamora</option>
                                    <option value='zaragoza'>Zaragoza</option>
                                </select>  

                            </td> 
                        </tr>

                        <tr>
                            <td> <label for="direccion">direccion:</label> </td>
                            <td> <input type="text" id="direccion" name="direccion"  value="<?php echo $objeto->getDireccion(); ?>" required/></td> 
                        </tr>

                        <tr>
                            <td> <label for="telefono">telefono:</label> </td>
                            <td> <input type="tel" id="telefono" name="telefono"  value="<?php echo $objeto->getTelefono(); ?>" required/></td> 
                        </tr>

                        <tr>
                            <td> <label for="mail">mail:</label> </td>
                            <td>  <input type="text" id="mail" name="mail"  value="<?php echo $objeto->getMail(); ?>" required/></td> 
                        </tr>

                        <tr>
                            <td> <label for="tipo">tipo:</label> </td>
                            <td>
                                <select id="tipo" name="tipo">
                                    <?php
                                    if ($objeto->getTipo() == "alquiler") {
                                        ?>
                                        <option value="alquiler" selected>Alquiler</option>
                                        <option value="venta">Venta</option>
                                        <?php
                                    } else {
                                        ?>
                                        <option value="alquiler">Alquiler</option>
                                        <option value="venta" selected>Venta</option>
                                    <?php } ?>
                                </select>    
                            </td> 
                        </tr>

                        <tr>
                            <td> <label for="precio">precio: </label></td>
                            <td> <input type="number" id="precio" name="precio"  value="<?php echo $objeto->getPrecio(); ?>"  required/></td> 
                        </tr>

                        <tr>
                            <td><label for="m2">m2: </td>
                            <td>  <input type="number" id="m2" name="m2"  value="<?php echo $objeto->getM2(); ?>"  required/></td> 
                        </tr>

                        <tr>
                            <td><label for="n_hab">n_hab: </label></td>
                            <td> <input type="number" id="nombre" name="n_hab"  value="<?php echo $objeto->getN_hab(); ?>"  required/></td> 
                        </tr>
                        <tr>
                            <td><label for="descripcion">descripcion:</label> </td>
                            <td><textarea id="descripcion" name="descripcion" rows="4" cols="100" maxlength="200"> <?php echo $objeto->getPrecio(); ?></textarea></td>
                        </tr>

                        <tr>
                            <td> <label for="imagenes">Imagenes:</label> </td>
                            <td> <input type="file" id="imagenes" name="imagenes[]"  multiple="multiple" accept="image/*"/></td>    
                        </tr>
                        <tr colspan=""2>
                            <td colspan="2"> <input type="submit" id="btn_edit" value="ACTUALIZAR" /></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>

            </form>

            <br/><br/><br/><br/><br/>
        </div> 
    </body>
</html>
