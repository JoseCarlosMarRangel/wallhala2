<?php

include "login/conexion.php";
// mostrar el usuario de la sesion
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style_p.css">
    <title>Perfil</title>
</head>

<header>
    <!-- menu con el logo, inicio, acerca de, contacto, barra de busqueda -->
    <div class="encabezado">
        <div class="tittle">
            <h1>WallHala</h1>
        </div>
        <div class="menu" align="right">
            <a class="boton" href="index.php">Inicio</a>
            <a class="boton2" href="acercade.html">Acerca de</a>
            <a class="boton3" href="#">Contactanos</a>
        </div>
    </div>
    <!--Barra de busqueda -->
    <br>
    <div id="navlist">
        <?php
        include "barradebusqueda/search.php";
        ?>
    </div>

</header>

<body>
    <!-- nombre de usuario, Imagenes creadas/Imagenes guardadas  -->
    <div class="foto-nombre-user">
        <div class="foto-usuario">
            <!--Foto perfil de usuario BD -->
            <img src="images/groot.png" alt="">
            <div class="nombre-usuario">
                <!-- Traer nombre de usuario desde la BD -->
                <aside><?php

                        if (!isset($_SESSION['usuario'])) {
                            header('Location: login/login.php');
                        } else {
                            $datos = retornar_datos_usuario($_SESSION['usuario'], $conexion);
                            echo "<h2>Usuario:" . $datos . "</h2>";
                        }
                        ?></aside>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <!-- mostrar datos del perfil -->
    <div class="datos-perfil">
        <h2>Registro del perfil</h2>
        <form method="post">
            <input type="text" placeholder="Nombre" class="nombre" name="nombre">
            <input type="text" placeholder="Apellido" class="apellido" name="apellido">
            <input type="text" placeholder="Descripcion" class="descripcion" name="descripcion">
            <input type="text" placeholder="correo" class="correo" name="correo">
            <input type="submit" class="submit" value="guardar" name="guardar-datos">
            <?php
            if (isset($_POST['guardar-datos'])) {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $descripcion = $_POST['descripcion'];
                $correo = $_POST['correo'];

                completar_regitro($_SESSION['usuario'], $nombre, $apellido, $descripcion, $correo, $conexion);
            }
            ?>
        </form>

        <br>

        <!--Mostrar datos del perfil -->
        <h2>Datos del perfil</h2>
        <?php
        $datos = retornar_datos_usuario2($_SESSION['usuario'], $conexion);
        echo "<h2>Nombre: " . $datos['nombre'] . "</h2>";
        echo "<h2>Apellido: " . $datos['apellido'] . "</h2>";
        echo "<h2>Descripcion: " . $datos['descripcion'] . "</h2>";
        echo "<h2>Correo: " . $datos['correo'] . "</h2>";
        ?>
    </div>

    <div class="imagenes-creadas">
        <h2>Imagenes Creadas</h2>
    </div>
    <!-- Imagenes creadas -->
</body>

</html>