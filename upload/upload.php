<?php
require '../login/conexion.php';
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

    

    <title>Subir Imagen</title>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="register">
                <h2>Subir Imagen</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <input type="text" placeholder="Titulo" class="titulo form-control" name="titulo">
                    <input type="password" placeholder="Descripcion" class="descripcion form-control" name="descripcion">
                    <select class="form-select" id="categoria">
                        <option selected>Opciones...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select><br>
                    <input type="file" class="form-control" id="img">
                    <div class="d-grid col-6 mx-auto">
                        <input type="submit" class=" btn submit" value="Subir" name="subir">
                        <?php

                            //Funcion para subir la imagen                        

                        ?>

                        <input class=" btn submit" type="reset" value="Cancelar">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>