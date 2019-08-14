<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<style>
	h1{
		text-align:center;
	}
	table{
		background:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
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
	}
</style>
<body>
	<h1>USANDO OPERADORES COMPARACI&Oacute;N</h1>
    <!--ENVIAMOS AQUI CON EL ACTION AL ARCHIVO "validacion.php" todos los datos del form
    esto nos serviria si queremos tener a parte codigos de validaciones, funciones, etc...
    y tambien para practicar lo aprendidos
    -->
    <form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario"> 
    	<table width="15%" align="center">
        	<tr>
            	<td>Nombre:</td>
                <td><label for="nombre_usuario"></label>
                <input type="text" name="nombre_usuario" id="nombre_usuario" />
             </tr>
             <tr>
            	<td>Edad:</td>
                <td><label for="edad_usuario"></label>
                <input type="text" name="edad_usuario" id="edad_usuario" />
             </tr>
             <tr>
             	<td>&nbsp;</td>
                <td>&nbsp;</td>
             </tr>
             <tr>
             	<td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar" />
             </tr>
             
        </table>
    </form>
    
<?php
/*
	//AQUI LA EXPRESION "isset" es como el que controla los eventos del submit enviar que aparece arriba	
	// y el  $_POST["nombre_de_la_caja_de_texto"] es para obtener el valor de la caja de texto que deseas
	//asignando el valor que obtenemos a la variable $usuario o $edad.
	 
	if(isset($_POST["enviando"])){
		$usuario = $_POST["nombre_usuario"];
		$edad = $_POST["edad_usuario"];
		
		if($usuario == "Anthony" && $edad>0){
			echo("<p class='validado'>Bienvenido al sistema.</p>");	
		}else{
			echo("<p class='no_validado'>Credenciales no válidas.</p>");	
		}
	}
*/

?>
</body>
</html>