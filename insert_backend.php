<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet"  type="text/css"  href="css/reset.css" >
        <link rel="stylesheet"  type="text/css"  href="css/style.css" >

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


            <?php
            require './require/comun.php';


            $mensaje = Leer::get("mensaje");
            $resultado = Leer::get("id");
            if ($mensaje) {
                echo $mensaje;
            }



            $bd = new BaseDatos();
            $modelo = new ModeloInmobiliaria($bd);
            // $filas=$modelo->getList("1=1", array(), "fecha_alta DESC");     //ordenados por fecha
            $filas = $modelo->getList();     //ordenados por fecha
            ?>
            <br/>
            <h1>Insertar nueva vivienda</h1>
            <br/>    

            <form action="phpInsert.php"  method="post"  enctype="multipart/form-data">
                <table class="tg">
                    <tr>
                        <th> <label for="nombre_vivienda">NOMBRE:</label> </th>
                        <td>  <input type="text" id="nombre_vivienda" name="nombre_vivienda" placeholder="nombre_vivienda" maxlength="50" required/></td> 
                    </tr>

                    <tr>
                        <th><label for="provincia">PROVINCIA:</label> </th>
                        <td>
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
                        <th> <label for="direccion">DIRECCIÓN:</label> </th>
                        <td> <input type="text" id="direccion" name="direccion" placeholder="direccion"  maxlength="50" required/></td> 
                    </tr>

                    <tr>
                        <th> <label for="telefono">TELÉFONO:</label> </th>
                        <td> <input type="tel" id="telefono" name="telefono" placeholder="telefono"  maxlength="18" required/></td> 
                    </tr>

                    <tr>
                        <th> <label for="mail">EMAIL:</label> </th>
                        <td>  <input type="text" id="mail" name="mail" placeholder="mail"  maxlength="20" required/></td> 
                    </tr>

                    <tr>
                        <th> <label for="tipo">TIPO:</label> </th>
                        <td>
                            <select id="tipo" name="tipo">
                                <option value="alquiler">Alquiler</option>
                                <option value="venta">Venta</option>
                            </select>    
                        </td> 
                    </tr>

                    <tr>
                        <th> <label for="precio">PRECIO: </label></th>
                        <td> <input type="number" id="precio" name="precio" placeholder="Nombre" required/></td> 
                    </tr>

                    <tr>
                        <th><label for="m2">METROS CUADRADOS: </th>
                        <td>  <input type="number" id="m2" name="m2" placeholder="m2" required/></td> 
                    </tr>

                    <tr>
                        <th><label for="n_hab">NÚMERO DE HABITACIONES: </label></th>
                        <td> <input type="number" id="nombre" name="n_hab" placeholder="n_hab" max="124" required/></td> 
                    </tr>
                    <tr>
                        <th> <label for="descripcion">DESCRIPCION:</label> </th>
                        <td> <textarea id="descripcion" rows="1" cols="100" maxlength="190" name="descripcion" placeholder="Escriba aqui una breve descripcion"></textarea></td>
                    </tr>

                    <tr>
                        <th> <label for="imagenes">IMAGENES:</label> </th>
                        <td> <input type="file" id="imagenes" name="imagenes[]"  multiple="multiple" accept="image/*"/></td>    
                    </tr>
                    <tr>
                        <th colspan="2"> <input type="submit" value="Insertar" /></th>
                    </tr>

                </table>



            </form>


        </div>

    </body>
</html>

