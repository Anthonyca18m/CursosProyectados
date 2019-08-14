<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<style>
.no_validado{
		font-size:18px;
		color:#f00;
		font-weight:bold;
		text-align:center;
	}
	.validado{
		font-size: 18px;
		color: #0C3;
		font-weight:bold;
		text-align:center;
	}s
</style>
<body>
<?php
	if(isset($_POST["enviando"])){
		$usuario = $_POST["nombre_usuario"];
		$edad = $_POST["edad_usuario"];
		
		if($usuario == "Anthony" && $edad>0){
			echo("<p class='validado'>Bienvenido al sistema.</p>");	
		}else{
			echo("<p class='no_validado'>Credenciales no válidas.</p>");	
		}
	}
	

?>
</body>
</html>