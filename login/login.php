<?php
require 'conexion.php';
$valido = false;
if (isset($_POST['aceptar'])) {
    $usuario = $_POST['nombre'];
    $contrasena = $_POST['pass'];

    if (!valida_usuario_bd($usuario, $contrasena, $conexion)) {
        #echo 'No es valido <br/>';
        $valido = false;
    } else {
        #echo 'Es valido <br/>';
        session_start();
        $_SESSION['usuario'] = $usuario;
        $valido = true;
        header('Location: ../index.php');

        //$datos = retornar_datos_usuario($usuario, $contrasena, $conexion);

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="register">
                <h2>Registrarse</h2>
                <form action="">
                    <input type="text" placeholder="Nombre" class="nombre">
                    <input type="password" placeholder="Contraseña" class="pass">
                    <input type="password" placeholder="Confirma contraseña" class="repass">
                    <input type="submit" class="submit" value="REGISTRARSE">
                </form>
            </div>

            <div class="login">
                <h2>Iniciar Sesión</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <input type="text" placeholder="Nombre" class="nombre" name="nombre">
                    <input type="password" placeholder="Contraseña" class="pass" name="pass">
                    <input type="submit" class="submit" value="Entrar" name="aceptar">
                    <?php
                    if (!$valido && isset($_POST['aceptar'])) {
                        echo '<p class="alerta" >Usuario no valido</p>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>