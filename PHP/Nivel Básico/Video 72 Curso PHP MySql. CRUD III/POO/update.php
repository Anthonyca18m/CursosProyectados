<?php 
	include("conexion.php");
	
	$id = $_POST["id"];
	$nombre = $_POST["nom"];
	$apellido = $_POST["ape"];
	$direccion = $_POST["dir"];
	
	$base -> query("UPDATE user SET Nombre = '$nombre', Apellido = '$apellido', Direccion = '$direccion' WHERE id = $id");
	
	header("Location:index.php");
	
?>