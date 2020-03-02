<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<p>&nbsp;</p>
    <form action="" method="post" name="form1">
    <p>
    	<label for="num1"></label>
        <input type="text" name="num1" id="num1" />
        <label for="num2"></label>
        <input type="text" name="num2" id="num2" />
        <select name="operacion" id="operacion">
        	<option>Seleccionar</option>
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
            <option>Módulo</option>
        </select>
    </p>
    <p>
    	<input type="submit" name="button" id="button" value="enviar" onclick="prueba" />
    </p>
    </form>
    <p>&nbsp;</p>

<?php
	//APLICANDO LÓGICA DE PROGRAMACIÓN ORIENTADA A OBJETOS (con conocimientos en JAVA)
	
	if(isset($_POST["button"])){
		$numero1 = $_POST["num1"];
		$numero2 = $_POST["num2"];
		$resultado = 0;
		if($_POST["operacion"] == "Suma"){
			$resultado = $numero1 + $numero2;
			echo("La Suma total es: $resultado");
			}
		if($_POST["operacion"] == "Resta"){
			$resultado = $numero1 - $numero2;
			echo("La Resta total es: $resultado");
			}
		if($_POST["operacion"] == "Multiplicación"){
			$resultado = $numero1 * $numero2;
			echo("La Multiplicación total es: $resultado");
			}
		if($_POST["operacion"] == "División"){
			$resultado = $numero1 / $numero2;
			echo("La División total es: $resultado");
			}
		if($_POST["operacion"] == "Módulo"){
			$resultado = $numero1 % $numero2;
			echo("El Módulo total es: $resultado");
			}else{
				echo("Ingrese valores en las casillas");
				}	
		}



	/*
	//APLICANDO ALGUNAS FUNCIONES APRENDIDAS AQUÍ DEBAJO
	
	if(isset($_POST["button"])){
		
		$numero1 = $_POST["num1"];
		$numero2 = $_POST["num2"];
		$resultado = 0;
		$operacion = $POST_["operacion"];
	
		if(strcmp("Seleccionar",$operacion)){
			echo("Introduzca o seleccione valores en las casillas para completar la operación");
		}
		if(strcmp("Suma",$operacion)){
			$resultado = $numero1 + $numero2;
			echo("La Suma total es: $resultado");
		}
		if(strcmp("Resta",$operacion)){
			$resultado = $numero1 - $numero2;
			echo("La Resta total es: $resultado");
		}
		if(strcmp("Multiplicación",$operacion)){
			$resultado = $numero1 * $numero2;
			echo("La Multiplicación total es: $resultado");
		}
		if(strcmp("División",$operacion)){
			$resultado = $numero1 / $numero2;
			echo("La División total es: $resultado");
		}
		if(strcmp("Módulo",$operacion)){
			$resultado = $numero1 % $numero2;
			echo("El Módulo total es: $resultado");
		}
	}*/
	
?>

</body>
</html>