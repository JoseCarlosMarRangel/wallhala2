<?php

	include 'login/conexion.php';

	if (!isset($_POST['buscar'])) {
		$_POST['buscar'] = "";
		$buscar = $_POST['buscar'];
	}

	$buscar = $_POST['buscar'];

	$SQL_READ = "SELECT imagen FROM wallpaper WHERE categoria LIKE '%.$buscar.%'";

	$sql_query = mysql_query($conexion,$SQL_READ); 
?>