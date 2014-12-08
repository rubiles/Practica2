<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="lightbox/css/screen.css">
        <link rel="stylesheet" href="lightbox/css/lightbox.css">
        <link rel="stylesheet"  type="text/css"  href="css/style.css" >

        <script src="lightbox/js/jquery-1.11.0.min.js"></script>
        <script src="lightbox/js/lightbox.js"></script>

        <script type="text/javascript">
            function updateValue(val) {
                val.nextSibling.textContent = val.value;
            }

        </script>

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


            <?php
            require './require/comun.php';

            $n_hab = Leer::get("n_hab");
            $m2 = Leer::get("m2");
            $precio = Leer::get("precio");
            $provincia = Leer::get("provincia");

            $condicion = "";
            $parametros = array();
            $orderby = "";
            if (!Leer::get("orderby"))
                $orderby = "1";
            else
                $orderby = Leer::get("orderby") . " " . Leer::get("order");


            if ($n_hab > 0) {
                $condicion.="n_hab>= :n_hab";
                $parametros["n_hab"] = $n_hab;
            }
            if ($m2 > 0) {
                if ($condicion != "")
                    $condicion.=" AND ";

                $condicion.="m2>= :m2 ";
                $parametros["m2"] = $m2;
            }
            if ($precio > 0) {
                if ($condicion != "")
                    $condicion.=" AND ";

                $condicion.="precio<= :precio";
                $parametros["precio"] = $precio;
            }
            if ($provincia != "") {
                if ($condicion != "")
                    $condicion.=" AND ";

                $condicion.="provincia LIKE :provincia";
                $parametros["provincia"] = $provincia;
            }

            $bd = new BaseDatos();
            $modelo = new ModeloInmobiliaria($bd);
            // $filas=$modelo->getList("1=1", array(), "fecha_alta DESC");     //ordenados por fecha
            if ($condicion == "")
                $condicion = "1=1";
            $filas = $modelo->getList($condicion, $parametros, $orderby);     //ordenados por fecha
            ?>
            <center>
                <h1>ROOM FINDER</h1>          
                <div id="div_search">
                    <form action="index.php" method="get" /> <br/>

                    <table class="tg2">
                        <tr>
                            <th class="tg-hgcj">Nº de Habitaciones</th>
                            <th class="tg-hgcj">m2</th>
                            <th class="tg-hgcj" >Precio</th>
                            <th class="tg-hgcj">Provincia</th>
                        </tr>
                        <tr>
                            <td class="tg-lkh3">
                                <input type="range" min="0" max="30" name="n_hab" value="0" onchange="updateValue(this)"/>

                            </td>

                            <td class="tg-tofn">
                                <input type="range" min="0" max="500" name="m2"  value="0" onchange="updateValue(this)"/>
                            </td>
                            <td  class="tg-lkh3"> Maximo:
                                <input type="range" min="0" max="300000" name="precio"  value="0" onchange="updateValue(this)"/>
                            </td>
                            <td  class="tg-tofn">
                                <select id="provincia" name="provincia">
                                    <option value=''></option>
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
                            <th class="tg-hgcj" colspan="2">ORDER</th>
                            <td class="tg-9thi">
                                <select id="order" name="orderby">
                                    <option value="id"></option>
                                    <option value="n_hab">Número de Habitaciones</option>
                                    <option value="m2">Metros Cuadrados</option>
                                    <option value="precio">Precio</option>
                                    <option value="fecha_alta">Fecha de Alta</option>
                                </select>
                            </td>
                            <td class="tg-9thi">
                                <select id="order" name="order">
                                    <option value="asc">ASC</option>
                                    <option value="desc">DESC</option>
                                </select>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="submit" value="Filtrar"/>
                            </td>
                        </tr>

                    </table>
                    <br/><br/>
                    </form>

                </div> 

                <?php
                foreach ($filas as $indice => $objeto) {
                    $ruta = Configuracion::IMAGE_FOLDER . $objeto->getId() . "/";
                    $nombre_img = Archivos::devuelvePrimerFichero($objeto->getId());
                    if ($nombre_img != -1)
                        $imagen = $ruta . $nombre_img;
                    else
                        $imagen = "./images/default.png"
                        ?>
                    <div id="div_tablas">
                        <a width="100px" height="100px" style="float:left" class="example-image-link" href='<?php echo $imagen; ?>' data-lightbox="example-set1" data-title="<?php echo $objeto->getNombre_vivienda(); ?>">
                            <img class="example-image" src="<?php echo $imagen ?>" alt="" width="100px" height="100px" style="float:left"/>
                        </a>

                        <table class="tg">
                            <tr>
                                <th class="tg-031e" colspan="2"><?php echo $objeto->getNombre_vivienda(); ?></th>
                                <th class="tg-031e"><?php echo $objeto->getProvincia(); ?></th>
                                <th class="tg-031e"><?php echo $objeto->getM2(); ?>  m2</th>
                                <th class="tg-s6z2"><?php echo $objeto->getN_hab(); ?> hab.</th>
                                <th class="tg-031e" colspan="2"><?php echo $objeto->getPrecio(); ?> €</th>
                            </tr>
                            <tr>
                                <td class="tg-031e" colspan="7" rowspan="4"><?php echo $objeto->getDescripcion(); ?></td>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                                <td class="tg-bpwo">CONTACTO: </td>
                                <td class="tg-031e" colspan="2"><?php echo $objeto->getTelefono(); ?></td>
                                <td class="tg-bpwo">FECHA: </td>
                                <td class="tg-031e" colspan="2"><?php echo $objeto->getFecha_alta(); ?></td>
                                <td class="tg-bpwo"><a href="ver.php?id=<?php echo $objeto->getId(); ?>">DETALLES</a></td>
                            </tr>
                        </table>
                    </div>

                    <br/>
                <?php } ?>
            </center>
        </div>
    </body>
</html>


<!--
FRONTEND:
      room finder:  filtrar por:
                        
                WHERE X=Y
                        tipo  -> where tipo=
                        direccion
                        num_habitac
                        num_baños
                        
                order by  (ASC y DESC)
                        fecha_alta
                        m2
                        precio
                        num_hab
                        num_banos

       filtros en tablas -> ver y te enseñe todos los detalles del piso en concreto

-->