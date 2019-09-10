<?php 

	require_once("../conexion.php");

	$id_pro = $_POST['id_pro'];
	$desc_pro = $_POST['desc_pro'];

	$consulta = " UPDATE producto SET desc_pro ='$desc_pro' WHERE id_producto ='$id_pro' ";

	$realizar = mysqli_query($Conexion, $consulta);

	if($realizar == true){
		echo "<h1>echooo</h1>";
	}else{
		echo "PERO QUE HA PASAO";
	}

?>