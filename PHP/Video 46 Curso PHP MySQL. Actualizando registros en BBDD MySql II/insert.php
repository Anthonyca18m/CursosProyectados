<?php 

	require_once("../conexion.php");

	$seccion = $_POST['seccion'];
	$nom_art = $_POST['nom_art'];
	$precio_art = $_POST['precio_art'];
	$fecha_art = $_POST['fecha_art'];
	$importado_art = $_POST['importado'];
	$pais_art = $_POST['pais_art'];

	$insert = "
		INSERT INTO producto_clase43(cod_art, seccion, nom_art, precio_art, fecha_art, importado_art, pais_art) VALUES (NULL, '$seccion', '$nom_art', '$precio_art', '$fecha_art', '$importado_art', '$pais_art')
	";

	$realizar = mysqli_query($Conexion, $insert);
	if($realizar === true){
			header('Location:pag_principal.php');
	}else{
		echo "Fallas";
	}
	
 ?>