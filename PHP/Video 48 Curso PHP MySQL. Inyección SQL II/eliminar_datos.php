<?php 
	
	require_once("../conexion.php");

	$user = mysqli_escape_string($Conexion,$_POST['user']);
	$pass = mysqli_escape_string($Conexion,$_POST['pass']);

	//esta funcion de mysqli lo que hace es ignorar todo a que caracter raro para que no afecte nada a la consulta

	$consulta = "DELETE FROM user WHERE user ='".$user."' AND pass ='".$pass."'";

	$realizar = mysqli_query($Conexion, $consulta);

	if($realizar === true){
		?>
		<script type="text/javascript">
			window.history.go(-1);
			alert("Correctamente!!!");
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			window.history.go(-1);
			alert("Oh ha ocurrido un problema!!!");
			
		</script>
		<?php
	}


?>