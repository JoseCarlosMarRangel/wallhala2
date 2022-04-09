<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Recuperar Cuenta</title>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="register">
                <h2>Recuperar Cuenta</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <input type="text" placeholder="Nombre" class="nombre" name="nombre">
                    <input type="password" placeholder="Contraseña" class="pass" name="pass">
                    <input type="password" placeholder="Confirma contraseña" class="repass" name="repass">
                    <input type="submit" class="submit" value="Recuperar" name="recuperar">
                    <?php
                                //
                                //Poner una funcion para poder registrar la nueva contraseña del usuario
                                //
                    ?>

                    <input class="submit" type="reset" value="cancel">
                </form>
            </div>
        </div>
    </div>
</body>
</html>