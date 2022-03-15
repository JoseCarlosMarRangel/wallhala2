<?php
$bd = 'wallhala';
$servidor = 'localhost';
$usuario = 'ghost';
$contrasena = '123';

//* Creamos la coneción con la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

//* Checamos la conexión
if (!$conexion) {
    die('Conexión a la base de datos ' . $bd . ' fallida: ' . mysqli_connect_error());
}

#echo 'Conexión a la base de datos ' . $bd . ' exitosa';

//*Validamos si el usuario existe
function valida_usuario_bd($usuario, $contrasena, $conexion)
{
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    //var_dump($query);
    $resultado = mysqli_query($conexion, $query) or die('Consulta fallida');
    $fila = $resultado->fetch_assoc();
    /*if($fila["rol"] === "administrador")
    {
        //echo "es administrador";
    }*/
    if (mysqli_num_rows($resultado) == 0) {
        return false;
    } else {
        return true;
    }
};


//* retornamos los datos */
function retornar_datos_usuario($usuario, $conexion)
{
    //var_dump($usuario, $contrasena, $conexion);
    //$crypt = md5($contrasena);
    $query = "select usuario, rol from usuarios where usuario = '$usuario' and rol = 'administrador'";
    $resultado = mysqli_query($conexion, $query) or die('Consulta fallida');
    if ($resultado) {
        while ($fila['rol'] = $resultado->fetch_assoc()) {
            return 'administrador';
        }
    } else {
        die("Error: " . mysqli_error($conexion));
    }
};