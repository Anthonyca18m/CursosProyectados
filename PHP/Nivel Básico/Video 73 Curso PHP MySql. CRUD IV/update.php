<?php 
	include("conexion.php");
	
	$id = $_POST["id"];
	$nombre = $_POST["nom"];
	$apellido = $_POST["ape"];
	$direccion = $_POST["dir"];
	
	$base -> query("UPDATE user SET Nombre = '$nombre', Apellido = '$apellido', Direccion = '$direccion' WHERE id = $id");
	//tambien se puede hacer con las asignaciones pero lo hice como lo hacia en java asi que ...
	header("Location:index.php");
	
?>