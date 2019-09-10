<?php 

	require_once("../conexion.php");

	$cod = $_GET['cod'];

	$drop = "DELETE FROM producto_clase43 WHERE cod_art ='".$cod."'";

	$realizar = mysqli_query($Conexion, $drop);

	if($realizar === true){
			header('Location:pag_principal.php');
	}else{
		?>
		<script type="text/javascript">
			alert("Oh ha ocurrido un problema!!!");
		</script>
		<?php
	}
	
 ?>