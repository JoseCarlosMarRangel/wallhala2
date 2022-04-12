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
                    <a class="boton"  href="index.php">Inicio</a>
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
                <aside><h2>Nombre del usuario</h2></aside>
            </div>
        </div>
    </div>

    <br>
    <br>
     
    <div class="imagenes-creadas">
        <h2>Imagenes Creadas</h2>
    </div>
    <!-- Imagenes creadas --> 
</body>

</html>