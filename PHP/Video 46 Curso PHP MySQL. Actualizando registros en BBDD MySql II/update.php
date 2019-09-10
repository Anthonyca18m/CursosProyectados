<?php  
	require_once("../conexion.php");

	$cod_art = $_POST['cod'];
	$seccion = $_POST['seccion'];
	$nombre = $_POST['nom_art'];
	$precio = $_POST['precio_art'];
	$import = $_POST['importado'];
	$pais = $_POST['pais_art'];

	$consulta = " UPDATE producto_clase43 SET seccion ='$seccion', nom_art='$nombre', precio_art='$precio', importado_art='$import', pais_art='$pais' WHERE cod_art='$cod_art' ";

	$realizar = mysqli_query($Conexion, $consulta);

	if($realizar === true){
		header('Location:pag_principal.php');
	}else{
		echo "Hay fallas";
	}
?>