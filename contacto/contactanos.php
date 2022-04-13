<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallhala</title>

    <!-- Archivo CSS Bootstrap 5 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!--- Estilo de la barra de search-->
    <link rel="stylesheet" href="../barradebusqueda/style.css">
    <link rel="stylesheet" href="../styles/style.css">

</head>

<body>

    <div class=header>
        <h1 class="tittle"> WallGames</h1>
       
    </div>

    <div class="nav-item">
        <a href="#">Inicio</a>
        <a href="#">Acerca de</a>
        <a href="../contacto/contactanos.php">Contacto</a>
        <!--<a href="./login/login.php">Registrarse/Iniciar Sesion</a>-->
        <?php

        session_start();
        if (!isset($_SESSION['usuario'])) {
            echo '<a href="../login/login.php">Login</a>';
        } else {
            echo '<a href="login/cerrar_session.php">Logout</a>';
        }

        ?>

    </div>
    

    <div class="image-container" >
        <img src="../images/Contactanos.png" alt="" text-align="center">
        <img src="../images/contactanos6.png" alt="" text-align="center">
        <img src="../images/contactanos5.png" alt="" text-align="center">
    </div>


    <!-- Archivo JS Bootstrap 5 -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">



                <div class="nav-footer">
                    <a>Wallhala</a>
                    <a href="#">Inicio</a>
                    <a href="#">Contacto</a>
                    <a href="#">Comunidad</a>
                </div>

                <div class="contact">
                    <p>¡Siguenos en Redes Sociales!</p>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
</footer>

</html>