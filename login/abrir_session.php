<?php

    session_start(); //* Inicia o continua la session
    if(!isset($_SESSION['usuario']))
    {
        header('Location: login/login.php'); //* Redirigir al login
        exit;
    }

?>
