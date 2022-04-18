<?php
// * Datos para conexion a la base de datos
$bd = 'wallhala';
$servidor = 'localhost';
$usuario = 'ghost'; //$usuario = 'ghost';
$contrasena = '123'; //$contrasena = '123';

//*Creamos la conexión a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

//* Checamos la conexión
if (!$conexion) {
    die('Conexión a la base de datos ' . $bd . ' fallida: ' . mysqli_connect_error());
}

#echo 'Conexión a la base de datos ' . $bd . ' exitosa';

//*Validamos si el usuario existe
function valida_usuario_bd($usuario, $contrasena, $conexion)
{
    $query = "SELECT * FROM usuario WHERE usuario = '$usuario' AND pass = '$contrasena'";
    //echo $query;
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

// * Validar registro de usuario
function valida_usuario_regs($usuario, $conexion)
{
    $query = "SELECT * FROM usuario WHERE usuario = '$usuario'";
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

// * ingresar usuario en la base de datos
function registrar_usuario_bd($usuario, $contrasena, $correo, $conexion)
{


    $query = "INSERT INTO usuario (usuario, pass, correo) 
    VALUES ('$usuario','$contrasena', '$correo') ";
    //echo $query;
    //var_dump($query);
    $resultado = mysqli_query($conexion, $query) or die('Consulta fallida');

    if ($resultado) {
        echo "<p class='alerta'> Se registro correctamente </p>";
    } else {
        echo "<p class='alerta'> No se pudo ingresar al usuario </p>";
    }
};


//* retornamos los datos */
function retornar_datos_usuario($usuario, $conexion)
{
    //var_dump($usuario, $contrasena, $conexion);
    //$crypt = md5($contrasena);
    $query = "select usuario from usuario where usuario = '$usuario'";
    $resultado = mysqli_query($conexion, $query) or die('Consulta fallida');
    if ($resultado) {
        //sacar el usuario
        $fila = $resultado->fetch_assoc();
        return $fila["usuario"];
    } else {
        die("Error: " . mysqli_error($conexion));
    }
};

function completar_regitro($usuario, $nombre, $apellido, $descripcion, $correo, $conexion)
{
    $query = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', descripcion = '$descripcion', correo ='$correo' WHERE usuario = '$usuario'";
    $resultado = mysqli_query($conexion, $query) or die('Consulta fallida');
    if ($resultado) {
        echo "<p class='alerta'> Se completo el registro </p>";
    } else {
        echo "<p class='alerta'> No se pudo completar el registro </p>";
    }
};

//* retornamos los datos */
function retornar_datos_usuario2($usuario, $conexion)
{
    //var_dump($usuario, $contrasena, $conexion);
    //$crypt = md5($contrasena);
    $query = "select nombre,apellido,descripcion,correo from usuario where usuario = '$usuario'";
    $resultado = mysqli_query($conexion, $query) or die('Consulta fallida');
    if ($resultado) {
        //sacar el usuario
        $fila = $resultado->fetch_assoc();
        return $fila;
    } else {
        die("Error: " . mysqli_error($conexion));
    }
};