<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet"  type="text/css"  href="css/reset.css" >
        <link rel="stylesheet"  type="text/css"  href="css/style.css" >

        <script type="text/javascript">
            function updateValue(val) {
                val.nextSibling.textContent = val.value;
            }

        </script>

         <style>
            input{width:100%; background-color: rgba(255,255,255,0.8)}
            input[type="submit"]{margin:30px auto; width:200px;}
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

<center>
            <?php
            require './require/comun.php';

            $id = Leer::get("id");
            $nombre_vivienda = Leer::get("nombre_vivienda");
            $mail = Leer::get("mail");
            $telefono = Leer::get("telefono");
            $provincia = Leer::get("provincia");


            $condicion = "";
            $parametros = array();
            $orderby = "";
            if (!Leer::get("orderby"))
                $orderby = "1";
            else
                $orderby = Leer::get("orderby") . " " . Leer::get("order");


            if ($id != "") {
                $condicion.="id= :id";
                $parametros["id"] = $id;
            }
            if ($nombre_vivienda != "") {
                if ($condicion != "")
                    $condicion.=" AND ";

                $condicion.="nombre_vivienda LIKE :nombre_vivienda ";
                $parametros["nombre_vivienda"] = $nombre_vivienda;
            }
            if ($mail != "") {
                if ($condicion != "")
                    $condicion.=" AND ";

                $condicion.="mail LIKE :mail ";
                $parametros["mail"] = $mail;
            }
            if ($telefono != "") {
                if ($condicion != "")
                    $condicion.=" AND ";

                $condicion.="telefono LIKE :telefono";
                $parametros["telefono"] = $telefono;
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
            <br>        
            <br>        
            <br>        
            <div id="div_search">
                <form action="editBD_backend.php" method="get" /> <br/>

                <table class="tg2">
                    <tr>
                        <th class="tg-hgcj">ID</th>
                        <th class="tg-hgcj">Nombre</th>
                        <th class="tg-hgcj" >Mail</th>
                        <th class="tg-hgcj">Telefono</th>
                        <th class="tg-hgcj">Provincias</th>   
                    </tr>
                    <tr>
                        <td class="tg-lkh3">
                            <input type="number" name="id" id="id"/>

                        </td>

                        <td class="tg-tofn">
                            <input type="text" name="nombre_vivienda" id="nombre_vivienda"/>
                        </td>
                        <td  class="tg-lkh3"> 
                            <input type="text" name="mail" id="mail"/>
                        </td>
                        <td  class="tg-lkh3"> 
                            <input type="tel" name="telefono" id="telefono"/>
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
                        <th class="tg-hgcj" colspan="3">ORDER</th>
                        <td class="tg-9thi" >
                            <select id="order" name="orderby">
                                <option value="id">ID</option>
                                <option value="nombre_vivienda">Nombre Vivienda</option>
                                <option value="provincia">Provincia</option>
                                <option value="fecha_alta">Fecha de Alta</option>
                            </select>
                        </td>
                        <td class="tg-9thi">
                            <select id="order" name="order">
                                <option value="asc">ASC</option>
                                <option value="desc">DESC</option>
                            </select>
                        
                        </td>
                    </tr>
                    <tr>
                    </tr>

                </table>
                 <input type="submit" value="Filtrar"/>
                <br/><br/>
                </form>

            </div> 



            <br>        
            <br>        
            <br>        

            <table class="tg" border="2">
                <tr>
                    <th>ID</th>
                    <th>FECHA DE ALTA</th>
                    <th>NOMBRE DE LA VIVIENDA</th>
                    <th>PROVINCIA</th>
                    <th>DIRECCIÓN</th>
                    <th>TELÉFONO</th>
                    <th>EMAIL</th>
                    <th>BORRAR</th>
                    <th>EDITAR</th>
                </tr>
                <?php
                foreach ($filas as $indice => $objeto) {
                    ?>
                    <tr>
                        <td><?php echo $objeto->getId() ?></td>
                        <td><?php echo $objeto->getFecha_alta() ?></td>
                        <td><?php echo $objeto->getNombre_vivienda() ?></td>
                        <td><?php echo $objeto->getProvincia() ?></td>
                        <td><?php echo $objeto->getDireccion() ?></td>
                        <td><?php echo $objeto->getTelefono() ?></td>
                        <td><?php echo $objeto->getMail() ?></td>
                        <td>
                            <a data-nombre="<?php echo $objeto->getNombre_vivienda(); ?>" href="phpDelete.php?id=<?php echo $objeto->getId(); ?>" >
                                <img src="./images/delete.png" alt="Delete Row"/>
                            </a></td>
                        <td><a href="ver_backend.php?id=<?php echo $objeto->getId(); ?>" ><img src="./images/edit.png" alt="Delete Row"/></a></td>
                    </tr>
                <?php } ?>
            </table>
        </center>
        </div>
        
        
            <br>        
            <br>        
            <br>        
            &nbsp;
    </body>
</html>

