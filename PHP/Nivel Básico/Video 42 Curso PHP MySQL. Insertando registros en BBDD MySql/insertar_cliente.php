<?php
	require_once("../conexion.php");

	$nombre_c = $_POST['nom_cli'];
	$dni_c = $_POST['dni_cli'];

	$insert = "INSERT INTO cliente (id_cliente,nombre_cliente, dni) VALUES (NULL,'".$nombre_c."', '".$dni_c."')";

	$realizar = mysqli_query($Conexion, $insert);

		if($realizar === true){
			header('Location:INSERTANDO_A_DDBB.php');
		}else{
			echo "Ha fracasado";
		}

	

  ?>