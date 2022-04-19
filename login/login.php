<!-- funcion de validar usuario y redireccionarlo al login si es correcto-->
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="register">

                <!-- Cuadro formulio de registro-->
                <h2>Registrarse</h2>

                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <input type="text" placeholder="Nombre" class="nombre form-control" name="nombre">
                    <input type="password" placeholder="Contraseña" class="pass form-control" name="pass">
                    <input type="password" placeholder="Confirma contraseña" class="repass form-control" name="repass">
                    <input type="text form-control" placeholder="Correo" class="correo" name="correo">
                    <input type="submit" class="btn submit" value="Registrarse" name="registrar">

                    <!-- funcion para validar el usuario -->
                    <?php


                    if (isset($_POST['registrar'])) {
                        $usuario = $_POST['nombre'];
                        $contrasena = $_POST['pass'];
                        $correo = $_POST['correo'];

                        if (!valida_usuario_regs($usuario, $conexion) && $usuario !== null) {
                            if ($_POST['pass'] == $_POST['repass'] && $_POST['pass'] !== '') {

                                registrar_usuario_bd($usuario, $contrasena, $correo, $conexion);
                            } else {
                                echo '<p class="alerta">Las contraseñas no son validas</p>';
                            }
                        } else {

                            echo '<p class="alerta">El usuario ya existe</p>';
                        }
                    }

                    ?>

                    <input class="btn submit" type="reset" value="cancel">
                </form>
            </div>

            <div class="login">
                <!-- cuadro o formulario de login-->
                <h2>Iniciar Sesión</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <input type="text" placeholder="Nombre" class="nombre form-control" name="nombre">
                    <input type="password" placeholder="Contraseña" class="pass form-control" name="pass">
                    <input type="submit" class="btn submit" value="Entrar" name="aceptar">

                    <!-- validar si el usuario es valido-->
                    <?php
                    if (!$valido && isset($_POST['aceptar'])) {
                        echo '<p class="alerta" >Usuario no valido</p>';
                    }
                    ?>
                    <!-- limpiar los cuadros de texto para login-->
                    <input class="btn submit" type="reset" value="Cancelar">
                </form>
                <input type="submit" class="btn submit" value="Regresar" name="Regresar"
                    onclick="location.href='../index.php'">
                <input type="submit" class="btn submit" value="Recuperar" name="Recuperar"
                    onclick="location.href='../recuperacion/recuperar.php'">

            </div>
        </div>
    </div>
</body>

</html>