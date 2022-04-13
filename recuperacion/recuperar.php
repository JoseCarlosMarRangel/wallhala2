<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    


    <title>Recuperar Cuenta</title>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="register">
                <h2>Recuperar Cuenta</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <input type="text" placeholder="Nombre" class="nombre form-control" name="nombre">
                    <input type="password" placeholder="Contraseña" class="pass form-control" name="pass">
                    <input type="password" placeholder="Confirma contraseña" class="repass form-control" name="repass">
                    <div class="d-grid col-6 mx-auto">
                        <input type="submit" class=" btn submit" value="Recuperar" name="recuperar">
                            <?php
                                        //
                                        //Poner una funcion para poder registrar la nueva contraseña del usuario
                                        //
                            ?>

                        <input class=" btn submit" type="reset" value="Cancelar">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>