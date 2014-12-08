<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet"  type="text/css"  href="css/reset.css" >
        <link rel="stylesheet"  type="text/css"  href="css/style.css" >

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
            ?>
            <br/><br/><br/>
            <table border="0">
                <tr>
                    <th>
                        <a href="editBD_backend.php">
                            <img src="./images/check.png" alt="Ver database"/>
                        </a>
                    </th>
                    <th>
                        <a href="insert_backend.php">
                            <img src="./images/insert.png" alt="Ver database"/>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th> <a href="editBD_backend.php">VER BASE DE DATOS</a></th>
                    <th> <a href="insert_backend.php">INSERTAR NUEVO REGISTRO</a></th>
                </tr>
            </table>
        </div>

    </body>
</html>

